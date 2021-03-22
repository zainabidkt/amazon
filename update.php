<?php
include_once 'database.php';
$result = mysqli_query($conn,"SELECT * FROM AWSTRANSLATION");
?>
<!DOCTYPE html>
<html>
 <head>
     <link rel="stylesheet" href="https://unpkg.com/purecss@2.0.5/build/pure-min.css" integrity="sha384-LTIDeidl25h2dPxrB2Ekgc9c7sEC3CWGM6HeFmuDNUjX76Ert4Z4IY714dhZHPLd" crossorigin="anonymous">
    <style>
    table td {
      
    }
    tr:nth-child(2) {background-color: #f2f2f2;direction:rtl;text-align: right;}
   
   .ar {
    direction: rtl;
    text-align: right;
  }
    </style>
   <title> Retrive data</title>
   <link rel="stylesheet" href="style.css">
 </head>
<body>
<?php
if (mysqli_num_rows($result) > 0) {
?>
<table id="translation_table">
	 <tr>
	 <td>ID</td>
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
	 <td><?php echo $row["id"]; ?></td>
	<td class="AR"><?php echo $row["AR"]; ?></td>
    <td><?php echo $row["EN"]; ?></td>
    <td><?php echo $row["VERDICT"]; ?></td>
    <td><?php echo $row["MANUAL"]; ?></td>
    <td><?php echo $row["ERRORTYPE"]; ?></td>
    <td><?php echo $row["LITERAL"]; ?></td>
    <td><?php echo $row["SEGMENT"]; ?></td>
    <td><?php echo $row["COMMENTS"]; ?></td>
	<td><a href="update-process.php?id=<?php echo $row["id"]; ?>">Update</a></td>
      </tr>
			<?php
			$i++;
			}
			?>
</table>
 <?php
}
else
{
    echo "No result found";
}
?>
 </body>
</html>