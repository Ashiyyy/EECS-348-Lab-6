<html>

<body style = "background-color: d0fdf6;">
<body>

	<h1>Your number is <?php echo $_POST["num"]; ?>, here is your multiplication table: <br></h1>
	<font size = "5">
	<?php
		$table = [[]];
		$num = $_POST["num"];
		$current = 0;
		for ($x = 1; $x <= $num; $x++) {
			for ($y = 1; $y <= $num; $y++){
				$current = ($x * $y);
				$table[$y][$x] = $current;
				if ($x == 1){				
					# echo "<span style='text-indent:10px;'>$current</span>";
					echo "<b>$current</b> \t";;
					continue;
				}
				if ($y == 1){
					# echo "<span style='text-indent:10px;'>$current</span>";
					echo "<b>$current</b> \t";
					continue;
				}
				# echo "<span style='text-indent:10px;'>$current</span>";
				echo "$current \t";
				
			}
			echo "<br>";
		}
	?>
	</font>
</body>
</html>
