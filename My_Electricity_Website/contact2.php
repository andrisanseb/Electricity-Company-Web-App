<?php

$count=0;
$ph_ok = false;

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $name = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    $count = $count +1;
  }

  if (empty($_POST["phone_number"])) {
    $phone_number = "Phone number is required";
  } else {
    $phone_number = test_input($_POST["phone_number"]);
    if(preg_match("/^[0-9]{10}$/",$phone_number)){
      $ph_ok = true;
    }
    $count = $count +1;

  }

  if (empty($_POST["email"])) {
    $email = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    $count = $count +1;
  }

  if (empty($_POST["subject"])) {
    $subject = "Subject is required";
  } else {
    $subject = test_input($_POST["subject"]);
    $count = $count +1;
  }

  if (empty($_POST["message"])) {
    $message = "Message is required";
  } else {
    $message = test_input($_POST["message"]);
    $count = $count +1;
  }

  if($count == 5){
    if($ph_ok){
      $conn = new mysqli('localhost','root','','electricitydb');
      $sql = "INSERT INTO requests (name ,phone_number ,email,subject,message) VALUES (?,?,?,?,?)";

      if($conn->connect_error){
    		echo "$conn->connect_error";
    		die("Connection Failed : ". $conn->connect_error);
    	} else {
    		$stmt = $conn->prepare($sql);
        $stmt->bind_param("sisss",$name,$phone_number,$email,$subject,$message);
    		$execval = $stmt->execute();
    		$stmt->close();
    		$conn->close();

    	}
      ?>
      <script type="text/javascript">
      window.location = "./interface4.html";
      window.alert("FORM SENT!");
      </script>
      <?php
    }else{
      ?>
      <script type="text/javascript">
      window.location = "./interface4.html";
      window.alert("PHONE NUMBER MUST BE 10-DIGIT. PLEASE TRY AGAIN.");
      </script>
      <?php
    }

  }else{
    ?>
    <script type="text/javascript">
    window.location = "./interface4.html";
    window.alert("EVERY FIELD MUST BE COMPLETE. PLEASE TRY AGAIN.");
    </script>
    <?php
  }

}

?>
