<?php
 require('./db/conect-db.php');//เรียกใช้ไฟร์
 $sql_office="SELECT *form tbl_office";
 $query_office=mysqli_query($conn,$sql_office);
 while($obj)=mysqli_fetch_array($query_office))
 {
	 echo $obj["office_name"]."<br>";
 }
 ?>