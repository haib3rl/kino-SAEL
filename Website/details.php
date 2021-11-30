<!DOCTYPE html>
<html lang="en">
<?php 
        $id = $_GET['id'];
        $link = mysqli_connect("localhost", "root", "", "cinema_db");

        $movieQuery = "SELECT * FROM movieTable WHERE movieID = $id"; 
        $movieImageById = mysqli_query($link,$movieQuery);
        $row = mysqli_fetch_array($movieImageById);
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style/styles.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
		<link rel="stylesheet" href="style/DetailPage.css">
    <title>Details: <?php echo $row['movieTitle']; ?> </title>
    <link rel="icon" type="image/png" href="img/logo.png">
</head>
<body>
<header></header>
		<div class="imgvid">
			<img class="plakat" src=" <?php echo $row['movieImg']; ?>" alt="VenomPlakat">
			<iframe 
				class="trailer" 
				src=  <?php echo $row['movieTrailer']; ?>
				title="YouTube video player" 
				frameborder="0"
				width="75%"
				allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
				allowfullscreen>
			</iframe>
		</div>
		<div class="information">
			<p class="description">
            <?php echo $row['movieDescribtion']; ?>
			</p>
			<div>
				<div class="facts">
					<pre><b>Originaltitel:</b>	<?php echo $row['movieTitle']; ?></pre>
					<pre><b>Darsteller:</b></pre>
					<pre class="darsteller">
						 <?php
						  $actors = explode(',',$row['movieActors']);
						  foreach ($actors as $key=>$actor) {
							if ( $key != 0 || $key !=count($actors) ){
								$tag =', <wbr/>';
							  } else {
								  $tag = ', ';
							  }
							  echo '' . $actor .  $tag;
						  }
						?>
					</pre>
					<pre><b>Regie:</b>		<?php echo $row['movieDirector']; ?></pre>
					<pre><b>Genre:</b>		<?php echo $row['movieGenre']; ?></pre>
					<pre><b>Altersfreigabe:</b>	freigegeben ab <?php echo $row['movieAgeLevel']; ?> Jahren</pre>
					<pre><b>Laufzeit:</b>	ca. <?php echo $row['movieDuration']; ?> min.</pre>
					<pre><b>Tonsystem:</b>	<?php echo $row['movieSoundsystem']; ?><img class="icon" src="img/Icons/round_speaker_black_24dp.png" alt="speaker"></pre>
					<pre><b>Verleih:</b>	<?php echo $row['movieProducer']; ?></pre>
				</div>
			</div>
		</div>
		<div class="times">
			<table class="tg">
				<thead>
					<tr>
						<th class="tg-nrix">Mi 27.10</th>
						<th class="tg-nrix">Do 28.10</th>
						<th class="tg-nrix">Fr 29.10</th>
						<th class="tg-nrix">Sa 30.10</th>
						<th class="tg-nrix">So 31.10</th>
						<th class="tg-nrix">Mo 01.11</th>
						<th class="tg-nrix">Di 02.11</th>
					</tr>
				</thead>
				<tbody> 
					<tr>
						<td class="tg-nrix"><a href=<?php echo 'booking.php?id='.$row['movieID'].'&date=27-10&time=18-30' ?>>18:30</a></td>
						<td class="tg-nrix"><a href=<?php echo 'booking.php?id='.$row['movieID'].'&date=28-10&time=18-30' ?>>18:30</a></td>
						<td class="tg-nrix"><a href=<?php echo 'booking.php?id='.$row['movieID'].'&date=29-10&time=18-30' ?>>18:30</a></td>
						<td class="tg-nrix"><a href=<?php echo 'booking.php?id='.$row['movieID'].'&date=30-10&time=18-30' ?>>18:30</a></td>
						<td class="tg-nrix"><a href=<?php echo 'booking.php?id='.$row['movieID'].'&date=01-11&time=18-30' ?>>18:30</a></td>
						<td class="tg-nrix"><a href=<?php echo 'booking.php?id='.$row['movieID'].'&date=02-11&time=18-30' ?>>18:30</a></td>
						<td class="tg-nrix"><a href=<?php echo 'booking.php?id='.$row['movieID'].'&date=03-11&time=18-30' ?>>18:30</a></td>
					</tr>
					<tr>
						<td class="tg-nrix"><a href=<?php echo 'booking.php?id='.$row['movieID'].'&date=27-10&time=20-30' ?>>20:30</a></td>
						<td class="tg-nrix"><a href=<?php echo 'booking.php?id='.$row['movieID'].'&date=28-10&time=20-30' ?>>20:30</a></td>
						<td class="tg-nrix"><a href=<?php echo 'booking.php?id='.$row['movieID'].'&date=29-10&time=20-30' ?>>20:30</a></td>
						<td class="tg-nrix"><a href=<?php echo 'booking.php?id='.$row['movieID'].'&date=30-10&time=20-30' ?>>20:30</a></td>
						<td class="tg-nrix"><a href=<?php echo 'booking.php?id='.$row['movieID'].'&date=01-11&time=20-30' ?>>20:30</a></td>
						<td class="tg-nrix"><a href=<?php echo 'booking.php?id='.$row['movieID'].'&date=02-11&time=20-30' ?>>20:30</a></td>
						<td class="tg-nrix"><a href=<?php echo 'booking.php?id='.$row['movieID'].'&date=03-11&time=20-30' ?>>20:30</a></td>
					</tr>
				</tbody>
			</table>
		</div>
		<footer></footer>
		<script src="scripts/jquery-3.3.1.min.js "></script>
    <script src="scripts/script.js "></script>


</body>

</html>