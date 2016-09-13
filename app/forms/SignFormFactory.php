<?php

namespace App\Forms;

use Nette\Application\UI\Form;
use Nette\Object;
use Nette\Security\AuthenticationException;
use Nette\Security\User;


class SignFormFactory extends Object {

	/** @var FormFactory */
	private $factory;

	/** @var User */
	private $user;

	public function __construct(FormFactory $factory, User $user) {
		$this->factory = $factory;
		$this->user = $user;
	}

	/**
	 * @return Form
	 */
	public function create() {
		$form = $this->factory->create();
		$form->addText('username', 'Přezdívka:')
		     ->setRequired('Vyplňte jméno.');

		$form->addPassword('password', 'Heslo:')
		     ->setRequired('vyplňte heslo.');

		$form->addCheckbox('remember', 'Zůstat přihlášen');

		$form->addSubmit('send', 'Přihlásit se');

		$form->onSuccess[] = [$this, 'formSucceeded'];
		return $form;
	}

	/**
	 * @param Form $form
	 * @param mixed $values
	 */
	public function formSucceeded(Form $form, $values) {
		if ($values->remember) {
			$this->user->setExpiration('14 days', false);
		} else {
			$this->user->setExpiration('20 minutes', true);
		}
		try {
			$this->user->login($values->username, $values->password);
		} catch (AuthenticationException $e) {
			$form->addError('Jméno nebo heslo je špatné.');
		}
	}

}
