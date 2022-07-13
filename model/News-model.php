<?php

function dbConnect()
{
    $bdd = new PDO('mysql:host=127.0.0.1;dbname=consult_figma', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    return $bdd;

}

function getHomeNews()
{

    $bdd = dbConnect();

    $requete = $bdd->prepare('SELECT * FROM table_news LIMIT 3');
    $requete->execute();
    $news = $requete->fetchAll();

    return $news;
}

function getNews()
{
    $bdd = dbConnect();
    /* variable = Insert toute  des données de la table jeux_video QUAND la console est :  */
    $requete = $bdd->prepare('SELECT * FROM table_news');
    $requete->execute();
    $news = $requete->fetchAll();

    return $news;
}

function getNewsSelect($reqGenreNews)
{
    $bdd = dbConnect();
    /* variable = Insert toute  des données de la table jeux_video QUAND la console est :  */
    $requete = $bdd->prepare('SELECT * FROM table_news WHERE genre_news = ?');
    $requete->execute(array($reqGenreNews));
    $news = $requete->fetchAll();

    return $news;
}

function getInsertNews($author, $genre, $title, $description, $text, $date, $picture)
{

    $bdd = dbConnect();
    /* variable = Insert toute  des données de la table jeux_video QUAND la console est :  */
    $requete = $bdd->prepare('INSERT INTO table_news(author_news, genre_news, title_news, description_news,text_news,date_news, photo_news) VALUES(?,?,?,?,?,?,?)');
    $requete->execute(array($author, $genre, $title, $description, $text, $date, $picture));

};

function getArticle($reqArticleId)
{
    $bdd = dbConnect();
    /* variable = Insert toute  des données de la table jeux_video QUAND la console est :  */
    $requete = $bdd->prepare('SELECT * FROM table_news WHERE id_news = ?');
    $requete->execute(array($reqArticleId));
    $article = $requete->fetch();

    return $article;
}
