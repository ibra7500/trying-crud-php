<?php
session_start();
if (isset($_SESSION))
{
	unset($_SESSION);
	session_unset();
	session_destroy();
}
echo "<script>window.location.href=\"http://localhost/testapp/index.php\"</script>";
?>