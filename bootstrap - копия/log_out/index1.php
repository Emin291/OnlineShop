<?php include 'header1.php' ?>
<main>
  <div class="container">
    <div class="row">

      <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="https://i1.wp.com/geoawesomeness.com/wp-content/uploads/2017/05/Apple-logo.png?ssl=1" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>The best mobile shop</h5>
              <p>Here you can find any you want.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="https://static.seattletimes.com/wp-content/uploads/2020/01/urn-publicid-ap-org-578c46b0ef40b17b6f296065228ea981South_Korea_Earns_Samsung_Electronics_88402-1200x630.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>The best prices</h5>

            </div>
          </div>
          <div class="carousel-item">
            <img src="https://assets.newatlas.com/dims4/default/472f2ab/2147483647/strip/true/crop/3840x2016+0+72/resize/1200x630!/quality/90/?url=http%3A%2F%2Fnewatlas-brightspot.s3.amazonaws.com%2F8a%2F62%2F8d3355534f0ca1d5357dd31e05bd%2Fredmagic-5g-3-colors.jpg "class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Тhere are always stocks</h5>

            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
  </div>
  <div class="container ">
    <div class=" row ">
      <div class="col-12 alert alert-warning alert-dismissible fade show" role="alert">
        <strong>Important information!</strong> we have free shipping throughout the city.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    </div>
    <div class="row ">
      <div class="mb-3 font-weight-bolder col-12 text-center " style="font-size: 30px;">
        NUBIA
      </div>
    </div>
    <?php 
$result = select('products');
?>

    <div class="row mt-4 mb-4 d-flex justify-content-between">
<?php  foreach ($result as  $value) :?>
      <div class="mb-2  mb-lg-0 col-12 col-md-6 col-lg-4 card" style="width: 18rem;">
        <img style="height: 350px;" src="../img/<?php echo $value['img']?>">
          <h2 class="card-title"><?php echo $value ['name'] ?></h2>
          <p class="card-text mt-3 text-center" style="font-size: 30px; color: #4dd2ff;"> <?php echo $value['price'] ?>$ </p>
          
         <div style="display: flex; align-items: flex-end; height: 100%">
          <a    href="single.php?id=<?php echo $value['id'] ?>" class=" btn btn-primary my-1 ">Log in </a>
        </div></div>
      <?php endforeach ?>
      </div>
      
      </div> 
      </main>
<?php include '../include/footer.php' ?>
