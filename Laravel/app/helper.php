<?php
  function p($data){
    echo "<pre>";
     print_r($data);
    echo "</pre>";
 }

 function getformatdata($data,$format){
    $res = date($format ,strtotime($data));
    return $res;
 }
?>