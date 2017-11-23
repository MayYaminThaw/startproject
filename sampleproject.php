<?php 
	if($_POST['submit'])
	{
		$rollno=$_POST['rollno'];
		$arr=array(
			'ThaHa1'=>(array('name'=>'Maung Maung','Myanmar'=>56,'English'=>77,'Math'=>87,'Chemistry'=>77,'Physic'=>67,'Biology'=>65)),
			'ThaHa2'=>(array('name'=>'Ma Ma','Myanmar'=>56,'English'=>81,'Math'=>37,'Chemistry'=>77,'Physic'=>67,'Biology'=>65)),
			'ThaHa3'=>(array('name'=>'Ko Ko','Myanmar'=>58,'English'=>48,'Math'=>73,'Chemistry'=>65,'Physic'=>65,'Biology'=>69))
			);
		
	}

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.min.css">
 
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-3">
			</div>
			<div class="col-md-6" style="background: pink;">
				<div class="row">
					<div class="col-md-12">
						<h3><center>ျပည္ေထာင္စုသမတျမန္မာနိုင္ငံေတာ္အစိုးရ<br>
								ပညာေရး၀န္ႀကီးဌာန<br>
								ျမန္မာနိုင္ငံစာစစ္အဖြဲ<br>
								တကသိုလ္၀င္စာေမးပြဲတြင္ရရွိေသာအမွတ္စာရင္း
							</center>
						</h3>
					</div>
				</div>

			
				<div class="row">
					<div class="col-md-6">
					
					</div>
					<div class="col-md-6">
						<center>ေန႕စြဲ</center>
					</div>
				</div>
			
				<div class="row">
					<div class="col-md-12">
						၂၀၁၇ ခုႏွစ္၊ မတ္လ တြင္ က်င္းပၿပီးစိးချ့ေသာ တကသိုလ္၀င္စာေမးပြဲဍ္ ခံုအမွတ္ <?php print $rollno; ?> ျဖင့္ ၀င္ေရာက္ေျဖဆိုေသာ 
						<?php	foreach ($arr as $key => $value) {
								if($rollno==$key)
								{
            						print $value[name];
								}
							} 
						?>
						 ၏ ရရွိေသာအမွတ္မ်ာူမွာ ေအာက္ပါအတိုင္းျဖစ္ပါသည္။
					</div>
				</div>
		
				<div class="row">
					<div class="container">
						<div class="col-md-6">
						ဘာသာရပ္<br>
						၁။ ျမန္မာ<br>
						၂၊ အဂၤလိပ္<br>
						၃၊ သခ်ၤာ<br>
						၄၊ ဓာတုေဗဒ<br>
						၅၊ ရူပေဗဒ<br>
						၇၊ ဇီ၀ေဗဒ<br>
						</div>
						<div class="col-md-6">
						ရရွိေသာအမွတ္<br>
						<?php
							foreach ($arr as $key => $value) {
								if($rollno==$key)
								{
            						print ($value[Myanmar]."<br>".
            						$value[English]."<br>".
            						$value[Math]."<br>".
            						$value[Chemistry]."<br>".
            						$value[Physic]."<br>".
            						$value[Biology]);
								}
							}
						?>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
					စာေမးပြဲ 
					<?php
					foreach ($arr as $key => $value) {
						if($rollno==$key)
						{
							foreach($value as $k => $v)
							{
								if($v<40)
								{
									$f="က်ရွံုးသည္";
									break;
								}
								else{
									$f="ေအာင္ျမင္သည္";
								}

								
							}
												
						}
					}
					print $f;
					?> ။
				
					</div>
					<div class="col-md-6">
					ဂုဏ္ထူးရဘာသာ <?php
					foreach ($arr as $key => $value) {
						if($rollno==$key)
						{
							foreach ($value as $k => $v) {
								if($v>=80){
									$c.=$k;
								}
							}						
						}
					}
					print $c;
					?>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6"></div>
					<div class="col-md-6">
					<center>အတြင္းေရးမ်ဴး(ကိုယ္စား)<br>
					ျမန္မာနိုင္ငံစာစစ္အဖြဲ႕</center>
					</div>
				</div>
			</div>
	
			<div class="col-md-3">
			</div>
		</div>
	</div>
</body>
</html>