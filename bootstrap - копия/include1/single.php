<?php include '../include/header.php ' ?>
<?php 
$result=select('products',$_GET['id']);
$r=mysqli_fetch_object($result);
 ?>


	<main >
<div   class="container "> 
	<div class="row my-4 d-flex">
	 <div class=" p-0 col-lg-5 col-12">
            <img style="height: 500px;width: 100%; border-radius: 10px;" src="../img/<?php echo $r->img ?>" alt="...">
          </div>
         
       
       
  
  
    <div class=" col-lg-7 col-12">
      <h1 style="text-align:  center" class="card-text font-weight-bolder  mb-5" style="
      font-size: 40px; color:black;"  ><?php echo $r->name ?> </h1>
      <h3><?php echo $r->meta ?></h3>
</div> 
<div>
	
</div>


 </div>
</div>

</div>
</main>
<?php include '../include/footer.php ' ?>