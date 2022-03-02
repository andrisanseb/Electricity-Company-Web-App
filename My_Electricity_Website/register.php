<?php
  /* count starts at 0, if every fields is complete it becomes 3*/
  $count = 0;

  if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (empty($_POST["username"])) {
      $usernameErr = "username is required";
    } else {
      $username = $_POST['username'];
      $count = $count +1;
    }

    if (empty($_POST["name"])) {
      $nameErr = "name is required";
    } else {
      $name = $_POST['name'];
      $count = $count +1;
    }

    if (empty($_POST["email"])) {
      $emailErr = "email is required";
    } else {
      $email = $_POST['email'];
      $count = $count +1;
    }

  }

  if($count==3){    /*check if all fields are complete */
    $conn = new mysqli('localhost','root','','electricitydb');  /*connect to localhost-electricitydb*/
    	if($conn->connect_error){
    		echo "$conn->connect_error";
    		die("Connection Failed : ". $conn->connect_error);
    	} else {
    		$stmt = $conn->prepare("insert into clients (name,username,email) values(?,?,?)");
        $stmt->bind_param("sss",$name,$username,$email);
    		$stmt->execute();
    		$stmt->close();
    		$conn->close();
    	}
      header("Location: ./interface1.html");

  }else{
    ?>
    <script type="text/javascript">
    window.location = "./interface1.html";
    window.alert("EVERY FIELD MUST BE COMPLETE. PLEASE TRY AGAIN.");
    </script>
    <?php
  }

 ?>
