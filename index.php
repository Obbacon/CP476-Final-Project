<?php
    include("connectToTheDB.php");   
    if (isset($_POST['btn'])) {
        $date=$_POST['idate'];
        $data = "select * from MovieTB where Date='$date'";
        $query = mysqli_query($connect, $data);
    } 
    else {
        $data = "select * from MovieTB";
        $query = mysqli_query($connect, $data);
    }
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

            <!-- top -->
        <div class="row">
            <div class="col-lg-8">
                <h1>Movie Data</h1>
                <a href="add.php">Add Movie Here</a>
            </div>
           
            </div>
        

            <div class="row mt-4">
                    <?php
                        while ($var = mysqli_fetch_array($query)) 
                        {
                    ?>
                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">
                                <?php echo $var['Movie_Name']; ?>
                            </h4>
                            <?php echo $var['Director']; ?>
                            <?php echo $var['Movie_Genre']; ?>
                            <?php echo $var['Release_Date']; ?>
                            
                        <a href="remove.php?id=<?php echo $var['Id']; ?>" 
                            class="card-link">Remove </a>
                        <a href=
                        "update.php?id=<?php echo $var['Id']; ?>" 
                            class="card-link">Update Entry</a>
                        </div>
                    </div><br>
                </div>
                <?php
                }
                ?>
            </div>
        </div>
    </body>
</html>