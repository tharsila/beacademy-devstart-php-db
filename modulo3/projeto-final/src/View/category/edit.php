<div class="container">
  <h1>Editar Categoria</h1>
  <form method="post">
    <label for="name">Nome</label>
    <input value="<?php echo $data['name']?>"type="text" name="name" id="name"  class="form-control mb-3">
    <label for="description">Descrição</label> 
    <textarea name="description" id="description" rows="5" class="form-control mb-3"><?php echo $data['description']; ?></textarea>
    <button class="btn btn-primary">Enviar</button>
  </form>
</div>