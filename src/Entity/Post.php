<?php

namespace App\Entity;

use Symfony\Component\Validator\Constraints as Assert;
use Dcoctrine\ORM\Mapping as ORM;

#[ORM\Entity()]
#[ORM\Table(name:"post")]
class Post{

  #[ORM\Id()]
  #[ORM\GeneratedValue(strategy:"AUTO")]
  #[ORM\Column(type:"integer")]
  private $id;
  
  // #[Assert\Length(min: 0,max: 150, minMessage:"trop court !",maxMessage: " Le texte est trop long !")]
  #[ORM\Column(type:"string", nullable: true, length: 150)]
  private ?string $title = NULL;
 
  #[ORM\Column(type:"text", length: 320)]
  // #[Assert\NotBlank(message: "Le contenu ne doit pas être vide !")]
  // #[Assert\Length(min: 0,max: 300, minMessage:"trop court !",maxMessage: "trop long !")]
  private string $content;

  // #[Assert\NotBlank(message: "L'URL n'est pas valide")]
  // #[Assert\Url(message: "Il doit 'sagir de l'URL d'une image !")]
  #[ORM\Column(type:"text")]
  private ?string $image = NULL;

  // #[ORM\Column(type:"user")]
  // private $user;

  public function getId()
  {
    return $this->id;
  }

  public function setId(int $id): self
  {
    $this->id = $id;

    return $this;
  }
 
  public function getTitle()
  {
    return $this->title;
  }

  public function setTitle($title)
  {
    $this->title = $title;

    return $this;
  }

  public function getContent()
  {
    return $this->content;
  }

  public function setContent($content)
  {
    $this->content = $content;

    return $this;
  }
  public function getImage()
  {
    return $this->image;
  }

  public function setImage($image)
  {
    $this->image = $image;

    return $this;
  }

  // public function getUser()
  // {
  //   return $this->user;
  // }

  // public function setUser($user)
  // {
  //   $this->user = $user;

  //   return $this;
  // }

 
}