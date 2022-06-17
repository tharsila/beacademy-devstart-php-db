<div class="container">
  <h1 class="text-center">Lista de Produtos</h1>
  <div class= "text-end mb-3">
    <a class="btn btn-success btn-lg" href="/produtos/novo">Novo Produto</a>
    <a class="btn btn-secondary btn-lg" href="/produtos/relatorio">Gerar PDF</a>
  </div>
  <table class="table table-hover">
    <thead class="table-dark" >
      <tr>
        <th>#ID</th>
        <th>Nome</th>
        <th>Descrição</th>
        <th>Imagem</th>
        <th>Valor</th>
        <th>Qtd</th>
        <th>Data de Cadastro</th>
        <th>Ações</th>
        
      </tr>
    </thead>
      <tbody>
        <?php
        while($product = $data->fetch(\PDO::FETCH_ASSOC)) {
          extract($product);  /* extrai os indices do array */
          echo 
          "<tr class='bg-white'>
            <td>{$id}</td>
            <td>{$name}</td>
            <td>{$description}</td>
            <td><img width='100px' src={$photo}></td>
            <td>R$ {$value}</td>
            <td>{$quantity}</td>
            <td>{$created_at}</td>
            <td>
              <a href='/produtos/editar?id={$id}' class='btn btn-warning btn-sm'>Editar</a>
              <a href='/produtos/excluir?id={$id}' class='btn btn-danger btn-sm'>Excluir</a>
            </td>
          </tr>";
        }
      ?>
    </tbody>
  </table>
</div>