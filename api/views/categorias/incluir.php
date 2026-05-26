<main>
<div class="dashboard-box">
        <div class="d-flex justify-content-between align-items-center mb-4">
          <h2>Incluir Categoria</h2>
        </div>

        <form method="POST">
          <div class="mb-3">
            <label class="form-label">Nome da Categoria:</label>
            <input type="text" name="nome" class="form-control" >
          </div>

          <div class="mt-4">
            <button type="submit" class="btn btn-primary"> Salvar Categoria </button>
            <a href="<?= BASE_URL ?>/category" class="btn btn-primary"> Voltar </a>
          </div>
        </form>

      </div>
</main>