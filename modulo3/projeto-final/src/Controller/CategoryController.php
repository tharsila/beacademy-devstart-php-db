<?php

declare(strict_types=1);

namespace App\Controller;

use App\Connection\Connection;

class CategoryController extends AbstractController
{
 public function listAction(): void
 {

  $con = Connection::getConnection();
  $query = 'SELECT * FROM tb_category';
  $result = $con->prepare($query);
  $result->execute();
  
  parent::render('category/list', $result);
 }

 public function addAction(): void
 {

  if($_POST) {
    $name = $_POST['name'];
    $description = $_POST['description'];

    $query = "INSERT INTO tb_category(name, description) VALUES('{$name}', '{$description}')";

    $con = Connection::getConnection();

    $result = $con->prepare($query);
    $result->execute();
  }

  parent::render('category/add');
 }

 public function removeAction(): void
 {
  $id = $_GET['id'];
  $con = Connection::getConnection();
  $query = "DELETE FROM tb_category WHERE id={$id}";
  $result = $con->prepare($query);
  $result->execute();

  echo 'Categoria excluida';
 }
}