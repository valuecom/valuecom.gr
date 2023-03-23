<?php
include_once("_header.php");
?>

<main id="content">

    <section class="page-title-section">
        <div class="container-xxl">
            <div class="page-title-wrap my-5 px-5">
                <h1 class="page-title fs-1 fw-normal text-center text-lg-start">Contact us</h1>
            </div>
        </div>
    </section>
    <section>
        <div class="container-xxl w-50 px-5 pb-5">
            <div class="contact-form-wrap py-5">
                <h3 style="font-weight: 400;">Get in touch with us</h3>
                <form action="#" method="post">
                    <input type="text" id="name" name="name" placeholder="Name">
                    <input type="email" id="email" name="email" placeholder="Email">
                    <textarea id="message" name="message" placeholder="Message" style="height:200px"></textarea>

                    <input style="background: #FDDD31; color: #1D1D1D;font-weight:600;" type="submit" value="Send">
                </form>
            </div>
            <hr>
            <div class="contact-info-wrap py-5">
                <p style="color: #757575;">6 AG. GEORGIOU KARITSI SQR. 10561<br />
                    ATHENS,GREECE<br />
                    <a href="tel:+30 210 3252103">+30 210 3252103</a><br />
                    email: <a href="mailto:admin@valuecom.gr">admin@valuecom.gr</a>
                </p>
            </div>
        </div>
    </section>
</main>

</main>

<?php
include_once("_footer.php");
