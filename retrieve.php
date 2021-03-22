<?php
include_once 'database.php';
$result = mysqli_query($conn,"SELECT * FROM AWSTRANSLATION");
?>
<!DOCTYPE html>
<html>
 <head>
     <link href="style.css" rel="stylesheet" type="text/css" />

 <title> Retrive data</title>
 </head>
<body>
<?php
if (mysqli_num_rows($result) > 0) {
?>
  <table id="translation_table">
  
  <tr>
    <td>AR</td>
    <td>EN</td>
    <td>VERDICT</td>
    <td>MANUAL</td>
    <td>ERRORTYPE</td>
    <td>LITERAL</td>
    <td>SEGMENT</td>
    <td>COMMENTS</td>
  </tr>
<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
?>
<tr>
    <td class="ar"><?php echo $row["AR"]; ?></td>
    <td><?php echo $row["EN"]; ?></td>
    <td><?php echo $row["VERDICT"]; ?></td>
    <td><?php echo $row["MANUAL"]; ?></td>
    <td><?php echo $row["ERRORTYPE"]; ?></td>
    <td><?php echo $row["LITERAL"]; ?></td>
    <td><?php echo $row["SEGMENT"]; ?></td>
    <td><?php echo $row["COMMENTS"]; ?></td>
</tr>
<?php
$i++;
}
?>
</table>
 <?php
}
else{
    echo "No result found";
}
?>
 </body>
</html>