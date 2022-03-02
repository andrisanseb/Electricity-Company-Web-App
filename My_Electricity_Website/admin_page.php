<?php

$conn = new mysqli('localhost','root','','electricitydb');
$sql = "SELECT username,name,email FROM clients";

if($conn->connect_error){
  echo "$conn->connect_error";
  die("Connection Failed : ". $conn->connect_error);
} else {
  $result = $conn->query($sql);

  echo "<table border='1'>
  <tr>
  <th>username</th>
  <th>name</th>
  <th>email</th>
  </tr>";

  while($row = mysqli_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['username'] . "</td>";
  echo "<td>" . $row['name'] . "</td>";
  echo "<td>" . $row['email'] . "</td>";
  echo "</tr>";
  }
  echo "</table>";

  ?>
  <!DOCTYPE html>
  <html lang="en" dir="ltr">
    <head>
      <meta charset="utf-8">
      <title></title>
    </head>
    <body style="margin-left:100px; margin-top:100px; margin-right:100px; background-image: linear-gradient(rgba(4,9,30,0.1),rgba(4,9,30,0.1)),url(https://i2.wp.com/www.middleeastmonitor.com/wp-content/uploads/2021/05/Gazprom.jpg?resize=1200%2C800&quality=85&strip=all&zoom=1&ssl=1);
      background-position: center;
      background-size: cover;
      position:relative;">
      <br>
      <a style="width: 130px;
      margin: auto;
      color: black;
      background-color: yellow;
      " href="./interface5.html" class="admin_button">Return</a>
    </body>
  </html>

  <?php

$conn->close();
}
?>
