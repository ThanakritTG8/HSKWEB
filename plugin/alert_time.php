<?php
function secondsTime($examTime)
{
    $time = explode(":", $examTime);
    $h = $time[0] * 3600;
    $m = $time[1] * 60;
    $s = $time[2] * 1;
    $seconds = $h + $m + $s;
    return $seconds;
    //แปลงค่าเป็นวินาที
}
$seconds = secondsTime($set_time);


$endtime = time() + $seconds;

($endtime - time()) < 0 ? $EndTime = 0 :  $EndTime = $endtime - time();

if ($EndTime <= 0) {
    unset($endtime);
}

function checkTime($seconds)
{
    $hours = floor($seconds / 3600);
    $mins = floor(($seconds - ($hours * 3600)) / 60);
    $secs = floor(($seconds - ($hours * 3600)) % 60);
    $time = $hours . ":" . $mins . ":" . $secs;
    return $time;
    //แปลงเป็นวินาทีให้อยู่ในรูปแบบ xx:xx:xx
}

$time = checkTime($EndTime);
?>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<body onLoad="begintimer()">

    <script language="">
        var limit = "<?= $time; ?>";
        if (document.images) {
            var parselimit = limit.split(":")
            parselimit = (parselimit[0] * 3600) + (parselimit[1] * 60) + parselimit[2] * 1

        }

        function begintimer() {
            if (!document.images)
                return
            if (parselimit == 1) {
                // เหตุการณ์ที่ต้องการให้เกิดขึ้น
                // window.location='page.php'; ถ้าต้องการให้กระโดดไปยัง Page อื่น

                Swal.fire({
                    icon: 'warning',
                    title: 'หมดเวลา !',
                    showConfirmButton: true,
                    confirmButtonText: `ยืนยัน`
                }).then((result) => {
                    $.fn.countScore();

                })

            } else {
                parselimit -= 1
                curhr = parseInt((parselimit % 86400) / 3600);
                curmin = parseInt((parselimit % 86400) % 3600 / 60);
                cursec = parseInt(((parselimit % 86400) % 3600) % 60);
                if (curhr !== 0 && curmin != 0)
                    curtime = "เวลาที่เหลือ <font color=red> " + curmin + " </font>นาที <font color=red>" + cursec + " </font>วินาที "

                else {
                    curtime = "เวลาที่เหลือ <font color=red> " + curmin + " </font>นาที <font color=red>" + cursec + " </font>วินาที "
                }
                document.getElementById('dplay').innerHTML = curtime;
                setTimeout("begintimer()", 1000)
            }
        }
        //-->
    </script>
    <div id=dplay></div>