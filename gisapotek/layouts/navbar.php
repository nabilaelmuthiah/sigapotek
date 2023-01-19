

<nav class="navbar navbar-expand-lg navbar-light navbar-collapse bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href=<?= getPage('home') ?>>Sistem Informasi Geografis</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="nav navbar-nav" id="navbarNav">
      <ul class="navbar-nav">
      <li class="nav-item ">
          <a class="nav-link active" aria-current="page" href=<?= getPage('home') ?>>Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href=<?= getPage('choropleth') ?>>Choropleth</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href=<?= getPage('data') ?>>Daftar Apotek</a>
        </li>
      </ul>
    </div>
  </div>
</nav>