<!DOCTYPE html>
<html lang="en">
<head>
  <title>Lab 6 Q1</title>
</head>
<body>
  <?php
    $name = "MUHAMMAD ZULIKRAM BIN NADZRI";
    $matric_number = "AI220078";
    $course = "BIT";
    $year_of_study = "Year 2";
    $address = "LOT 11016 JALAN SUDA UTAMA KAMPUNG AIR SUDA 2";
   
  ?>
  <table border = "3" >
    <tr>
      <td>Name:</td>
      <td><?php echo "$name"; ?></td>
    </tr>
    <tr>
      <td>Matric Number:</td>
      <td><?php echo "$matric_number"; ?></td>
    </tr>
    <tr>
      <td>Course:</td>
      <td><?php echo "$course"; ?></td>
    </tr>
    <tr>
      <td>Year of Study:</td>
      <td><?php echo "$year_of_study"; ?></td>
    </tr>
    <tr>
      <td>Address:</td>
      <td><?php echo "$address"; ?></td>
    </tr>
  </table>
</body>
</html>