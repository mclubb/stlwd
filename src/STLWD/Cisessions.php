<?php

class STLWD_Cisessions extends STLWD_BaseModel
{
	protected $tableName = 'ci_sessions';

	public $session_id;
	public $ip_address;
	public $user_agent;
	public $last_activity;
	public $user_data;
}