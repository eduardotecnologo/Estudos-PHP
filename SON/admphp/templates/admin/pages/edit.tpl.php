<h3>Edição de Páginas</h3>

<form action="" method="POST">
  <div class="form-group">
    <label for="pageTitle">Título</label>
    <input name="title" id="pageTitle" type="text" class="form-control" placeholder="Título da página" required value="Título da Página">
  </div>

  <div class="form-group">
    <label for="pagesUrl">URL</label>
    <div class="input-group">
      <div class="input-group-prepend">
        <span class="input-group-text">http://</span>
      </div>
      <input name="url" id="pagesUrl" type="text" class="form-control" placeholder="URL da página " required value="Página inicial">
    </div>
  </div>
  <!-- Editor de Texto -->
  <div class="form-group">
    <input id="pagesBody" type="hidden" name="body" value="<h3>Página inicial</h3>">
    <trix-editor input="pagesBody"></trix-editor>
  </div>
  <!-- Editor de Texto -->
  <button class="btn btn-success btn-sm" type="submit">Salvar</button>
</form>
<hr>
<a class="btn btn-primary btn-sm" href="/admin/pages/1">Voltar </a>