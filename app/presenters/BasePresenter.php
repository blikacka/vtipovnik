<?php

namespace App\Presenters;

use Nette\Application\UI\Presenter;

/**
 * Base presenter for all application presenters.
 */

abstract class BasePresenter extends Presenter {

	public function handleLogout() {
		$this->user->logout(true);
		$this->flashMessage("Byli jste odhlášení");
		$this->redirect("this");
	}

}
