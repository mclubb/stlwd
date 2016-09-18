<?php

class STLWD_Cnndata extends STLWD_BaseModel
{
	protected $tableName = 'cnn_data';

	public $id;
	public $title;
	public $guid;
	public $link;
	public $description;
	public $pubdate;
	public $thumbnail_img;
	public $content_img;
}