<?php

declare(strict_types=1);

namespace App\Controller;

class CategoryController extends AbstractController
{
  public function listCategory(): void
  {
    parent::render('category/list');
  }

  public function addCategory(): void
  {
    parent::render('category/add');
  }

  public function editCategory(): void
  {
    parent::render('category/edit');
  }
}