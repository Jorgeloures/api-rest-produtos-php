<main>
  <div class="container">
    <div class="row">
      <div class="col-8 offset-2" style="margin-top:30px">

        <div class="d-flex justify-content-between align-items-center mb-4">
          <h2>Incluir Usuário</h2>
        </div>
        <form method="POST">
          
        <div class="row">
            <div class="col-md-6 mb-3">
              <label class="form-label">Nome:</label>
              <input type="text" name="nome" class="form-control">
            </div>
            
            <div class="col-md-6 mb-3">
              <label class="form-label">Especialidade:</label>
              <input type="text" name="especialidade" class="form-control" >
            </div>
          </div>

          <div class="row">
            <div class="col-md-6 mb-3">
              <label class="form-label">Idade:</label>
              <input type="number" name="idade" class="form-control" >
            </div>

            <div class="col-md-6 mb-3">
              <label class="form-label">E-mail:</label>
              <input type="email" name="email" class="form-control" >
            </div>
          </div>

          <div class="mt-4">
            <button type="submit" class="btn btn-primary"> Salvar Usuário </button>
            <a href="<?= BASE_URL ?>/User" class="btn btn-primary"> Voltar </a>
          </div>
        
        </form>
      </div>
    </div>
  </div>
</main>