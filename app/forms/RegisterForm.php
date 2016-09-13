<?php


namespace App\Forms;

use App\Entities\User;
use Kdyby\Doctrine\EntityManager;
use Nette\Forms\Form;
use Nette\Object;
use Nette\Security\Passwords;
use Nette\Security;
use Nette\Application\UI;


/**
 * @author Jakub Cieciala <jakub.cieciala@gmail.com>
 */
class RegisterForm extends Object {

	/** @var EntityManager */
	public $em;

	/** @var FormFactory */
	private $formFactory;

	/** @var \Nette\Security\User */
	private $userSecurity;

	public function __construct(EntityManager $em, FormFactory $formFactory, Security\User $userSecurity) {
		$this->em = $em;
		$this->formFactory = $formFactory;
		$this->userSecurity = $userSecurity;
	}

	/**
	 * @return UI\Form
	 */
	public function create() {
		$form = $this->formFactory->create();
		$form->addText('login', "Přezdívka")
		     ->setRequired("Login je povinný");
		$form->addPassword('password', "Heslo")
		     ->setRequired("Heslo je povinné");
		$form->addPassword('passwordAgain', "Heslo znova")
		     ->setRequired("Heslo znova je povinné")
		     ->addRule(Form::EQUAL, 'Hesla se neshodují', $form['password']);
		$form->addText("name", "Jméno")
		     ->setRequired("Jméno je povinné");
		$form->addSubmit("submit", "Registrovat se");

		$form->onSuccess[] = [$this, 'submitRegister'];
		return $form;
	}

	/**
	 * @param Form  $form
	 * @param mixed $values
	 */
	public function submitRegister(Form $form, $values) {
		$userDao = $this->em->getRepository(User::class);
		$existUser = $userDao->findOneBy(["login" => $values->login]);

		if ($existUser != null) {
			$form->addError("Tento login je již obsazen!");
			return;
		}

		$user = new User();
		$user->login = $values->login;
		$user->password = Passwords::hash($values->password);
		$user->name = $values->name;
		$this->em->persist($user);
		$this->em->flush();

		$this->userSecurity->login($values->login, $values->password);

	}


}