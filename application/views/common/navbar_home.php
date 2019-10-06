
  <!-- Navbar -->
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark scrolling-navbar">
    <div class="container">

      <!-- Brand -->
      <a class="navbar-brand" href="https://mdbootstrap.com/docs/jquery/" target="_blank">
        <strong>Eliane Nery Cabeleireiros</strong>
      </a>

      <!-- Collapse -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Links -->
      <div class="collapse navbar-collapse" id="navbarSupportedContent">

        <!-- Left -->
        <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
                <a class="nav-link" href="<?= site_url('welcome/')?>">Home
                <span class="sr-only">(current)</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= site_url('welcome/servicos')?>">Serviços</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo site_url('welcome/contato')?>">Contato</a>
            </li>
        </ul>

        <!-- Right -->
        <ul class="navbar-nav nav-flex-icons">
            <li class="nav-item">
                <a href="https://www.facebook.com/rayeeliane" class="nav-link" target="_blank">
                <i class="fab fa-facebook-f"></i>
                </a>
            </li>
            <li class="nav-item">
                <a href="https://www.instagram.com/rayeeliane" class="nav-link" target="_blank">
                <i class="fab fa-instagram"></i>
                </a>
            </li>
            <li class="nav-item">
                <a href="<?= base_url('admin')?>" class="nav-link" target="_blank">
                <i class="fas fa-cog"></i>
                </a>
            </li>
        </ul>
      </div>

    </div>
  </nav>
  <!-- Navbar -->