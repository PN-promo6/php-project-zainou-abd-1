<?php

namespace Entity;

use Entity\User;

class Anime
{
  public $id;
  public $title;
  public $category;
  public $creationDate;
  public $description;  
  public User $user;
}
