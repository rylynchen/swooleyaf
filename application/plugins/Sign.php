<?php

class SignPlugin {

	static public function getList ()
	{
		$arr = [
			['name' => 'rylyn', 'age' => 29],
			['name' => 'chen', 'age' => 30],
		];
		return $arr;
	}

	static public function getRow ()
	{
		return IndexModel::getSlide();
	}
}