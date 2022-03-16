<?php
    include("connectToTheDB.php");   
    
?>

<html>
    <head>
        <title>Movies</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    </head>

    <body>
        <div class="container mt-5">
            <div class="row mt-4">
                    <?php
                        while ($var = mysqli_fetch_array($query)) 
                        {}
                    ?>
                <div class="col-lg-4">
                    <div class="card-columns">
                        <div class="card-body">
                            <h4 class="card-title">
                                <?php echo $var['Movie_Name']; ?>
                            </h4>
                            <h5 class="card-subtitle mb-2 text-muted">
                                <?php echo $var['Director']; ?>
                            </h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>