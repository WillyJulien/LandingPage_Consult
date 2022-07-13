<?php $title = 'Landing Page - Accueil';?>

<?php ob_start();?>
    <section class="container-fluid home">
        <div class="container mb-5 h-100 home_text">
            <div class="row h-100 align-items-center">
                <div class="col-md-12 col-lg-7 home_text">
                    <h1 class="title_home">We create an amazing<br>
                        digital products</h1>
                    <p>We have the knowledge and expertise in<br> design and modern programming languages<br> and platforms to help startups and
                        growing<br> companies build successful products.</p>
                    <button class="btn btn-dark home_btn">Get started</button>
                </div>
            </div>
        </div>
    </section>

    <section class="service">
        <div class="container mb-5">
            <div class="row">
                <div class="col-12 my-5">
                    <h2 class="service_title">Services</h2>
                    <p>Consulto is a consulting boutique working in<br> the
                        finance sector in New York and Europe
                    </p>
                </div>
                <div class="col-md-12 col-lg-4">
                <a href="">
                    <div class="p-5 m-2 card">
                        <div>
                            <i class="bi bi-chat-dots"></i>
                        </div>
                        <h3>
                            Consulting
                        </h3>
                        <p>
                            We stay with our clients all the way until a solution is implemented and works.
                        </p>
                    </div>
                </a>
                </div>
                <div class="col-md-12 col-lg-4">
                    <a href="">
                    <div class="p-5  m-2 card">
                        <div>
                            <i class="bi bi-graph-up-arrow"></i>
                        </div>
                        <h3>
                            Consulting
                        </h3>
                        <p>
                            We stay with our clients all the way until a solution is implemented and works.
                        </p>
                    </div>
                    </a>
                </div>
                <div class="col-md-12 col-lg-4">
                <a href="">
                    <div class="p-5  m-2 card">
                        <div>
                            <i class="bi bi-briefcase"></i>
                        </div>
                        <h3>
                            Consulting
                        </h3>
                        <p>
                            We stay with our clients all the way until a solution is implemented and works.
                        </p>
                    </div>
                </a>
                </div>
                <div class="col-12 mt-5 text-center">
                    <button class="btn btn-btn btn-dark">See more</button>
                </div>
            </div>
        </div>
        </div>
    </section>
    <section class="about">
        <div class="container mb-5">
            <div class="row align-items-center">
                <div class="col-md-6 mt-5">
                    <h2 class="about_title">About us</h2>
                    <p>We provide customers with tailored and unique solutions
                    </p>
                    <p>Every day our consultants are proud to help shape the way the world’s leading companies structure and manage their business.
                        Only highly-skilled professionals who become agile members of their organization to help them get the job done and beyond.
                    </p>
                </div>
                <div class="col-md-6">
                    <img src="/public/images/Group 1202.png" class="w-100">
                </div>
            </div>
        </div>
    </section>
    <section class="compagnies">
        <div class="container mb-5 ">
            <div class="row">
                <div class="col-12 my-5 text-center">
                    <h3>Trusted by forward-thinking sompanies of all shapes and sizes</h3>
                </div>
                <div class="col-12 mb-5 d-flex justify-content-around">
                    <img class="compagnies_img" src="/public/images/nike.png" alt="">
                    <img class="compagnies_img" src="/public/images/microsoft.png" alt="">
                    <img class="compagnies_img" src="/public/images/google.png" alt="">
                    <img class="compagnies_img" src="/public/images/rakuten.png" alt="">
                    <img class="compagnies_img" src="/public/images/new_holland.png" alt="">
                </div>
            </div>
        </div>
    </section>
    <section class="news">
        <div class="container mb-5">
            <div class="row">
                <div class="col-12 mt-5">
                    <h2>Fresh news</h2>
                    <p>Sed ut perspiciatis unde omnis iste natus error sit<br> voluptatem accusantium doloremque laudantium
                </div>
<?php
foreach ($news as $new) {
    echo '
    <div class="col-md-12 col-lg-4 article">
    <a href="./?action=Article&&ArticleID=' . $new['id_news'] . '">
                        <div class="pb-4 p-md-5 news">
                            <img src="' . $new['photo_news'] . '" alt="" class="w-100 mb-2">
                            <span class="' . $new['genre_news'] . '">
                            ' . $new['genre_news'] . '
                            </span>
                            <h3>
                            ' . $new['title_news'] . '
                            </h3>
                            <p>
                            ' . $new['description_news'] . '
                            </p>
                            <span class="fw-bolder">' . $new['author_news'] . '<br></span>
                            <span class="fw-lighter"' . $new['date_news'] . '</span>
                        </div>
                        </a>
                    </div>
                    ';
}
?>
                <div class="col-12 mt-5 text-center">
                <a href="./?action=News"> <button class="btn btn-primary">See more</button></a>
                </div>
            </div>
        </div>
    </section>
    <section class="others">
        <div class="container mb-5">
            <div class="row">
                <div class="col-12 mt-5">
                    <h2>What did others say?</h2>
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium</p>
                </div>
                <div class="col-md-12 ">
                    <div class="swiper mySwiper">
                        <div class="swiper-wrapper mb-5">
                            <div class="swiper-slide">
                                <div class="p-5 m-2 others_cards">
                                    <p>
                                        <img src="/public/images/other1.png" alt="" class="w-25 m-2 float-left"><strong>Guy Hawkins</strong> Austin, USA<br> “But I must
                                        explain to you how all this mistaken idea of denouncing pleasure and
                                        praising pain was born and I will
                                        give
                                        you a complete account of the system, and expound the actual teachings of the great”
                                    </p>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="p-5 m-2 others_cards">
                                    <p>
                                        <img src="/public/images/other1.png" alt="" class="w-25 m-2 float-left"><strong>Guy Hawkins</strong> Austin, USA<br> “But I must
                                        explain to you how all this mistaken idea of denouncing pleasure and
                                        praising pain was born and I will
                                        give
                                        you a complete account of the system, and expound the actual teachings of the great”
                                    </p>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="p-5 m-2 others_cards">
                                    <p>
                                        <img src="/public/images/other1.png" alt="" class="w-25 m-2 float-left"><strong>Guy Hawkins</strong> Austin, USA<br> “But I must
                                        explain to you how all this mistaken idea of denouncing pleasure and
                                        praising pain was born and I will
                                        give
                                        you a complete account of the system, and expound the actual teachings of the great”
                                    </p>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="p-5 m-2 others_cards">
                                    <p>
                                        <img src="/public/images/other1.png" alt="" class="w-25 m-2 float-left"><strong>Guy Hawkins</strong> Austin, USA<br> “But I must
                                        explain to you how all this mistaken idea of denouncing pleasure and
                                        praising pain was born and I will
                                        give
                                        you a complete account of the system, and expound the actual teachings of the great”
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </section>
    <section class="sign_up">
        <div class="container py-5">
            <div class="row">
                <div class="col-12 my-5 text-center">
                    <h3>Sign up now, upgrade anytime. New accounts get a<br>
                        14-day trial of our paid plans</h3>
                    <button class="btn btn btn-dark">Monthly</button>
                    <button class="btn btn btn-dark">Monthly</button>
                </div>
                <img class="zindex1" src="/public/images/zindex.png" alt="">
                <img class="zindex2" src="/public/images/zindex.png" alt="">
                <div class="col-md-12 col-lg-4 ">
                    <div class="p-5 m-2 sign_up_cards text-center">
                        <h3 class="text-center">
                            Personal
                        </h3>
                        <p class="text-center">$39/mo</p>
                        <p class="text-center">Born and I will give you a complete account of the system</p>
                        <div class="text-start ps-3">
                            <p><img src="/public/images/ok.png" alt=""></i> Unlimited file recovery</p>
                            <p><img src="/public/images/no.png" alt=""> Professional reports</p>
                            <p><img src="/public/images/no.png" alt=""> Sell on marketplaces</p>
                            <p><img src="/public/images/no.png" alt=""> Dolor sit amet</p>
                            <p><img src="/public/images/no.png" alt=""> 24/7 free support</p>
                        </div>
                        <button class="btn btn-dark ps-5 pe-5">Purchase now</button>
                    </div>
                </div>
                <div class="col-md-12 col-lg-4 ">
                    <div class="p-5 m-2 sign_up_cards_blue text-center">
                        <h3 class="text-center">
                            Personal
                        </h3>
                        <p class="text-center">$39/mo</p>
                        <p class="text-center">Born and I will give you a complete account of the system</p>
                        <div class="text-start ps-3">
                            <p><img src="/public/images/ok.png" alt=""></i> Unlimited file recovery</p>
                            <p><img src="/public/images/no.png" alt=""> Professional reports</p>
                            <p><img src="/public/images/no.png" alt=""> Sell on marketplaces</p>
                            <p><img src="/public/images/no.png" alt=""> Dolor sit amet</p>
                            <p><img src="/public/images/no.png" alt=""> 24/7 free support</p>
                        </div>
                        <button class="btn btn-dark ps-5 pe-5">Purchase now</button>
                    </div>
                </div>
                <div class="col-md-12 col-lg-4 ">
                    <div class="p-5 m-2 sign_up_cards text-center">
                        <h3 class="text-center">
                            Personal
                        </h3>
                        <p class="text-center">$39/mo</p>
                        <p class="text-center">Born and I will give you a complete account of the system</p>
                        <div class="text-start ps-3">
                            <p><img src="/public/images/ok.png" alt=""></i> Unlimited file recovery</p>
                            <p><img src="/public/images/no.png" alt=""> Professional reports</p>
                            <p><img src="/public/images/no.png" alt=""> Sell on marketplaces</p>
                            <p><img src="/public/images/no.png" alt=""> Dolor sit amet</p>
                            <p><img src="/public/images/no.png" alt=""> 24/7 free support</p>
                        </div>
                        <button class="btn btn-dark ps-5 pe-5">Purchase now</button>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    <section class="questions">
        <div class="container mb-5 px-4">
            <div class="row">
                <div class="col-12 mt-5 mb-5">
                    <h2>Frequently Asked Questions</h2>
                    <p>
                        Sed ut perspiciatis unde omnis iste natus error sit<br> voluptatem accusantium doloremque laudantium
                    </p>
                </div>
                <div class="div_question col-12 my-2" data-bs-toggle="collapse" data-bs-target="#collapseExample0" aria-controls="collapseExample">
                    <div class="py-1" >
                        Unde omnis iste natus error sit?
                        <span><i class=" bi-caret-down-fill"></i></span>
                    </div>
                    <div class="collapse" id="collapseExample0">
                        <p> On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the
                            charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound
                            to
                            ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying
                            thro shrinking from toil and pain. These cases are perfectly simple and easy to distinguish.
                        </p>
                    </div>
                </div>
                <div class="div_question col-12 my-2" data-bs-toggle="collapse" data-bs-target="#collapseExample1" aria-controls="collapseExample">
                    <div class="py-1">
                        Unde omnis iste natus error sit?
                        <span><i class=" bi-caret-down-fill"></i></span>
                    </div>
                    <div class="collapse" id="collapseExample1">
                        <p> On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the
                            charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound
                            to
                            ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying
                            thro shrinking from toil and pain. These cases are perfectly simple and easy to distinguish.
                        </p>
                    </div>
                </div>
                <div class="div_question col-12 my-2" data-bs-toggle="collapse" data-bs-target="#collapseExample2" aria-controls="collapseExample">
                    <div class="py-1">
                        Unde omnis iste natus error sit?
                        <span><i class=" bi-caret-down-fill"></i></span>
                    </div>
                    <div class="collapse" id="collapseExample2">
                        <p> On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the
                            charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound
                            to
                            ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying
                            thro shrinking from toil and pain. These cases are perfectly simple and easy to distinguish.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="newsletter">
        <div class="container mb-5">
            <div class="row justify-content-center">
                <div class="col-sm-12 col-md-8 text-center newsletter_input">
                    <h3>Join the newsletter and get <br> all updates and new blogs</h3>
                    <div class="input-group mt-4">
                        <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username"
                            aria-describedby="basic-addon2">
                        <span class="input-group-text" id="basic-addon2">@example.com</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php $content = ob_get_clean();?>

<?php require 'template.php';?>


<script>
      var swiper = new Swiper(".mySwiper", {


        breakpoints: {
          "@0.00": {
            slidesPerView: 1,
            spaceBetween: 5,
          },
          "@0.75": {
            slidesPerView: 2,
            spaceBetween: 20,
          },
          "@1.00": {
            slidesPerView: 2,
            spaceBetween: 40,
          },
          "@1.50": {
            slidesPerView: 3,
            spaceBetween: 30,
          },
        },
        loop: true,
        loopFillGroupWithBlank: true,
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
      });
    </script>