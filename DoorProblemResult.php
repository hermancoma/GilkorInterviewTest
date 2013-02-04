<center> 
<h1><a href="index.html"> Gilkor Interview Test </a></h1>

<a href="DoorProblem.html"><p> <b> Door Problem </b> <br /></a></p>

<p> Here is the result of Door Problem </p>

<?php
$maxDoor = $_POST["maxDoor"];
if ($maxDoor != 0)
{
	//$maxDoor = 10;
	$maxEmployee = 1000;
	$door[]=array($maxDoor);

	for ($i=1; $i<=$maxDoor; $i++)
	{
		$door[$i] = 0;
	}
	
	//calculate cost
	$steps = 0;
	
	/**
	 * Main algorithm 
	 */
	for ($employeeCounter=1; $employeeCounter <= $maxEmployee ; $employeeCounter++ )
	{
		for ($doorCounter=1; $doorCounter <= $maxDoor ; $doorCounter++)
		{
			if (($doorCounter >= $employeeCounter) && (($doorCounter%$employeeCounter)==0 ))
			{
				if ($door[$doorCounter] == 0)
				{
					$door[$doorCounter] = 1;
				}
				else
				{
					$door[$doorCounter] = 0;
				}
				
				$steps ++;
			}
			
			$steps ++;
		}
		
		$steps ++;
	}
	
	
	for ($doorCounter=1; $doorCounter <= $maxDoor ; $doorCounter++)
	{
		if ($door[$doorCounter] == 1)
		{
			echo "The door number " . $doorCounter . " is Opened <br>";
		}
		else
		{
			echo "The door number " . $doorCounter . " is Closed <br>";
		}
	}
	
	echo "<br />";
	echo "Total steps = $steps";
	
}
else
{
	echo "There is no door. Please be sure to insert the number of the door.";
}
?>

</center>