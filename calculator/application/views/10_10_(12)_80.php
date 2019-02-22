<?php //include('http://auroraresidences.com/header.php'); ?>
<?php //include('aurora_view.php'); ?>

<head>
	<h1>Aurora Residences</h1>
	<p>10 10(12) 80</p>
	<p>10% DOWNPAYMENT  WITH SPOT CASH DISCOUNT OF 3%</p>
	<p>10% DOWNPAYMENT PAYABLE IN 12 MONTHS</p>
	<p>80% BALANCE PAYABLE BY FINANCING</p>
</head>
<?php 
$months 			= 12;
$unit 				= $info[0];//unit
$uname 				= $info[1];//unit name
$price 				= round($info[2],2,PHP_ROUND_HALF_UP);//price
$category 			= $info[3];//category
$area 				= $info[4];//area
$floor 				= $info[5];//floor
$dp					= round(($price*.1),2,PHP_ROUND_HALF_UP);
$dp_disc			= round(($dp*.03),2,PHP_ROUND_HALF_UP);
$net_unit_price		= round(($price-$dp_disc),2,PHP_ROUND_HALF_UP);
$charge				= round(($net_unit_price*.05),2,PHP_ROUND_HALF_UP);
$reservation_fee	= 15000;
$after_reservation	= $net_unit_price-$reservation_fee;
$H26				= $after_reservation*'.1';
$bal				= $after_reservation*'.8';
$K26				= $H26+$charge;

function pmt($pa,$years,$bal) {
    $mrate = $pa/12;
	$period = $years *12;
	$upper = $mrate*$bal;
	$lower = pow((1+$mrate),-$period);
	$lower2 = 1-$lower;
	$gg = $upper/$lower2;
	return round($gg,2,PHP_ROUND_HALF_UP);
}

?>
<!--Unit Info-->
Unit #:<input type="text" value = "<?php echo $unit;?>" readonly><br/>
Floor:<input type="text" value = "<?php echo $floor;?>" readonly><br/>
Total Area:<input type="text" value = "<?php echo $area;?>" readonly><br/>
Unit Type:<input type="text" value = "<?php echo $uname;?>" readonly><br/>
<br/><br/>

<!--Unit Price-->
UNIT PRICE:<input type="text" value = "<?php echo $price;?>" readonly><br/>
LESS DISCOUNT ON CASH DOWNPAYMENT<br/>
10% DOWNPAYMENT:<input type="text" value = "<?php echo $dp;?>" readonly><br/>
LESS 3% DISCOUNT ON DOWNPAYMENT:<input type="text" value = "<?php echo $dp_disc;?>" readonly><br/>
NET UNIT PRICE:<input type="text" value = "<?php echo $net_unit_price;?>" readonly><br/>
<br/>

ADD 5% OF UNIT PRICE FOR CHARGES:<input type="text" value = "<?php echo $charge;?>" readonly><br/>
<br/><br/>

TOTAL CONTRACT PRICE:<input type="text" value = "<?php echo $net_unit_price;?>" readonly><br/>
<br/><br/>

LESS RESERVATION FEE:<input type="text" value = "<?php echo $reservation_fee;?>" readonly><br/>
	<table>	
		<tr>		
			<td>BALANCE DUE IN 30 DAYS AFTER RESERVATION: </td> 
			<td><?php echo $after_reservation."&nbsp&nbsp";?></td>		
			<td><?php echo $charge."&nbsp&nbsp";?></td>		
			<td><?php echo $after_reservation+$charge."&nbsp&nbsp";?></td>			
		</tr>
	</table>
	&nbsp 10% DOWNPAYMENT:<?php echo round($H26,2,PHP_ROUND_HALF_UP)."<br/>";?>
	<table>	
		<tr>		
			<td>10% DOWNPAYMENT: </td> 
			<td><?php echo round($H26,2,PHP_ROUND_HALF_UP)."&nbsp&nbsp";?></td>		
			<td><?php echo round($charge,2,PHP_ROUND_HALF_UP)."&nbsp&nbsp";?></td>		
			<td><?php echo round($K26,2,PHP_ROUND_HALF_UP)."&nbsp&nbsp";?></td>			
		</tr>
	</table>
<br/><br/>
<!--Downpayment Breakdown-->


	<table>
		<tr>	
			<th align = "center">Month</th>
			<th align = "center">UNIT</th>
			<th align = "center">OTHER CHARGES</th>
			<th align = "center">TOTAL</th>
		</tr>
		<?php for($c=1;$c<=$months;$c++	){?>
		<tr>
			<td align = "center"><?php echo $c?></td>
			<td align = "center"><?php if($c<12){echo round($H26/11,2,PHP_ROUND_HALF_UP);}?></td>
			<td align = "center"><?php if($c==12){echo $charge;}?></td>
			<td align = "center"><?php if($c==12){echo $charge;}else{echo round($H26/11,2,PHP_ROUND_HALF_UP);}?></td>
		</tr>
		<?php }?>
		<tr>
			<td></td>
			<td align = "center"><?php echo round($H26,2,PHP_ROUND_HALF_UP);?></td>
			<td align = "center"><?php echo round($charge,2,PHP_ROUND_HALF_UP);?></td>
			<td align = "center"><?php echo round($K26,2,PHP_ROUND_HALF_UP);?></td>
		</tr>
	</table>
<br/><br/>	
80% BALANCE PAYABLE 30 DAYS  AFTER THE 12TH PAYMENT:<input type="text" value = "<?php echo  round($bal,2,PHP_ROUND_HALF_UP);?>" readonly><br/>
<br/><br/>

<!--Mortgage-->
CASH<br/>
BANK FINANCING<br/>
Estimated monthly amortization - BPI rates<br/>
<br/><br/>
	<table>

			<tr>
				<?php $pa=.065; $years = 3;?>
				<td>3 Years &nbsp&nbsp </td>
				<td>6.5% p.a. &nbsp&nbsp </td>
				<td><?php echo pmt($pa,$years,$bal)?></td>
			</tr>
			<tr>
				<?php $pa=.07; $years = 5;?>
				<td>5 Years &nbsp&nbsp</td>
				<td>7.0% p.a. &nbsp&nbsp</td>
				<td><?php echo pmt($pa,$years,$bal)?></td>
			</tr>
			<tr>
				<?php $pa=.085; $years = 10;?>
				<td>10 Years &nbsp&nbsp</td>
				<td>8.5% p.a. &nbsp&nbsp</td>
				<td><?php echo pmt($pa,$years,$bal)?></td>
			</tr>
			<tr>
				<?php $pa=.095; $years = 15;?>
				<td>15 Years &nbsp&nbsp</td>
				<td>9.5% p.a. &nbsp&nbsp </td>
				<td><?php echo pmt($pa,$years,$bal)?></td>
			</tr>
	</table>
</html>