<?php 
    include("connectToTheDB.php");

    if(isset($_POST['btn'])){
        $Movie_Name=$_POST['Movie_Name'];
        $Director=$_POST['Director'];
        $Movie_Genre=$_POST['Movie_Genre'];
        $Release_Date=$_POST['Release_Date'];
        $id = $_GET['id'];
        $var = "UPDATE MovieTB SET Movie_Name='$Movie_Name', Director='$Director', Movie_Genre='$Movie_Genre', Date='$Release_Date' WHERE Id=$id";
        $query=mysqli_query($connect, $var);
        header('location:index.php');
    }
    else if(isset($_GET['id'])){
        $var = "SELECT * FROM MovieTB WHERE MovieID='".$_GET['MovieID']."'";
        $query=mysqli_query($connect, $var);
        $res= mysqli_fetch_array($query);
    }
?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Update</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/style.css">
    </head>

    <body>
        <div class="container mt-5">
            <h1>Update Movie Entry</h1>
            <form method="post">

                <div class="form-group">
                    <label>Movie Name</label>
                    <input type="text"
                        class="form-control"
                        name="Movie_Name"
                        placeholder="Movie Name"
                        value="<?php echo $res['Movie_Name'];?>" />
                </div>

                <div class="form-group">
                    <label>Director</label>
                    <input type="text"
                        class="form-control"
                        name="Director"
                        placeholder="Director"
                        value="<?php echo $res['Director'];?>" />
                </div>

                <div class="form-group">
                    <label>Movie Genre</label>
                    <input type="text"
                        class="form-control"
                        name="Movie_Genre"
                        placeholder="Movie Genre"
                        value="<?php echo $res['Movie_Genre'];?>" />
                </div>

                <div class="form-group">
                    <label>Release Date</label>
                    <input type="date"
                        class="form-control"
                        name="Release_Date"
                        placeholder="Release Date"
                        value="<?php echo $res['Release_Date'];?>" />
                </div>

                <div class="form-group">
                <input type="submit" value="Update Entry" 
                    name="btn" class="btn btn-dark">
            </div>

            </form>
        </div>
    </body>
</html>