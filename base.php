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
            <div class="form-group"> 
                <label>Movie name</label>
                <input type="text" 
                class="form-control" 
                placeholder="Movie name" 
                name="iMovie_Name" />
            </div>

            <div class="form-group">
                <label>Director</label>
                <input type="text" 
                    class="form-control" 
                    placeholder="Director" 
                    name=iDirector />
            </div>
            <div class="form-group" id="Genre">
                <label>Movie Genre</label>
                <select class="form-control"
                    name="iMovie_Genre">
                    <option value="Action">
                        Action
                    </option>
                    <option value="Adventure">
                        Adventure
                    </option>
                    <option value="Action/Sci-Fi">
                        Action/Sci-Fi
                    </option>
                    <option value="Drama">
                        Drama
                    </option>
                    <option value="Comedy">
                        Comedy
                    </option>
                    <option value="Thriller">
                        Thriller
                    </option>
                    <option value="Romance">
                        Romance
                    </option>
                    <option value="Mystery">
                        Mystery
                    </option>


                </select>
            </div>
            <div class="form-group" id="Release_date">
                <label>Release Date</label>
                <input type="date"
                    class="form-control"
                    placeholder="Release date"
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
            $Movie_name=$_POST['iMovie_Name'];
            $Director=$_POST['iDirector'];
            $Genre=$_POST['iMovie_Genre'];
            $Release_date=$_POST['iRelease_date'];

            $data = "insert into MovieTB(Movie_Name, Director, Movie_Genre, Release_Date)
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