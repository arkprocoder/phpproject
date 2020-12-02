<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" type="text/css" href="style.css">

  <?php include 'links.php' ?>
</head>
<body>

<header>
  <div class="container center-div shadow">
        <div class="heading text-center mb-5 text-uppercase text-white">

     ARK Medical Management System
      

    </div>
  


<div class="container row d-flex flex-row justify-content-center mb-10">

  <div class="admin-form shadow mb-5 p-2">

    <form action="check.php" method="POST">
      <div class= "form-group">
        <label>User </label><?php  ?>
        <input type="text" name="User" value=""
        class="form-control" autocomplete="off">

        
      </div>

      
      <div class= "form-group">
        <label>Password </label>
        <input type="password" name="Password" value=""
        class=form-control autocomplete="off">

        
      </div>

      <input type="submit" class="btn btn-success"
      name="submit">

      
      </form>
     </div>
  </div>
</div>




</header>



</body>
</html>