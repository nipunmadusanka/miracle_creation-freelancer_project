<?php
$ret=mysqli_query($con," SELECT COUNT(*) FROM report WHERE agent_id='$id'");
while ($row=mysqli_fetch_array($ret)) {

$agentcount=$row['COUNT(*)'];
if ($agentcount>'2' && '4'>$agentcount) {
   $delete=mysqli_query($con,"insert into agent_msg (agent_id,msg) value('$id','your account has been report someone..! please care about this')");
}
if ($agentcount>'96') {
   $delete=mysqli_query($con,"insert into agent_msg (agent_id,msg) value('$id','your account has been report someone..! account down nearly')");
}
if ($agentcount>'100') {
   $delete=mysqli_query($con,"DELETE FROM `miracle`.`agent` WHERE `agent`.`ID` = '$id' ");
} }?>