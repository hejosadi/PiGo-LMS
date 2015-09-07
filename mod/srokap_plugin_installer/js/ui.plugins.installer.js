elgg.provide('elgg.ui.plugins.installer');

elgg.ui.plugins.installer.init = function() {
	var repF = elgg.ui.plugins.installer.replaceResults;
	var formSelector = '.elgg-form-plugins-install-search';
	
	//TODO simplify this
	//autocomplete text input
	$(formSelector+' input[name="q"][type="text"]').autocomplete({
		delay: 1000,
		source: function(request, response) {
			elgg.ui.plugins.installer.search({q:request.term}, function(err, data, params){
				repF(data, params);
				response([]);
			});
		}
	});
	//block normal submit and run via ajax
	$(formSelector).submit(function(evt){
		elgg.ui.plugins.installer.search({}, function(err, data, params){
			repF(data, params);
		});
		return false;
	});
	//run search on category change
	$(formSelector+' select[name="category"]').change(function(){
		elgg.ui.plugins.installer.search({}, function(err, data, params){
			repF(data, params);
		});
	});
	//run search on sort change
	$(formSelector+' select[name="sort"]').change(function(){
		elgg.ui.plugins.installer.search({}, function(err, data, params){
			repF(data, params);
		});
	});
	
	//load and append next pages of results
	$('.list-load-more').live('click', function(){
		var data = $(this).data('params') || {};
		data.no_stats = true;
		var $loader = elgg.ui.plugins.installer.getLoader();
		$(this).replaceWith($loader);
		elgg.ui.plugins.installer.getResults(data, function(err, data, params){
			//button is wrapped with div
			$loader.parent().replaceWith(data);
			//we don't update limit with history.pushState
		});
		return false;
	});
	
	//load and insert plugin details
	$('.plugin-show-details').live('click', function(){
		var $self = $(this);
		
		if (!$self.hasClass('link-clicked')) {
			var href = $self.data('url');
			var $loader = $('#plugins-install-search-loader').clone();
			$loader.removeClass('hidden');
			
			$self.replaceWith($loader);
			$self.addClass('link-clicked');
			//$(self).replace();
			elgg.get('ajax/default/object/remote_plugin_project/details', {
				data: {
					url: href
				},
				success: function(data) {
					data = $(data);
					$loader.replaceWith(data);
					$(".elgg-lightbox-image", data).fancybox({
						type: 'image'
					});
				}
			});
		}
		return false;
	});
}

elgg.ui.plugins.installer.getLoader = function() {
	var $loader = $('#plugins-install-search-loader').clone();
	$loader.removeClass('hidden');
	return $loader;
}

elgg.ui.plugins.installer.replaceResults = function(data, params) {
	var $moduleContent = $('#plugins-install-search-results > .elgg-body');
	$moduleContent.html(data);
	elgg.ui.plugins.installer.updateLocation(params);
}

elgg.ui.plugins.installer.updateLocation = function(params) {
	if (typeof history.pushState === 'function') {
		params = params || {};
		var u = URI(window.location.href);
		if (typeof Object.keys === 'function') {
			u.removeSearch(Object.keys(params));
		}
		u.addSearch(params);
		history.pushState({}, '', u);
	}
}

elgg.ui.plugins.installer.search = function(data, callback) {
	elgg.ui.plugins.installer.replaceResults(elgg.ui.plugins.installer.getLoader());
	elgg.ui.plugins.installer.getResults(data, callback);
}

/**
 * Serializes form data into key-value object as opposite to $.serialize
 * @see jQuery.serilize
 * @return {Object}
 */
elgg.ui.plugins.installer.serializeObject = function(selector, data) {
	data = data || {};
	if (data) {
		//we make this trick to support multivalue fields
		for (var i in data) {
			if (typeof data[i] !== 'array') {
				data[i] = [data[i]];
			}
		}
	} else {
		data = {};
	}
	var a = $(selector).serializeArray()
	for (var i in a) {
		var key = a[i].name;
		if (data.key===undefined) {
			data[key] = [];
		}
		data[key].push(a[i].value);
	}
	//make single values into non-arrays
	for (var i in data) {
		if (data[i].length==1) {
			data[i] = data[i][0];
		}
	}
	return data;
}

elgg.ui.plugins.installer.getResults = function(data, callback) {
	var params = elgg.ui.plugins.installer.serializeObject('.elgg-form-plugins-install-search', data);
	elgg.get('ajax/default/plugins/install/search/results', {
		data: params,
		success: function(data) {
			data = $(data);
			$(".elgg-lightbox", data).fancybox({});
			callback(null, data, params);
		},
		error: function() {
			callback("Error loading results");
		}
	});
}

elgg.register_hook_handler('init', 'system', elgg.ui.plugins.installer.init);
