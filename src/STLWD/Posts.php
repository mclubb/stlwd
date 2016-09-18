<?php

class STLWD_Posts extends STLWD_BaseModel
{
	protected $tableName = 'posts';

	public $id;
	public $slug;
	public $title;
	public $teaser;
	public $post;
	public $posted_by;
	public $posted_date;
	public $main_image;
	public $article_type;
	public $status;
}