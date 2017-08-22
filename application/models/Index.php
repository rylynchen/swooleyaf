<?php

class IndexModel {

	public $name;

	static public function getSlide ()
	{
		return 'getSlide';
	}

	public function getData ()
	{
		return 'IndexModel.getData';
	}

	public function setNmae ($name)
	{
		$this->name = $name;
	}
}