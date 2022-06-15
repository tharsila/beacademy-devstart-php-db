<?php

declare(strict_types=1);

namespace App\Controller;

class errorController extends AbstractController
{
  public function notFoundAction(): void
  {
    parent::render('error/notFound');
  }
}