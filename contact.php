<?php include('includes/process.php');?>
<!doctype html>

<html lang="en">

<meta name="viewport" content="width=device-width, initial-scale=1">


  <meta charset="utf-8">
  <link rel="stylesheet" href="css/style.css">
  <title>Spoonie Cooking</title>
  <meta name="Contact" content="The Contact Form for Spoonie Cooking">
</head><img src="images/final-logo.png" alt="spoonie cooking logo">
<header >
<h1 class= "banner"> Spoonie Cooking- Contact Us </h1>
</header>
<nav class="primary-menu">
  <ul>
    <li><a href="index.php">Home</a></li>
    <li><a href="about.php">About</a></li>
    <li><a href="contact.php">Contact</a></li>
    <li><a href="substitutions.php">Substitutions</a></li>
    <li><a href="recipe.php">Recipe</a></li>
  </ul>
</nav>

<h2 class="banner"> Contact/Requests </h2>

<main>
<?php print $formMessage;?>

<form class="contact-form" method="post">

<label for="name">Name</label>
<input type="text" id="name" name="name">

<label for="email">Email</label>
<input type="text" id="email" name="email">
 
<fieldset>
 
        <legend>Vegetarian?</legend>
 
        <label>Yes <input type="radio" name="vegetarian" value="yes"></label>      

        <label>No <input type="radio" name="vegetarian" value="no"></label>

</fieldset>
 
<fieldset>

        <legend>Food Restrictions</legend>
       
        <label>Soy <input type="checkbox" name="food-restrictions[]" value="soy"></label>
               <br>
       
        <label>Dairy<input type="checkbox" name="food-restrictions[]" value="dairy"></label>
               <br>
       
        <label>Tree Nuts<input type="checkbox" name="food-restrictions[]" value="tree-nuts"></label>
        <br>
        <label> Gluten <input type="checkbox" name="food-restrictions[]" value="gluten"></label>
        <br>
        <label> Other, use Comment Box for details <input type="checkbox" name="food-restrictions[]" value="other"></label>
 
</fieldset>
 
<label for="subscribe">Subscribe for more recipes?</label>
<select name="subscribe" id="subscribe">
        <option value="no">No</option>
        <option value="yes">Yes</option>
</select>
       
<label for="comments">Comments</label>
<textarea name="comments" id="comments"></textarea>

<input type="submit" value="submit">

</form>

</main>
<aside>
<script>

function printDate() {
    var d = new Date();
    var day = d.getDate();
    var month = d.getMonth() + 1;
    var year = d.getFullYear();
    var hours = d.getHours();
    var minutes = d.getMinutes();
       
    if (minutes < 10) {
       minutes = "0" + minutes;
   }

   var suffix = "AM";
   if (hours >= 12) {
        suffix = "PM";
        hours = hours - 12;
    }
       
    if (hours == 0) {
        hours = 12;
    }
    document.write("It is " + hours + ":" + minutes + " " + suffix + " on " + month + "/" + day + "/" + year);
}

</script>
</aside>

<footer class="site-footer">
   <script>printDate();</script>
   <br>
<?php include('includes/footer.php');?>

</footer>

</body>

</html>