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

      parent::renderMessageAdd('Sucesso: Produto Adicionado');
    }

    $query = "SELECT * FROM tb_category";
    $result = $con->prepare($query);
    $result->execute();

    parent::render('product/add', $result);
  }

  public function editAction(): void
  {
   $id = $_GET['id'];
   $con = Connection::getConnection();
   $query = "SELECT * FROM tb_category";
   $categories = $con->prepare($query);
   $categories->execute();

   if ($_POST) {
    $category = $_POST['category'];
    $name = $_POST['name'];
    $description = $_POST['description'];
    $photo = $_POST['photo'];
    $value = $_POST['value'];
    $quantity = $_POST['quantity'];

    $query = "UPDATE tb_product SET
                  category_id = '{$category}', 
                  name='{$name}',
                  description='{$description}',
                  photo = '{$photo}',
                  value = '{$value}',
                  quantity = '{$quantity}'
              WHERE id = '{$id}'
    ";

    $resultEdit = $con->prepare($query);
    $resultEdit->execute();

    parent::renderMessageAdd('Sucesso: Produto Atualizado');
   }

   $product = $con->prepare("SELECT * FROM tb_product WHERE id='{$id}'");
   $product->execute();

   parent::render('product/edit', [
    'product' => $product->fetch(\PDO::FETCH_ASSOC),
    'category' => $categories
   ]);
  }

  public function removeAction(): void
  {
    $id = $_GET['id'];
    $con = Connection::getConnection();
    $query = "DELETE FROM tb_product WHERE id={$id}";
    $result = $con->prepare($query);
    $result->execute();

    parent::renderMessage('Sucesso: Produto excluido');
  }
}