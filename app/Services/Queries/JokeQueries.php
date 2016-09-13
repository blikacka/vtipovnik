<?php

namespace App\Services\Queries;

use App\Entities\Joke;
use Doctrine\ORM\QueryBuilder;
use Kdyby\Doctrine\EntityManager;
use Nette\Object;

/**
 * @author Jakub Cieciala <jakub.cieciala@gmail.com>
 */
class JokeQueries extends Object {

	/** @var EntityManager */
	public $em;

	public function __construct(EntityManager $em) {
		$this->em = $em;
	}

	/**
	 * @return QueryBuilder
	 */
	public function getJokesQuery() {
		$q = $this->em->createQueryBuilder()
		              ->select('j, u')
		              ->from(Joke::class, "j")
		              ->leftJoin('j.user', 'u')
		              ->orderBy("j.id", "DESC");
		return $q;
	}

	/**
	 * @return Joke[]
	 */
	public function getJokes() {
		return $this->getJokesQuery()
		            ->getQuery()
		            ->getResult();
	}


}