<?php

class STLWD_Todo extends STLWD_BaseModel
{
	protected $tableName = 'todo';

	public $id;
	public $task;
	public $due_date;
	public $status;
}