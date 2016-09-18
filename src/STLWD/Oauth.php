<?php

class STLWD_Oauth extends STLWD_BaseModel
{
	protected $tableName = 'oauth';

	public $id;
	public $client_id;
	public $client_secret;
}