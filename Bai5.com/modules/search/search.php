<?php
 $a = $_GET['act'];
 switch($a){
case "xl_search":
include("modules/search/xl_search.php");
break;
 }
?>
<?php
 $b = $_GET['act'];
 switch($b){
case "xl_searchtitle":
include("modules/search/xl_searchtitle.php");
break;
 }
?>