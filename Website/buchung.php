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
	<link rel="stylesheet" href="/style/buchung.css">
    <link rel="stylesheet" href="/style/vars.css">
     <title>Details: <?php echo $row['movieTitle']; ?> </title>
    <link rel="icon" type="image/png" href="img/logo.png">
</head>
<body>
    <header></header>
	<div class="container">
        <div class="seats">
            <div class="row1">
                <input id="chair1" type="image" name="Chair" src="./img/icons/outline_chair_white_24dp.png" alt="text">
                <input id="chair2" type="image" name="Chair" src="./img/icons/outline_chair_white_24dp.png" alt="text">
                <input id="chair3" type="image" name="Chair" src="./img/icons/outline_chair_white_24dp.png" alt="text">
                <input id="chair4" type="image" name="Chair" src="./img/icons/outline_chair_white_24dp.png" alt="text">
                <input id="chair5" type="image" name="Chair" src="./img/icons/outline_chair_white_24dp.png" alt="text">
                <input id="chair6" type="image" name="Chair" src="./img/icons/outline_chair_white_24dp.png" alt="text">
                <input id="chair7" type="image" name="Chair" src="./img/icons/outline_chair_white_24dp.png" alt="text">
                <input id="chair8" type="image" name="Chair" src="./img/icons/outline_chair_white_24dp.png" alt="text">
                <input id="chair9" type="image" name="Chair" src="./img/icons/outline_chair_white_24dp.png" alt="text">
                <input id="chair10" type="image" name="Chair" src="./img/icons/outline_chair_white_24dp.png" alt="text">
            </div>
            <div class="row2">
                <input id="chair1" type="image" name="Chair" src="./img/icons/outline_chair_white_24dp.png" alt="text">
                <input id="chair2" type="image" name="Chair" src="./img/icons/outline_chair_white_24dp.png" alt="text">
                <input id="chair3" type="image" name="Chair" src="./img/icons/outline_chair_white_24dp.png" alt="text">
                <input id="chair4" type="image" name="Chair" src="./img/icons/outline_chair_white_24dp.png" alt="text">
                <input id="chair5" type="image" name="Chair" src="./img/icons/outline_chair_white_24dp.png" alt="text">
                <input id="chair6" type="image" name="Chair" src="./img/icons/outline_chair_white_24dp.png" alt="text">
                <input id="chair7" type="image" name="Chair" src="./img/icons/outline_chair_white_24dp.png" alt="text">
                <input id="chair8" type="image" name="Chair" src="./img/icons/outline_chair_white_24dp.png" alt="text">
                <input id="chair9" type="image" name="Chair" src="./img/icons/outline_chair_white_24dp.png" alt="text">
                <input id="chair10" type="image" name="Chair" src="./img/icons/outline_chair_white_24dp.png" alt="text">
            </div>
            <div class="row3">
                <input id="chair1" type="image" name="Chair" src="./img/icons/outline_chair_white_24dp.png" alt="text">
                <input id="chair2" type="image" name="Chair" src="./img/icons/outline_chair_white_24dp.png" alt="text">
                <input id="chair3" type="image" name="Chair" src="./img/icons/outline_chair_white_24dp.png" alt="text">
                <input id="chair4" type="image" name="Chair" src="./img/icons/outline_chair_white_24dp.png" alt="text">
                <input id="chair5" type="image" name="Chair" src="./img/icons/outline_chair_white_24dp.png" alt="text">
                <input id="chair6" type="image" name="Chair" src="./img/icons/outline_chair_white_24dp.png" alt="text">
                <input id="chair7" type="image" name="Chair" src="./img/icons/outline_chair_white_24dp.png" alt="text">
                <input id="chair8" type="image" name="Chair" src="./img/icons/outline_chair_white_24dp.png" alt="text">
                <input id="chair9" type="image" name="Chair" src="./img/icons/outline_chair_white_24dp.png" alt="text">
                <input id="chair10" type="image" name="Chair" src="./img/icons/outline_chair_white_24dp.png" alt="text">
            </div>
            <div class="row4">
                <input id="chair1" type="image" name="Chair" src="./img/icons/outline_chair_white_24dp.png" alt="text">
                <input id="chair2" type="image" name="Chair" src="./img/icons/outline_chair_white_24dp.png" alt="text">
                <input id="chair3" type="image" name="Chair" src="./img/icons/outline_chair_white_24dp.png" alt="text">
                <input id="chair4" type="image" name="Chair" src="./img/icons/outline_chair_white_24dp.png" alt="text">
                <input id="chair5" type="image" name="Chair" src="./img/icons/outline_chair_white_24dp.png" alt="text">
                <input id="chair6" type="image" name="Chair" src="./img/icons/outline_chair_white_24dp.png" alt="text">
                <input id="chair7" type="image" name="Chair" src="./img/icons/outline_chair_white_24dp.png" alt="text">
                <input id="chair8" type="image" name="Chair" src="./img/icons/outline_chair_white_24dp.png" alt="text">
                <input id="chair9" type="image" name="Chair" src="./img/icons/outline_chair_white_24dp.png" alt="text">
                <input id="chair10" type="image" name="Chair" src="./img/icons/outline_chair_white_24dp.png" alt="text">
            </div>
            <div class="row5">
                <input id="chair1" type="image" name="Chair" src="./img/icons/outline_chair_white_24dp.png" alt="text">
                <input id="chair2" type="image" name="Chair" src="./img/icons/outline_chair_white_24dp.png" alt="text">
                <input id="chair3" type="image" name="Chair" src="./img/icons/outline_chair_white_24dp.png" alt="text">
                <input id="chair4" type="image" name="Chair" src="./img/icons/outline_chair_white_24dp.png" alt="text">
                <input id="chair5" type="image" name="Chair" src="./img/icons/outline_chair_white_24dp.png" alt="text">
                <input id="chair6" type="image" name="Chair" src="./img/icons/outline_chair_white_24dp.png" alt="text">
                <input id="chair7" type="image" name="Chair" src="./img/icons/outline_chair_white_24dp.png" alt="text">
                <input id="chair8" type="image" name="Chair" src="./img/icons/outline_chair_white_24dp.png" alt="text">
                <input id="chair9" type="image" name="Chair" src="./img/icons/outline_chair_white_24dp.png" alt="text">
                <input id="chair10" type="image" name="Chair" src="./img/icons/outline_chair_white_24dp.png" alt="text">
            </div>
            <div class="row6">
                <input id="chair1" type="image" name="Chair" src="./img/icons/outline_chair_white_24dp.png" alt="text">
                <input id="chair2" type="image" name="Chair" src="./img/icons/outline_chair_white_24dp.png" alt="text">
                <input id="chair3" type="image" name="Chair" src="./img/icons/outline_chair_white_24dp.png" alt="text">
                <input id="chair4" type="image" name="Chair" src="./img/icons/outline_chair_white_24dp.png" alt="text">
                <input id="chair5" type="image" name="Chair" src="./img/icons/outline_chair_white_24dp.png" alt="text">
                <input id="chair6" type="image" name="Chair" src="./img/icons/outline_chair_white_24dp.png" alt="text">
                <input id="chair7" type="image" name="Chair" src="./img/icons/outline_chair_white_24dp.png" alt="text">
                <input id="chair8" type="image" name="Chair" src="./img/icons/outline_chair_white_24dp.png" alt="text">
                <input id="chair9" type="image" name="Chair" src="./img/icons/outline_chair_white_24dp.png" alt="text">
                <input id="chair10" type="image" name="Chair" src="./img/icons/outline_chair_white_24dp.png" alt="text">
            </div>
            <div class="row7">
                <input id="chair1" type="image" name="Chair" src="./img/icons/outline_chair_white_24dp.png" alt="text">
                <input id="chair2" type="image" name="Chair" src="./img/icons/outline_chair_white_24dp.png" alt="text">
                <input id="chair3" type="image" name="Chair" src="./img/icons/outline_chair_white_24dp.png" alt="text">
                <input id="chair4" type="image" name="Chair" src="./img/icons/outline_chair_white_24dp.png" alt="text">
                <input id="chair5" type="image" name="Chair" src="./img/icons/outline_chair_white_24dp.png" alt="text">
                <input id="chair6" type="image" name="Chair" src="./img/icons/outline_chair_white_24dp.png" alt="text">
                <input id="chair7" type="image" name="Chair" src="./img/icons/outline_chair_white_24dp.png" alt="text">
                <input id="chair8" type="image" name="Chair" src="./img/icons/outline_chair_white_24dp.png" alt="text">
                <input id="chair9" type="image" name="Chair" src="./img/icons/outline_chair_white_24dp.png" alt="text">
                <input id="chair10" type="image" name="Chair" src="./img/icons/outline_chair_white_24dp.png" alt="text">
            </div>
            <div class="row8">
                <input id="chair1" type="image" name="Chair" src="./img/icons/outline_chair_white_24dp.png" alt="text">
                <input id="chair2" type="image" name="Chair" src="./img/icons/outline_chair_white_24dp.png" alt="text">
                <input id="chair3" type="image" name="Chair" src="./img/icons/outline_chair_white_24dp.png" alt="text">
                <input id="chair4" type="image" name="Chair" src="./img/icons/outline_chair_white_24dp.png" alt="text">
                <input id="chair5" type="image" name="Chair" src="./img/icons/outline_chair_white_24dp.png" alt="text">
                <input id="chair6" type="image" name="Chair" src="./img/icons/outline_chair_white_24dp.png" alt="text">
                <input id="chair7" type="image" name="Chair" src="./img/icons/outline_chair_white_24dp.png" alt="text">
                <input id="chair8" type="image" name="Chair" src="./img/icons/outline_chair_white_24dp.png" alt="text">
                <input id="chair9" type="image" name="Chair" src="./img/icons/outline_chair_white_24dp.png" alt="text">
                <input id="chair10" type="image" name="Chair" src="./img/icons/outline_chair_white_24dp.png" alt="text">
            </div>
            <div class="row9">
                <input id="chair1" type="image" name="Chair" src="./img/icons/outline_chair_white_24dp.png" alt="text">
                <input id="chair2" type="image" name="Chair" src="./img/icons/outline_chair_white_24dp.png" alt="text">
                <input id="chair3" type="image" name="Chair" src="./img/icons/outline_chair_white_24dp.png" alt="text">
                <input id="chair4" type="image" name="Chair" src="./img/icons/outline_chair_white_24dp.png" alt="text">
                <input id="chair5" type="image" name="Chair" src="./img/icons/outline_chair_white_24dp.png" alt="text">
                <input id="chair6" type="image" name="Chair" src="./img/icons/outline_chair_white_24dp.png" alt="text">
                <input id="chair7" type="image" name="Chair" src="./img/icons/outline_chair_white_24dp.png" alt="text">
                <input id="chair8" type="image" name="Chair" src="./img/icons/outline_chair_white_24dp.png" alt="text">
                <input id="chair9" type="image" name="Chair" src="./img/icons/outline_chair_white_24dp.png" alt="text">
                <input id="chair10" type="image" name="Chair" src="./img/icons/outline_chair_white_24dp.png" alt="text">
            </div>
            <div class="row10">
                <input id="chair10_1" type="image" name="Chair" src="./img/icons/outline_chair_white_24dp.png" alt="text">
                <img for="chair10_1" src="./img/icons/outline_chair_white_24dp.png">
                <input id="chair2" type="image" name="Chair" src="./img/icons/outline_chair_white_24dp.png" alt="text">
                <input id="chair3" type="image" name="Chair" src="./img/icons/outline_chair_white_24dp.png" alt="text">
                <input id="chair4" type="image" name="Chair" src="./img/icons/outline_chair_white_24dp.png" alt="text">
                <input id="chair5" type="image" name="Chair" src="./img/icons/outline_chair_white_24dp.png" alt="text">
                <input id="chair6" type="image" name="Chair" src="./img/icons/outline_chair_white_24dp.png" alt="text">
                <input id="chair7" type="image" name="Chair" src="./img/icons/outline_chair_white_24dp.png" alt="text">
                <input id="chair8" type="image" name="Chair" src="./img/icons/outline_chair_white_24dp.png" alt="text">
                <input id="chair9" type="image" name="Chair" src="./img/icons/outline_chair_white_24dp.png" alt="text">
                <input id="chair10" type="image" name="Chair" src="./img/icons/outline_chair_white_24dp.png" alt="text">
            </div>
        </div>
	</div>
	<footer></footer>
	<script src="scripts/jquery-3.3.1.min.js "></script>
    <script src="scripts/script.js "></script>
</body>

</html>