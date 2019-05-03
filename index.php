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
        $req = $pdo->query("SELECT * FROM article");
        $articles = $req->fetchAll(PDO::FETCH_OBJ);
        var_dump($articles);

        for($i = 1; $i<=5; $i++) {
    ?>
        <div>
            <h2>Titre 1</h2>
            <p>Contenu </p>
        </div>
    <?php
        }
    ?>
</body>
</html>