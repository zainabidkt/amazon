function dupeAd() {
  var syst = document.getElementById("systemtranslation").value;
  var linebrkrmv = syst.replace(/[\r\n]+/g," ");
  document.getElementById("manualtranslation").value = linebrkrmv;
  document.getElementById("verdict").value = "incorrect";

  //document.getElementById("arabicaddress").style.pointerEvents = "none";
}
$(document).ready(function(){
    $('textarea').each(function(){$(this).attr('rows', 1);});
  });
//enable Tab indent in text TextArea
function joinAll() {
  var verdict = document.getElementById("verdict").value;
  var manual = document.getElementById("manualtranslation").value;
  var typeerror = document.getElementById("errortypes").value;
  var literal = document.getElementById("literaltranslation").value;
  var segmenterr = document.getElementById("error_segment").value;
  var comments = document.getElementById("trans_comments").value;
  document.getElementById("manualtranslation").value = verdict + "	"  +manual + "	"  + typeerror + "	"  + literal + "	"  + segmenterr + "	"  +comments
}

function copyAddress() {
  var copyText = document.getElementById("manualtranslation");
  copyText.select();
  copyText.setSelectionRange(0, 99999)
  document.execCommand("copy");
  
}

function clearAll() {
  document.getElementById("arabicaddress").value = "";
  document.getElementById("systemtranslation").value = "";
  document.getElementById("manualtranslation").value = "";
  document.getElementById("verdict").value = "";
  document.getElementById("errortypes").value = "";
  document.getElementById("error_segment").value = "";
  document.getElementById("trans_comments").value = "";
  document.getElementById("literaltranslation").value = "";
}
function removeExtraAl() {
  var syst = document.getElementById("systemtranslation").value;
  var linebrkrmv = syst.replace(/[\r\n]+/g," ");
  var removeAl = linebrkrmv.replace("AL AL ", "AL ");
  var removeAlAs = removeAl.replace("AL AS ", "AS ");
  var removeAlAsh = removeAlAs.replace(/AL ASH /g, "ASH ");
  var removeAlAr = removeAlAsh.replace("AL AR ", "AR ");
  document.getElementById("manualtranslation").value = "Incorrect	" + removeAlAr + "	Extra Word Added Error" + "	" + "	Al Is Added Extra In Translation";
}
//Error Types
function errorothers () {
  document.getElementById("errortypes").value = "Others";
}
function missedwordeError() {
  document.getElementById("errortypes").value = "Missed Word Error";
  var comments = document.getElementById("trans_comments").value;
  document.getElementById("trans_comments").value = comments + ", is missing"
  
}
function literalTranslationError () {
 document.getElementById("errortypes").value = "Literal Translation Error";
}
function misplacedWordError() {
  document.getElementById("errortypes").value = "Misplaced Word Error";
}
function extraWordAddedError() {
 
   document.getElementById("errortypes").value = "Extra Word Added Error";
}
function transliterationError() {

  document.getElementById("errortypes").value = "Transliteration Error";
}
function provincetsegment() {

  document.getElementById("error_segment").value = "PROVINCE";
}
function cityegment() {

  document.getElementById("error_segment").value = "CITY";
}
function distsegment() {

  document.getElementById("error_segment").value = "DISTRICT";
}
function communitysegment() {

  document.getElementById("error_segment").value = "COMMUNITY";
}
function roadsegment() {

  document.getElementById("error_segment").value = "ROAD";
}
function buildingsegment() {

  document.getElementById("error_segment").value = "BUILDING";
}
function floorsegment() {

  document.getElementById("error_segment").value = "FLOOR";
}
function unitegment() {

  document.getElementById("error_segment").value = "UNIT";
}
function companysegment() {

  document.getElementById("error_segment").value = "COMPANY";
}
function landmarksegment() {

  document.getElementById("error_segment").value = "LANDMARK";
}
function additionalinfoegment() {

  document.getElementById("error_segment").value = "ADDITIONAL INFO";
}
function poboxsegment() {

  document.getElementById("error_segment").value = "PO BOX";
}
function pocdsegment() {

  document.getElementById("error_segment").value = "POSTAL CODE";
}

function changeDirection() {
  var checkBox = document.getElementById("toggledirection");
   if (checkBox.checked == false){
    document.getElementById("arabicaddress").style.direction = "ltr";
                      } 
    else {
      document.getElementById("arabicaddress").style.direction = "rtl";
  }
}
function splitarabicandenglish() {
  var exceldata = document.getElementById("arabicaddress").value;
  var replaceTab = exceldata.replace("	", "middle");
  var addStartAndEnd = "start"+replaceTab+"end";
  var arabic = addStartAndEnd.split('start')[1].split('mid')[0];
  var english = addStartAndEnd.split('dle')[1].split('end')[0];
  document.getElementById("arabicaddress").value = arabic;
  document.getElementById("systemtranslation").value = english;
  
}
function transCorrect() {
  document.getElementById("verdict").value = "Correct";
}
function urlRedirect() {
    var siteUrl = "https://zainabidkt.000webhostapp.com/update-process.php?id=" ;
    var currentId =  document.getElementById("serialnumber").value;
    var  nextvalue = ++currentId;
   location.replace("https://zainabidkt.000webhostapp.com/update-process.php?id="+nextvalue)
    
}
function urlPrevious() {
    var siteUrl = "https://zainabidkt.000webhostapp.com/update-process.php?id=" ;
    var currentId =  document.getElementById("serialnumber").value;
    var  nextvalue = -currentId;
   location.replace("https://zainabidkt.000webhostapp.com/update-process.php?id="+nextvalue)
    
}
