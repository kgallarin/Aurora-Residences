<html>
	<head>
		<h1>Calculator</h1>
		
		<script type="text/javascript" src="./assets/js/jquery-2.1.4.min.js"></script>
		
		
	</head>
	
	
	
	
	<body>
		<div>
			Terms: <select id="mySelect">
				<option>PICK</option>
				<?php foreach($terms as $term):?>
					<option value = "<?php echo $term->term_id;?>"><?php echo $term->term_name;?></option>
				<?php endforeach;?>
			</select>
		</div>
		
		<div>
			Unit: <select>
				<?php foreach($units as $unit):?>
					<option><?php echo $unit->unit_id;?></option>
				<?php endforeach;?>
			</select>
		</div>


		
		
		<br/>
		INPUT HERE!
		<div id="input_holder">
			
		</div>
		
		
	</body>
	
	<script>
			$(function(){
				$('#mySelect').change(function(){
					
					var interval = document.getElementById('mySelect').value;
					
					// alert(interval);
					// var html ="";
					// if(interval == 1){	
						// html = "<input type='text' name='pay[]' /><br/>";
					// }
					var in_len = document.getElementById('input_holder').getElementsByTagName('input').length;// counts the input tag 
					
					// alert(in_len);
					if(in_len > 1){
						$('#input_holder').empty();
				
					}
					if(in_len == 0){
						$('#input_holder').append(html);
				
					}
					
					
					var ctr = 0;
					for(ctr=0;ctr<=interval;ctr++){
					
						var html="<input type='text' name='pay[]' /><br/>";
						
						$('#input_holder').append(html);
					}
					
					// var ans = $('#answer').val();
					// var pts = $('#max_points').val();
				
					// if(pts == ''){
						// $('#max_points').addClass('error');
					// }
					// else if(ans == ''){
						// $('#answer').addClass('error');
					// }
					// else{
						// var html = '<tr><td>'+item+'</td><td>'+ans+'</td><td>'+pts+'</td><td class="uk-text-center"><a href="" class="deletefolderbtn" data-uk-tooltip="" title="Delete"><i class="uk-icon-trash"></i></a></td></tr>';
						// var points = '<input type="hidden" name="points[]" value="'+pts+'" />';
						// var answer = '<input type="hidden" name="answer[]" value="'+ans+'" />';

						// $('#holder').append(html);
						// $('.holder').append(points+answer);
						
						// $('input[type=text]').val('');
						// $('input[type=number]').val('');
						
						// $('#answer').removeClass('error');
						// $('#max_points').removeClass('error');
					// }
				});
			});
			
		</script>
</html>