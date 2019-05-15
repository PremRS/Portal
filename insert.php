<?php

include("config.php");

$t= "";

if ($_SERVER["REQUEST_METHOD"] == "GET")
{
        $t=$_GET["task"];

        $sql = "INSERT INTO task_month(task,visible) VALUES ('$t',1);";
if(mysqli_query($db,$sql))
  {
     echo "<script>
alert('Task Updated');
window.location.href='newsfeed.php';
</script>";
}
}
?>
