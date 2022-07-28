<!DOCTYPE html>
<html lang="en">
<head>
  <title>Itinéraire &mdash; EasyNav</title>
  <?php include 'header.php' ?>

<body>
<div id="app">
  <div class="main-wrapper main-wrapper-1">
    <?php include 'navbar.php' ?>

      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Traçage d'itinéraire</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="#">Accueil</a></div>
              <div class="breadcrumb-item"><a href="#">Itinéraire</a></div>
              <div class="breadcrumb-item">Traçage d'itinéraire</div>
            </div>
          </div>

          <div class="section-body">
            <h2 class="section-title">Traçage d'itinéraire</h2>
            <p class="section-lead">
              Cliquez sur le bouton 'Lancer itinéraire' pour afficher votre itinéraire
            </p>

            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Traçage d'itinéraire</h4>
                  </div>
                  <div class="card-body">
                      <div class="row mb-4">
                          <div class="col-4 col-12 col-md-6 col-lg-4">
                              <form id="search-form">
                                  <div class="input-group">
                                      <input type="text" id="address" class="form-control" placeholder="Enter your address">
                                      <div class="input-group-append">
                                          <button class="btn btn-primary">Afficher</button>
                                      </div>
                                  </div>
                              </form>
                          </div>
                      </div>
                      <div class="alert alert-info">
                          Entrez votre adresse de destination et lancer la recherche pour vérifier si c'est votre l'emplacement recherché.
                          Cliquez ensuite sur 'Lancer itinéraire' pour avoir l'itinéraire depuis votre position à l'adresse recherché
                      </div>
                    <div id="map" data-height="300"></div>
                    <div class="text-center mt-4">
                      <a href="javascript:;" class="btn btn-primary btn-icon icon-left" id="start-travel">
                        <i class="fas fa-play"></i>  Lancer itinéraire
                      </a>
                    </div>
                    <div class="mt-4">
                      <ul id="instructions" class="list-unstyled list-unstyled-border"></ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
      <?php include 'footer.php' ?>
    </div>
  </div>

<?php include 'footer-script.php' ?>
<script src="assets/js/page/gmaps-advanced-route.js"></script>
</body>
</html>