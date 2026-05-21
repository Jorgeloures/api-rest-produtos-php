<main>
  <div class="container">
    <div class="row">
      <div class="col-8 offset-2" style="margin-top:30px">

        <div class="d-flex justify-content-between align-items-center mb-4">
          <h2>Editar Usuário</h2>
        </div><form method="POST">
          <div class="mb-3">
            <label class="form-label">ID:</label>
            <input type="text" class="form-control" style="text-align:center" value="<?= $usuario['id'] ?>"
            disabled >
          </div>

          <div class="row">
            <div class="col-md-6 mb-3">
              <label class="form-label">Nome:</label>
              <input type="text" name="nome" class="form-control" value="<?= $usuario['nome'] ?>" >
            </div>

            <div class="col-md-6 mb-3">
              <label class="form-label">Especialidade:</label>
              <input type="text" name="especialidade" class="form-control" value="<?= $usuario['especialidade'] ?>" >
            </div>
          </div>

          <div class="row">
            <div class="col-md-6 mb-3">
              <label class="form-label">Idade:</label>
              <input type="number" name="idade" class="form-control" value="<?= $usuario['idade'] ?>" >
            </div>

            <div class="col-md-6 mb-3">
              <label class="form-label">E-mail:</label>
              <input type="email" name="email" class="form-control" value="<?= $usuario['email'] ?>" >
            </div>
          </div>

          <div class="mt-4">
            <button type="submit" class="btn btn-primary"> Salvar Edição </button>
            <a href="<?= BASE_URL ?>/User" class="btn btn-primary"> Voltar </a>
          </div>

        </form>
      </div>
    </div>
  </div>
</main>