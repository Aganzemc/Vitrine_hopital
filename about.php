<?php 
include ("./components/header.php")
?>



<style>
@media (min-width: 992px) {

    .navbar-light .navbar-nav .nav-link:hover::before,
    .navbar-light .navbar-nav .nav-link.active_about::before {
        width: 100%;
        left: 0;
    }
}

.nav-link.active_about {
    color: #339989 !important;

}
</style>


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

<?php  include('./components/footer.php') ?>