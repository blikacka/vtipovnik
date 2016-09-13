<?php


namespace App\Presenters;
use App\Entities\Joke;
use App\Entities\User;
use App\Forms\JokeForm;
use App\Services\Helpers\IconsHelper;
use Kdyby\Doctrine\EntityManager;
use Nette\Application\UI;

/**
 * @author Jakub Cieciala <jakub.cieciala@gmail.com>
 */

class JokePresenter extends BasePresenter {

	/** @var JokeForm @inject */
	public $jokeForm;

	/** @var EntityManager @inject */
	public $em;

	public function startup() {
		parent::startup();
		if (!$this->user->isLoggedIn()) {
			$this->flashMessage("Tato akce je jen pro přihlášené uživatele!", "error");
			$this->redirect("Homepage:default");
		}
	}

	/**
	 * @return UI\Form
	 */
	protected function createComponentJokeAddForm() {
		$form = $this->jokeForm->create();
		$form->onSuccess[] = [$this, 'submitJoke'];
		return $form;
	}

	/**
	 * @param UI\Form $val
	 */
	public function submitJoke($val) {
		$values = $val->getForm()->getValues();

		$jokeDao = $this->em->getRepository(Joke::class);
		$existJoke = $jokeDao->findOneBy(["joke" => $values->joke]);

		if ($existJoke != null) {
			$val->getForm()->addError("Tento Vtip už je v databázi!!!");
			return;
		}

		$icons = IconsHelper::getIcons();
		$iconsWithPrefix = array();
		foreach ($icons as $icon) {
			array_push($iconsWithPrefix, "fa-" . $icon);
		}

		if (!in_array($values->icon, $iconsWithPrefix)) {
			$val->getForm()->addError("Toto není platná ikonka");
			return;
		}

		$joke = new Joke();
		$joke->joke = $values->joke;
		$joke->icon = $values->icon;
		$joke->iconColor = $values->color == null ? "#000000" : $values->color;
		$joke->title = $values->title;
		$joke->user = $this->em->find(User::class, $this->user->identity);

		$this->em->persist($joke);
		$this->em->flush();

		$this->flashMessage("Vtip byl uložen");
		$this->redirect("Homepage:default");

	}
}