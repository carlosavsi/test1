<?php
@include("includes/head.php");
?>
<div class="container">
   <div class="row">
      <div class="col-md-3">
         <form action = "welcome.php" method = "POST">
            <div class="form-group">
               <label for="exampleInputEmail1">Usuario</label>
               <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Usuario" name="user">
            </div>
            <div class="form-group">
               <label for="exampleInputPassword1">Contraseña</label>
               <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Contraseña" name ="contra">
            </div>
            <button type="submit" class="btn btn-default">Submit</button>
         </form>
      </div>
   </div>
</div>

<?php
@include("includes/footer.php");
?>