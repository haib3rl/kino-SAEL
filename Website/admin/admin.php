<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Dashboard</title>
    <link rel="icon" type="image/png" href="../img/logo.png">
    <link rel="stylesheet" href="../style/styles.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
</head>

<body>
    <?php
    $link = mysqli_connect("localhost", "root", "", "cinema_db");
    $sqlBookings = "SELECT * FROM bookingTable";
    $sqlMoovies = "SELECT * FROM movietable";
    $bookingsNo=mysqli_num_rows(mysqli_query($link, $sqlBookings));
    $messagesNo=mysqli_num_rows(mysqli_query($link, "SELECT * FROM feedbackTable"));
    $moviesNo=mysqli_num_rows(mysqli_query($link, "SELECT * FROM movieTable"));
    ?>
    <div class="admin-section-header">
        <div class="admin-logo">
            CSS Kino
        </div>
        <div class="admin-login-info">
            <i class="far fa-bell admin-notification-button"></i>
            <i class="far fa-comment-alt"></i>
            <a href="#">Welcome, Admin</a>
            <img class="admin-user-avatar" src="../img/avatar.png" alt="">
        </div>
    </div>
    <div class="admin-container">
        <div class="admin-section admin-section2">
                <div class="admin-section-panel admin-section-panel1">
                    <div class="admin-panel-section-header">
                        <h2>Bookings</h2>
                        <i class="fas fa-ticket-alt" style="background-color: #cf4545"></i>
                    </div>
                    <div class="admin-panel-section-content">
                        <?php
                        if($result = mysqli_query($link, $sqlBookings)){
                            if(mysqli_num_rows($result) > 0){
                                while($row = mysqli_fetch_array($result)){
                                    echo "<div class=\"admin-panel-section-booking-item\">\n";
                                    echo "                            <div class=\"admin-panel-section-booking-response\">\n";
                                    echo "                                <a href='deleteBooking.php?id=".$row['bookingID']."'><i class=\"fas fa-times decline-booking\" title=\"Reject booking\"></i></a>\n";
                                    echo "                            </div>\n";
                                    echo "                            <div class=\"admin-panel-section-booking-info\">\n";
                                    echo "                                <div>\n";
                                    echo "                                    <h3>". $row['movieName'] ."</h3>\n";
                                    echo "                                    <i class=\"fas fa-circle \"></i>\n";
                                    echo "                                    <h4>". $row['bookingTheatre'] ."</h4>\n";
                                    echo "                                    <i class=\"fas fa-circle \"></i>\n";
                                    echo "                                    <h4>". $row['bookingDate'] ."</h4>\n";
                                    echo "                                    <i class=\"fas fa-circle \"></i>\n";
                                    echo "                                    <h4>". $row['bookingTime'] ."</h4>\n";
                                    echo "                                    <h4>". $row['bookingFName'] ." ". $row['bookingLName'] ."</h4>\n";
                                    echo "                                    <i class=\"fas fa-circle\"></i>\n";
                                    echo "                                    <h4>". $row['bookingPNumber'] ."</h4>\n";
                                    echo "                                    <i class=\"fas fa-circle\"></i>\n";
                                    echo "                                    <h4>". $row['bookingSeatNumber'] ."</h4>\n";
                                    echo "                                    <i class=\"fas fa-circle\"></i>\n";
                                    echo "                                    <h4>". $row['bookingPNumber'] ."</h4>\n";
                                    echo "                                </div>\n";
                                    echo "                            </div>\n";
                                    echo "                        </div>";
                                }
                                mysqli_free_result($result);
                            } else{
                                echo '<h4 class="no-annot">No Bookings right now</h4>';
                            }
                        } else{
                            echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
                        }
                        ?>
                    </div>
                </div>
                <div class="admin-section-panel admin-section-panel2">
                    <div class="admin-panel-section-header">
                        <h2>Movies</h2>
                        <i class="fas fa-film" style="background-color: #4547cf"></i>
                    </div>
                    <div class="admin-panel-section-content">
                    <?php
                        if($result = mysqli_query($link, $sqlMoovies)){
                            if(mysqli_num_rows($result) > 0){
                                echo "<table>\n";
                                echo "<thead> \n";
                                echo "   <tr> \n
                                        <th>Movie Titel</th>
                                        <th >Spielt von</th>
                                        <th >Letzter Spieltag</th>
                                        <th>Film Löschen</th>
                                    </tr>
                                </thead>
                                <tbody> 
                                \n";
                                while($row = mysqli_fetch_array($result)){
                                    echo "                          <tr>\n";
    
                                    echo "                   <td>                 <h3>". $row['movieTitle'] ."</h3></td>\n";
                                    echo "                   <td>                  <h4>". $row['movieRelDate'] ."</h4></td>\n";
                                    echo "                   <td>                  <h4>". $row['moviePlayTill'] ."</h4></td>\n";                                    ;
                                   echo " <td>";
                                    echo "                                <a href='deleteMovies.php?id=".$row['movieID']."'><i class=\"fas fa-trash\" title=\"delete movie\"></i></a>\n";
                                    echo "                            </td> </tr>";
                                }
                                echo "</tbody>\n
                                </table>";
                                mysqli_free_result($result);
                            } else{
                                echo '<h4 class="no-annot">No Bookings right now</h4>';
                            }
                        } else{
                            echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
                        }
                        ?>
                    </div>   
                    <form action="" method="POST">
                        <input placeholder="Title" type="text" name="movieTitle" required>
                        <input placeholder="Trailer" type="text" name="movieTrailer" required>
                        <input placeholder="Genre" type="text" name="movieGenre" required>
                        <input placeholder="Duration" type="number" name="movieDuration" required>
                        <input placeholder="Release Date" type="date" name="movieRelDate" required>
                        <input placeholder="Director" type="text" name="movieDirector" required>
                        <input placeholder="Actors" type="text" name="movieActors" required>
                        <input placeholder="AgeLevel" type="text" name="movieAgeLevel" required>
                        <input placeholder="Producer" type="text" name="movieProducer" required>
                        <input placeholder="SoundSystem" type="text" name="movieSoundsystem" required>
                        <input placeholder="Playtill" type="date" name="moviePlayTill" required>
                        <input placeholder="Describtion" type="text" name="movieDescribtion" required>
                        <input type="file" name="movieImg" accept="image/*">
                        <button type="submit" value="submit" name="submit" class="form-btn">Add Movie</button>
                        <?php
                        if(isset($_POST['submit'])){
                            $insert_query = "INSERT INTO 
                            movieTable (  movieImg,
                                            movieTitle,
                                            movieGenre,
                                            movieDuration,
                                            movieRelDate,
                                            movieDirector,
                                            movieActors,
                                            movieAgeLevel,
                                            movieProducer,
                                            movieSoundsystem,
                                            moviePlayTill,
                                            movieDescribtion)
                            VALUES (        'img/".$_POST['movieImg']."',
                                            '".$_POST["movieTitle"]."',
                                            '".$_POST["movieGenre"]."',
                                            '".$_POST["movieDuration"]."',
                                            '".$_POST["movieRelDate"]."',
                                            '".$_POST["movieDirector"]."',
                                            '".$_POST["movieActors"]."',
                                            '".$_POST["movieAgeLevel"]."',
                                            '".$_POST["movieProducer"]."',
                                            '".$_POST["movieSoundsystem"]."',
                                            '".$_POST["moviePlayTill"]."',
                                            '".$_POST["movieDescribtion"]."')";
                            mysqli_query($link,$insert_query);
                        }

                        ?>
                    </form>
                
            </div>
        </div>
    </div>


</body>

</html>