<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
    </ul>
    <ul class="navbar-nav ml-auto">
        <div class="dropdown">
            <a class="" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                <i class="fa fa-user-circle text-secondary" style="font-size:25px; padding:8px;" aria-hidden="true"></i>
            </a>
            <div class="dropdown-menu text-center">
                <a class="dropdown-item text-secondary" href="<?= BASE_URL; ?>/petugas/profile/<?= $_SESSION['petugas']['id_petugas']; ?>">Profile <i class="fas fa-user-cog mx-2"></i></a>
                <a class="dropdown-item text-secondary" href="<?= BASE_URL; ?>/logout">Logout <i class="fas fa-sign-out-alt mx-2"></i></a>
            </div>
        </div>
    </ul>
</nav>