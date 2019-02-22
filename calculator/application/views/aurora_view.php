<?php 
	//include('http://auroraresidences.com/header.php');
?>
<html>
	<head>
		<h1>Aurora Residence</h1>
		<h2>Calculator</h2>
		<script type="text/javascript" src="./assets/js/jquery-2.1.4.min.js"></script>
		<script>

			$(function(){
				$('#submit').click(function(){

					var term  = $('#term').val();
					var unit  = $('#unit').val();
					$.ajax({
						url: '<?php echo base_url("aurora/calculate"); ?>',
						data: 'term='+term+'&unit='+unit,
						type: 'POST',
						success: function(data){
							$('#holder').html(data);
						}
					});

				});
			});
		</script>
	</head>
	<body>
	<?php echo $this->session->flashdata('message');?>
	<?php $post =  $this->session->flashdata('post_');?>
		<?php

		 //echo form_open("aurora/calculate");

		 ?>
		<div>
			Terms:
			
			<select name = "term" id="term">
				<option value="" disabled selected>Pick a Term</option>
				<option value = "Cash" <?php echo (isset($_POST['term']) && $_POST['term'] == 'Cash')?"selected='selected'": ''; ?>>Cash</option>
				<option value = "50(12)50" <?php echo (isset($_POST['term']) && $_POST['term'] == '50(12)50')?"selected='selected'": ''; ?>>50(12)50</option>
				<option value = "20(12)80"<?php echo (isset($_POST['term']) && $_POST['term'] == '20(12)80')?"selected='selected'": ''; ?>>20(12)80</option>
				<option value = "20_80" <?php echo (isset($_POST['term']) && $_POST['term'] == '20_80')?"selected='selected'": ''; ?>>20 80</option>
				<option value = "10_10_(12)_80" <?php echo (isset($_POST['term']) && $_POST['term'] == '10_10_(12)_80')?"selected='selected'": ''; ?>>10 10 (12) 80</option>
			</select>
		</div>
		<div>
		
			Units:
		
			<select name = "unit" id="unit">
				<option value="" disabled selected >Pick a Unit</option>
				<option value = "101|1 BR Unit F|4009126.5|Corner Unit|50.97|1" <?php echo (isset($_POST['unit']) && $_POST['unit'] == "101|1 BR Unit F|4009126.5|Corner Unit|50.97|1")?"selected='selected'": ''; ?>>101</option>
				<option value = "102|Studio Unit B1|2182443.50|Unit|30.22|1" <?php echo (isset($_POST['unit']) && $_POST['unit'] == "102|Studio Unit B1|2182443.50|Unit|30.22|1")?"selected='selected'": ''; ?>>102</option>
				<option value = "103|Studio Unit B1|2182443.50|Unit|30.22|1" <?php echo (isset($_POST['unit']) && $_POST['unit'] == "103|Studio Unit B1|2182443.50|Unit|30.22|1")?"selected='selected'": ''; ?>>103</option>
				<option value = "104|Studio Unit B1|2182443.50|Unit|30.22|1" <?php echo (isset($_POST['unit']) && $_POST['unit'] == "104|Studio Unit B1|2182443.50|Unit|30.22|1")?"selected='selected'": ''; ?>>104</option>
				<option value = "105|Studio Unit B1|2182443.50|Unit|30.22|1" <?php echo (isset($_POST['unit']) && $_POST['unit'] == "105|Studio Unit B1|2182443.50|Unit|30.22|1")?"selected='selected'": ''; ?>>105</option>
				<option value = "106|Studio Unit B1|2182443.50|Unit|30.22|1" <?php echo (isset($_POST['unit']) && $_POST['unit'] == "106|Studio Unit B1|2182443.50|Unit|30.22|1")?"selected='selected'": ''; ?>>106</option>
				<option value = "107|Studio Unit B1|2182443.50|Unit|30.22|1" <?php echo (isset($_POST['unit']) && $_POST['unit'] == "107|Studio Unit B1|2182443.50|Unit|30.22|1")?"selected='selected'": ''; ?>>107</option>
				<option value = "108|Studio Unit B1|2182443.50|Unit|30.22|1" <?php echo (isset($_POST['unit']) && $_POST['unit'] == "108|Studio Unit B1|2182443.50|Unit|30.22|1")?"selected='selected'": ''; ?>>108</option>
				<option value = "109|Studio Unit B1|2182443.50|Unit|30.22|1" <?php echo (isset($_POST['unit']) && $_POST['unit'] == "109|Studio Unit B1|2182443.50|Unit|30.22|1")?"selected='selected'": ''; ?>>109</option>
				<option value = "110|1 BR Unit D1|3748353|2 Windows|47.86|1" <?php echo (isset($_POST['unit']) && $_POST['unit'] == "110|1 BR Unit D1|3748353|2 Windows|47.86|1")?"selected='selected'": ''; ?>>110</option>
				<option value = "111|1 BR Unit E1|4781976.25|Corner Unit|63.23|1" <?php echo (isset($_POST['unit']) && $_POST['unit'] == "111|1 BR Unit E1|4781976.25|Corner Unit|63.23|1")?"selected='selected'": ''; ?>>111</option>
				<option value = "112|1 BR Unit E1|4781976.25|Corner Unit|63.23|1" <?php echo (isset($_POST['unit']) && $_POST['unit'] == "112|1 BR Unit E1|4781976.25|Corner Unit|63.23|1")?"selected='selected'": ''; ?>>112</option>
				<option value = "113|1 BR Unit D1|3748353|2 Windows|47.86|1" <?php echo (isset($_POST['unit']) && $_POST['unit'] == "113|1 BR Unit D1|3748353|2 Windows|47.86|1")?"selected='selected'": ''; ?>>113</option>
				<option value = "114|1 BR Unit D1|3748353|2 Windows|47.86|1" <?php echo (isset($_POST['unit']) && $_POST['unit'] == "114|1 BR Unit D1|3748353|2 Windows|47.86|1")?"selected='selected'": ''; ?>>114</option>
				<option value = "116|Studio Unit B1|2182443.5|Unit|30.22|1" <?php echo (isset($_POST['unit']) && $_POST['unit'] == "116|Studio Unit B1|2182443.5|Unit|30.22|1")?"selected='selected'": ''; ?>>116</option>
				<option value = "203|Studio Unit B2|1776093.5|Unit|23.92|2" <?php echo (isset($_POST['unit']) && $_POST['unit'] == "203|Studio Unit B2|1776093.5|Unit|23.92|2")?"selected='selected'": ''; ?>>203</option>
				<option value = "204|Studio Unit B2|1776093.5|Unit|23.92|2" <?php echo (isset($_POST['unit']) && $_POST['unit'] == "204|Studio Unit B2|1776093.5|Unit|23.92|2")?"selected='selected'": ''; ?>>204</option>
				<option value = "206|Studio Unit B2|1776093.5|Unit|23.92|2" <?php echo (isset($_POST['unit']) && $_POST['unit'] == "206|Studio Unit B2|1776093.5|Unit|23.92|2")?"selected='selected'": ''; ?>>206</option>
				<option value = "207|Studio Unit B2|1776093.5|Unit|23.92|2" <?php echo (isset($_POST['unit']) && $_POST['unit'] == "207|Studio Unit B2|1776093.5|Unit|23.92|2")?"selected='selected'": ''; ?>>207</option>
				<option value = "208|Studio Unit B2|1776093.5|Unit|23.92|2" <?php echo (isset($_POST['unit']) && $_POST['unit'] == "208|Studio Unit B2|1776093.5|Unit|23.92|2")?"selected='selected'": ''; ?>>208</option>
				<option value = "209|Studio Unit B2|1776093.5|Unit|23.92|2" <?php echo (isset($_POST['unit']) && $_POST['unit'] == "209|Studio Unit B2|1776093.5|Unit|23.92|2")?"selected='selected'": ''; ?>>209</option>
				<option value = "210|1 BR Unit D2|2935653|2 Windows|35.26|2" <?php echo (isset($_POST['unit']) && $_POST['unit'] == "210|1 BR Unit D2|2935653|2 Windows|35.26|2")?"selected='selected'": ''; ?>>210</option>
				<option value = "211|1 BR Unit E2|3352860.5|Corner Unit|39.74|2" <?php echo (isset($_POST['unit']) && $_POST['unit'] == "211|1 BR Unit E2|3352860.5|Corner Unit|39.74|2")?"selected='selected'": ''; ?>>211</option>
				<option value = "212|1 BR Unit E2|3352860.5|Corner Unit|39.74|2" <?php echo (isset($_POST['unit']) && $_POST['unit'] == "212|1 BR Unit E2|3352860.5|Corner Unit|39.74|2")?"selected='selected'": ''; ?>>212</option>
				<option value = "213|1 BR Unit D2|2935653|2 Windows|35.26|2" <?php echo (isset($_POST['unit']) && $_POST['unit'] == "213|1 BR Unit D2|2935653|2 Windows|35.26|2")?"selected='selected'": ''; ?>>213</option>
				<option value = "214|1 BR Unit D2|2935653|2 Windows|35.26|2" <?php echo (isset($_POST['unit']) && $_POST['unit'] == "214|1 BR Unit D2|2935653|2 Windows|35.26|2")?"selected='selected'": ''; ?>>214</option>
				<option value = "215|Studio Unit B2|1776093.5|Unit|23.92|2" <?php echo (isset($_POST['unit']) && $_POST['unit'] == "215|Studio Unit B2|1776093.5|Unit|23.92|2")?"selected='selected'": ''; ?>>215</option>
				<option value = "218|1 BR Unit D2|2935653|2 Windows|35.26|2" <?php echo (isset($_POST['unit']) && $_POST['unit'] == "218|1 BR Unit D2|2935653|2 Windows|35.26|2")?"selected='selected'": ''; ?>>218</option>
				<option value = "301|2 BR Unit G2|4395363.25|Corner Unit|52.34|3" <?php echo (isset($_POST['unit']) && $_POST['unit'] == "301|2 BR Unit G2|4395363.25|Corner Unit|52.34|3")?"selected='selected'": ''; ?>>301</option>
				<option value = "303|Studio Unit B2|1776093.5|Unit|23.92|3" <?php echo (isset($_POST['unit']) && $_POST['unit'] == "303|Studio Unit B2|1776093.5|Unit|23.92|3")?"selected='selected'": ''; ?>>303</option>
				<option value = "304|Studio Unit B2|1776093.5|Unit|23.92|3" <?php echo (isset($_POST['unit']) && $_POST['unit'] == "304|Studio Unit B2|1776093.5|Unit|23.92|3")?"selected='selected'": ''; ?>>304</option>
				<option value = "306|Studio Unit B2|1776093.5|Unit|23.92|3" <?php echo (isset($_POST['unit']) && $_POST['unit'] == "306|Studio Unit B2|1776093.5|Unit|23.92|3")?"selected='selected'": ''; ?>>306</option>
				<option value = "307|Studio Unit B2|1776093.5|Unit|23.92|3" <?php echo (isset($_POST['unit']) && $_POST['unit'] == "307|Studio Unit B2|1776093.5|Unit|23.92|3")?"selected='selected'": ''; ?>>307</option>
				<option value = "308|Studio Unit B2|1776093.5|Unit|23.92|3" <?php echo (isset($_POST['unit']) && $_POST['unit'] == "308|Studio Unit B2|1776093.5|Unit|23.92|3")?"selected='selected'": ''; ?>>308</option>
				<option value = "309|Studio Unit B2|1776093.5|Unit|23.92|3" <?php echo (isset($_POST['unit']) && $_POST['unit'] == "309|Studio Unit B2|1776093.5|Unit|23.92|3")?"selected='selected'": ''; ?>>309</option>
				<option value = "310|1 BR Unit D2|2954024.75|2 Windows|35.26|3" <?php echo (isset($_POST['unit']) && $_POST['unit'] == "310|1 BR Unit D2|2954024.75|2 Windows|35.26|3")?"selected='selected'": ''; ?>>310</option>
				<option value = "313|1 BR Unit D2|2954024.75|2 Windows|35.26|3" <?php echo (isset($_POST['unit']) && $_POST['unit'] == "313|1 BR Unit D2|2954024.75|2 Windows|35.26|3")?"selected='selected'": ''; ?>>313</option>
				<option value = "314|1 BR Unit D2|2954024.75|2 Windows|35.26|3" <?php echo (isset($_POST['unit']) && $_POST['unit'] == "314|1 BR Unit D2|2954024.75|2 Windows|35.26|3")?"selected='selected'": ''; ?>>314</option>
				<option value = "315|Studio Unit B2|1776093.5|Unit|23.92|3" <?php echo (isset($_POST['unit']) && $_POST['unit'] == "315|Studio Unit B2|1776093.5|Unit|23.92|3")?"selected='selected'": ''; ?>>315</option>
				<option value = "316|Studio Unit B2|1776093.5|Unit|23.92|3" <?php echo (isset($_POST['unit']) && $_POST['unit'] == "316|Studio Unit B2|1776093.5|Unit|23.92|3")?"selected='selected'": ''; ?>>316</option>
				<option value = "317|Studio Unit B2|1776093.5|Unit|23.92|3" <?php echo (isset($_POST['unit']) && $_POST['unit'] == "317|Studio Unit B2|1776093.5|Unit|23.92|3")?"selected='selected'": ''; ?>>317</option>
				<option value = "318|1 BR Unit D2|2954024.75|2 Windows|35.26|3" <?php echo (isset($_POST['unit']) && $_POST['unit'] == "318|1 BR Unit D2|2954024.75|2 Windows|35.26|3")?"selected='selected'": ''; ?>>318</option>
				<option value = "319|2 BR Unit G1|4331228.75|Corner Unit|51.58|3" <?php echo (isset($_POST['unit']) && $_POST['unit'] == "319|2 BR Unit G1|4331228.75|Corner Unit|51.58|3")?"selected='selected'": ''; ?>>319</option>
				<option value = "501|2 BR Unit G1|4331228.75|Corner Unit|51.58|5" <?php echo (isset($_POST['unit']) && $_POST['unit'] == "501|2 BR Unit G1|4331228.75|Corner Unit|51.58|5")?"selected='selected'": ''; ?>>501</option>
				<option value = "502|Studio Unit B2|1776093.5|Unit|23.92|5" <?php echo (isset($_POST['unit']) && $_POST['unit'] == "502|Studio Unit B2|1776093.5|Unit|23.92|5")?"selected='selected'": ''; ?>>502</option>
				<option value = "503|Studio Unit B2|1776093.5|Unit|23.92|5" <?php echo (isset($_POST['unit']) && $_POST['unit'] == "503|Studio Unit B2|1776093.5|Unit|23.92|5")?"selected='selected'": ''; ?>>503</option>
				<option value = "504|Studio Unit B2|1776093.5|Unit|23.92|5" <?php echo (isset($_POST['unit']) && $_POST['unit'] == "504|Studio Unit B2|1776093.5|Unit|23.92|5")?"selected='selected'": ''; ?>>504</option>
				<option value = "505|Studio Unit B2|1776093.5|Unit|23.92|5" <?php echo (isset($_POST['unit']) && $_POST['unit'] == "505|Studio Unit B2|1776093.5|Unit|23.92|5")?"selected='selected'": ''; ?>>505</option>
				<option value = "507|Studio Unit B2|1776093.5|Unit|23.92|5" <?php echo (isset($_POST['unit']) && $_POST['unit'] == "507|Studio Unit B2|1776093.5|Unit|23.92|5")?"selected='selected'": ''; ?>>507</option>
				<option value = "508|Studio Unit B2|1776093.5|Unit|23.92|5" <?php echo (isset($_POST['unit']) && $_POST['unit'] == "508|Studio Unit B2|1776093.5|Unit|23.92|5")?"selected='selected'": ''; ?>>508</option>
				<option value = "512|1 BR Unit E2|3373640.25|Corner Unit|39.74|5" <?php echo (isset($_POST['unit']) && $_POST['unit'] == "512|1 BR Unit E2|3373640.25|Corner Unit|39.74|5")?"selected='selected'": ''; ?>>512</option>
				<option value = "513|1 BR Unit D2|2945024.75|2 Windows|35.26|5" <?php echo (isset($_POST['unit']) && $_POST['unit'] == "513|1 BR Unit D2|2945024.75|2 Windows|35.26|5")?"selected='selected'": ''; ?>>513</option>
				<option value = "514|1 BR Unit D2|2945024.75|2 Windows|35.26|5" <?php echo (isset($_POST['unit']) && $_POST['unit'] == "514|1 BR Unit D2|2945024.75|2 Windows|35.26|5")?"selected='selected'": ''; ?>>514</option>
				<option value = "515|Studio Unit B2|1776093.5|Unit|23.92|5" <?php echo (isset($_POST['unit']) && $_POST['unit'] == "515|Studio Unit B2|1776093.5|Unit|23.92|5")?"selected='selected'": ''; ?>>515</option>
				<option value = "516|Studio Unit B2|1776093.5|Unit|23.92|5" <?php echo (isset($_POST['unit']) && $_POST['unit'] == "516|Studio Unit B2|1776093.5|Unit|23.92|5")?"selected='selected'": ''; ?>>516</option>
				<option value = "518|1 BR Unit D2|2954024.75|2 Windows|35.26|5" <?php echo (isset($_POST['unit']) && $_POST['unit'] == "518|1 BR Unit D2|2954024.75|2 Windows|35.26|5")?"selected='selected'": ''; ?>>518</option>
				<option value = "519|2 BR Unit G2|4395363.25|Corner Unit|52.34|5" <?php echo (isset($_POST['unit']) && $_POST['unit'] == "519|2 BR Unit G2|4395363.25|Corner Unit|52.34|5")?"selected='selected'": ''; ?>>519</option>
				<option value = "601|2 BR Unit G2|4422915.5|Corner Unit|52.34|6" <?php echo (isset($_POST['unit']) && $_POST['unit'] == "601|2 BR Unit G2|4422915.5|Corner Unit|52.34|6")?"selected='selected'": ''; ?>>601</option>
				<option value = "602|Studio Unit B2|1785914.7|Unit|23.92|6" <?php echo (isset($_POST['unit']) && $_POST['unit'] == "602|Studio Unit B2|1785914.7|Unit|23.92|6")?"selected='selected'": ''; ?>>602</option>
				<option value = "603|Studio Unit B2|1785914.7|Unit|23.92|6" <?php echo (isset($_POST['unit']) && $_POST['unit'] == "603|Studio Unit B2|1785914.7|Unit|23.92|6")?"selected='selected'": ''; ?>>603</option>
				<option value = "604|Studio Unit B2|1785914.7|Unit|23.92|6" <?php echo (isset($_POST['unit']) && $_POST['unit'] == "604|Studio Unit B2|1785914.7|Unit|23.92|6")?"selected='selected'": ''; ?>>604</option>
				<option value = "605|Studio Unit B2|1785914.7|Unit|23.92|6" <?php echo (isset($_POST['unit']) && $_POST['unit'] == "605|Studio Unit B2|1785914.7|Unit|23.92|6")?"selected='selected'": ''; ?>>605</option>
				<option value = "614|1 BR Unit D2|2972396.5|2 Windows|35.26|6" <?php echo (isset($_POST['unit']) && $_POST['unit'] == "614|1 BR Unit D2|2972396.5|2 Windows|35.26|6")?"selected='selected'": ''; ?>>614</option>
				<option value = "619|2 BR Unit G1|4358372.5|Corner Unit|51.58|6" <?php echo (isset($_POST['unit']) && $_POST['unit'] == "619|2 BR Unit G1|4358372.5|Corner Unit|51.58|6")?"selected='selected'": ''; ?>>619</option>
				<option value = "703|Studio Unit B2|1785914.7|Unit|23.92|7" <?php echo (isset($_POST['unit']) && $_POST['unit'] == "703|Studio Unit B2|1785914.7|Unit|23.92|72")?"selected='selected'": ''; ?>>703</option>
				<option value = "704|Studio Unit B2|1785914.7|Unit|23.92|7" <?php echo (isset($_POST['unit']) && $_POST['unit'] == "704|Studio Unit B2|1785914.7|Unit|23.92|7")?"selected='selected'": ''; ?>>704</option>
				<option value = "705|Studio Unit B2|1785914.7|Unit|23.92|7" <?php echo (isset($_POST['unit']) && $_POST['unit'] == "705|Studio Unit B2|1785914.7|Unit|23.92|7")?"selected='selected'": ''; ?>>705</option>
				<option value = "710|1 BR Unit D2|2972396.5|2 Windows|35.26|7" <?php echo (isset($_POST['unit']) && $_POST['unit'] == "710|1 BR Unit D2|2972396.5|2 Windows|35.26|7")?"selected='selected'": ''; ?>>710</option>
				<option value = "717|Studio Unit B2|1785914.7|Unit|23.92|7" <?php echo (isset($_POST['unit']) && $_POST['unit'] == "717|Studio Unit B2|1785914.7|Unit|23.92|7")?"selected='selected'": ''; ?>>717</option>
				<option value = "719|2 BR Unit G2|4422915.5|Corner Unit|52.34|7" <?php echo (isset($_POST['unit']) && $_POST['unit'] == "719|2 BR Unit G2|4422915.5|Corner Unit|52.34|7")?"selected='selected'": ''; ?>>719</option>
				<option value = "801|2 BR Unit G2|4450467.75|Corner Unit|52.34|8" <?php echo (isset($_POST['unit']) && $_POST['unit'] == "801|2 BR Unit G2|4450467.75|Corner Unit|52.34|8")?"selected='selected'": ''; ?>>801</option>
			</select>
		</div>
			<button type="button" id="submit">Calculate</button>
		<?php 
//		echo form_submit("submit","Submit");
		//echo form_close();
		?>

		<div id="holder">
		</div>
	</body>
</html>