<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
        //connexion à la base de données
        $pdo = new PDO("mysql:host=localhost;dbname=blog1;charset=utf8;port=3306", "root", "");
        //envoi de la requête SQL
        $req = $pdo->query("SELECT * FROM article JOIN categorie c ON article.id_categorie = c.id_categorie");
        //récupération des données sous forme de tableau d'objets
        $articles = $req->fetchAll(PDO::FETCH_OBJ);
        //var_dump($articles);
        //affichage des articles
        foreach($articles as $article) :
    ?>
        <div>
            <h2><?= $article->titre_article ?></h2><!--le titre de l'article-->
            <p><?= substr($article->contenu_article,0,50) ?></p><!--les 50 premiers caractères de l'article-->
            <p><?= $article->nom_categorie ?></p><!--la catégorie de l'article-->
        </div>
    <?php
        endforeach;
    ?>
</body>
</html>