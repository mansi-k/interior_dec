<?php
$bd=mysqli_connect("localhost","root","");
if(!$bd)
{
    die('oops connection problem ! --> '.mysql_error());
}
if(!mysqli_select_db($bd,"dheerajcontractors"))
{
    die('oops database selection problem ! --> '.mysql_error());
}
?>