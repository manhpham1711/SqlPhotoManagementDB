<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Photo;

class PhotoController extends Controller {
	function index() {
		$photo = Photo::all();
		return view('admin.photo.index', ['data' => $photo]);

		// foreach ($photo as $key) {
		// 	echo $key->category->name . "<br>";
		// 	foreach ($key->tag as $tagname) {
		// 		echo $tagname->name . "<br>";
		// 	}
		// }
		// echo "<pre>" . json_encode($photo, JSON_PRETTY_PRINT) . "</pre>";
	}

}
