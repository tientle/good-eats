<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name=viewport content="width=device-width, initial-scale=1">
    <title> Good Eats </title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Lexend+Mega&family=Roboto+Mono:wght@100&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
<div id="container">
<h1> submit your good eats.</h1>

<p><a href="index.php">⌂ Home</a></p>
<p><a href="view_eats.php">View Good Eats </a></p>

<div id="eats">

<p id=instruct> Submit your Good Eats here: </p>

<!-- this form is handled by the JavaScript file linked at bottom -->

<form id="eatsform" method="post" action="" autocomplete="off">
  <label for="name"> Restaurant Name </label>
	<input type="text" name="name" id="name" maxlength="140" required>

  <label for="category"> Category </label>
    <select name="category" id="category" required>
        <option value=""></option>
        <option value="Breakfast">Breakfast</option>
        <option value="Lunch">Lunch</option>
        <option value="Dinner">Dinner</option>
        <option value="Other">Other</option>
    </select>

  <label for="favorite"> Favorite Menu Item </label>
	<input type="text" name="favorite" id="favorite" maxlength="140" required>

  <label for="location">Location (City, State) </label>
	<input type="text" name="location" id="location" maxlength="140" required>

	<input type="submit" id="submit" value="Submit">

</form>
<!-- close the form -->

</div> <!-- close #eats -->
<!-- empty div -->

<div id="response"></div>
</div> <!-- close container -->
<script src="js/enter_eats.js"></script>
</body>
</html>
