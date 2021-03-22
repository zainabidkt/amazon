<!DOCTYPE html>
<html>
    <head>
        
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gam Address Translation Panel</title>
    <link href="style.css" rel="stylesheet" type="text/css" />
  </head>
  <body>

	<form method="post" action="process.php">
		<div class = "panel">
		<input id = "arabicaddress" dir = "rtl" class = "addressfield" placeholder="Arabic Address" type="text" name="AR">
		
		
		<input readonly onfocus = "splitarabicandenglish()"id = "systemtranslation" dir = "ltr" class = "addressfield" placeholder="System Translation" type="text" name="EN">
		
	
		<input id="verdict" type="text" name="VERDICT">
		
	
		<input id = "manualtranslation" dir = "ltr" class = "addressfield" placeholder="Manual Translation" type="text" name="MANUAL">
		
	
		<input id="errortypes" class="smallinput" placeholder="Error Type" type="text" name="ERRORTYPE">
		
		<input type="text" id="literaltranslation" class="smallinput" placeholder="Literally Translated Words" name="LITERAL">
		
		<input type="text" id="error_segment" class="smallinput" placeholder="Error Segment" name="SEGMENT">
		
		<input type="text" id="trans_comments" class="smallinput" placeholder="Comments" name="COMMENTS">
		
	
		
		<input type="submit" name="save" value="submit">
		</div>
		<center>
      <div class = "panel" id = "buttonsarea">
          <div class = "buttonblock">
           <a id = "incorrect" class="allbuttons" onclick="dupeAd()">Incorrect</a>				
            <!-- <a class="allbuttons" onclick="joinAll()">Joni All</a>				-->
            <a id = "copy" class="allbuttons" onclick="joinAll();copyAddress();setTimeout(clearAll, 30);">Copy Final</a>				
            <!--<a class="allbuttons" onclick="replaceoneNumber()">Replace Number (1)</a>				
            <a class="allbuttons" onclick="replaceglobalNumber()">Replace Number Global</a>				-->
            <a id = "removeal" class="allbuttons" onclick="removeExtraAl()">Extra Al Remove</a>				
            <a class="allbuttons" onclick="clearAll()">Reset</a>				
            </div>
            <br>
       <div class = "buttonblock">
         <a id = "missedw" class="allbuttons" onclick="missedwordeError()">Missed</a>				
         <a id = "literalt" class="allbuttons" onclick="literalTranslationError()">Literal</a>				
         <a id = "misplacedw" class="allbuttons" onclick="misplacedWordError()">Misplaced</a>				
         <a id = "translit" class="allbuttons" onclick="transliterationError()">Transliteration</a>				
         <a id = "extraw" class="allbuttons" onclick="extraWordAddedError()">Extra Word</a>				
         <a id = "otherse" class="allbuttons" onclick="errorothers()">Others</a>				
         </div>
         <br>
         <div class = "buttonblock">
         <a id = "provinces" class="allbuttons" onclick="provincetsegment()">Province</a>				
         <a id = "citys" class="allbuttons" onclick="cityegment()">City</a>				
         <a id = "distrs" class="allbuttons" onclick="distsegment()">District</a>				
         <a id = "communitys" class="allbuttons" onclick="communitysegment()">Community</a>				
         <a id = "roads" class="allbuttons" onclick="roadsegment()">Road</a>				
         <a id = "buildings" class="allbuttons" onclick="buildingsegment()">building</a>				
         <a id = "floors" class="allbuttons" onclick="floorsegment()">floor</a>				
         <a id = "units" class="allbuttons" onclick="unitegment()">unit</a>				
         <a id = "companys" class="allbuttons" onclick="companysegment()">company</a>				
         <a id = "landmarks" class="allbuttons" onclick="landmarksegment()">landmark</a>				
         <a id = "additional" class="allbuttons" onclick="additionalinfoegment()">additonal</a>				
         <a id = "pobox" class="allbuttons" onclick="poboxsegment()">po box</a>				
         <a id = "postalc" class="allbuttons" onclick="pocdsegment()">postalcode</a>				
         </div>
      </div>
    </center>
    <script src="script.js"></script>
	</form>
  </body>
</html>
