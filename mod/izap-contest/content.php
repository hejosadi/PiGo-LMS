<?php

/***************************************************
 * SW Social Web                                   *
 * Copyrights (c) 2010-2020. SW Social Web         *
 * All rights reserved                             *
 ***************************************************
 */

include_once(dirname(dirname(dirname(__FILE__))) . "/engine/start.php");
$entity_guid = (int) get_input('id');
$size = get_input('size');
$entity = get_entity($entity_guid);
$contents = $entity->get_media($size);
IzapBase::cacheHeaders(array(
    'content_type' => $entity->getMimeType(),
    'file_name' => elgg_get_friendly_title($entity->title),
));
echo $contents;
exit;