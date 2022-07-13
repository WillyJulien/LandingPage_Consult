<?php

require './model/News-model.php';

function home()
{
    $news = getHomeNews();

    require './view/HomeView.php';
}

function News()
{
    $news = getNews();

    require './view/NewsView.php';
}

function GenreNews()
{
    $reqGenreNews = $_GET['GenreNews'];

    $news = getNewsSelect($reqGenreNews);

    require './view/NewsView.php';
}

function ArticleNews()
{
    $reqArticleId = $_GET['ArticleID'];

    $article = getArticle($reqArticleId);

    require './view/ArticleView.php';

}

function pageInsertNews()
{
    $Msg = "";
    require './view/InsertNewsView.php';

}

function InsertNews()
{
    $tailleMax = 2097152;
    $extensionsValides = array('jpg', 'jpeg', 'gif', 'png');
    if ($_FILES['picture']['size'] <= $tailleMax) {
        $extensionUpload = strtolower(substr(strrchr($_FILES['picture']['name'], '.'), 1));
        if (in_array($extensionUpload, $extensionsValides)) {
            $chemin = "public/images/" . $_FILES['picture']['name'];
            $resultat = move_uploaded_file($_FILES['picture']['tmp_name'], $chemin);
            if ($resultat) {

                $picture = $chemin;
                $date = date("Y-m-d", strtotime($_POST['date']));
                $author = $_POST['author'];
                $genre = $_POST['genre'];
                $title = $_POST['title'];
                $description = $_POST['description'];
                $text = $_POST['text'];
                $news = getInsertNews($author, $genre, $title, $description, $text, $date, $picture);
                $Msg = "Votre new a bien été enregistré, <a href='./?action=News'>ici</a>";
            } else {
                $Msg = "Erreur durant l'importation de votre photo de profil";

            }
        } else {
            $Msg = "Votre photo de profil doit être au format jpg, jpeg, gif ou png";

        }
    } else {
        $Msg = "Votre photo de profil ne doit pas dépasser 2Mo";

    }

    require './view/InsertNewsView.php';
}
