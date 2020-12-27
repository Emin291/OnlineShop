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
    function insert()
    {
        $name = $_POST['name']; 
        $price = $_POST['price'];
        $img = 'empty.jpg';
        if(!empty($_POST['img'])){
          $img = $_POST['img'];
        } 
        elseif(empty($_POST['img'])){
          $img='../img/imgnot.jpg';
        }
        $meta = $_POST['meta'];
        global $db;
        if (!empty($name) && !empty($price) &&! empty($meta)) {
          $sql = "INSERT INTO `products` (name,price,meta,img) VALUES ('$name','$price','$meta','$img')";
          $result = mysqli_query($db, $sql);
          if ($result) {
           echo '<div class="success">
              <p>Product is Add , Loading...</p>
            </div>';
            echo '<meta http-equiv="refresh" content="3,url=index.php"/>';
          }
          else{
            echo '<div class="error">
              <p>You have error</p>
            </div>';
            echo '<meta http-equiv="refresh" content="4"/>';
          }
        }
        else{
          echo '<meta http-equiv="refresh" content="3"/>';
        }
        
    }
    function errorCheck($message){
      echo '<div class="error">
              <p>'.$message.'</p>
            </div>';
    }
     //check if the get variable exists
    if (isset($_GET['delete']))
    {
        delete($_GET['delete']);
    }

    function delete($id)
    {
        global $db;
        $sql = 'DELETE FROM `products` WHERE id='.$id;
        $result = mysqli_query($db, $sql);
        header('Location: index.php');
    }
    function update()
    {
        $id = $_POST['id']; 
        $name = $_POST['name']; 
        $price = $_POST['price'];
        $img = 'empty.jpg';
        if(!empty($_POST['img'])){
          $img = $_POST['img'];
        } 
         elseif(empty($_POST['img'])){
          $img='../img/imgnot.jpg';
        }
        $meta = $_POST['meta']; 
        global $db;
        $sql= "UPDATE `products` SET name='$name',meta='$meta',price=$price,img='$img' WHERE id=$id ";
        // Aystex harkavor e grel UPDATE hraman@ aynpes vor na ashxati. Ogtveq Google-ic
        $result = mysqli_query($db, $sql);
        echo '<meta http-equiv="refresh" content="0,url=index.php"/>';
    }

    function cutText($chap,$text){
       
       if (count(explode("",$text))<$chap) {
        echo $text;
       }
       elseif (count(explode("",$text))>$chap) {
         for ($i=0; $i < $chap; $i++) { 
           echo explode("",$text)[$i];
         }
       }
    }
?>