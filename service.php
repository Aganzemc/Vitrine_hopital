<?php 
include ("./components/header.php")
?>

<style>
@media (min-width: 992px) {

    .navbar-light .navbar-nav .nav-link:hover::before,
    .navbar-light .navbar-nav .nav-link.active_services::before {
        width: 100%;
        left: 0;
    }
}

.nav-link.active_services {
    color: #339989 !important;

}
</style>


<!-- Services DEBUT -->
<div class="container-fluid py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5" style="max-width: 500px;">
            <h5 class="d-inline-block text-primary text-uppercase border-bottom border-5">Nos Services</h5>
            <h1 class="display-4">Nos services médicaux sont :</h1>
        </div>
        <div class="row g-5">
            <div class="col-lg-4 col-md-6">
                <div
                    class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                    <div class="service-icon mb-4">
                        <i class="fa fa-2x fa-user-md text-white"></i>
                    </div>
                    <h4 class="mb-3">Consultation générale</h4>
                    <p class="m-0">
                        Ceci est une très brève description qui décrit ce service
                    </p>
                    <a class="btn btn-lg btn-primary rounded-pill" href="#_">
                        <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div
                    class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                    <div class="service-icon mb-4">
                        <i class="fa fa-2x fa-procedures text-white"></i>
                    </div>
                    <h4 class="mb-3">Consultation spéciale</h4>
                    <p class="m-0">
                        Ceci est une très brève description qui décrit ce service
                    </p>
                    <a class="btn btn-lg btn-primary rounded-pill" href="#_">
                        <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div
                    class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                    <div class="service-icon mb-4">
                        <i class="fa fa-2x fa-stethoscope text-white"></i>
                    </div>
                    <h4 class="mb-3">Laboratoire moderne</h4>
                    <p class="m-0">
                        Ceci est une très brève description qui décrit ce service
                    </p>
                    <a class="btn btn-lg btn-primary rounded-pill" href="#_">
                        <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div
                    class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                    <div class="service-icon mb-4">
                        <i class="fa fa-2x fa-ambulance text-white"></i>
                    </div>
                    <h4 class="mb-3">Pharmacie interne</h4>
                    <p class="m-0">
                        Ceci est une très brève description qui décrit ce service
                    </p>
                    <a class="btn btn-lg btn-primary rounded-pill" href="#_">
                        <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div
                    class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                    <div class="service-icon mb-4">
                        <i class="fa fa-2x fa-pills text-white"></i>
                    </div>
                    <h4 class="mb-3">Maternité</h4>
                    <p class="m-0">Ceci est une très brève description qui décrit ce service</p>
                    <a class="btn btn-lg btn-primary rounded-pill" href="#_">
                        <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div
                    class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                    <div class="service-icon mb-4">
                        <i class="fa fa-2x fa-microscope text-white"></i>
                    </div>
                    <h4 class="mb-3">Dentisterie</h4>
                    <p class="m-0">Ceci est une très brève description qui décrit ce service</p>
                    <a class="btn btn-lg btn-primary rounded-pill" href="#_">
                        <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Services FIN -->

<?php  include('./components/footer.php') ?>