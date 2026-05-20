<main>
  <div class="container">
    <div class="row">
      <div class="col-8 offset-2" style="margin-top:30px">
        <div class="d-flex justify-content-between align-items-center mb-3">
          <h2>Categorias</h2>
          <a href="<?= BASE_URL ?>" class="btn btn-primary"> Página Principal </a>
        </div>

        <table class="table">
          <thead>
            <tr>
              <th scope="col">ID</th>
              <th scope="col">Nome</th>
              <th colspan="2">Ações</th>
            </tr>
          </thead>

          <tbody>
            <?php foreach ($categories as $category) { ?>
            <tr>
              <td><?= $category['id'] ?></td>
              <td><?= $category['nome'] ?></td>
              
              <td>              
              <a href="<?= BASE_URL ?>/category/edit/<?= $category['id'] ?>"> Editar </a>
              </td>

              <td>
                <a href="<?= BASE_URL ?>/category/delete/<?= $category['id'] ?>"                  onclick="return confirm('Deseja excluir esta categoria?')" > Excluir </a>
              </td>
            </tr>
            <?php }?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</main>