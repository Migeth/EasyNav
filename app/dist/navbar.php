<?php ?>
<div class="navbar-bg"></div>
<nav class="navbar navbar-expand-lg main-navbar">
    <form class="form-inline mr-auto">
        <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a>
            </li>
            <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i
                            class="fas fa-search"></i></a></li>
        </ul>
        <div class="search-element">
            <input class="form-control" type="search" placeholder="Adresse de destination" aria-label="Search" data-width="250">
            <button class="btn" type="submit"><i class="fas fa-search"></i></button>
            <div class="search-backdrop"></div>
            <div class="search-result">
                <div class="search-header">
                    Historiques
                </div>
                <div class="search-item">
                    <a href="#"><i class="far fa-location-arrow"></i> <span> 111 rue de la croix</span></a>
                    <a href="#" class="search-close"><i class="fas fa-times"></i></a>
                </div>
                <div class="search-item">
                    <a href="#"><i class="far fa-home"></i> <span> Domicile </span></a>
                    <a href="#" class="search-close"><i class="fas fa-times"></i></a>
                </div>
                <div class="search-item">
                    <a href="#"><i class="far fa-building"></i> <span> Bureau </span></a>
                    <a href="#" class="search-close"><i class="fas fa-times"></i></a>
                </div>

            </div>
        </div>
    </form>

</nav>
<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="index.php">EasyNav</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.php">EN</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Home</li>
            <li><a class="nav-link active" href="index.php"><i class="far fa-home"></i> <span>Acceuil</span></a></li>
            <li class="menu-header">Navigation</li>
            <li><a class="nav-link" href="#"><i class="far fa-star"></i> <span>Favoris</span></a></li>
            <li class="dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-map-marker-alt"></i> <span>Itinéraire</span></a>
                <ul class="dropdown-menu">
                    <li><a href="gmaps-advanced-route.php">Traçage d'itinéraire</a></li>
                    <li><a href="gmaps-draggable-marker.php">Draggable Marker</a></li>
                    <li><a href="gmaps-geocoding.php">Geocoding</a></li>
                    <li><a href="gmaps-marker.php">Marker</a></li>
                    <li><a href="gmaps-route.php">Route</a></li>
                </ul>
            </li>
            <li><a class="nav-link" href="features-activities.php"><i class="far fa-clipboard-list"></i> <span>Historique</span></a></li>

            <li class="menu-header">Compte</li>
            <li><a class="nav-link" href="features-profile.php"><i class="far fa-user-alt"></i> <span>Profil</span></a></li>
            <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
                <a href="../../index.php" class="btn btn-danger btn-lg btn-block btn-icon-split">
                    <i class="fas fa-sign-out-alt"></i> Déconnexion
                </a>
            </div>
    </aside>
</div>
