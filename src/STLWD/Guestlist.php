<?php

class STLWD_Guestlist extends STLWD_BaseModel
{
	protected $tableName = 'guestlist';

	public $id;
	public $guid;
	public $name;
	public $email;
	public $extra;
	public $visited;
}