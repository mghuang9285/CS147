<!DOCTYPE html>
<html>
<head>
	<title>Search</title> 
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1"> 
	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.2.0/	jquery.mobile-1.2.0.min.css" />
	
	<script src="http://code.jquery.com/jquery-1.8.2.min.js"></script>
	<script src="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.js"></script>
	
	<link rel="stylesheet" type="text/css" href="style.css">
	
</head>


<body>

<div data-role="header">
	<h1>Leaderboard</h1>
	<a href="home.php" data-icon="back">Home</a>
</div>
	
<div data-role="content">	
	
	<div id="leaderboard">
		
		<?php
		include("config.php");
		
		$userid = 1;
		$routeid = 1;
		
		$query = "select UserID, min(Time), Date from Records where RouteID=".$routeid." GROUP BY UserID ORDER BY Time";
		
		$result = mysql_query($query);
			
		$count = 1;
		
		echo "<span class='distanceresult'> Dist: ".$row["min(Time)"]."</span>";
		echo "<span class='difficultyresult'> Diff: ".$row["Date"]."</span>";
		
		/*while($row = mysql_fetch_assoc($result)){
			//echo "<div class='routeresult'><span class='userID'> ".$row["UserID"]."</span>";
			
			$userquery = "select * from Users where UserID=".$row["UserID"];
			$result2 = mysql_($userquery);
			while($row2 = mysql_fetch_assoc($result2)){
				//$userName = $row2["Name"];
				//echo "<div class='routeresult'>".$count.". <span class='userName'> ".$userName."</span>";	
			}
				
			$count++;
		}*/
	?>
	</div>
	

</div>
</body>
</html>