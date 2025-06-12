<?php
    // initalize numbers as an empty string
    $sum = 0;
    $numbers = "";

    // Setting the variables and validating input
    $userNumFirst = $_POST['firstNumber'];
    $userNumSecond = $_POST['secondNumber'];

for ($counter = 0; $counter < $userNumSecond; $counter++) {
    if ($counter < $userNumSecond - 1){
        $numbers = $numbers . $userNumFirst . "+";
    }
    else {
        $numbers = $numbers . $userNumFirst;
    }
    $sum = $sum + $userNumFirst;
}
?>	
	<!-- display the results -->
    <h4>Results:</h4>
    <?php echo $numbers . " = " . $sum ?>