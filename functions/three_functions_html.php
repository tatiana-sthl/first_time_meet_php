<!DOCTYPE html>
<html>
    <head>
        <title>Recettes de cuisine</title>
    </head>
    <body>
        <div class="container">
            <h1>Liste des recettes de cuisine</h1>
            <?php include("three_functions.php"); ?>
            
                <?php foreach(getRecipes($recipes) as $recipe) : ?>

                        <article>
                            <h3><?php echo $recipe['title']; ?></h3>
                            <div><?php echo $recipe['recipe']; ?></div>
                            <i><?php echo displayAuthor($recipe['author'], $users); ?></i>
                        </article>

                <?php endforeach ?>
        </div>
    </body>
</html>