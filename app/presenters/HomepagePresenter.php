<?php

namespace App\Presenters;

use App\Services\Queries\JokeQueries;

class HomepagePresenter extends BasePresenter {

	/** @var JokeQueries @inject */
	public $jokeQueries;

	public function renderDefault() {
		$this->template->jokes = $this->jokeQueries->getJokes();
	}

}
