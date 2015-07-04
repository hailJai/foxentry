<?php
function csc($access)
{
	if (($access > 2) || ($access == 1))
	{
		header("location:../err/unauthorized.php");
	}
}
function regular($access)
{
	if ($access <> 3)
	{
		header("location:logout.php");
	}
}
?>