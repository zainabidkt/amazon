
<?php
include_once 'database.php';
if(count($_POST)>0) {
mysqli_query($conn,"UPDATE AWSTRANSLATION set id='" . $_POST['id'] . "', AR='" . $_POST['AR'] . "', EN='" . $_POST['EN'] . "', VERDICT='" . $_POST['VERDICT'] . "', MANUAL='" . $_POST['MANUAL'] . "' ,ERRORTYPE='" . $_POST['ERRORTYPE'] . "', LITERAL='" . $_POST['LITERAL'] . "', SEGMENT='" . $_POST['SEGMENT'] . "', COMMENTS='" . $_POST['COMMENTS'] . "' WHERE id='" . $_POST['id'] . "'");
$message = "Address Modified Successfully";
echo '<script type="text/javascript">urlRedirect();</script>'; 
}
$result = mysqli_query($conn,"SELECT * FROM AWSTRANSLATION WHERE id='" . $_GET['id'] . "'");
$row= mysqli_fetch_array($result);
?>
<html>
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script>
   var sec = 0;
    function pad ( val ) { return val > 9 ? val : "0" + val; }
    setInterval( function(){
        $("#seconds").html(pad(++sec%60));
        $("#minutes").html(pad(parseInt(sec/60,10)));
    }, 1000);
    </script>
    <style>
    nput[type=text], select {
    width: 100%;
    padding: 5px 15px;
    margin: 2 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    letter-spacing: 0.35px;
    font-stretch: ultra-condensed
}
#manualtranslation {
    text-transform:uppercase;
}
::-webkit-input-placeholder { /* Chrome/Opera/Safari */
  color: blue;
}
::-moz-placeholder { /* Firefox 19+ */
  color: blue;
}
:-ms-input-placeholder { /* IE 10+ */
  color: blue;
}
:-moz-placeholder { /* Firefox 18- */
  color: blue;
}
    </style>
    <link href="style.css" rel="stylesheet" type="text/css" />
 <link rel="stylesheet" href="https://unpkg.com/purecss@2.0.5/build/pure-min.css" integrity="sha384-LTIDeidl25h2dPxrB2Ekgc9c7sEC3CWGM6HeFmuDNUjX76Ert4Z4IY714dhZHPLd" crossorigin="anonymous">
<title>UPDATE TRANSLATION</title>
</head>
<body>
   
<div class = "panel">
    <span id="minutes"></span>:<span id="seconds"></span>
     <label style="float:right;margin-right:3%;" class="switch">
    
  <input id="toggledirection" type="checkbox" name="dir" onclick="changeDirection()" checked="">
  <span class="slider round"></span>
</label>
<form class="pure-form" name="frmUser" method="post" action="">
<div><?php if(isset($message)) { echo $message; } ?>
</div>
<div style="padding-bottom:5px;">
<a href="update.php">All Addresses</a>
</div>

<input id = "serialnumber" type="hidden" name="id" class="txtField" value="<?php echo $row['id']; ?>">
<input readonly type="text" name="id"  value="<?php echo $row['id']; ?>">
<input readonly id = "arabicaddress" dir = "ltr" placeholder = "AR" type="text" name="AR" class="txtField" value="<?php echo $row['AR']; ?>">
<input readonly onfocus = "splitarabicandenglish()"id = "systemtranslation" dir = "ltr" placeholder = "EN" type="text" name="EN" class="txtField" value="<?php echo $row['EN']; ?>">
<input id="verdict" placeholder = "VERDICT" type="text" name="VERDICT" class="txtField" value="<?php echo $row['VERDICT']; ?>" required>
<input id = "manualtranslation" dir = "ltr" placeholder = "MANUAL" type="text" name="MANUAL" class="txtField" value="<?php echo $row['MANUAL']; ?>">
<input id="errortypes" style = "width:20%" placeholder = "ERROR TYPE" type="text" name="ERRORTYPE" class="txtField" value="<?php echo $row['ERRORTYPE']; ?>">
<input id="literaltranslation" style = "width:20%" placeholder = "LITERALLY TRANS" type="text" name="LITERAL" class="txtField" value="<?php echo $row['LITERAL']; ?>">
<input id="error_segment" style = "width:20%"  placeholder = "SEGMENT" type="text" name="SEGMENT" class="txtField" value="<?php echo $row['SEGMENT']; ?>">
<input id="trans_comments" style = "width:100%" placeholder = "COMMENTS" type="text" name="COMMENTS" class="txtField" value="<?php echo $row['COMMENTS']; ?>">
     <div class = "buttonblock">
         <br>

         <button id = type="submit" "correct" class="pure-button pure-button-primary" onclick="transCorrect(); setTimeout(urlRedirect, 200)">Correct</button>
 <a id = "incorrect" class="pure-button pure-button-primary" onclick="dupeAd()">Incorrect</a>	
<button type="submit" name="submit" value="Submit" class="pure-button pure-button-primary" >Submit</button>
<button type="submit" name="submit" value="Submit" class="pure-button pure-button-primary" onclick = "setTimeout(urlRedirect, 200)" >Submit & Next</button>
 <a class="pure-button pure-button-primary" onclick="urlPrevious()">Previous</a>
  <a class="pure-button pure-button-primary" onclick="urlRedirect()">Next</a>
   <a class="pure-button pure-button-primary" onclick="clearAll()">Reset</a> 
   <br>
   <br>
   <a id = "missedw" class="pure-button pure-button-primary" onclick="missedwordeError()">Missed</a>				
         <a id = "literalt" class="pure-button pure-button-primary" onclick="literalTranslationError()">Literal</a>				
         <a id = "misplacedw" class="pure-button pure-button-primary" onclick="misplacedWordError()">Misplaced</a>				
         <a id = "translit" class="pure-button pure-button-primary" onclick="transliterationError()">Transliteration</a>				
         <a id = "extraw" class="pure-button pure-button-primary" onclick="extraWordAddedError()">Extra Word</a>				
         <a id = "otherse" class="pure-button pure-button-primary" onclick="errorothers()">Others</a>	
         <br>
         <br>
         
         <a id = "provinces" class="pure-button pure-button-primary" onclick="provincetsegment()">Province</a>				
         <a id = "citys" class="pure-button pure-button-primary" onclick="cityegment()">City</a>				
         <a id = "distrs" class="pure-button pure-button-primary" onclick="distsegment()">District</a>				
         <a id = "communitys" class="pure-button pure-button-primary" onclick="communitysegment()">Community</a>				
         <a id = "roads" class="pure-button pure-button-primary" onclick="roadsegment()">Road</a>				
         <a id = "buildings" class="pure-button pure-button-primary" onclick="buildingsegment()">building</a>				
         <a id = "floors" class="pure-button pure-button-primary" onclick="floorsegment()">floor</a>				
         <a id = "units" class="pure-button pure-button-primary" onclick="unitegment()">unit</a>				
         <a id = "companys" class="pure-button pure-button-primary" onclick="companysegment()">company</a>				
         <a id = "landmarks" class="pure-button pure-button-primary" onclick="landmarksegment()">landmark</a>				
         <a id = "additional" class="pure-button pure-button-primary" onclick="additionalinfoegment()">additonal</a>				
         <a id = "pobox" class="pure-button pure-button-primary" onclick="poboxsegment()">po box</a>				
         <a id = "postalc" class="pure-button pure-button-primary" onclick="pocdsegment()">postalcode</a>	


</div>
</form>
</div>
    <script src="script.js"></script>
</body>
</html>