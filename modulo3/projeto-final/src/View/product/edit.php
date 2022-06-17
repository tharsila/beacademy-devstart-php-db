<div class="container">
  <?php 
    extract($data);

   ?>
  <h1 class="text-center">Editar Produto</h1>
  <form method="post">
    <label for="category">Categoria</label>
    <select name="category" id="category" class="form-select mb-3">
    <option selected>-- Selecione --</option>
      <?php
        while($categories = $category->fetch(\PDO::FETCH_ASSOC)) {
          extract($categories);
          echo "<option value={$categories['id']}>{$categories['name']}</option>";
        }
        
      ?>
    </select>

    <label for="name">Nome</label>
    <input value="<?php echo $product['name'] ?>"type="text" name="name" id="name"  class="form-control mb-3">

    <label for="description">Descrição</label> 
    <textarea name="description" id="description" rows="5" class="form-control mb-3"><?php echo $product['description']?></textarea>

    <label for="value">Preço</label>
    <input value="<?php echo $product['value'] ?>" type="text" name="value" class="form-control mb-3">

    <label for="value">Quantidade</label>
    <input value="<?php echo $product['quantity']?>" type="text" name="quantity" class="form-control mb-3">

    <label for="value">Imagem</label>
    <input value="<?php echo $product['photo']?>" type="text" name="photo" class="form-control mb-3">

    <button class="btn btn-dark">Atualizar</button>
  </form>
</div>