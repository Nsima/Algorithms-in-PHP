<?php 

error_reporting(0); 
$a= $_POST['val_1']; $b= $_POST['val_2']; $c= $_POST['val_3']; $d= $_POST['val_4']; $e= $_POST['val_5']; 
if(isset($_POST['clear'])) { 
	$a=""; 
	$b=""; 
	$c=""; 
	$d=""; 
	$e=""; 
	$display_original=""; 
	$process_results=""; 
	} 
?> 
<html> 
	<head> 
		<title>Heap Sort in PHP</title> 
		<style> 
		body { 
			font-family:arial;
			} 
		form { 
			width: 400px; 
			} 
		label { 
			float: left; 
			width: 95px; 
			} 
		.clear { 
			clear: both; 
			height: 0; 
			line-height: 0; 
			} 
		.floatright { 
			float: right; 
			} 
		</style> 
	</head> 
	<body> 
		<h2>Heap Sort in PHP</h2> 
		<form action="" method="post"> 
			<label>Value No. 1 : </label> 
			<input type="text" name="val_1" value="<?php echo $a; ?>" size="5" maxlength="5" autofocus/>
			<br/><br> 
			<label>Value No. 2 : </label> 
			<input type="text" name="val_2" value="<?php echo $b; ?>" size="5" maxlength="5"/>
			<br/><br> 
			<label>Value No. 3 : </label> 
			<input type="text" name="val_3" value="<?php echo $c; ?>" size="5" maxlength="5"/>
			<br/><br> 
			<label>Value No. 4 : </label> 
			<input type="text" name="val_4" value="<?php echo $d; ?>"size="5" maxlength="5"/>
			<br/><br> 
			<label>Value No. 5 : </label> 
			<input type="text" name="val_5" value="<?php echo $e; ?>"size="5" maxlength="5"/>
			<br/> <br /> 
			<input type="submit" value="Sort" name="bubble"/> 
			<input type="submit" value="Clear" name="clear" /> 
		</form> 
		<?php 
		function build_heap(&$array, $i, $t){ 
			$tmp_var = $array[$i]; 
			$j = $i * 2 + 1; 
			while ($j <= $t) { 
				if($j < $t) 
					if($array[$j] < $array[$j + 1]) { 
						$j = $j + 1; 
						} 
						if($tmp_var < $array[$j]) { 
							$array[$i] = $array[$j]; $i = $j; $j = 2 * $i + 1; 
						} else { 
							$j = $t + 1; 
							} 
						} 
						$array[$i] = $tmp_var; 
					} 

		function heap_sort(&$array) { 
		//This will heapify the array 
			$init = (int)floor((count($array) - 1) / 2); 
		
		// Thanks jimHuang for bug report 
			for($i=$init; $i >= 0; $i--){ 
				$count = count($array) - 1; 
				build_heap($array, $i, $count); 
				} 
		//swaping of nodes 
			for ($i = (count($array) - 1); $i >= 1; $i--) { 
				$tmp_var = $array[0]; 
				$array [0] = $array [$i]; 
				$array [$i] = $tmp_var; 
				build_heap($array, 0, $i - 1); 
				} 
			} 

			if(isset($_POST['bubble'])) { 
				$arr = array($a,$b,$c,$d,$e); 
				$orig = implode(",", $arr); 
				$result = heap_sort($arr); 
				$final_sort = implode(",", $arr); 
				$display_original = "Original Values : " .$orig."<br><br>"; 
				$process_results = "Sorted Values : " .$final_sort."<br>"; 
				echo $display_original; 
				echo $process_results; 
			} 
				
	?> 
	</body> 
</html> 