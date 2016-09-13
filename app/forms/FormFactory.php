<?php

namespace App\Forms;

use Nette\Application\UI\Form;
use Nette\Object;


class FormFactory extends Object {

	/** @return Form */
	public function create() {
		return new Form;
	}

}
