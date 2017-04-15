<?php

function inject_ad_text_after_n_chars($content) {
	$enable_length = 2000;
	$after_character = 1500;
	if (is_single() && (strlen($content) > $enable_length)) {
		$before_content = substr($content, 0, $after_character);
		$after_content = substr($content, $after_character);
		$after_content = explode('</p>', $after_content);
		array_splice($after_content, 1, 0, ,middle_ad());
		$after_content = implode('</p>', $after_content);
		return str_replace("<p></p>","",$before_content . $after_content);
	} else {
	return $content;
	}
}
add_filter('the_content', 'inject_ad_text_after_n_chars');

function middle_ad()
{
	return "the ad";
}
?>