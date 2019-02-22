<?php include('header.php'); ?>
<?php include('aurora_view.php'); ?>

<head>
	<h1>Aurora Residences</h1>
	<h4>SPOT CASH</h4>
	<h4>8% Discount</h4>
</head>

<?php 

$unit 				= $info[0];//unit
$uname 				= $info[1];//unit name
$price 				= $info[2];//price
$category 			= $info[3];//category
$area 				= $info[4];//area
$floor 				= $info[5];//floor
$cash_disc 			= $price*.08; 
$Net_unit_price 	= $price-$cash_disc;
$charge				= $Net_unit_price*.05;
$reservation_fee	= 15000;
$after_reservation	= $Net_unit_price-$reservation_fee;
$balance			= ($Net_unit_price*1.05)-$reservation_fee;

?>

Unit #:<input type="text" value = "<?php echo $unit;?>" readonly><br/>
Floor:<input type="text" value = "<?php echo $floor;?>" readonly><br/>
Total Area:<input type="text" value = "<?php echo $area;?>" readonly><br/>
Unit Type:<input type="text" value = "<?php echo $uname;?>" readonly><br/>
<br/><br/>

Unit Price: <input type="text" value = "<?php echo round($price,2,PHP_ROUND_HALF_UP);?>" readonly><br/>
Less 8% Cash Discount:<input type="text" value = "<?php echo round($cash_disc,2,PHP_ROUND_HALF_UP);?>" readonly><br/>
Net Unit Price:<input type="text" value = "<?php echo round($Net_unit_price,2,PHP_ROUND_HALF_UP);?>" readonly><br/><br/><br/>
TOTAL CONTRACT PRICE:<input type="text" value = "<?php echo round($Net_unit_price,2,PHP_ROUND_HALF_UP);?>" readonly><br/>
ADD 5% OF NET PRICE FOR CHARGES:<input type="text" value = "<?php echo round($charge,2,PHP_ROUND_HALF_UP);?>" readonly><br/>
LESS RESERVATION FEE:<input type="text" value = "<?php echo round($reservation_fee,2,PHP_ROUND_HALF_UP);?>" readonly><br/>
BALANCE DUE IN 30 DAYS AFTER RESERVATION:<input type="text" value = "<?php echo round($balance,2,PHP_ROUND_HALF_UP);?>" readonly><br/>
<table>	
		<tr>		
			<td>BALANCE DUE IN 30 DAYS AFTER RESERVATION: </td> 
			<td><?php echo $after_reservation."&nbsp&nbsp";?></td>		
			<td><?php echo $charge."&nbsp&nbsp";?></td>		
			<td><?php echo round($balance,2,PHP_ROUND_HALF_UP);?></td>			
		</tr>
	</table>
</html>