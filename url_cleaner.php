<?php 
// Remove/replace invalid characters in the custom URLs
// generated from the title of the post.
// 'Cause otherwise the URLs will look like scrambled eggs.
	function clean_url($url){
		$search = array('-',' ','$','%','.','\'','"');
		$replace = array('','-','','','','','');
		$cleaned_url = strtolower(str_replace($search, $replace, $url));
		return $cleaned_url;
	}
