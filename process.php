<?php

include_once 'database.php';
if(isset($_POST['save']))
{	 
	 $AR = $_POST['AR'];
	 $EN = $_POST['EN'];
	 $VERDICT = $_POST['VERDICT'];
	 $MANUAL = $_POST['MANUAL'];
	 $ERRORTYPE = $_POST['ERRORTYPE'];
	 $LITERAL = $_POST['LITERAL'];
	 $SEGMENT = $_POST['SEGMENT'];
	 $COMMENTS = $_POST['COMMENTS'];
	 $sql = "INSERT INTO AWSTRANSLATION (AR,EN,VERDICT,MANUAL,ERRORTYPE,LITERAL,SEGMENT,COMMENTS)
	 VALUES ('$AR','$EN','$VERDICT','$MANUAL','$ERRORTYPE','$LITERAL','$SEGMENT','$COMMENTS')";
	 if (mysqli_query($conn, $sql)) {
		echo "New record created successfully !";
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>