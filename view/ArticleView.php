<?php $title = 'home';?>

<?php ob_start();?>
<section class="news">
        <div class="container mb-5">
            <div class="row">
                <div class="col-12 my-5">
                 <?php echo '  <h1>  ' . $article['title_news'] . ' </h1>
                    <span class="' . $article['genre_news'] . '">
                            ' . $article['genre_news'] . '
                            </span>
                ' ?>
                </div>

<?php

echo '
                        <div class="col-md-12 text-center news">
                            <img src="' . $article['photo_news'] . '" alt="" class="w-50 mb-2">
                        </div>
                        <div class="col-md-12 news"
                            <p class="pt-4">
                            ' . $article['text_news'] . '
                            </p>
                            <span class="fw-bolder">By ' . $article['author_news'] . '<br></span>
                            <span class="fw-lighter">' . $article['date_news'] . '</span>
                        </div>';

?>
        <div class="col-12 py-3 text-center">
        <a href="./?action=News"> <button class="btn btn-primary">Return</button></a>
        </div>

            </div>
        </div>
    </section>
<?php $content = ob_get_clean();?>

<?php require 'template.php';?>