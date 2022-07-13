<?php
require 'controllers/News-Controller.php';

try {
    if (isset($_GET['action'])) {

        if ($_GET['action'] == 'Home') {
            Home();

        } elseif ($_GET['action'] == 'News' && isset($_GET['GenreNews'])) {

            GenreNews($_GET['GenreNews']);

        } elseif (isset($_POST['author']) && isset($_POST['genre']) && isset($_POST['title']) && isset($_POST['description']) && isset($_POST['text']) && isset($_POST['date']) && isset($_FILES['picture'])) {

            InsertNews($_POST['author'], $_POST['genre'], $_POST['title'], $_POST['text'], $_POST['description'], $_POST['date'], $_FILES['picture']);

        } elseif ($_GET['action'] == 'News') {
            News();

        } elseif ($_GET['action'] == 'InsertNews') {
            pageInsertNews();

        } elseif ($_GET['action'] == 'Article' && isset($_GET['ArticleID'])) {
            ArticleNews($_GET['ArticleID']);
        }
    } else {
        home();
    }
} catch (Exception $e) { // S'il y a eu une erreur, alors...
    echo 'Erreur : ' . $e->getMessage();
}

/*
<?php
require 'controllers/Controller.php';

if (isset($_GET['action'])) {
if ($_GET['action'] == 'Home') {
Home();
} elseif ($_GET['action'] == 'News') {
if ()
News();
}
} elseif (isset($_GET['GenreNews'])) {
GenreNews($_GET['GenreNews']);
} else {
Home();
}

<?php
require 'controllers/Controller.php';

if (isset($_GET['action'])) {

if ($_GET['action'] == 'Home') {
Home();

} elseif ($_GET['action'] == 'News' && isset($_GET['GenreNews'])) {
$reqGenreNews = $_GET['GenreNews'];
GenreNews($reqGenreNews);

} elseif ($_GET['action'] == 'News') {
News();
}
} else {
home();
}

 */
