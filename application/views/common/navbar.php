<!--Navbar-->
<nav class="navbar navbar-expand-lg navbar-dark primary-color">

  <!-- Navbar brand -->
  <a class="navbar-brand" href="#">Eliane Nery Cabeleireiros</a>

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
                <a class="nav-link" href="<?php echo site_url('contato')?>">Contato</a>
            </li>
        </ul>

        <!-- Right -->
        <ul class="navbar-nav nav-flex-icons">
            <li class="nav-item">
                <a href="https://www.facebook.com/rayeeliane" class="nav-link" target="_blank">
                <i class="fab fa-facebook-f"></i>
                </a>
            </li>
            <li>
                <div class="btn-group ml-3 mt-1 mr-0" role="group" aria-label="First group">
                    <a type="button" style="text-decoration:none;" class="btn-floating btn-sm white" href="<?= site_url('admin')?>"><i class="fas fa-user" aria-hidden="true"></i></a>
                </div>
            </li>
        </ul>
</div>

</nav>
<!--/.Navbar-->