<?php
    require_once("../resources/config.php");
?>

<?php
    include(Front_End . DS . "header.php");
?>

<div class="container">
    <section class="mb-4">

        <h2 class="h1-responsive font-weight-bold my-4">Contact us</h2>
        <p class="w-responsive mx-auto mb-5">
            Do you have any questions? <br> Please do not hesitate to contact us directly. <b> Our team will come back to you within
            a matter of hours to help you.
        </p>

        <div class="row">
            <div class="col-lg-12 text-center">
                <h3 class="section-subheading text-muted">
                    <?php
                        displayMessage();
                    ?>
                </h3>
            </div>
        </div>

        <div class="row">

            <div class="col-md-9 mb-md-0 mb-5">
                <form id="contact-form" name="contact-form" method="POST">
                    <?php
                        sendMessage();
                    ?>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="md-form mb-0">
                                <input type="text" id="name" name="name" class="form-control" required data-validation-required-message="Please enter your name.">
                                <label for="name" class="">Your name</label>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="md-form mb-0">
                                <input type="text" id="email" name="email" class="form-control" required data-validation-required-message="Please enter your email.">
                                <label for="email" class="">Your email</label>
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-md-12">
                            <div class="md-form mb-0">
                                <input type="text" id="subject" name="subject" class="form-control" required data-validation-required-message="Please enter the subject.">
                                <label for="subject" class="">Subject</label>
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-md-12">
                            <div class="md-form">
                                <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea" required data-validation-required-message="Please enter the message."></textarea>
                                <label for="message">Your message</label>
                            </div>
                        </div>
                    </div>


                    <div class="row"> 
                        <div class="col-lg-12 text-center">
                            <div id="success"></div>
                            <button name="submit" type="submit" class="btn btn-primary" onclick="validateForm();">Send Message</button>
                        </div>
                    </div>

                </form>
            </div>


            <div class="col-md-3 text-center">
                <ul class="list-unstyled mb-0">
                    <li><i class="fa fa-map-marker-alt fa-2x"></i>
                        <p>University of Engineering & Management, Kolkata</p>
                    </li>

                    <li><i class="fa fa-phone mt-4 fa-2x"></i>
                        <p>+27 (61) 324-7541</p>
                    </li>

                    <li><i class="fa fa-envelope mt-4 fa-2x"></i>
                        <p>karigoreradda@gmail.com</p>
                    </li>
                </ul>
            </div>

        </div>

    </section>
</div>
