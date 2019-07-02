<?php
echo "<style type='text/css'>";
echo "body {";
if($_GET['style']){
        setcookie("style", $_GET['style'], time()+712222,'/');
        echo $_GET['style'];
}else{
        echo $_COOKIE['style'];
}
echo "}";
echo "</style>";
?>
