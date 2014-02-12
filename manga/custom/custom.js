jQuery(document).ready(function(){
	var base_url = Drupal.settings.base_url;
	var current_path = Drupal.settings.current_path;
	var totalpages = Drupal.settings.totalpages;
	var currentpage = Drupal.settings.currentpage;
	
	var current_path_array = current_path.split('/');
	current_path_array.pop();
	var path = '';
	for(var i = 0; i < current_path_array.length; i++)
	{
		current_path_array[i] = current_path_array[i].replace(/^\s*/, "").replace(/\s*$/, "");
		path = path +current_path_array[i]+"/";
	}
	jQuery('#episode_list').change(function(){
		var current = this.value;
		window.location.href = base_url+"/"+current_path+"?page="+(current-1);
	});	
	jQuery('#chapter_list').change(function(){
		window.location.href = base_url+"/"+path+this.value;
	});	
	
	function omvKeyPressed(e) {
		var keyCode = 0;
		if (navigator.appName == "Microsoft Internet Explorer") {
			if (!e) {
				var e = window.event;
			}
			if (e.keyCode) {
				keyCode = e.keyCode;
				if ((keyCode == 37) || (keyCode == 39)) {
					window.event.keyCode = 0;
				}
			} else {
				keyCode = e.which;
			}
		} else {
			if (e.which) {
				keyCode = e.which;
			} else {
				keyCode = e.keyCode;
			}
		}
		switch (keyCode) {                case 37:
				if((currentpage - 1) < 0) {
					var chep = jQuery("#chapter_list").val();
					window.location.href = base_url+"/"+path+(chep-1);
				} else {
					window.location.href = base_url+"/"+current_path+"?page="+(currentpage-1);
				}
				return false;
							case 39:
				if(parseInt(currentpage) + 1 > parseInt(totalpages)-1) {
					var chep = jQuery("#chapter_list").val();
					window.location.href = base_url+"/"+path+(parseInt(chep)+1);
				}
				else {
					//alert('hit');
					window.location.href = base_url+"/"+current_path+"?page="+(parseInt(currentpage)+1);
				}
				//window.location = "/93-2-2/naruto/chapter-2.html";
				return false;
			
			default:
				return true;
		}
	}
	document.onkeydown = omvKeyPressed;
});