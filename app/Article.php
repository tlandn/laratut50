<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Article extends Model {

	protected $fillable = ['title' , 'body', 'published_at'];

	public function setPublishedAtAttribute($date) {
		$this->attributes['published_at'] = Carbon::createFromFormat('Y-m-d', $date);
	}

	public function getPublishedAtAttribute($date) {
		return Carbon::parse($date)->toDateString();
	}

	public function scopePublished($query) {
		$query->where('published_at','<=', Carbon::now());
	}

	public function user() {
		return $this->belongsTo('App\User');
	}



}
