<?php

namespace MikeRow\Salt\Ed25519;

use \SplFixedArray;

class GeExtended extends GeProjective {

	public $T;

	function __construct(){
		parent::__construct();
		$this->T = new SplFixedArray(10);
	}
}
