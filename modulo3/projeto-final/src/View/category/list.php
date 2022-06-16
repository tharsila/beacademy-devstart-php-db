<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

<div class="container">
  <h1>Lista de categorias</h1>
  <table class="table table-hover table-striped">
    <thead class="table-dark">
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
         "<tr>
            <td>{$id}</td>
            <td>{$name}</td>
            <td>{$description}</td>
            <td><a href='/categorias/excluir?id={$id}' class='btn btn-danger btn-sm'>Excluir</a></td>
         </tr>";
        }
      ?>
    </tbody>
  </table>
</div>