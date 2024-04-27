<?php 
include ("./components/header.php")
?>


<style>
@media (min-width: 992px) {

    .navbar-light .navbar-nav .nav-link:hover::before,
    .navbar-light .navbar-nav .nav-link.active_home::before {
        width: 100%;
        left: 0;
    }
}

.nav-link.active_home {
    color: #339989 !important;

}
</style>

<!-- Hero DEBUT -->
<div class="container-fluid bg-primary py-5 mb-5 hero-header">
    <div class="container py-5">
        <div class="row justify-content-start">
            <div class="col-lg-8 text-center text-lg-start">
                <h5 class="d-inline-block text-primary text-uppercase border-bottom border-5"
                    style="border-color: rgba(256, 256, 256, .3) !important;">BIenvenue chez Biosadec</h5>
                <h1 class="display-1 text-white mb-md-4">Un des meilleurs centres médicaux à Bukavu</h1>
                <div class="pt-2">
                    <a href="#_" class="btn btn-light rounded-pill py-md-3 px-md-5 mx-2">Nous contacter</a>
                    <a href="#_" class="btn btn-outline-light rounded-pill py-md-3 px-md-5 mx-2">En savoir plus</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Hero FIN -->


<!-- A PROPO DEBU -->
<div class="container-fluid py-5">
    <div class="container">
        <div class="row gx-5">
            <div class="col-lg-5 mb-5 mb-lg-0" style="min-height: 500px;">
                <div class="position-relative h-100">
                    <img class="position-absolute w-100 h-100 rounded" src="img/about.jpg" style="object-fit: cover;">
                </div>
            </div>
            <div class="col-lg-7">
                <div class="mb-4">
                    <h5 class="d-inline-block text-primary text-uppercase border-bottom border-5">À propos de nous</h5>
                    <h1 class="display-4">Nous offrons des soins de santé efficaces et sans risque</h1>
                </div>
                <p>Le centre médical Biosadec est basé à Bukavu, où nous proposons des services médicaux de divers
                    genres. Tous les patients qui sont passé par nous se sont senti en très bonne santé.</p>
                <p>Grace à nos valeurs et nos premières priorités qui sont :</p>
                <div class="row g-3 pt-3">
                    <div class="col-sm-3 col-6">
                        <div class="bg-light text-center rounded-circle py-4">
                            <i class="fa fa-3x fa-user-md text-primary mb-3"></i>
                            <h6 class="mb-0"><small class="d-block text-primary">Docteurs</small>qualifiés</h6>
                        </div>
                    </div>
                    <div class="col-sm-3 col-6">
                        <div class="bg-light text-center rounded-circle py-4">
                            <i class="fa fa-3x fa-procedures text-primary mb-3"></i>
                            <h6 class="mb-0"><small class="d-block text-primary">Services</small>d'urgence</h6>
                        </div>
                    </div>
                    <div class="col-sm-3 col-6">
                        <div class="bg-light text-center rounded-circle py-4">
                            <i class="fa fa-3x fa-microscope text-primary mb-3"></i>
                            <h6 class="mb-0"><small class="d-block text-primary">Consultation</small>gratuite</h6>
                        </div>
                    </div>
                    <div class="col-sm-3 col-6">
                        <div class="bg-light text-center rounded-circle py-4">
                            <i class="fa fa-3x fa-ambulance text-primary mb-3"></i>
                            <h6 class="mb-0"><small class="d-block text-primary">Ambulance</small> gratuite</h6>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- A PROPOS FIN -->


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



<!-- TARIFS DEBUT -->
<div class="container-fluid py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5" style="max-width: 500px;">
            <h5 class="d-inline-block text-primary text-uppercase border-bottom border-5">Tarifs</h5>
            <h1 class="display-6">Tarifs de nos programmes médicaux</h1>
        </div>
        <div class="owl-carousel price-carousel position-relative" style="padding: 0 45px 45px 45px;">
            <div class="bg-light rounded text-center">
                <div class="position-relative">
                    <img class="img-fluid rounded-top" src="img/price-1.jpg" alt="">
                    <div class="position-absolute w-100 h-100 top-50 start-50 translate-middle rounded-top d-flex flex-column align-items-center justify-content-center"
                        style="background: rgba(29, 42, 77, .8);">
                        <h3 class="text-white">Service 1</h3>
                        <h1 class="display-4 text-white mb-0">
                            <small class="align-top fw-normal" style="font-size: 22px; line-height: 45px;">$</small>49
                        </h1>
                    </div>
                </div>
                <div class="text-center py-5">
                    <p>Détails 1</p>
                    <p>Détails 2</p>
                    <p>Détails 3</p>
                    <p>Détails 4</p>
                    <p>Détails 5</p>
                    <p>Détails 6</p>
                </div>
            </div>
            <div class="bg-light rounded text-center">
                <div class="position-relative">
                    <img class="img-fluid rounded-top" src="img/price-2.jpg" alt="">
                    <div class="position-absolute w-100 h-100 top-50 start-50 translate-middle rounded-top d-flex flex-column align-items-center justify-content-center"
                        style="background: rgba(29, 42, 77, .8);">
                        <h3 class="text-white">Service 2</h3>
                        <h1 class="display-4 text-white mb-0">
                            <small class="align-top fw-normal" style="font-size: 22px; line-height: 45px;">$</small>99
                        </h1>
                    </div>
                </div>
                <div class="text-center py-5">
                    <p>Détails 1</p>
                    <p>Détails 2</p>
                    <p>Détails 3</p>
                    <p>Détails 4</p>
                    <p>Détails 5</p>
                    <p>Détails 6</p>
                </div>
            </div>
            <div class="bg-light rounded text-center">
                <div class="position-relative">
                    <img class="img-fluid rounded-top" src="img/price-3.jpg" alt="">
                    <div class="position-absolute w-100 h-100 top-50 start-50 translate-middle rounded-top d-flex flex-column align-items-center justify-content-center"
                        style="background: rgba(29, 42, 77, .8);">
                        <h3 class="text-white">Service 3</h3>
                        <h1 class="display-4 text-white mb-0">
                            <small class="align-top fw-normal" style="font-size: 22px; line-height: 45px;">$</small>149
                        </h1>
                    </div>
                </div>

                <div class="text-center py-5">
                    <p>Détails 1</p>
                    <p>Détails 2</p>
                    <p>Détails 3</p>
                    <p>Détails 4</p>
                    <p>Détails 5</p>
                    <p>Détails 6</p>
                </div>
            </div>
            <div class="bg-light rounded text-center">
                <div class="position-relative">
                    <img class="img-fluid rounded-top" src="img/price-4.jpg" alt="">
                    <div class="position-absolute w-100 h-100 top-50 start-50 translate-middle rounded-top d-flex flex-column align-items-center justify-content-center"
                        style="background: rgba(29, 42, 77, .8);">
                        <h3 class="text-white">Service 4</h3>
                        <h1 class="display-4 text-white mb-0">
                            <small class="align-top fw-normal" style="font-size: 22px; line-height: 45px;">$</small>199
                        </h1>
                    </div>
                </div>
                <div class="text-center py-5">
                    <p>Détails 1</p>
                    <p>Détails 2</p>
                    <p>Détails 3</p>
                    <p>Détails 4</p>
                    <p>Détails 5</p>
                    <p>Détails 6</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- TARIFS FIN -->

<!-- Equipe DEBUT -->
<div class="container-fluid py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5" style="max-width: 500px;">
            <h5 class="d-inline-block text-primary text-uppercase border-bottom border-5">Nos Médecins</h5>
            <h1 class="display-4">Des profetionnels de la santé qualifiés</h1>
        </div>
        <div class="owl-carousel team-carousel position-relative">
            <div class="team-item">
                <div class="row g-0 bg-light rounded overflow-hidden">
                    <div class="col-12 col-sm-5 h-100">
                        <img class="img-fluid h-100" src="img/team-1.jpeg" style="object-fit: cover;">
                    </div>
                    <div class="col-12 col-sm-7 h-100 d-flex flex-column">
                        <div class="mt-auto p-4">
                            <h3>Nom du Docteur</h3>
                            <h6 class="fw-normal fst-italic text-primary mb-4">Titre du Docteur</h6>

                        </div>
                        <div class="d-flex mt-auto border-top p-4">
                            <a class="btn btn-lg btn-primary btn-lg-square rounded-circle me-3" href="#"><i
                                    class="fab fa-twitter"></i></a>
                            <a class="btn btn-lg btn-primary btn-lg-square rounded-circle me-3" href="#"><i
                                    class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-lg btn-primary btn-lg-square rounded-circle" href="#"><i
                                    class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="team-item">
                <div class="row g-0 bg-light rounded overflow-hidden">
                    <div class="col-12 col-sm-5 h-100">
                        <img class="img-fluid h-100" src="img/team-2.jpg" style="object-fit: cover;">
                    </div>
                    <div class="col-12 col-sm-7 h-100 d-flex flex-column">
                        <div class="mt-auto p-4">
                            <h3>Nom du Docteur</h3>
                            <h6 class="fw-normal fst-italic text-primary mb-4">Titre ou Poste du Docteur</h6>

                        </div>
                        <div class="d-flex mt-auto border-top p-4">
                            <a class="btn btn-lg btn-primary btn-lg-square rounded-circle me-3" href="#"><i
                                    class="fab fa-twitter"></i></a>
                            <a class="btn btn-lg btn-primary btn-lg-square rounded-circle me-3" href="#"><i
                                    class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-lg btn-primary btn-lg-square rounded-circle" href="#"><i
                                    class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="team-item">
                <div class="row g-0 bg-light rounded overflow-hidden">
                    <div class="col-12 col-sm-5 h-100">
                        <img class="img-fluid h-100" src="img/team-3.jpeg" style="object-fit: cover;">
                    </div>
                    <div class="col-12 col-sm-7 h-100 d-flex flex-column">
                        <div class="mt-auto p-4">
                            <h3>Nom du Docteur</h3>
                            <h6 class="fw-normal fst-italic text-primary mb-4">Titre ou Poste du Docteur</h6>

                        </div>
                        <div class="d-flex mt-auto border-top p-4">
                            <a class="btn btn-lg btn-primary btn-lg-square rounded-circle me-3" href="#"><i
                                    class="fab fa-twitter"></i></a>
                            <a class="btn btn-lg btn-primary btn-lg-square rounded-circle me-3" href="#"><i
                                    class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-lg btn-primary btn-lg-square rounded-circle" href="#"><i
                                    class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- EQUIPE FIN -->




<!-- TÉMOIGNAGES DEBUT -->
<div class="container-fluid py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5" style="max-width: 500px;">
            <h5 class="d-inline-block text-primary text-uppercase border-bottom border-5">Témoignages</h5>
            <h1 class="display-4">Ce que disent nos Patients</h1>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="owl-carousel testimonial-carousel">
                    <div class="testimonial-item text-center">
                        <div class="position-relative mb-5">
                            <img class="img-fluid rounded-circle mx-auto" src="img/testimonial-1.jpeg" alt="">
                            <div class="position-absolute top-100 start-50 translate-middle d-flex align-items-center justify-content-center bg-white rounded-circle"
                                style="width: 60px; height: 60px;">
                                <i class="fa fa-quote-left fa-2x text-primary"></i>
                            </div>
                        </div>
                        <p class="fs-4 fw-normal">J'ai eu des services médicaux de qualité au sein du Centre médical
                            Biosadec. Je remercie leurs admirable hospitalité vis à vis de ma santé qui ne cessait de se
                            déstabiliser</p>
                        <hr class="w-25 mx-auto">
                        <h3>Nom du Patient</h3>
                        <h6 class="fw-normal text-primary mb-3">Profession</h6>
                    </div>
                    <div class="testimonial-item text-center">
                        <div class="position-relative mb-5">
                            <img class="img-fluid rounded-circle mx-auto" src="img/testimonial-2.jpeg" alt="">
                            <div class="position-absolute top-100 start-50 translate-middle d-flex align-items-center justify-content-center bg-white rounded-circle"
                                style="width: 60px; height: 60px;">
                                <i class="fa fa-quote-left fa-2x text-primary"></i>
                            </div>
                        </div>
                        <p class="fs-4 fw-normal">J'ai eu des services médicaux de qualité au sein du Centre médical
                            Biosadec. Je remercie leurs admirable hospitalité vis à vis de ma santé qui ne cessait de se
                            déstabiliser</p>
                        <hr class="w-25 mx-auto">
                        <h3>Nom du patient</h3>
                        <h6 class="fw-normal text-primary mb-3">Profession</h6>
                    </div>
                    <div class="testimonial-item text-center">
                        <div class="position-relative mb-5">
                            <img class="img-fluid rounded-circle mx-auto" src="img/testimonial-3.jpeg" alt="">
                            <div class="position-absolute top-100 start-50 translate-middle d-flex align-items-center justify-content-center bg-white rounded-circle"
                                style="width: 60px; height: 60px;">
                                <i class="fa fa-quote-left fa-2x text-primary"></i>
                            </div>
                        </div>
                        <p class="fs-4 fw-normal">J'ai eu des services médicaux de qualité au sein du Centre médical
                            Biosadec. Je remercie leurs admirable hospitalité vis à vis de ma santé qui ne cessait de se
                            déstabiliser</p>
                        <hr class="w-25 mx-auto">
                        <h3>Nom du Patient</h3>
                        <h6 class="fw-normal text-primary mb-3">Profession</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- TEMOIGNANGES FIN -->



<?php  include('./components/footer.php') ?>