<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Contact</title>
        <link 
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
            rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" 
            crossorigin="anonymous"
        >
    </head>

    <body class="d-flex flex-column min-vh-100">

        <div id="container">
        <?php include('header.php'); ?>
            <h1>Message bien reçu !</h1>

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Rappel de vos indormations</h5>
                    <p class="card-text"><b>Email</b> : <?php echo $_GET['email']; ?></p>
                    <p class="card-text"><b>Message</b> : <?php echo $_GET['textarea']; ?></p>
                </div>
            </div>
            </div>

        <?php include('footer.php'); ?>
    </body>
</html>