<?php
$str="foo,bar,baz,bat";
$arr=explode(",",$str);
foreach($arr as $value) {
  print $value."\n<br>";
}
?>