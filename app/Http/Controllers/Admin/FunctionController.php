<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Http\Controllers\Controller;
use App\Tag;
use Illuminate\Http\Request;

class FunctionController extends Controller {
	function form_add() {
		$category = Category::all();
		$tags = Tag::all();
		return view('admin.photo.add', ['category' => $category, 'tags' => $tags]);
	}

	function add(Request $request) {
		// $allPhoto = Photo::all();
		// $id = $allPhoto->last()->id + 1;

		// $title = $request->title;
		// $category = $request->category;
		// $comment = $request->description;
		// $image = $request->file('image')->store("public");

		// $photo = new Photo;
		// $photo->title = $title;
		// $photo->category_id = $category;
		// $photo->image = $image;
		// $photo->save();

		// $description = new PhotoDescriptions;
		// $description->photo_id = $id;
		// $description->content = $comment;
		// $description->save();

		$tag = $request->tag;
		echo $tag;

		//return redirect()->route('index');
	}
}
