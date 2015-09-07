<?php

define('CABECERAS', "<?xml version=\"1.0\" encoding=\"UTF-8\"?>
<gexf xmlns=\"http://www.gexf.net/1.2draft\" xmlns:xsi=\"http://www.w3.org/2001/XMLSchema-instance\" xsi:schemaLocation=\"http://www.gexf.net/1.2draft http://www.gexf.net/1.2draft/gexf.xsd\" version=\"1.2\">
\t<meta lastmodifieddate=\"2014-02-14\">
\t\t<creator>Graph Exporter for Elgg</creator>
\t\t<description>A social network changing over time</description>
\t</meta>
\t<graph mode=\"dynamic\" defaultedgetype=\"undirected\" timeformat=\"date\">\n\t\t");

define('ATRIBS', "<attributes class=\"node\" mode=\"static\">
    \t\t<attribute id=\"0\" title=\"name\" type=\"string\"/>
    \t\t<attribute id=\"1\" title=\"datecreate\" type=\"string\"/>
    \t\t<attribute id=\"3\" title=\"type\" type=\"string\"/>
    \t</attributes>
    \t<attributes class=\"node\" mode=\"dynamic\">
    \t\t<attribute id=\"2\" title=\"datemodified\" type=\"string\"/>
    \t\t</attributes>\n\t\t");

$users_file = void;
$edges_file = void;
$temp_edges = void;
$temp_users = void;
$i = 1;
$id_usuario_principal = 0;
$temp_edges = "";
$anonymize = false;
$rand = 0;
$relationship = void;

function process_relationship($dato) {
	// Usa variable global $parametro, que tiene el tema
	global $parameter;
    global $edges_file;
    global $id_usuario_principal;
    global $anonymize;
    global $i;

	$friends = elgg_get_entities(array("guids" => $dato->guid));
	$friend = $friends[0];
    //elgg_dump($friend->username. ": " . $friend->guid);

    /*http://docs.elgg.org/master/en/design/database.html*/
    $rel->time_created = 0; //por si acaso

    /*nos da la entidad de relacion entre 2 usuarios*/
    $rel = check_entity_relationship($id_usuario_principal, $relationship, $friend->guid);

    $source = $id_usuario_principal;
    $target = $friend->guid;
    if ($anonymize) {
           $user = md5($user);
           $source = md5($source);
    }

    fwrite($edges_file, "\t<edge id=\"" . $i . "\" source=\"" 
        . $source . "\" target=\"" . $target . "\" start=\"" 
        . date('Y-m-d', $rel->time_created)
        . "\"/>\n\t");

    $i++;
}

function process_user($dato) {
    global $anonymize;
    global $relationship;
    global $users_file;
    global $id_usuario_principal;
    global $i;

//register_error("anon: " . $anon);
//register_error("relationship: " . $relationship);
    set_time_limit (5); // Add one second to the timeout to avoid problems with large datasets

    // Gather user
	$users = elgg_get_entities(array("guids" => $dato->guid));
	$user = $users[0];
    $id_usuario_principal = $user->guid;

    $guid = $user->guid;
    $name = str_replace('"', "", $user->username); // Avoid XML format problems
    if ($anonymize) {
        $name = md5($name);
        $guid = md5($guid);
    }
    
    $etiq_nodo = "\n\t<node id=\"" . $guid 
        . "\" label=\"" . $name . "\" start=\"" 
        . date('Y-m-d', $user->time_created) 
        . "\">\n";

    $name = str_replace('"', "", $user->name);
    if ($anonymize) $name = md5($name);

    $etiq_nodo .= "\t<attvalues>\n\t\t\t<attvalue for=\"3\" value=\"member\"/>";
    $etiq_nodo .= "\n\t\t\t<attvalue for=\"0\" value=\"" . $name . "\"/>
        \t\t\t<attvalue for=\"1\" value=\"" . date('Y-m-d', $user->time_created) . "\"/>
        \t\t\t<attvalue for=\"2\" value=\"" . date('Y-m-d', $user->time_updated) . "\"/>
        \t</attvalues>\n\t</node>\n";
    fwrite($users_file, $etiq_nodo);

    $options = array(
        'type' => 'user',
        'relationship_guid' => $user->guid,
        'inverse_relationship' => true,
        'count' => true,
        'offset' => 0
       );

    switch ($relationship) {
        case 'friend':
            $options['relationship'] = 'friend';
            $options['inverse_relationship'] = true;

            $count = elgg_get_entities_from_relationship($options);
            if ($count == 0) return;

            $options['count'] = false;
            $options['callback'] = 'process_relationship';
            $options['limit'] = 0;

	        elgg_get_entities_from_relationship($options);

            break;
        case 'member':
            $options['type'] = 'group';
            $options['relationship'] = 'member';
            $options['inverse_relationship'] = false;
            $options['limit'] = 0;
	        //$groups = elgg_get_entities_from_relationship($options);

            $groups = $user->getGroups("", 0, 0); //Users do not use to belong to too many groups
            foreach($groups as $group) {
                $rel = check_entity_relationship($user->guid, "member", $group->guid);
                $temp = "\n<edge id=\"" . $i
                     . "\" source=\"" . $guid 
                     . "\" target=\"" . $group->guid
                     . "\" start=\"" . date('Y-m-d', $rel->time_created)
                     . "\"/>"; 
                fwrite($users_file, $temp); 
                $i++;
            } 
            break;
    }
}

function generate_graph($anon, $_relationship) {
    global $anonymize;
    $anonymize = $anon;

    global $relationship;
    $relationship = $_relationship;

    global $temp_edges;
    global $temp_users;

    $temp_edges = tempnam(sys_get_temp_dir(), 'edges_temp');
    $temp_users = tempnam(sys_get_temp_dir(), 'users_temp');

    global $users_file;
    global $edges_file;

    $cad = "";

    $users_file = fopen($temp_users, 'w+');
    $edges_file = fopen($temp_edges, 'w+');

    fwrite($users_file, CABECERAS);
    fwrite($users_file, ATRIBS);

    if ($relationship == "member") {
        // get groups
        $groups = elgg_get_entities(array('types'=>'group',
        'limit' => 0)
        );

        foreach($groups as $group) {
            $temp = "\n<node id=\"" . $group->guid
                  . "\" label=\"" . $group->name . "\" start=\""
                  . date('Y-m-d', $group->time_created)
                  . "\">";
            $temp .= '<attvalues><attvalue for="3" value="group"/></attvalues>';
            $temp .= '</node>';
            $i++;
            fwrite($users_file, $temp);
        }
    }

    elgg_get_entities(array('types'=>'user',
        'callback'=>'process_user', 
        'limit' => 0)
    );
    
    fwrite($edges_file, "\n\t</edges>\n</graph>\n</gexf>\n");

    /**************************    **************************/
    fwrite($users_file, "\n\t<edges>\n\t");

    fclose($edges_file);
    $edges_file = fopen($temp_edges, 'r');

    while($cad = fgets($edges_file))
    {
        fwrite($users_file, $cad);
    }

    fclose($users_file);
    fclose($edges_file);

    $grafo = sys_get_temp_dir()."/graph.gexf";

    if (file_exists($grafo)) unlink($grafo);

    //elgg_dump("\ndirectorio temporal donde almacena grafo.gexf: ".sys_get_temp_dir()."\n");

    if (!rename($temp_users, $grafo)) {
        elgg_dump("\n ERROR AL COPIAR EL ARCHIVO \n");
    }

    unlink($temp_users);
    unlink($temp_edges);
}
