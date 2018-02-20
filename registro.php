<?php
include('head.php');
?>

<!-- Page Content -->
<div class="col-md-12"> 
  <div class="container">
    <h1 class="my-4" style="text-align: center;color: #5d78b9">Regístrate
      <small></small>
    </h1>
    <div id="contenedor2">
      <br><h2 style="text-align: center;">Regístrate, es muy sencillo, solo rellena los recuadros en</h2>
      <h2 style="text-align: center;">la parte inferior</h2>              
      <br><center><a href="#"><img src="svg/images.png" alt="" left="100" width="140"></a></center><br><br>       


      <form style="margin-left: 19%">
        <div class="form-group row">
          <label for="inputEmail3" class="col-sm-2 col-form-label">Nombre</label>
          <div class="col-sm-6">
            <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
          </div>
        </div>
        <div class="form-group row">
          <label for="inputPassword3" class="col-sm-2 col-form-label">Apellido</label>
          <div class="col-sm-6">
            <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
          </div>
        </div>
        <div class="form-group row">
          <label for="inputPassword3" class="col-sm-2 col-form-label">Correo</label>
          <div class="col-sm-6">
            <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
          </div>
        </div>
        <div class="form-group row">
          <label for="inputPassword3" class="col-sm-2 col-form-label">Contraseña</label>
          <div class="col-sm-6">
            <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
          </div>
        </div>
        <div class="form-group row">
          <label for="inputPassword3" class="col-sm-2 col-form-label">Repetir Contraseña</label>
          <div class="col-sm-6">
            <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
          </div>
        </div>      

        <div class="col-md-9">
          <center><button type="submit" class="btn btn-warning" style="border-radius: 15px;color: #fff;">Registrarse</button></center>
        </div>
      </form>
    </div><br>

  </div>
</div>
<?php
include('footer.php');
?>