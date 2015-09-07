
elgg.provide('elgg.upload_groups');

elgg.upload_groups.init = function() {

	var params = ({
		dataType : 'html',
		success : function(data) {
			$('#group-upload-admin-form').html(data);
		},
		iframe : true
	});

	$('#group-upload-admin-form').submit(function(event) {
		event.preventDefault();
		$(this).ajaxSubmit(params);
	});

};

elgg.register_hook_handler('init', 'system', elgg.upload_groups.init);
