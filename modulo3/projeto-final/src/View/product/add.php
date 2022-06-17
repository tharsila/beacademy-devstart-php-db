<div class="container">
  <h1 class="text-center">Cadastrar Produto</h1>
  <form method="post">
    <label for="category">Categoria</label>
    <select name="category" id="category" class="form-select mb-3" required>
      <option selected>-- Selecione --</option>
      <?php
        while($category = $data->fetch(\PDO::FETCH_ASSOC)) {
          extract($category);
          echo "<option value='{$id}'>{$name}<option>";
        }
      ?>
    </select>

    <label for="name">Nome</label>
    <input type="text" name="name" id="name"  class="form-control mb-3">

    <label for="description">Descrição</label> 
    <textarea name="description" id="description" rows="5" class="form-control mb-3"></textarea>

    <label for="value">Preço</label>
    <input type="text" name="value" class="form-control mb-3">

    <label for="value">Quantidade</label>
    <input type="text" name="quantity" class="form-control mb-3">

    <label for="value">Imagem</label>
    <input type="text" name="photo" class="form-control mb-3">

    <button class="btn btn-dark">Enviar</button>
  </form>
</div>