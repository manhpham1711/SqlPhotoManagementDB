<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Http\Controllers\Controller;

class CategoryController extends Controller {
	function index() {
		$category = Category::all();
		foreach ($category as $key) {
			$key->photos;
		}
		echo "<pre>" . json_encode($category, JSON_PRETTY_PRINT) . "</pre>";
	}
}
