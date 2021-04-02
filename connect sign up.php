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

      </ul>
      <form action="search_mv.php" method="GET" class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="text" placeholder="Search a Movie" name="mv">
        <input type="submit" value="Search" name="sub" class="form-control btn btn-info">
      </form>
    </div>
  </nav>

  <br>



  <!-- main -->
	<div class="container center">

			<?php
				$firstName = $_POST['firstName'];
				$lastName = $_POST['lastName'];
				$gender = $_POST['gender'];
				$email = $_POST['email'];
				$password = $_POST['password'];
				$number = $_POST['number'];

				// Database connection
				$conn = new mysqli('localhost','root','','Movie_Database');
				if($conn->connect_error){
					echo "$conn->connect_error";
					die("Connection Failed : ". $conn->connect_error);
				} else {
					$stmt = $conn->prepare("insert into Registration(firstName, lastName, gender, email, password, number) values(?, ?, ?, ?, ?, ?)");
					$stmt->bind_param("sssssi", $firstName, $lastName, $gender, $email, $password, $number);
					$execval = $stmt->execute();

					echo "<br> <br><h3>Registration successfull.</h3> <br> <br>";
					$stmt->close();
					$conn->close();
				}
			?>
</div>
</body>
</html>
