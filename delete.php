<?php
include("config.php");

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    $sql="DELETE FROM task_month";
}
mysqli_query($db,$sql);
echo "<script>
alert('Previous Task is Deleted');
window.location.href='newsfeed.php';
</script>";

?>
