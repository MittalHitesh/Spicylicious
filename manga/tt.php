<?php

$file = file('b2.txt');
$fn=fopen('record2.txt', 'a');
foreach($file as $values) {
	$response = file_get_contents("http://www.mangaeden.com/api/manga/".trim($values));
	$data = json_decode($response);
	$last_chapter_date = '';
	$genre = '';
	if(isset($data->last_chapter_date)) {
		$last_chapter_date = $data->last_chapter_date;
	}
	if(isset($data->categories)) {
		$genre = implode(", ", $data->categories);
	}
	$txt = trim($values).'|'.$genre.'|'.$last_chapter_date."\n";
	fputs($fn,$txt);
}
@fclose($fn);



		
