<?php


namespace App\Forms;

use Kdyby\Doctrine\EntityManager;
use Nette\Forms\Form;
use Nette\Object;
use Nette\Application\UI;

/**
 * @author Jakub Cieciala <jakub.cieciala@gmail.com>
 */
class JokeForm extends Object {

	/** @var EntityManager */
	public $em;

	/** @var FormFactory */
	private $formFactory;

	public function __construct(EntityManager $em, FormFactory $formFactory) {
		$this->em = $em;
		$this->formFactory = $formFactory;
	}

	/**
	 * @return UI\Form
	 */
	public function create() {
		//		$iconsHelper = new IconsHelper();
		//		$icons = $iconsHelper->getIcons();
		$form = $this->formFactory->create();
		$form->addText('title', "Titulek")
		     ->setRequired("Zadejte titulek")
		     ->addRule(Form::MAX_LENGTH, 'Titulek je příliš dlouhý', 50);
		$form->addTextArea('joke', "Vtip")
		     ->setRequired("Zadejte vtip")
		     ->addRule(Form::MAX_LENGTH, 'Vtip je příliš dlouhý', 1000);
		$form->addText("icon", "Ikona")
		     ->setRequired("Zvolte ikonku (font-awesome)");
		//		$form->addSelect("icon", "Ikona", $icons)
		//			->setRequired("Zvolte ikonku");
		$form->addText("color", "Barva ikonky")
		     ->addRule(Form::MAX_LENGTH, 'Délka barvy je příliš dlouhá', 7)
		     ->setType("color");
		$form->addSubmit("submit", "Odeslat");

		return $form;
	}

}