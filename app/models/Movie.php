<?php


class Movie extends Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'movies';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */

	protected $fillable = ['title', 'description', 'rating', 'category_id'];

	public function scopeActive($query){
		return $query->where('active', 1);
	}

	public function category(){
		return $this->belongsTo('Category');
	}

	public function comments(){
		return $this->hasMany('Comment');
	}

}
