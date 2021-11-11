<!DOCTYPE html>
<html lang="en-US" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="description" content="Nkathuto Online Scoresheet"
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <title>Nkathuto Online Scoresheet</title>
    <style>
table {
  border-spacing: 0;
  width: 100%;
  border: 1px solid #ddd;
}

th, td {
  text-align: left;
  padding: 16px;
}

tr:nth-child(even) {
  background-color: #f2f2f2
}
</style>
  </head>
  <body style="background-color:greenyellow"> 
    <?php require_once 'process.php';?>
      <div class="container">
     <?php 
     $mysqli = mysqli_connect('localhost', 'root', '','nkathutodatabase') or die(mysqli_error($mysqli));
     $result = $mysqli->query("SELECT * FROM nkathutotable") or die($mysqli->error);
     ?>
      <div class="row justify-content-center">
          <header style="color:red"><h2><b>Final Results</h2></b></header><br>
          <hr>
          <p><button onclick="sortTable()">sort</button></p>

          <table border="2"style="background-color:#84ed86;color:#761a9b;margin:0 auto;" class="table" id="">
              <thead>
                  <tr>
                      <th>Date</th>
                      <th>Judge Name</th>
                      <th>judge Surname</th>
                      <th>Qualification</th>
                      <th>Email Address</th>
                      <th>Student Name</th>
                      <th>Student Surname</th>
                      <th>Grade</th>
                      <th>School</th>
                      <th>Gender</th>
                      <th>Project Number</th>
                      <th>Final Mark</th>
                  </tr>   
              </thead>
       
          <?php
          while($row=$result->fetch_assoc()): ?>
          <tr> 
             <td><?php echo $row['date']; ?></td>
              <td><?php echo $row['jname']; ?></td> 
              <td><?php echo $row['jsurname']; ?></td> 
              <td><?php echo $row['jqual']; ?></td> 
              <td><?php echo $row['jemail']; ?></td>
              <td><?php echo $row['sname']; ?></td> 
              <td><?php echo $row['ssurname']; ?></td> 
              <td><?php echo $row['sgrade']; ?></td> 
              <td><?php echo $row['sschool']; ?></td> 
              <td><?php echo $row['sgender']; ?></td> 
              <td><?php echo $row['numberpro']; ?></td>
              <td><?php echo $row['ttotal']; ?></td>
          </tr>
          <br>
          <?php endwhile;?>
      </table>

  </div>
         </div>   
  </body>
</html>



