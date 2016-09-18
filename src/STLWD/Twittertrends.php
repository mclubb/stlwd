<?php

class STLWD_Twittertrends extends STLWD_BaseModel
{
	protected $tableName = 'twitter_trends';

	public $id;
	public $woeid;
	public $name;
	public $query;
	public $url;
	public $promoted_content;
}