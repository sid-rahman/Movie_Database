<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Movie Database</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="css\styles.css">
</head>
<body>
  <!-- Navbar content -->
  <nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark">
    <a class="navbar-brand" href="#">Movie Database</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item ">
          <a class="nav-link" href="index.php">Home<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="sign_up.php">Sign Up</a>
        </li>

      </ul>
      <form action="search_mv.php" method="GET" class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="text" placeholder="Search a Movie" name="mv">
        <input type="submit" value="Search" name="sub" class="form-control btn btn-info">
      </form>
    </div>
  </nav>

  <br>

  <!-- main -->
  <div class="container">


  <div class="row center">
    <div class="col-3"></div>
    <div class="col-6">
        <?php
            if(isset($_GET['sub_act'])){
                $name=$_GET['act'];
                $con=mysqli_connect('localhost','root','','movie_database');
                echo "<h2>Movies performed by <strong> $name </strong> </h2> <hr> <br>";
                if($con){
                    $q="select m_name from movie inner join actor using(m_id) where a_name='$name';";
                    $res=mysqli_query($con,$q);
                    while($row=mysqli_fetch_row($res)){
                        $m=$row[0];
                        echo "<h5 class='border border-buttom'>$m</h5>";

                        echo '<br>';
                    }
                }
            }



        ?>
    </div>
    <div class="col-3"></div>


  </div>
  </div>

</body>
</html>
