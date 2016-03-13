<?php

namespace App\Presenters;

use App\Entities\Joke;
use Kdyby\Doctrine\EntityManager;
use Nette;
use App\Model;


class HomepagePresenter extends BasePresenter {

	/** @var EntityManager @inject */
	public $em;

	public function renderDefault() {

		$q = $this->em->createQueryBuilder()
			->select('j, u')
			->from(Joke::getClassName(), "j")
			->leftJoin('j.user', 'u')
			->orderBy("j.id", "DESC");

		$this->template->jokes = $q->getQuery()->getResult();;
		$this->template->anyVariable = 'any value';
	}

}
