<?php
session_start();
if(isset($_SESSION["admin"]))
{
unset($_SESSION["admin"]);
session_destroy();
?>
<script>
window.location.href="../index.php";
</script>
<?php
}
?>