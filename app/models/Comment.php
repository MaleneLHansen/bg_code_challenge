<?php


class Comment extends Eloquent {


	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'comments';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */

	protected $fillable = ['title', 'body', 'name', 'movie_id'];

	public function movie(){
		return $this->belongsTo('Movie');
	}
}
