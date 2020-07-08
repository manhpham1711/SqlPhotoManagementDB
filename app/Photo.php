<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model {
	public function description() {
		return $this->hasOne('App\PhotoDescriptions');
	}
	public function category() {
		return $this->belongsTo('App\Category', "category_id", "id");
	}
	public function tag() {
		return $this->belongsToMany('App\Tag', "taggable", "photo_id", 'tag_id');
	}

	function getTags() {
		$tag = null;
		foreach ($this->tag as $tagname) {
			$tag = $tag . " " . $tagname->name;
		}
		return $tag;
	}

}
