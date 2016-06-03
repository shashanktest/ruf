<?php 
//printing star  

for($i=0;$i<=5;$i++){
	for($j=5-$i;$j>=1;$j--){
		echo "*&nbsp;";
	}
echo "<br>";
}
?>

<?php 
for($i=0;$i<=5;$i++){
	for($j=0;$j<=$i; $j++)
	{
		echo "*&nbsp";
	}
	echo "</br>";
}
?>

<?php /* 
for($i=0;$i<=10;$i++){
	for($j=0;$j<=5;$j++){
		echo "*&nbsp";
	}
	for($k=$j-1;$k>$i-1;$k--){
		echo "*&nbsp";
	}
echo "<br/>";
}
*/
?>

<?php //Diamond
/*for($i=0;$i<=6;$i++){
	for($k=6;$k>=$i;$k--){
		echo " &nbsp;";
	}
	for($j=1;$j<=$i;$j++){
		echo "* &nbsp;";
	}
	echo "<br>";
}
for($i=5;$i>=1;$i--){
	for($k=6;$k>=$i;$k--){
		echo " &nbsp;";
	}
	for($j=1;$j<=$i;$j++){
		echo "* &nbsp;";
	}
	echo "<br>";
}*/
?>
<?php /*
<select name="age2" class="numb">
<?php 
for ($k = 18; $k <= 75; $k++) {
    $selected = '';
    if($k == 30){
        $selected = 'selected="selected"';
    } else {
        $selected = '';
    }
    echo '<option value='.sprintf("%02d", $k).' '.$selected.' >'.sprintf("%02d", $k).'</option>'; 

}
?>
</select> */?>






<?php 
for($i=0;$i<=6;$i++){
	for($k=6;$k>=$i;$k--){
		echo " &nbsp;";
	}
	for($l=1;$l<=$i;$i++){
		echo "* &nbsp;";
	}
	echo "<br>";
		
}

