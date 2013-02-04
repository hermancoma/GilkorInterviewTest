<center> 
<h1><a href="index.html"> Gilkor Interview Test </a></h1>
<!-- Add new comment -->
<a href="DoorProblem.html"><p> <b> Door Problem </b> <br /></a></p>

<p> Here is the result of Door Problem </p>

<?php
$maxDoor = $_POST["maxDoor"];

if ($maxDoor != 0)
{
	$maxDoor = 10;
	$maxEmployee = 3;
	$door = array();

	for ($i = 1; $i <= $maxDoor; $i++)
	{
		$door[$i] = 0;
	}
	
	//calculate cost
	$steps = 0;

	/**
	 * Main algorithm 
	 */
	for ($employeeCounter = 1; $employeeCounter <= $maxEmployee; $employeeCounter++)
	{
		for ($doorCounter = $employeeCounter; $doorCounter <= $maxDoor; $doorCounter+=$employeeCounter)
		{
			$door[$doorCounter] = intval(! $door[$doorCounter]);

			$steps++;
		}

		$steps++;
	}

	foreach ($door as $doorNumber => $status)
	{
		echo "The door number $doorNumber is " . ($status ? "Opened" : "Closed") . "<br />";
	}
	
	echo "CODE : " , implode(',', $door);

	echo "<br />";
	echo "Total steps = $steps";
}
else
{
	echo "There is no door. Please be sure to insert the number of the door.";
}
?>

</center>