<main>
  <div class="container">
    <div class="row">
      <div class="col-8 offset-2" style="margin-top:30px">
        <div class="d-flex justify-content-between align-items-center mb-3">
          <h2>Usuários</h2>
          <a href="<?= BASE_URL ?>/User/create" class="btn btn-success">Incluir Usuário</a>
          <a href="<?= BASE_URL ?>" class="btn btn-primary"> Página Principal </a>
        </div>

        <table class="table">
          <thead>
            <tr>
              <th scope="col">ID</th>
              <th scope="col">Nome</th>
              <th colspan="3">Ações</th>
            </tr>

          </thead>
          <tbody>
            <?php foreach ($usuarios as $usuario) { ?>

            <tr>
              <td><?= $usuario['id'] ?></td>
              <td><?= $usuario['nome'] ?></td>

              <td><a href="<?= BASE_URL ?>/User/show/<?= $usuario['id'] ?>"> Visualizar </a></td>
              <td><a href="<?= BASE_URL ?>/User/edit/<?= $usuario['id'] ?>"> Editar </a></td>

              <td><a href="<?= BASE_URL ?>/User/delete/<?= $usuario['id'] ?>"
                  onclick="return confirm('Deseja excluir este usuário?')" > Excluir </a></td>
            </tr>

            <?php } ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</main>