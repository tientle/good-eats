<?php
	include 'database.php';
	$query = "SELECT * FROM goodeats ORDER BY name";
	$socks = mysqli_query($conn, $query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name=viewport content="width=device-width, initial-scale=1">
	<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Lexend+Mega&family=Roboto+Mono:wght@100&display=swap" rel="stylesheet">
	<title> View Good Eats </title>
	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="css/table.css">
</head>

<body>
<div id="container">

<h1>good eats records</h1>

<p><a href="index.php">⌂ Home</a></p>
<p><a href="goodeats.php">Submit Good Eats</a></p>

<!--
     the form below is handled by the PHP file named in the action= attribute
-->
<!-- <form class="smallform" method="post" action="socks_edit.php" autocomplete="off"> -->

<table>
	<!-- table column headings -->
	<tr>
	  <th>Name</th>
	  <th>Category</th>
	  <th>Favorite Menu Item</th>
	  <th>Location</th>
	</tr>


<?php while ($row = mysqli_fetch_assoc($socks)) :  ?>

<tr>

  <!-- notice how, above, the database record id becomes
       the id and value of the radio button -->
  <td><?php echo $row['name']; ?></td>
  <td><?php echo $row['category']; ?></td>
  <td><?php echo $row['favorite']; ?></td>
  <td><?php echo $row['location']; ?></td>
</tr><!-- end of HTML table row -->

<?php endwhile;  ?>
<!-- end the PHP while-loop
     everything else on this page is normal HTML -->

</table>

<!-- close the form -->

<p><a href="index.php">⌂ Home</a></p>
<p><a href="goodeats.php">Submit Good Eats</a></p>

</div> <!-- close container -->
</body>
</html>
