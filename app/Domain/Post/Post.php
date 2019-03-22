<?php

namespace App\Domain\Post;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="posts")
 * @ORM\HasLifecycleCallbacks()
 */

class Post
{
	/**
	 * @var integer $id
	 * @ORM\Column(name="id", type="integer", unique=true, nullable=false)
	 * @ORM\Id
	 * @ORM\GeneratedValue(strategy="AUTO")
	 */
	private $id;

	/**
	 * @ORM\Column(type="string")
	 */
	private $title;

	/**
	 * @ORM\Column(type="text")
	 */
	private $body;

	public function __construct($input)
	{
		$this->setTitle($input['title']);
		$this->setBody($input['body']);
	}

	/**
	 * @return int
	 */
	public function getId()
	{
		return $this->id;
	}

	/**
	 * @return mixed
	 */
	public function getTitle()
	{
		return $this->title;
	}

	/**
	 * @param $title
	 */
	public function setTitle($title)
	{
		$this->title = $title;
	}

	/**
	 * @return mixed
	 */
	public function getBody()
	{
		return $this->body;
	}

	/**
	 * @param $body
	 */
	public function setBody($body)
	{
		$this->body = $body;
	}
}