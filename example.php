<?php
 
if(isset($_POST['submit'])){
  $mobile='63'.$_POST['mobile'];
  $message=$_POST['message'];
  
  $curl = curl_init();
  $data = array(
    'api_key' => "2HLh42DxYWkeqsUXiO6FXEzQ0VH",
    'api_secret' => "9TZ1CZxoRK3HLPVDW79PaHmIgjw3AzpjIKtBJhQW",
    'text' => $message,
    'to' => $mobile,
    'from' => "MOVIDER"
  );

  curl_setopt_array($curl, array(
    CURLOPT_URL => "https://api.movider.co/v1/sms",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_CUSTOMREQUEST => "POST",
    CURLOPT_POSTFIELDS => http_build_query($data),
    CURLOPT_HTTPHEADER => array(
      "Content-Type: application/x-www-form-urlencoded",
      "cache-control: no-cache"
    ),
  ));

  $response = curl_exec($curl);
  $err = curl_error($curl);

  curl_close($curl);

  if ($err) {
    echo "cURL Error #:" . $err;
  } else {
    echo $response;
  }

} 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/design.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <title>Municipality</title>
</head>
<body> 
          
       <center>
        <h1>THIS IS SAMPLE HEHEHHEEH</h1>
       <label class="control-label col-sm-2" for="mobile">Mobile Number </label>
       <input type="number" class="form-control" id="mobile" name="mobile"></input> 
 </div>
<div class="form-group">
 <div class="control-label col-sm-2" for="message"> ANNOUNCEMENT <br>
        <textarea id="message"name="message" class="form-control" aria-label="With textarea" style="height: 200px;"></textarea>
      </div>
    <button class="btn btn-default" type="submit" name="submit" id="submit">Submit</button>
    </center>
</div> 

<!-- Bootstrap Core Javascript -->
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>

</body>
</html>