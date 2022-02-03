<?php

namespace App\Objects;

class DofResponse {
	public $note;
	public $date;
	public $noteCode;

	function __construct($note, $date, $noteCode){
		$this->note = $note;
		$this->date = $date;
		$this->noteCode = $noteCode;
	}
}
