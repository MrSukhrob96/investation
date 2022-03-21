@extends('layouts.app')

@section('content')
<section id="intro">
    <div class="container" data-aos="fade-up">
        <div class="intro-content">
            <h2>ФОНД СОЦИАЛЬНО-ИННОВАЦИОННОГО РАЗВИТИЯ ОБЩЕСТВА <br /> СОЗДАВАЙ МИР С НАМИ</h2>
            <div>
                <a href="#about" class="btn-get-started scrollto">Присоединться</a>
                <a href="#portfolio" class="btn-projects scrollto">Подробное</a>
            </div>
        </div>
    </div>
</section>

<main id="main">
    <style>
        .about .container {
            box-shadow: none !important;
        }

        .section-bg:before {
            background: #f0f4f8 !important;
        }
    </style>

    <section id="about" class="about section-bg pt-5 pb-5">
        <div class="container" data-aos="fade-up">

            <div class="row no-gutters">
                <div class="content col-xl-5 d-flex align-items-stretch">
                    <div class="content">
                        <div class="section-header">
                            <h2>О компании</h2>
                            <p>Sed tamen tempor magna labore dolore dolor sint tempor duis magna elit veniam aliqua esse amet veniam
                                enim
                                export quid quid veniam aliqua eram noster malis nulla duis fugiat culpa esse aute nulla ipsum velit
                                export
                                irure minim illum fore</p>
                        </div>
                        <a href="#" class="about-btn"><span>Подробное</span> <i class="bx bx-chevron-right"></i></a>
                    </div>
                </div>
                <div class="col-xl-7 d-flex align-items-stretch">
                    <div class="icon-boxes d-flex flex-column justify-content-center">
                        <div class="row">
                            <a href="" class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
                                <i class="bx bx-images"></i>
                                <h4>Проекты фонда</h4>
                                <p>Aut suscipit aut cum nemo deleniti aut omnis. Doloribus ut maiores omnis facere</p>
                            </a>
                            <a href="" class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="400">
                                <i class="bx bx-shield"></i>
                                <h4>Бизнес с нами</h4>
                                <p>Expedita veritatis consequuntur nihil tempore laudantium vitae denat pacta</p>
                            </a>
                            <a href="" class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
                                <i class="bx bx-images"></i>
                                <h4>Миссии</h4>
                                <p>Aut suscipit aut cum nemo deleniti aut omnis. Doloribus ut maiores omnis facere</p>
                            </a>
                            <a href="" class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="400">
                                <i class="bx bx-shield"></i>
                                <h4>Цель</h4>
                                <p>Expedita veritatis consequuntur nihil tempore laudantium vitae denat pacta</p>
                            </a>
                        </div>
                    </div><!-- End .content-->
                </div>
            </div>

        </div>
    </section>

    <section id="investision" class="pt-5 pb-5">
        <div class="container">
            <div class="section-header">
                <h2>Инвестиции</h2>
                <p>Sed tamen tempor magna labore dolore dolor sint tempor duis magna elit veniam aliqua esse amet veniam enim
                    export quid quid veniam aliqua eram noster malis nulla duis fugiat culpa esse aute nulla ipsum velit export
                    irure minim illum fore</p>
            </div>
            <div class="owl-carousel testimonials-carousel">

                <div class="testimonial-item">
                    <img src="assets/img/testimonial-5.jpg" class="testimonial-img" alt="">
                    <p>
                        инвестиция 50 000 <br />
                        <span>
                            ₽ 500000
                        </span>
                    </p>
                    <a href="#about" class="btn-get-started scrollto">Подробное</a>
                </div>

                <div class="testimonial-item">
                    <img src="assets/img/testimonial-5.jpg" class="testimonial-img" alt="">
                    <p>
                        инвестиция 50 000 <br />
                        <span>
                            ₽ 500000
                        </span>
                    </p>
                    <a href="#about" class="btn-get-started scrollto">Подробное</a>
                </div>

                <div class="testimonial-item">
                    <img src="assets/img/testimonial-5.jpg" class="testimonial-img" alt="">
                    <p>
                        инвестиция 50 000 <br />
                        <span>
                            ₽ 500000
                        </span>
                    </p>
                    <a href="#about" class="btn-get-started scrollto">Подробное</a>
                </div>


                <div class="testimonial-item">
                    <img src="assets/img/testimonial-5.jpg" class="testimonial-img" alt="">
                    <p>
                        инвестиция 50 000 <br />
                        <span>
                            ₽ 500000
                        </span>
                    </p>
                    <a href="#about" class="btn-get-started scrollto">Подробное</a>
                </div>

            </div>

        </div>
    </section>


    <section id="contact" class="contact mt-5">
        <div class="container" data-aos="fade-up">
            <div class=" section-header">
                <h2>Контакты</h2>
            </div>
            <div class="row">

                <div class="col-lg-6">

                    <div class="row">
                        <div class="col-md-12">
                            <div class="info-box">
                                <i class="bx bx-map"></i>
                                <h3>Our Address</h3>
                                <p>Republic of Tajikistan, Khujand, Sharq 84</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="info-box mt-4">
                                <i class="bx bx-envelope"></i>
                                <h3>Email Us</h3>
                                <p>info@gmail.com <br />&nbsp;</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="info-box mt-4">
                                <i class="bx bx-phone-call"></i>
                                <h3>Call Us</h3>
                                <p>+992926352444 <br /> +992927005170</p>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-lg-6 mt-4 mt-lg-0">
                    <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                        <div class="form-row">
                            <div class="col-md-6 form-group">
                                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                                <div class="validate"></div>
                            </div>
                            <div class="col-md-6 form-group">
                                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                                <div class="validate"></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                            <div class="validate"></div>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                            <div class="validate"></div>
                        </div>
                        <div class="mb-3">
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Your message has been sent. Thank you!</div>
                        </div>
                        <div class="text-center mt-4"><button type="submit">Send Message</button></div>
                    </form>
                </div>

            </div>

        </div>
    </section>

</main>

<footer id="footer" class="mt-5">
    <div class="container">
        <div class="copyright">
            &copy; <strong>Company name</strong> 2021
        </div>
    </div>
</footer>
@endsection