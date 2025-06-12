<?php
    // Setting the variables
    $userNumFirst = $_POST['firstNumber'];
    $userNumSecond = $_POST['secondNumber'];

    // initalize numbers as an empty string
    $sum = 0;
    $numbers = "";

    for ($counter = 0; $counter < $userNumSecond; $countr++) {
        if ($counter < $userNumSecond){
        $numbers = $numbers . $userNumFirst . "+";
    }
    else {
        $numbers = $numbers + $counter;
    }
    $sum = $sum + $userNumFirst;
}
?>	
	<!-- display the results -->
    <h4>Results:</h4>
    <?php echo $numbers . " = " . $sum ?>