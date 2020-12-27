<?php
function active($currect_page){
  $url_array =  explode('/', $_SERVER['REQUEST_URI']) ;
  $url = end($url_array);  
  if($currect_page == $url){
      echo 'active'; //class name in css 
  }
}
function select($table,$where=NULL){
  global $db;
  if ($where != NULL) {
    $sql = 'SELECT * FROM `'.$table.'` WHERE id='.$where;
  }
  else{
    $sql = 'SELECT * FROM `'.$table.'`';
  }

  return $result = mysqli_query($db,$sql);  
}
function cutText($string,$count=350){
        $arr = str_split($string);
        if($count > count($arr)){
          $count = count($arr);
        }
        $finalArr = '';
        for ($i=0; $i < $count ; $i++) { 
          $finalArr .= $arr[$i];
        }
        return $finalArr.'. . .';
      }
   
?>