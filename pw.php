

<?php
	$star=5;
	for($a=1; $a<=$star; $a++){
	for($i=1; $i<=$a; $i++){
		echo " &nbsp";
	}
	for($c=$star; $c>=$a; $c-=1){
		echo "*";
	}
	echo "<br>";
	}
?>

<?php
	$star=6;
	for($a=1; $a<$star; $a++){
	for($b=1; $b<=$a; $b++){
		echo "&nbsp";
	}
	for($c=$star; $c>=$a; $c-=1){
		echo "*";
	}
	echo "<br>";
	}
?>


<?php
	$star=1;
	for($a=5; $a>=$star; $a--){
	for($b=5; $b>=$a; $b--){
		echo "&nbsp";
	}
	for($c=$star; $c<=$a; $c++){
		echo $c;
	}
	echo "<br>";
	}
?>