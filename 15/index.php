<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>RELATION.CO.KR_5_15</title>
</head>
	<script src="http://code.jquery.com/jquery-latest.min.js"></script> 
	<script>
		$(document).ready(function(){
				total_selector();
		});
		
		function selector_a()
		{
				$('#selector1_val').val( $('#selector1').val() );	
				total_selector();
		}
		
		function selector_b()
		{
				$('#selector2_val').val( $('#selector2').val() );
				total_selector();
		}
		
		function selector_c()
		{
				$('#selector3_val').val( $('#selector3').val() );
				total_selector();
		}
		
		function total_selector()
		{
				let selector1_val = $('#selector1_val').val();
				let selector2_val = $('#selector2_val').val();
				let selector3_val = $('#selector3_val').val();

				switch(selector2_val)
				{
						case('B'):
							$('#selector3').find('[value=100]').hide();
						break;
						case('C'):
							$('#selector3').find('[value=300]').hide();
						break;
					  default:
							$('#selector3').find('[value=100]').show();
							$('#selector3').find('[value=200]').show();
							$('#selector3').find('[value=300]').show();
						break;
						//$('#selector3').find('[value=24000]').show(); 
				}
			
				let total_val = Number(selector1_val)+Number(selector3_val);
				$('#total_val').html( total_val+" 원");
		}
		
	</script>	
	
	<style>
		* { margin:0; padding:0; }
		.wrap { margin:50px auto; width:100%; max-width:800px; border:1px solid #ececec; } 
		.select_area { display:flex; flex-direction:row; justify-content:flex-start; align-items:flex-start; width:100%; max-width:800px; padding:20px; box-sizing:border-box; border-bottom:1px solid #ececec;	}
		.select_area .select_name { display:flex; flex:1; }
		.select_area .select_ls { display:flex; }
		.select_area li { display:block; width:100%; padding:5px 0 5px 0;}
	</style>	
	
<body>

	<div class="wrap">
			<div class="select_area">
				<ul>
					<li>초기값(hidden)처리</li>
					<li>selector1 : <input type="text" name="selector1_val" id="selector1_val" value="100"></li>
					<li>selector2 : <input type="text" name="selector2_val" id="selector2_val" value="A"></li>
					<li>selector3 : <input type="text" name="selector3_val" id="selector3_val" value="100"></li>
				</ul>	
			</div>	
			<div class="select_area">
				<div class="select_name">selector1</div>
				<div class="select_ls">
					<select name="selector1" id="selector1" onChange="selector_a();">
						<option value="100">옵션1(100)</option>
						<option value="200">옵션2(200)</option>
						<option value="300">옵션3(300)</option>
					</select>	
				</div>
			</div>
		
			<div class="select_area">
				<div class="select_name">selector2</div>
				<div class="select_ls">
					<select name="selector2" id="selector2" onChange="selector_b();">
						<option value="A">Selector3 option 모두있음</option>
						<option value="B">Selector3 옵션1(100) 제거</option>
						<option value="C">Selector3 옵션3(300) 제거</option>
					</select>	
				</div>
			</div>
		
			<div class="select_area">
				<div class="select_name">selector3 (selector2 값에 따라 변경)</div>
				<div class="select_ls">
					<select name="selector3" id="selector3" onChange="selector_c();">
						<option value="100">옵션1(100)</option>
						<option value="200">옵션2(200)</option>
						<option value="300">옵션3(300)</option>
					</select>	
				</div>
			</div>
		
			<div class="select_area">
				<div class="select_name">TOTAL_VAL</div>
				<div class="select_ls" id="total_val"></div>
			</div>
		
		
	</div>	
	
</body>
</html>
