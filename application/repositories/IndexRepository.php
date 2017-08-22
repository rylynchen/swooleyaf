<?php

namespace App\Repositories;

use \IndexModel;

class IndexRepository
{
	static public function getSlide ()
	{
		static $cnt = 0;
		++$cnt;
		$indexMod = new IndexModel();
		$max = getMax(10, 20);
		return "cnt: $cnt";
		return $indexMod->getData() . ", max: $max";
	}
}