<?php $title = 'Landing Page - Articles';?>

<?php ob_start();?>
<section class="news">
        <div class="container-fluid bg-primary py-5">
            <div class="container">
                <div class="row">
                    <div class="col-12   text-light">
                        <h2>Fresh news</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="container mb-5">
            <div class="row">
                <div class="col-12 mt-5 justify-content-center  select_news">
                  <ul class="px-0 d-flex justify-content-around w-100">
                      <li> <a  href="./?action=News&&GenreNews=Tips">Tip</a></li>
                      <li> <a  href="./?action=News&&GenreNews=Business">Business</a></li>
                      <li> <a  href="./?action=News&&GenreNews=Consulting">Consulting</a></li>
                      <li> <a  href="./?action=News">All</a></li>
                  </ul>
                </div>

<?php
foreach ($news as $new) {
    echo '<div class="col-md-12 col-lg-4">
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
                    </div>';
}
?>

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