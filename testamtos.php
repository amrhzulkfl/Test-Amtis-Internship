<!DOCTYPE html>
<html>
<head>
    <title>Electricity Consumption Calculator</title>
    <!-- Include your preferred CSS framework here -->
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="svg-container">
    <!-- I crated SVG with: https://codepen.io/anthonydugois/pen/mewdyZ -->
    <svg viewbox="0 0 800 400" class="svg">
      <path id="curve" fill="#50c6d8" d="M 800 300 Q 400 350 0 300 L 0 0 L 800 0 L 800 300 Z">
      </path>
    </svg>
    <div class="imgheader">
	    <img src="image2.png" alt="calt">
    </div>
  </div>

<header>
    <h1>Electricity Consumption Calculator</h1>
</header>

<main>
    <div class="container">
    <div class="form-group">
    <form action="" method="post">
        <label for="voltage">Voltage (V):</label>
        <input type="number" id="voltage" name="voltage" required><br><br>

        <label for="current">Current (A):</label>
        <input type="number" id="current" name="current" required><br><br>

        <label for="hours">Hours of Usage:</label>
        <input type="number" id="hours" name="hours" required><br><br>

        <label for="rate">Current Rate:</label>
        <input type="number" id="rate" name="rate" required><br><br>

        <input class="button-container" type="submit" name="calculate" value="Calculate">
    </form>
</div>
</div>

    <?php

    $voltage = 0;
    $current = 0;
    $hours = 0;
    $rate = 0;
    $power = 0;
    $energy = 0;
    $totalCharge = 0;

    if(isset($_POST['calculate'])){
        $voltage = $_POST['voltage'];
        $current = $_POST['current'];
        $hours = $_POST['hours'];
        $rate = $_POST['rate'];

        // Calculate power in watt-hours (Wh)
        $power = $voltage * $current;

        // Calculate energy in kilowatt-hours (kWh)
        $energy = $power * $hours / 1000;

        // Calculate total charge
        $totalCharge = $energy * ($rate / 100);
    }
    ?>

<div class="center">
<div class="coolinput">
        <label for="input" class="text">Power:</label>
        <div class="calcu"><?php echo $power . " Wh<br>";?></div>
</div>

<div class="coolinput">
        <label for="input" class="text">Energy:</label>
        <div class="calcu"><?php echo $energy . " kWh<br>";?></div>
</div>

<div class="coolinput">
        <label for="input" class="text">Total Charge:</label>
        <div class="calcu"><?php echo $totalCharge . "<br>";?></div>
</div>
</div>

</main>
</body>
</html>
