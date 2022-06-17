<div class="container">
  <h1 class="text-center">Lista de categorias</h1>
  <table class="table table-hover">
    <thead class="table-dark" >
      <tr>
        <th>#ID</th>
        <th>Nome</th>
        <th>Descrição</th>
        <th>Ações</th>
      </tr>
    </thead>
      <tbody>
        <?php
        while($category = $data->fetch(\PDO::FETCH_ASSOC)) {
          extract($category);  /* extrai os indices do array */
          echo 
          "<tr class='bg-white'>
            <td>{$id}</td>
            <td>{$name}</td>
            <td>{$description}</td>
            <td>
              <a href='/categorias/editar?id={$id}' class='btn btn-warning btn-sm'>Editar</a>
              <a href='/categorias/excluir?id={$id}' class='btn btn-danger btn-sm'>Excluir</a>
            </td>
          </tr>";
        }
      ?>
    </tbody>
  </table>
</div>
