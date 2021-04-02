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

  <!-- navbar 2 -->

  <nav class="navbar navbar-expand-sm navbar-light justify-content-center" style="background-color: #edf4f2;">
    <div>
      <ul class="nav justify-content-center ">
  <li class="nav-item" >
    <a class="nav-link lhover lvisited" href="actor.php">Actor</a>
  </li>
  <li class="nav-item">
    <a class="nav-link lhover lvisited" href="director.php">Director</a>
  </li>
  <li class="nav-item">
    <a class="nav-link lhover lvisited" href="phouse.php">Production House</a>
  </li>
  <li class="nav-item">
    <a class="nav-link lhover lvisited" href="genre.php">Genre</a>
  </li>
  <li class="nav-item">
    <a class="nav-link lhover lvisited" href="released_year.php">Released Year</a>
  </li>
  <li class="nav-item">
    <a class="nav-link lhover lvisited" href="ratings.php">Ratings</a>
  </li>
  <li class="nav-item">
    <a class="nav-link lhover lvisited" href="advanced.php">Advanced Search</a>
  </li>
  <li class="nav-item">
  <a class="nav-link lhover lvisited" href="insert.php">Insert a New Movie</a>
</li>
</ul>
</div>
</nav>


  <br>


  <!-- images -->

  <div class="container">
    <div class="card-deck">
      <div class="card">
        <img class="card-img-top" src="images\the-shawshank-redemption.jpg" alt="Card image cap">
        <div class="card-body">
          <h6 class="card-title">  <a href="1. shawshank.html">The Shawshank Redemption</a> </h6>
        </div>
      </div>
      <div class="card">
        <img class="card-img-top" src="images\forrest.jpg" alt="Card image cap">
        <div class="card-body">
          <h6 class="card-title"><a href="2. forrest.html">Forrest Gump</a></h6>
        </div>
      </div>
      <div class="card">
        <img class="card-img-top" src="images\life is.jpeg" alt="Card image cap">
        <div class="card-body">
          <h6 class="card-title"><a href="3. life is beautiful.html">Life Is Beautiful</a></h6>
        </div>
      </div>
      <div class="card ">
        <img class="card-img-top" src="images\inception.jpg" alt="Card image cap">
        <div class="card-body">
          <h6 class="card-title"><a href="4. inception.html">Inception</a></h6>
        </div>
      </div>
      <div class="card">
        <img class="card-img-top" src="images\intersteller.jpg" alt="Card image cap">
        <div class="card-body">
          <h6 class="card-title"><a href="5. intersteller.html">Interstellar</a></h6>
        </div>
      </div>
    </div>


    <div class="card-deck">
      <div class="card">
        <img class="card-img-top" src="images\2001.jpg" alt="Card image cap">
        <div class="card-body">
          <h6 class="card-title"><a href="6. 2001.html">2001: A Space Odyssey</a></h6>
        </div>
      </div>
      <div class="card">
        <img class="card-img-top" src="images\prestige.jpg" alt="Card image cap">
        <div class="card-body">
          <h6 class="card-title"><a href="7. the prestige.html">The Prestige</a></h6>
        </div>
      </div>
      <div class="card">
        <img class="card-img-top" src="images\memento.jpg" alt="Card image cap">
        <div class="card-body">
          <h6 class="card-title"><a href="8. Memento.html">Memento</a></h6>
        </div>
      </div>
      <div class="card ">
        <img class="card-img-top" src="images\silence of the lambs.jpg" alt="Card image cap">
        <div class="card-body">
          <h6 class="card-title"><a href="9. the silence of the lambs.html">The Silence of the Lambs</a></h6>
        </div>
      </div>
      <div class="card">
        <img class="card-img-top" src="images\the notebook.jpg" alt="Card image cap">
        <div class="card-body">
          <h6 class="card-title"><a href="10. the notebook.html">The Notebook</a></h6>
        </div>
      </div>
    </div>


    <div class="card-deck">
      <div class="card">
        <img class="card-img-top" src="images\tfios.jpg" alt="Card image cap">
        <div class="card-body">
          <h6 class="card-title"><a href="11. the fault in our stars.html">The Fault in Our Stars</a></h6>
        </div>
      </div>
      <div class="card">
        <img class="card-img-top" src="images\big fish.jpg" alt="Card image cap">
        <div class="card-body">
          <h6 class="card-title"><a href="12. big fish.html">Big Fish</a></h6>
        </div>
      </div>
      <div class="card">
        <img class="card-img-top" src="images\harry potter.jpg" alt="Card image cap">
        <div class="card-body">
          <h6 class="card-title"><a href="13. harry potter.html">Harry Potter and the Philosopher's Stone</a></h6>
        </div>
      </div>
      <div class="card ">
        <img class="card-img-top" src="images\the stranger.jpg" alt="Card image cap">
        <div class="card-body">
          <h6 class="card-title"><a href="14. the stranger.html">The Stranger</a></h6>
        </div>
      </div>
      <div class="card">
        <img class="card-img-top" src="images\aguner.jpg" alt="Card image cap">
        <div class="card-body">
          <h6 class="card-title"><a href="15. aguner.html">Aguner Poroshmoni</a></h6>
        </div>
      </div>
    </div>

    <div class="card-deck">
      <div class="card">
        <img class="card-img-top" src="images\psycho.jpg" alt="Card image cap">
        <div class="card-body">
          <h6 class="card-title"><a href="16. psycho.html">Psycho</a></h6>
        </div>
      </div>
      <div class="card">
        <img class="card-img-top" src="images\the shining.jpg" alt="Card image cap">
        <div class="card-body">
          <h6 class="card-title"><a href="17. the shining.html">The Shining</a></h6>
        </div>
      </div>
      <div class="card">
        <img class="card-img-top" src="images\the pianist.jpg" alt="Card image cap">
        <div class="card-body">
          <h6 class="card-title"><a href="18. the pianist.html">The Pianist</a></h6>
        </div>
      </div>
      <div class="card ">
        <img class="card-img-top" src="images\shutter.jpg" alt="Card image cap">
        <div class="card-body">
          <h6 class="card-title"><a href="19. shutter island.html">Shutter Island</a></h6>
        </div>
      </div>
      <div class="card">
        <img class="card-img-top" src="images\nayak.jpg" alt="Card image cap">
        <div class="card-body">
          <h6 class="card-title"><a href="20. nayak.html">Nayak</a></h6>
        </div>
      </div>
    </div>

  </div>

  <br>

  <!-- footer -->

  <footer class="navbar navbar-light font" style="background-color: #343a40;">

    <div class="row">
      <div class="col-md-5 marginr">
        <h2 class="display-4">Movie<br>Database</h2>
      </div>
      <div class="col-md-1 marginr">
        <div class="vl"></div>
      </div>
      <div class="col-md-6 marginl join">
        <p >Join our community and get updeted.</p>
        <a href="">About Us</a> <br>
        <a href="">Contuct Us</a> <br>
        <a href="">Privacy Policy</a> <br>
        <a href="">Help</a>
      </div>
    </div>

  </footer>

</body>
</html>
