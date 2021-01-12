<?php include('header.php');
 if (isset($_SESSION['All_score'])) {
    session_destroy();
    unset($_SESSION['All_score']);
    header('location: ../Login.php');

}
 



?>
<style>
 h3 {
     color : red ; 
 }
 p {
  text-align: center;
  font-size: 60px;
  margin-top: 0px;
}
</style>

<div class="wrapper">
        <div class="container">

<!-- /////////////////////////////////////// ส่วนจับเวลา -->

<div> 
<?php 
function secondsTime($examTime){
	$time = explode(":", $examTime);
	$h = $time[0]*3600;
	$m = $time[1]*60;
	$s = $time[2]*1;
	$seconds = $h+$m+$s;
	return $seconds;
//แปลงค่าเป็นวินาที
}
$seconds = secondsTime("0:20:1");

if (!isset($_SESSION['timeend'])){ 
	unset($_SESSION['timeend']);
    $endtime = time() + $seconds; 
    $_SESSION['timeend'] = $endtime; 
} 

($_SESSION['timeend'] - time()) < 0 ? $EndTime = 0 :  $EndTime = $_SESSION['timeend'] - time();

if($EndTime <= 0) { 
	unset($_SESSION['timeend']);
//session_destroy(); 
} 

function checkTime($seconds){
	$hours = floor($seconds / 3600);
	$mins = floor(($seconds - ($hours*3600)) / 60);
	$secs = floor(($seconds - ($hours*3600)) % 60);
	$time = $hours.":".$mins.":".$secs;
	return $time;
//แปลงเป็นวินาทีให้อยู่ในรูปแบบ xx:xx:xx
}

$time = checkTime($EndTime);
?>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<body onLoad="begintimer()">

<script language="">
var limit="<?=$time;?>";
if (document.images){
var parselimit=limit.split(":")
parselimit=(parselimit[0]*3600)+(parselimit[1]*60)+parselimit[2]*1

}
function begintimer(){
if (!document.images)
return
if (parselimit==1)
// เหตุการณ์ที่ต้องการให้เกิดขึ้น
// window.location='page.php'; ถ้าต้องการให้กระโดดไปยัง Page อื่น

frmTest.submit();
else{
parselimit-=1
curhr=parseInt((parselimit%86400)/3600);
curmin=parseInt((parselimit%86400)%3600/60);
cursec=parseInt(((parselimit%86400)%3600)%60);
if (curhr!==0 && curmin!=0)
curtime="เวลาที่เหลือ <font color=red> "+curmin+" </font>นาที กับ <font color=red>"+cursec+" </font>วินาที "

else
{
curtime="เวลาที่เหลือ <font color=red> "+curmin+" </font>นาที กับ <font color=red>"+cursec+" </font>วินาที "
}
document.getElementById('dplay').innerHTML = curtime;
setTimeout("begintimer()",1000)
}
}
//-->
</script>
<div id=dplay ></div>
<form  name= "frmTest" action="Pre_check.php" method="post">
<input type="hidden" name="skip" value="3"> 
<!-- เมื่อหมด เวลา value = ค่าที่จะเริ่มข้อของอีก part  -->
</form>

</div>
<!-- ///// จบส่วนจับเวลา -->


<!-- ////// ส่วนของคำถาม -->
<div>
<form action="Pre_check.php" method="post">


<!-- ///// โจทย์  -->
<div>
<h3><?php 
include('../database/database.php');
$topic_num = $_SESSION['topic_num']; 
$query_topic = "SELECT * FROM hsk1_pretest_topic WHERE HSK1_Pretest_TopicID = $topic_num";
$result_topic = mysqli_query($conn , $query_topic);
$topic = mysqli_fetch_assoc($result_topic);
echo $topic['HSK1_Pretest_TopicID'].". ".$topic['Topic'];

?></h3>
</div>
<!-- //// ใช้ PHP เพื่อ วนลูป choice -->
<div class="row"> 
<?php 
if (!isset($_SESSION['score'])) { 
  $_SESSION['score'] = "0";
}

include('../database/database.php');
$topic_num = $_SESSION['topic_num'];

/////////// ข้อ choice 
 $query = "SELECT * FROM hsk1_pretest_ans WHERE HSK1_Pretest_TopicID = $topic_num";
 $result = mysqli_query($conn , $query);
 
 while($row = mysqli_fetch_assoc($result)){
 
  ////// เขียนสั่ง HTML ลง ใน  echo PHP
   echo '<div class="form-check col-6">
   <input class="form-check-input" type="radio" name="select_ans" value='.$row['mark'].' >
  <label class="form-check-label">
  '.$row['ans_eng'].'
  </label> 
  </div>' ; 
 }

?>

</div>

<div>
   <button class="btn btn-outline-success my-2 my-sm-0" type="submit"> Next >></button>
</div>   

</form>

</div>
<!-- ////จบคำถาม -->
</div>
</div>      




<?php include('footer.php'); ?>