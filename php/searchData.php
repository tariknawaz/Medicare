<?php

	require_once('db.php');

	$data 	= $_GET['data'];
	$conn = getConnection();

	$sql = "select * from user where name like '%$data%'";

	$result = mysqli_query($conn, $sql);

	echo  "<table width='100%'>";
    while($row = mysqli_fetch_assoc($result)){

        echo  "<tr border=1> <td><b>Name: </b></td> <td>".$row['name']."</td>
                    <td><b>Email: </b></td> <td>".$row['email']."</td>
                    <td>      </td> <td><a href='php/userDetails.php?email=".$row['email']."'>Details</a></td>
              </tr>";
    }
    echo "</table>";
?>