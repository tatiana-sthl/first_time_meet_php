<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Site Web PHP</title>
        <link 
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
            rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" 
            crossorigin="anonymous"
        >
    </head>

    <body class="d-flex flex-column min-vh-100">

        <div id="container">
        <?php include('header.php'); ?>
            <h1>Coder en PHP</h1>

            <p>
                Premier site codé en PHP <br />
                Des erreurs seront trouvées, des yeux vont saigner, mais j'aurai eu le mérite de tenter.
            </p>

            <?php
                include_once('variables.php');
                include_once('functions.php');
            ?>

            <?php foreach(getRecipes($recipes) as $recipe) : ?>
                <article>
                    <h3><?php echo $recipe['title']; ?></h3>
                    <div><?php echo $recipe['recipe']; ?></div>
                    <i><?php echo displayAuthor($recipe['author'], $users); ?></i>
                </article>
            <?php endforeach ?>
        </div>

        <?php include('footer.php'); ?>
    </body>
</html>