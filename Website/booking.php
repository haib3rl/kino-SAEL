<!DOCTYPE html>
<html lang="en">
<?php 
        $id = $_GET['id'];
        $date = $_GET['date'];
        $time = $_GET['time'];
        $link = mysqli_connect("localhost", "root", "", "cinema_db");

        $movieQuery = "SELECT * FROM movieTable WHERE movieID = $id"; 
        $movieImageById = mysqli_query($link,$movieQuery);
        $row = mysqli_fetch_array($movieImageById);
        $bookedChairsQuery ="SELECT bookingSeatNumber FROM bookingtable WHERE bookingDate ='". $date ."' and bookingtime ='". $time ."' and movieName = '". $row['movieTitle'] . "'" ;
        $reservedseats =  mysqli_query($link,$bookedChairsQuery);
        $seats = mysqli_fetch_array($reservedseats);
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style/styles.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="./style/buchung.css">
    <title>Datails: <?php echo $row['movieTitle']; ?> </title>
    <link rel="icon" type="image/png" href="img/logo.png">
</head>

<body style="background-color:#6e5a11;">
    <div class="booking-panel">
        <div class="booking-panel-section booking-panel-section1">
            <h1>RESERVE YOUR TICKET</h1>
        </div>
        <div class="booking-panel-section booking-panel-section2" onclick="window.history.go(-1); return false;">
            <i class="fas fa-2x fa-times"></i>
        </div>
        <div class="booking-panel-section booking-panel-section3">
            <div class="movie-box">
                <?php
                    echo '<img src="'.$row['movieImg'].'" alt="">';
                    
                    ?>
            </div>
        </div>
        <div class="booking-panel-section booking-panel-section4">
            <div class="title"><?php echo $row['movieTitle']; ?></div>
            <div class="movie-information">
                <table>
                    <tr>
                        <td>GENGRE</td>
                        <td><?php echo $row['movieGenre']; ?></td>
                    </tr>
                    <tr>
                        <td>DURATION</td>
                        <td><?php echo $row['movieDuration']; ?></td>
                    </tr>
                    <tr>
                        <td>RELEASE DATE</td>
                        <td><?php echo $row['movieRelDate']; ?></td>
                    </tr>
                    <tr>
                        <td>DIRECTOR</td>
                        <td><?php echo $row['movieDirector']; ?></td>
                    </tr>
                    <tr>
                        <td>ACTORS</td>
                        <td><?php echo $row['movieActors']; ?></td>
                    </tr>
                    <tr>
                        <td>Vorstellung</td>
                        <td><?php echo $date . ' ' . $time; ?></td>
                    </tr>
                </table>
            </div>
            
            <div class="booking-form-container">
                <form action="" method="POST">
                <div class="seats">

            <?php
            for ($i = 1; $i <= 10; $i++) {
                echo "<div class='row" .$i."'>";
                    for ($c = 1; $c <= 10; $c++) {
                        if (is_array($seats)) {
                            if (str_contains(implode(",", $seats), $i . "_" . $c)) {
                                echo "     <input  class=\"selectedchair\" id=\"chair" .$i . "_". $c . "\" type='checkbox' name='Chair[]' src=\"./img/icons/outline_chair_red_24dp.png\" alt=\"text\" value=\"". $i. "_" .$c ."\">
                                <img for=\"chair" .$i . "_". $c . "\" src=\"./img/icons/outline_chair_red_24dp.png\" > </ input>";
                            } else {
                                echo "     <input id=\"chair" .$i . "_". $c . "\" type='checkbox' name='Chair[]' src=\"./img/icons/outline_chair_white_24dp.png\" alt=\"text\" value=\"". $i. "_" .$c ."\">
                                <img for=\"chair".$i . "_". $c . "\" src=\"./img/icons/outline_chair_white_24dp.png\" > </ input>";
                            }
                        } else {
                            echo "     <input id=\"chair" .$i . "_". $c . "\" type='checkbox' name='Chair[]' src=\"./img/icons/outline_chair_white_24dp.png\" alt=\"text\" value=\"". $i. "_" .$c ."\">
                            <img for=\"chair".$i . "_". $c . "\" src=\"./img/icons/outline_chair_white_24dp.png\" > </ input>";
                            }
                   
                    }
                echo "</div>";
            }
            ?>
            
        
            
</div>
                  
                    <input placeholder="First Name" type="text" name="fName" required>

                    <input placeholder="Last Name" type="text" name="lName">

                    <input placeholder="Phone Number" type="text" name="pNumber" required>

                    <button type="submit" value="submit" name="submit" class="form-btn">Book a Seat</button>
                    <?php
                    $fNameErr = $pNumberErr= "";
                    $fName = $pNumber = "";
            
                    if(isset($_POST['submit'])){
                        $selectedseats = implode(',', $_POST["Chair"]) ;
            
                        $fName = $_POST['fName'];
                        if (!preg_match('/^[a-zA-Z0-9\s]+$/', $fName)) {
                            $fNameErr = 'Name can only contain letters, numbers and white spaces';
                            echo "<script type='text/javascript'>alert('$fNameErr');</script>";
                        }   
            
                        $pNumber = $_POST['pNumber'];
                        if (preg_match("/^[0-9]{3}-[0-9]{4}-[0-9]{4}$/", $pNumber)) {
                            $pNumberErr = 'Phone Number can only contain numbers and white spaces';
                            echo "<script type='text/javascript'>alert('$pNumberErr');</script>";
                        } 
                        
                        $insert_query = "INSERT INTO 
                        bookingTable (  movieName,
                                        bookingDate,
                                        bookingTime,
                                        bookingFName,
                                        bookingLName,
                                        bookingSeatNumber,
                                        bookingPNumber)
                        VALUES (        '".$row['movieTitle']."',
                                        '".$date."',
                                        '".$time."',
                                        '".$_POST["fName"]."',
                                        '".$_POST["lName"]."',
                                        '".$selectedseats."',
                                        '".$_POST["pNumber"]."')";
                        mysqli_query($link,$insert_query);
                        }
                    ?>
                </form>
            </div>
        </div>
    </div>

    <script src="scripts/jquery-3.3.1.min.js "></script>
    <script src="scripts/script.js "></script>
</body>

</html>