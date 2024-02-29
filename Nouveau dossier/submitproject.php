<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Thistleskull</title>
    <link rel="stylesheet" href="footer.css">
    <link rel="stylesheet" href="header.css">
    <link rel="stylesheet" href="navbar.css">
    <link rel="stylesheet" href="bouton.css">
    <link rel="stylesheet" href="tattoopresentation.css">
</head>

<body>
    <?php
    require_once(__DIR__ . '/navbar.php');
    ?>
        <h1>Proposition de projet</h1>
                    <form action="submitproject_validat.php" method="POST" enctype="multipart/form-data">
                        <div>
                            <label for="email">Email</label>
                            <input type="email" name="email">
                        </div>
                        <div>
                            <label for="message">Expliquez, en quelques mots, votre projet</label>
                            <textarea placeholder="Exprimez vous" name="message"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="screenshot" class="form-label">Images complémentaires</label>
                            <input type="file" class="form-control" id="screenshot" name="screenshot" /> <!--pensez à modifier le name-->
                        </div>
                        <button type="submit">Envoyer</button>
                    </form>
                <br />
    <?php
    require_once(__DIR__ . '/generalfooter.php');
    ?>
</body>
</html>
