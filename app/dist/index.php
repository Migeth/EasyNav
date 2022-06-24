<!DOCTYPE html>
<html lang="en">
<head>
    <title>Ecommerce Dashboard &mdash; Stisla</title>
    <?php include 'header.php' ?>

<body>
<div id="app">
    <div class="main-wrapper main-wrapper-1">
        <?php include 'navbar.php' ?>

        <!-- Main Content -->
        <div class="main-content">
            <section class="section">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <div class="card card-statistic-2">
                            <div class="card-stats">
                                <div class="card-stats-title">Information sur le traffic - Domicile -
                                    <div class="dropdown d-inline">
                                        <a class="font-weight-600 dropdown-toggle" data-toggle="dropdown" href="#"
                                           id="orders-month">14h - 16h</a>
                                        <ul class="dropdown-menu dropdown-menu-sm">
                                            <li class="dropdown-title">Choisissez la période</li>
                                            <li><a href="#" class="dropdown-item">00h - 02h</a></li>
                                            <li><a href="#" class="dropdown-item">02h - 04h</a></li>
                                            <li><a href="#" class="dropdown-item">04h - 06h</a></li>
                                            <li><a href="#" class="dropdown-item">06h - 08h</a></li>
                                            <li><a href="#" class="dropdown-item">08h - 10h</a></li>
                                            <li><a href="#" class="dropdown-item">10h - 12h</a></li>
                                            <li><a href="#" class="dropdown-item">12h - 14h</a></li>
                                            <li><a href="#" class="dropdown-item active">14h - 16h</a></li>
                                            <li><a href="#" class="dropdown-item">16h - 18h</a></li>
                                            <li><a href="#" class="dropdown-item">18h - 20h</a></li>
                                            <li><a href="#" class="dropdown-item">20h - 22h</a></li>
                                            <li><a href="#" class="dropdown-item">22h - 00h</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-stats-items">
                                    <div class="card-stats-item">
                                        <div class="card-stats-item-count">25 %</div>
                                        <div class="card-stats-item-label">Fluide</div>
                                    </div>
                                    <div class="card-stats-item">
                                        <div class="card-stats-item-count">25%</div>
                                        <div class="card-stats-item-label">Risque d'embouteillage</div>
                                    </div>
                                    <div class="card-stats-item">
                                        <div class="card-stats-item-count">50 %</div>
                                        <div class="card-stats-item-label">Embouteillage</div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-icon shadow-primary bg-primary">
                                <i class="fas fa-road"></i>
                            </div>
                            <div class="card-wrap">
                                <div class="card-header">
                                    <h4>Temps de trajet</h4>
                                </div>
                                <div class="card-body">
                                    50 min
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <div class="card card-statistic-2">
                            <div class="card-chart">
                                <canvas id="balance-chart" height="80"></canvas>
                            </div>
                            <div class="card-icon shadow-primary bg-primary">
                                <i class="fas fa-traffic-light"></i>
                            </div>
                            <div class="card-wrap">
                                <div class="card-header">
                                    <h4>Temps de trajet</h4>
                                </div>
                                <div class="card-body">
                                    50 min
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <div class="card card-statistic-2">
                            <div class="card-chart">
                                <canvas id="sales-chart" height="80"></canvas>
                            </div>
                            <div class="card-icon shadow-primary bg-primary">
                                <i class="fas fa-exclamation-triangle"></i>
                            </div>
                            <div class="card-wrap">
                                <div class="card-header">
                                    <h4>Risque d'embouteillage</h4>
                                </div>
                                <div class="card-body">
                                    50%
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Temps de trajet VS Densité de traffic </h4>
                            </div>
                            <div class="card-body">
                                <canvas id="myChart" height="158"></canvas>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Historique</h4>
                                <div class="card-header-action">
                                    <a href="#" class="btn btn-danger">Voir plus <i
                                                class="fas fa-chevron-right"></i></a>
                                </div>
                            </div>
                            <div class="card-body p-0">
                                <div class="table-responsive table-invoice">
                                    <table class="table table-striped">
                                        <tr>
                                            <th>Départ</th>
                                            <th>Destination</th>
                                            <th>Traffic</th>
                                            <th>Date</th>
                                            <th>Durée</th>
                                            <th>Action</th>
                                        </tr>
                                        <tr>
                                            <td class="font-weight-600">Domicile</td>
                                            <td class="font-weight-600">Bureau</td>
                                            <td>
                                                <div class="badge badge-warning">+/- Dense</div>
                                            </td>
                                            <td>20 Janvier 2020</td>
                                            <td>45 min</td>
                                            <td>
                                                <a href="#" class="btn btn-primary">Relancer</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="font-weight-600">Domicile</td>
                                            <td class="font-weight-600">Bureau</td>
                                            <td>
                                                <div class="badge badge-success">Normal</div>
                                            </td>
                                            <td>21 Janvier 2020 7:30</td>
                                            <td>30 min</td>
                                            <td>
                                                <a href="#" class="btn btn-primary">Relancer</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="font-weight-600">Bureau</td>
                                            <td class="font-weight-600">Domicile</td>
                                            <td>
                                                <div class="badge badge-danger">Dense</div>
                                            </td>
                                            <td>21 Janvier 2020 18:30</td>
                                            <td>1h10</td>
                                            <td>
                                                <a href="#" class="btn btn-primary">Relancer</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="font-weight-600">Domicile</td>
                                            <td class="font-weight-600">Bureau</td>
                                            <td>
                                                <div class="badge badge-success">Normal</div>
                                            </td>
                                            <td>22 Janvier 2020 7:30</td>
                                            <td>28 min</td>
                                            <td>
                                                <a href="#" class="btn btn-primary">Relancer</a>
                                            </td>
                                        </tr>
                                    </table>
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
<!-- Page Specific JS File -->
<script src="assets/js/page/index.js"></script>
</body>
</html>