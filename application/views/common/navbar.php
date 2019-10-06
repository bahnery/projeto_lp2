<!--Navbar-->
<nav class="navbar navbar-expand-lg navbar-dark black">
<div class="container">
  <!-- Navbar brand -->
  <a class="navbar-brand ml-0" href="#">Eliane Nery Cabeleireiros</a>

  <!-- Collapse button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
    aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <!-- Collapsible content -->
  <div class="collapse navbar-collapse" id="basicExampleNav">

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
                <a href="https://www.instagram.com/elianerycab" class="nav-link" target="_blank">
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
<!--/.Navbar-->