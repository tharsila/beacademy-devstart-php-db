<?php

declare(strict_types=1);

namespace App\Controller;

use App\Connection\Connection;

class ProductController extends AbstractController
{
  public function listAction(): void
  {
    $con = Connection::getConnection();
    $query = "SELECT * FROM tb_product";
    $result = $con->prepare($query);
    $result->execute();

    parent::render('product/list', $result);
  }

  public function addAction(): void
  {
    $con = Connection::getConnection();

    if ($_POST) {
      $name = $_POST['name'];
      $description = $_POST['description'];
      $photo = $_POST['photo'];
      $value = $_POST['value'];
      $quantity = $_POST['quantity'];
      $categoryId = $_POST['category'];
      $createdAt = date('Y-m-d H:i:s');

      $query = "
        INSERT INTO tb_product(name, description, photo, value, quantity, category_id, created_at) 
        VALUES 
        ('{$name}', '{$description}', '{$photo}', '{$value}', '{$quantity}', '{$categoryId}', '{$createdAt}')
      ";

      $result = $con->prepare($query);
      $result->execute();

      echo 'Produto adicionado';
    }

    $query = "SELECT * FROM tb_category";
    $result = $con->prepare($query);
    $result->execute();

    parent::render('product/add', $result);
  }

  public function editAction(): void
  {

   parent::render('product/edit');
  }
}