<?php 

class Mangas {

	function chepters_data($manga_id) {
		$url = "http://www.mangaeden.com/api/manga/". $manga_id;
		//$url = "http://www.mangaeden.com/api/list/0/?p=$page";
		//$url = "'https://mangareader.p.mashape.com/getList/0/";
		$curl = curl_init();
		curl_setopt($curl, CURLOPT_URL, $url);
		curl_setopt($curl, CURLOPT_HEADER, false);
		//curl_setopt($curl, CURLOPT_HTTPHEADER,
		//array("X-Mashape-Authorization=> a6xJlraRWfPfvjyMgcch1oZD7pamIorc"));
		curl_setopt ($curl, CURLOPT_RETURNTRANSFER, true);
		curl_setopt ($curl, CURLOPT_FOLLOWLOCATION, true);
		curl_setopt ($curl, CURLOPT_MAXREDIRS, 10);
		$response = curl_exec($curl);
		//$jsonString = json_encode($response, true);
		$data=json_decode($response);
		$status = curl_getinfo($curl); 
		curl_close($curl);
		return $data;
	}
	
	function chepters($chepter_id) {
		$url = "http://www.mangaeden.com/api/chapter/".$chepter_id;
		//$url = "http://www.mangaeden.com/api/list/0/?p=$page";
		//$url = "'https://mangareader.p.mashape.com/getList/0/";
		$curl = curl_init();
		curl_setopt($curl, CURLOPT_URL, $url);
		curl_setopt($curl, CURLOPT_HEADER, false);
		//curl_setopt($curl, CURLOPT_HTTPHEADER,
		//array("X-Mashape-Authorization=> a6xJlraRWfPfvjyMgcch1oZD7pamIorc"));
		curl_setopt ($curl, CURLOPT_RETURNTRANSFER, true);
		curl_setopt ($curl, CURLOPT_FOLLOWLOCATION, true);
		curl_setopt ($curl, CURLOPT_MAXREDIRS, 10);
		$response = curl_exec($curl);
		//$jsonString = json_encode($response, true);
		$data=json_decode($response);
		$status = curl_getinfo($curl); 
		curl_close($curl);
		return $data;
	}

}

/* End of file Someclass.php */