<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MEDICAL MANAGEMENT SYSTEM</title>
    

<body>
    
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">    
</head>





<!-- Modal -->
<div class="modal fade" id="studentaddmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Customer Data </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
     

     <form action="insert.php" method="POST"> 
        <div class="modal-body">

        <div class="form-group">
            <label>Medical ID </label>
            <input type="value" name="Medical_ID" class="form-control" placeholder="Enter Medical ID">
    
         </div>
         
         
     
         <div class="form-group">
            <label>Medical Name </label>
            <input type="text" name="Medical_Name" class="form-control" placeholder="Enter Medical Name">
    
         </div>
         <div class="form-group">
            <label>Owner Name</label>
            <input type="text" name="Owner_Name" class="form-control" placeholder="Enter Name">
         </div>
         <div class="form-group">
            <label>Phone_No</label>
            <input type="text" name="Phone_No" class="form-control" placeholder="enter phone number ">
         </div>
         <div class="form-group">
            <label>Medicines</label>
            <input type="text" name="Medicines" class="form-control" placeholder="Enter medicines">
         </div>
         <div class="form-group">
            <label>Products</label>
            <input type="text" name="Products" class="form-control" placeholder="enter products ">
         </div>
         <div class="form-group">
            <label>Address</label>
            <input type="text" name="Address" class="form-control" placeholder="Type Address">
         </div>


        </div>
         <div class="modal-footer">
           <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
           <button type="submit" name="insertdata" class="btn btn-primary">Save Data</button>
         </div>
     </form>
      
    </div>
  </div>
</div>

<!-- second modell -->
<!-- edit model -->
<!-- Modal -->
<div class="modal fade" id="editmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Customer Data </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      

     <form action="update.php" method="POST"> 
        <div class="modal-body">

        <div class="form-group">
            <label>Medical ID </label>
            <input type="value" name="Medical_ID" id="Medical_ID" class="form-control" placeholder="Enter Medical ID">
          </div>  
         
     
         <div class="form-group">
            <label>Medical Name </label>
            <input type="text" name="Medical_Name" id="Medical_Name" class="form-control" placeholder="Enter Medical Name">
    
         </div>
         <div class="form-group">
            <label>Owner Name</label>
            <input type="text" name="Owner_Name" id="Owner_Name" class="form-control" placeholder="Enter Name">
         </div>
         <div class="form-group">
            <label>Phone No</label>
            <input type="text" name="Phone_No" id="Phone_No" class="form-control" placeholder="Enter Phone number">
         </div>
         <div class="form-group">
            <label>Medicines</label>
            <input type="text" name="Medicines" id="Medicines" class="form-control" placeholder="Enter medicines">
         </div>
         <div class="form-group">
            <label>Products</label>
            <input type="text" name="Products" id="Products" class="form-control" placeholder="enter products ">
         </div>
         <div class="form-group">
            <label>Address</label>
            <input type="text" name="Address"  id=" Address" class="form-control" placeholder="Type Address">
         </div>


        </div>
         <div class="modal-footer">
           <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
           <button type="submit" name="updatedata" class="btn btn-primary">Update Data</button>
         </div>
     </form>
      
    </div>
  </div>
</div>

        <div class="container">
          <div class="jumbotron">
             <div class="card">
              <h2> MEDICAL MANAGEMENT SYSTEM </h2>
             </div>
              <div class="card">
               
                <div class="card-body">
                <!-- Button trigger modal -->
                 <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#studentaddmodal">
                  ADD DATA
                 </button>
                </div>

              </div>

              <div class="card">
                <div class="card-body">

                        <?php
                           
                           $connection = mysqli_connect("localhost","root","");
                           $db = mysqli_select_db($connection,'phpmp');
                           
                           $query = "SELECT * FROM student";
                           $query_run = mysqli_query($connection, $query);
                        ?> 

                  <table class="table table-dark">
                 <thead>
    <tr>
      <th scope="col">Medical_ID</th>
      <th scope="col">Medical_Name</th>
      <th scope="col">Owner_Name</th>
      <th scope="col">Phone_No</th>
      <th scope="col">Medicines</th>
      <th scope="col">Products</th>
      <th scope="col">Address</th>
      <th scope="col">Edit</th>
      
    </tr>
  </thead>
  <?php 
                            if($query_run)
                            {
                              foreach($query_run as $row)
                              {
  ?>

  <tbody>
    <tr>
      <td> <?php echo $row['Medical_ID']; ?> </td>
      <td> <?php echo $row['Medical_Name']; ?></td>
      <td> <?php echo $row['Owner_Name']; ?></td>
      <td><?php  echo $row['Phone_No'];?></td>
      <td><?php  echo $row['Medicines'];?></td>
      <td><?php  echo $row['Products'];?></td>
      
      <td> <?php echo $row['Address'];  ?></td>
      <td> 
      <button type="button" class="btn btn-success editbtn" data-toggle="modal" data-target="#editmodal">
                  edit
                 </button> </td>
                 

      <!-- <td  -->
      <!-- <button type="button" class="btn btn-danger">Danger</button> </td> -->

    </tr>
    
  </tbody>

                                
                                
                                


<?php

    }
  }
else
{
  echo "no record found";
}

?>






                   </table>
  
              </div>
          </div> 
        </div>








<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> 


<script>

$(document).ready(function ()
  {
    $('.editbtn').on('click',funtion()
    {
      $('#editmodal').modal('show');
      $tr=$(this).closest('tr');
      var data =$tr.children("td").map(function(){
        return $(this).text();

      }).gets();

      console.log(data);

      $('#Medical_ID').val(data[0]);
      $('#Medical_Name').val(data[1]);
      $('#Owner_Name').val(data[2]);
      $('#Phone_No').val(data[3]);
      $('#Medicines').val(data[4]);
      $('#Products').val(data[5]);
      $('#Address').val(data[6]);
      

});
});


</script>

</body>
</html>
