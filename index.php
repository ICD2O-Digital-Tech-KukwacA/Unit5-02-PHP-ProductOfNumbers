<!DOCTYPE html>
<html lang="en-ca">
  <head>
    <!-- Metadata -->
    <meta charset="utf-8">
    <meta name="description" content="For Loops">
    <meta name="keywords" content="immaculata, icd2o">
    <meta name="author" content="Kukwac">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Code for the favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="./Favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./Favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./Favicons/favicon-16x16.png">
    <link rel="manifest" href="./Favicons/site.webmanifest">
    <!-- Link to CSS file -->
    <link rel="stylesheet" href="./css/style.css">
    <title>Products of Numbers, For Loops</title>
  </head>
  <body>
    
    <!-- form to get the indexes of refraction from the user -->
    <form action="./results.php" method="post" target="results">
      <label for="firstNumber">First Number:</label>
      <input type="float" id="firstNumber" name="firstNumber"><br><br>
      <label for="secondNumber">Second Number:</label>
      <input type="float" id="secondNumber" name="secondNumber"><br><br>
      <input type="submit" value="Display Result">
    </form>

    <!-- iframe for the results to show on the web page. -->
    <iframe id="results" name="results">
      <div id="user-info">
        <div id="$numbers"></div>
      </div>
    </iframe>  
  </body>
</html>