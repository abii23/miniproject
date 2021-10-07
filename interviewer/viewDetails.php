<!DOCTYPE html>
<html lang="en">
<head>
<?php 
include("header.php");
include("config.php");
?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="course.php" method="get">
  <div class="container" style="width:100%;margin-left:14%;margin-top:19px" >
  <div style="position: center;width: 160%">
    <div class="col-md-9" style="box-shadow: 2px 2px 10px #1b93e1; border-radius:0px; top: 250px;">
      <h3 style="text-align: center">COURSE DETAILS</h3>
      <div class="form-horizontal" style="margin-left:0px;">
        <div class="form-group">
          <  <div style="display:flex;">

<div style="margin-left:139px">
  
  <label>SELECT COURSE</label>
</div>
<select name="option">
  <option >Choose..</option>
  <option  value="1">BCA</option>
  <option  value="2">BBA</option>
  <option  value="3">B.COM</option>
  <option  value="4">MCA</option>
  <option  value="5">MBA</option>
  <option  value="6">M.COM</option>
</select>
</div>
        </div>
        <table class="table table-hover" style="border: 2px solid #adaaaa; box-shadow: 3px 3px 11px #777777; margin-bottom:7%">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">First Name</th>
                <th scope="col">Last Name</th>
                <th scope="col">Email</th>
                <th scope="col">Contact Number</th>
                <th scope="col">Application Number</th>
                <th scope="col">Application Status</th>
                
                
                

            
            </tr>
          </thead>
          <?php
						$slno=1;
							$result=mysqli_query($con,"select * from tbl_candidatebasicdetails");
							while($row=mysqli_fetch_array($result))
							{
								
								echo  "<tr>";
								echo "<td>" .$slno++."</td>";
								
								echo "<td>" .$row['first_name']."</td>";
								echo "<td>" .$row['last_name']."</td>";
                echo "<td>" .$row['email']."</td>";
                echo "<td>" .$row['contact_number']."</td>";
                echo "<td>" .$row['applicationnumber']."</td>";
                echo "<td>" .$row['admission_status']."</td>";
								
							//	echo "<td><a href='course_edit.php?courseid=".$row ['courseid']."' class='glyphicon glyphicon-edit'>Edit</a> </td>";
								
								?>
                <td><a href="test.php" class="glyphicon glyphicon-trash" >View more details</a></td>
            <td><a href="test.php" class="glyphicon glyphicon-trash" >+Add Marks</a></td>
          
            <?php
								echo "</tr>";
								
							}
						?>
        </table>
      </div>
    </div>
    <div> </div>
  </div>
 </div>
</form>

</body>
</html>
