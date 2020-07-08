<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\photo;

class AdminController extends Controller {
	function index() {
		$dataphotos = photo::all();
		echo $dataphotos;
		return view('admin.index', ["data" => $dataphotos]);
	}
}
