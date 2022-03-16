<html>
    <meta http-equiv="Content-Type" 
        content="text/html; charset=UTF-8">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
    <div class="container mt-5">
        <h1>Add Movie</h1>
        <form action="base.php" method="POST">
            <div class="form-group" id="Movie_Name">
                <label>Movie name</label>
                <input type="text" class="form-control" placeholder="Movie name" name="Movie_Name" />
            </div>

            <div class="form-group">
                <label>Director</label>
                <input type="text" 
                    class="form-control" 
                    placeholder="Director" 
                    name=Director />
            </div>
            <div class="form-group" id="Genre">
                <label>Movie Genre</label>
                <select class="form-control"
                    name="Movie_Genre">
                    <option value="0">
                        Action
                    </option>
                    <option value="1">
                        Drama
                    </option>
                    <option value="2">
                        Comedy
                    </option>
                    <option value="3">
                        Thriller
                    </option>

                </select>
            </div>
            <div class="form-group" id="Release_date">
                <label>Release Date</label>
                <input type="Release_date"
                    class="form-control"
                    placeholder="Release_date"
                    name="iRelease_date">
            </div>
            <div class="form-group" id="Submit_Button">
                <input type="submit"
                    value="Add Movie"
                    class="btn btn-dark"
                    name="btn">
            </div>
        </form>
    </div>

    <?php  
        if (isset($_POST["btn"])){
            include("connectToTheDB.php");
            $Movie_name=$_POST['Movie_Name'];
            $Director=$_POST['Director'];
            $Genre=$_POST['Movie_Genre'];
            $Release_date=$_POST['Release_date'];

            $data = "insert into MovieDB(Movie_Name, Director, Movie_Genre, Release_Date)
                     values('$Movie_name', '$Director', '$Genre', '$Release_date')";
            mysqli_query($connect, $data);
            header("location:index.php");
        }

        /*
         if(!mysqli_query($connect, $data)){
            // echo "No Value";
         }
         else{
            // echo "Value has been Inserted";}
         */
    
    ?>
</body>

</html>