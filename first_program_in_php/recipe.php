<!DOCTYPE html>
<html>
    <head>
        <title>Affichage des recettes</title>
    </head>
    <body>
        <div class="container">
            <h1>Affichage des recettes</h1>
            <?php include("recipes.php"); ?>
                <?php foreach($recipes as $recipe) : ?>
                    <?php if (array_key_exists('is_enabled', $recipe) && $recipe['is_enabled'] == true): ?>

                        <article>
                            <h3><?php echo $recipe['title']; ?></h3>
                            <div><?php echo $recipe['recipe']; ?></div>
                            <i><?php echo $recipe['author']; ?></i>
                        </article>

                    <?php endif; ?>
                <?php endforeach ?>
        </div>
    </body>
</html>