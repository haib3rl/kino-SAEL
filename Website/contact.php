<!DOCTYPE html>
<html lang="en">
<?php 
        //$id = $_GET['id'];
        $link = mysqli_connect("localhost", "root", "", "cinema_db");
        //$movieQuery = "SELECT * FROM movieTable WHERE movieID = $id"; 
        //$movieImageById = mysqli_query($link,$movieQuery);
        //$row = mysqli_fetch_array($movieImageById);
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style/styles.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
	<link rel="stylesheet" href="./style/contact.css">
    <title>Details: <?php echo $row['movieTitle']; ?> </title>
    <link rel="icon" type="image/png" href="img/logo.png">
</head>
<body>
    <header></header>

    <footer></footer>
	<script src="scripts/jquery-3.3.1.min.js "></script>
    <script src="scripts/script.js "></script>
</body>