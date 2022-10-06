<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="index.php">Noticias T.I</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="index.php">Inicio<a>
      </li>
      <?php if('logado'==='logado'):?>
      <li class="nav-item">
        <a class="nav-link" href="#">Acessar Painel</a>
        <?php else: ?>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Noticias</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Categorias</a>
      </li>
      <?php endif;?>
    </ul>
  </div>
</nav>
    </header>