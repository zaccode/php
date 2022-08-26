<?php
$conn = mysqli_connect("localhost","root","","test") or die("Connection Failed");

echo $sql = "SELECT * FROM personal";

$result = mysqli_query($conn,$sql) or die("Query Failed");

$output = "";
if(mysqli_num_rows($result > 0)){
    $output = '<thead>
    <tr>
        <th scope="col">Id</th>
        <th scope="col">Roll No</th>
      <th scope="col">Names</th>
      <th scope="col">subject</th>
      
    </tr>
  </thead>
  <tbody>';

  while($row = mysqli_fetch_assoc($result)){
    $output .= "
    <tr>
      <th scope='row'>{$row['id']}</th>
      <th scope='row'>{$row['rollno']}</th>
      <td>{$row['name']}</td>
      <td>{$row['sub']}</td>  
    </tr>";
  }
  
  $output .= "</tbody>";
  echo $output; 
  mysqli_close($conn);
}else{
    echo "<h2>No Records Found</h2>";
}
?>