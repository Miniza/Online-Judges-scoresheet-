<?php include('inc/header.php'); ?>
<?php require_once 'process.php';?>
      <div class="container">
     <?php 
     $mysqli = mysqli_connect('localhost', 'root', '','nkathutodatabase') or die(mysqli_error($mysqli));
     $result = $mysqli->query("SELECT sname, ssurname, sgrade, sschool, sgender, numberpro, AVG(ttotal) FROM nkathutotable GROUP BY numberpro") or die($mysqli->error);
     ?>
      <div class="row justify-content-center">
          <header style="color:red"><h2><b>Final Results</h2></b></header><br>
          <hr>
          <p><button onclick="sortTable()">sort</button></p>

          <table border="2"style="background-color:#84ed86;color:#761a9b;margin:0 auto;" class="table" id="">
              <thead>
                  <tr>
                      <th>Student Name</th>
                      <th>Student Surname</th>
                      <th>Grade</th>
                      <th>School</th>
                      <th>Gender</th>
                      <th>Project Number</th>
                      <th>Average</th>
                  </tr>   
              </thead>
          <?php
          while($row=$result->fetch_assoc()): ?>
          <tr>
              <td><?php echo $row['sname']; ?></td>
              <td><?php echo $row['ssurname']; ?></td>
              <td><?php echo $row['sgrade']; ?></td>
              <td><?php echo $row['sschool']; ?></td>
              <td><?php echo $row['sgender']; ?></td>
              <td><?php echo $row['numberpro']; ?></td>
              <td><?php echo $row['AVG(ttotal)']; ?></td>
          </tr>
          <br>
          <?php endwhile;?>
      </table>
<?php include('inc/footer.php'); ?>