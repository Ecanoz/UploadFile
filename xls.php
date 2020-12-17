<?
require('SimpleXLSX.php');
if ($xlsx = SimpleXLSX::parse('example.xlsx')) {
	$satir = $xlsx->dimension()[1];
	$sutun = $xlsx->dimension()[0];
	print_r($xlsx->rows());
	// echo $satir;
	// echo "<br>";
	// echo $sutun;

	// $toplam = 0;
	// for ($i = 0; $i < $satir; $i++) {
	// 	for ($j = 0; $j < $sutun; $j++) {
	// 		$toplam += $xlsx->rows()[$i][$j];
	// 	}
	// }
	// echo $toplam;
} else {
	echo "Hesaplayamadım";
}
?>