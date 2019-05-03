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
        $pdo = new PDO("mysql:host=localhost;dbname=blog1;charset=utf8;port=3306", "root", "");
        $req = $pdo->query("SELECT * FROM article JOIN categorie c ON article.id_categorie = c.id_categorie");
        $articles = $req->fetchAll(PDO::FETCH_OBJ);
        var_dump($articles);

        foreach($articles as $article) :
    ?>
        <div>
            <h2><?php echo $article->titre_article ?></h2>
            <p><?= substr($article->contenu_article,0,50) ?></p>
            <p><?= $article->nom_categorie ?></p>
        </div>
    <?php
        endforeach;
    ?>
</body>
</html>