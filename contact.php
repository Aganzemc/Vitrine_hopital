<?php 
include ("./components/header.php")
?>


<style>
@media (min-width: 992px) {

    .navbar-light .navbar-nav .nav-link:hover::before,
    .navbar-light .navbar-nav .nav-lionk.active_contact::before {
        width: 100%;
        left: 0;
    }
}

.nav-link.active_contact {
    color: #339989 !important;

}
</style>

<!-- Contact DEBUT -->
<div class="container-fluid pt-5">
    <div class="container">
        <div class="text-center mx-auto mb-5" style="max-width: 500px;">
            <h5 class="d-inline-block text-primary text-uppercase border-bottom border-5">Des Questions?</h5>
            <h1 class="display-4">
                N'hésitez pas à nous contacter
            </h1>
        </div>
        <div class="row g-5 mb-5">
            <div class="col-lg-4">
                <div class="bg-light rounded d-flex flex-column align-items-center justify-content-center text-center"
                    style="height: 200px;">
                    <div class="d-flex align-items-center justify-content-center bg-primary rounded-circle mb-4"
                        style="width: 100px; height: 70px; transform: rotate(-15deg);">
                        <i class="fa fa-2x fa-location-arrow text-white" style="transform: rotate(15deg);"></i>
                    </div>
                    <h6 class="mb-0"> Ndendere / Ibanda, Bukavu - RDC</h6>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="bg-light rounded d-flex flex-column align-items-center justify-content-center text-center"
                    style="height: 200px;">
                    <div class="d-flex align-items-center justify-content-center bg-primary rounded-circle mb-4"
                        style="width: 100px; height: 70px; transform: rotate(-15deg);">
                        <i class="fa fa-2x fa-phone text-white" style="transform: rotate(15deg);"></i>
                    </div>
                    <h6 class="mb-0">+243 979 796 464</h6>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="bg-light rounded d-flex flex-column align-items-center justify-content-center text-center"
                    style="height: 200px;">
                    <div class="d-flex align-items-center justify-content-center bg-primary rounded-circle mb-4"
                        style="width: 100px; height: 70px; transform: rotate(-15deg);">
                        <i class="fa fa-2x fa-envelope-open text-white" style="transform: rotate(15deg);"></i>
                    </div>
                    <h6 class="mb-0">constact@biosadec.cd</h6>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12" style="height: 500px;">
                <div class="position-relative h-100">

                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d15944.050170410852!2d28.84959532674157!3d-2.5027490708204017!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x19c299ff8b578ebf%3A0xd5558980fc9e2240!2sAve%20President%20Mobutu%2C%20Bukavu!3m2!1d-2.5027491!2d28.8583501!5e0!3m2!1sen!2scd!4v1671112283067!5m2!1sen!2scd"
                        width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
        <div class="row justify-content-center position-relative" style="margin-top: -200px; z-index: 1;">
            <div class="col-lg-8">
                <div class="bg-white rounded p-5 m-5 mb-0">
                    <form>
                        <div class="row g-3">
                            <div class="col-12 col-sm-6">
                                <input type="text" class="form-control bg-light border-0" placeholder="Votre nom"
                                    style="height: 55px;">
                            </div>
                            <div class="col-12 col-sm-6">
                                <input type="email" class="form-control bg-light border-0" placeholder="Votre Email"
                                    style="height: 55px;">
                            </div>
                            <div class="col-12">
                                <input type="text" class="form-control bg-light border-0" placeholder="Sujet"
                                    style="height: 55px;">
                            </div>
                            <div class="col-12">
                                <textarea class="form-control bg-light border-0" rows="5"
                                    placeholder="Message"></textarea>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary w-100 py-3" type="submit">Envoyer le message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact FIN -->

<?php  include('./components/footer.php') ?>