<?php


namespace App\Entities;

use Kdyby\Doctrine\Entities\BaseEntity;
use Doctrine\ORM\Mapping as ORM;


/**
 * @author Jakub Cieciala <jakub.cieciala@gmail.com>
 * @ORM\Entity
 * @ORM\Table(name="joke")
 *
 * @property-read int $id
 * @property User $user
 * @property string $joke
 * @property string $title
 * @property int $icon
 * @property \DateTime $created
 */
class Joke extends BaseEntity {


	/**
	 * @ORM\Id
	 * @ORM\Column(type="integer", name="id")
	 * @ORM\GeneratedValue
	 * @var integer
	 */
	protected $id;

	/**
	 * @ORM\ManyToOne(targetEntity="User")
	 * @ORM\JoinColumn(nullable=false, name="user_id")
	 * @var User
	 */
	protected $user;

	/**
	 * @ORM\Column(length=1000, name="joke")
	 * @var string
	 */
	protected $joke;

	/**
	 * @ORM\Column(length=50, name="title")
	 * @var string
	 */
	protected $title;

	/**
	 * @ORM\Column(length=50, name="icon")
	 * @var string
	 */
	protected $icon;

	/**
	 * @ORM\Column(length=7, name="iconColor")
	 * @var string
	 */
	protected $iconColor;

	/**
	 * @ORM\Column(type="datetime", name="date_from")
	 * @var string
	 */
	protected $created;

	public function __construct() {
		$this->created = new \DateTime();
	}


}