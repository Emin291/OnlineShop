
  <?php include '../include/header.php '?> 
    <main>
      <div class="container "style="background-color: white; border-radius: 13px;">
        <div class="row my-4 p-0 border" style="border-radius: 13px;">
          <div class="p-0 p-sm col-4 border-right ">
            <div class="ml-0 ml-lg-3 mt-2">
            <a class="my-3 font-weight-bolder" style="border:none; color:black;font-size: 25px;" href="#profile">Profile</a></div><br>
            <div class="ml-0 ml-lg-3">
            <a class=" font-weight-bolder" style="border:none; color:black;font-size: 25px;" href="#contact">Contact</a>
          </div>
        </div>

          <div class="col-8   pl-1 " >
            <h1 class="font-weight-bolder" id="profile" style="color:#00BDFF;">Profile</h1>
            <form class="mt-2">
              <div class="container" >
  <div class=" form-group row">
    <label for="staticEmail" class=" col-sm-2 col-form-label">Username</label>
    <div class="col-sm-8">
      <input type="text"   class="form-control-plaintext" id="staticEmail" value="<?php echo $_SESSION["username"] ?>">
    </div>
  </div>
  <div class=" form-group row">
    <label for="staticEmail" class=" col-sm-2 col-form-label">Email</label>
    <div class="col-sm-8">
      <input type="text"   class="form-control-plaintext" id="staticEmail" value="<?php echo $_SESSION["email"] ?>">
    </div>
  </div>
</div>
</form>
<form class="mt-2">
  <div class="container">
  <div class="row form-group ">
    <label for="staticEmail" class=" col-sm-2 col-form-label">Password</label>
    <div class="">
     <div class="col-sm-10 password">
  <input readonly="" type="password" id="password-input" placeholder="Введите пароль" name="password" value="<?php echo $_SESSION["psw"] ?>">
  <a href="#" class="password-control" onclick="return show_hide_password(this);"></a>
</div>
<style type="text/css">
.password {
  width: 300px;
  
 
}
#password-input {
  width: 100%;
  
  height: 30px;
  line-height: 40px;
  text-indent: 10px;
  margin: 0 0 15px 0;
  border-radius: 5px;
  border: 1px solid #999;
  font-size: 18px;
}
.password-control {
  position: absolute;
  top: 5px;
  right: 20px;
  display: inline-block;
  width: 20px;
  height: 20px;
  background: url(https://snipp.ru/demo/495/view.svg) 0 0 no-repeat;
}
.password-control.view {
  background: url(https://snipp.ru/demo/495/no-view.svg) 0 0 no-repeat;
}
</style>
<script>
function show_hide_password(target){
  var input = document.getElementById('password-input');
  if (input.getAttribute('type') == 'password') {
    target.classList.add('view');
    input.setAttribute('type', 'text');
  } else {
    target.classList.remove('view');
    input.setAttribute('type', 'password');
  }
  return false;
}
</script>


    </div>
  </div>
</div>
  <p>
  <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
    Change Password
  </a>
</p>
<div class=" collapse" id="collapseExample">
  <div class="mb-3 card card-body">
   <div class="form-group">
    <label for="exampleInputPassword1">Write your last password</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
    <label for="exampleInputPassword1">Write your new password</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
 <label for="exampleInputPassword1">Repeat your new password</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
<a class="mt-3 btn btn-primary" href="#" role="button">Change</a>
  </div>
  </div>
</div>
</form>

  
    
   
     
  


</tr>
<div class="row">
  <div class="col-8 pl-3  ">
    <h1 id="contact" class="mt-3 font-weight-bolder" style="color:#00BDFF;">Contact</h1>
          <h1 class="mt-2 col-12 font-weight-bolder"style="font-size: 25px;background-color:  #e6e6e6;border-radius:3px;"> Number</h1><br>
          <p>+374<?php echo $_SESSION["phone"] ?></p>
 
         </div>
        </div>

          </div>
          
</form>
         </div>
      </div>
    </main>

    <?php include '../include/footer.php ' ?> 