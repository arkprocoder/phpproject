<!DOCTYPE html>
<html lang="en">
<head>
 
    <meta charset="UTF-8">
    <meta name="viewport"  content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
   
    <title>MEDICAL MANAGEMENT SYSTEM</title>
    <div class="p-3 mb-2 bg-danger text-white">WELCOME TO MEDICAL MANAGEMENT SYSTEM</div>
    
    <div class="bd-example">
  <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="md1.jpg" class="d-block w-100" alt="WELCOME TO DATA ENTRY ">
        <div class="carousel-caption d-none d-md-block">
          <h2>Have a nice day</h2>
          <p>SRI VENKATESHWARA COLLEGE OF ENGINEERING</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="md.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Less you Consume more you live </h5>
          <p>USE LESS LIVE MORE</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="md2.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>DRUGS ARE INJURIOUS TO HEALTH</h5>
          <p> AVOIDING MAKES SENSE </p>
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
             <div class="alert alert-primary" role="alert">
  MEDICAL MANAGEMENT SYSTEM <a href="#" class="alert-link"></a>
             </div>
              
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

                  <table class="table table-striped">
 
                  <thead class="thead-dark">
                 
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
                 <td>
                  
                 

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


        <form action="delete.php" method="POST"> 
        <div class="modal-body">

        <div class="form-group">
        <div class="alert alert-danger" role="alert">
  ENTER ID TO DELETE CUSTOMER DATA <a href="#" class="alert-link"></a>
        </div>
            <label> MEDICAL ID </label>
            <input type="value" name="Medical_ID" id="Medical_ID" class="form-control" placeholder="Enter Medical ID">
          </div>  
         
        </div>
         <div class="modal-footer">
           <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
           <!-- <h4> do yo want to delete data </h4> -->
           <button type="submit" name="deletedata" class="btn btn-primary">Yes Delete Data</button>
         </div>
     </form>
      
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
      $('#deletemodal').modal('show');
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


<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>ARK </title>
</head>

<body>
    <!-- our code starts here -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-success">
        <a class="navbar-brand" href="/">Search for Available Products</a>
        <!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button> -->
<!-- 
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/">Home Products <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">

                    <a class="nav-link active" href="/about.html">About</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Select Medicines
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="/services.html">Fever</a>
                        <a class="dropdown-item" href="/services.html">Bodypain</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="/services.html">Migrane</a>
                        <a class="dropdown-item" href="/services.html">headache</a>
                        <a class="dropdown-item" href="/services.html">Stomach pain</a>
                        <a class="dropdown-item" href="/services.html">Dizziness</a>
                    </div> -->
                <!-- </li> -->
                <!-- <li class="nav-item">

                    <a class="nav-link" href="/contact.html">Contact Us</a>
                </li> -->

            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>
s
    <div class="container mt-3">
        <h2> Latest Products </h2>
        <div class="row justify-content-center">
            <div class="card mx-4" style="width: 18rem;">
                <img src="md.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">TABLETS </h5>
                    <p class="card-text">“Doctoring her seemed to her as absurd as putting together the pieces of a broken vase.
“sometimes we take chances, sometimes we take pills.” </p>
                    <a href="#" class="btn btn-primary">Buy for rs:300</a>
                </div>
            </div>
            <div class="card mx-4" style="width: 18rem;">
                <img src="md2.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">PERFUMES</h5>
                    <p class="card-text">Perfume is like a personal signature, which is why I like to mix my own.
</p>
                    <a href="#" class="btn btn-primary">Buy for rs:200 </a>
                </div>
            </div>
            <div class="card mx-4" style="width: 18rem;">
                <img src="bg5.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">AWESOME</h5>
                    <p class="card-text">Buy use and reply until dont judge our products</p>
                    <a href="#" class="btn btn-primary">Buy for rs:1000 </a>
                </div>
            </div>
        </div>
    </div>
    <div class="container my-3">
        <h2>ABOUT Medical Management System</h2>
        <hr>
        <div class="accordion" id="accordionExample">
            <div class="card">
                <div class="card-header" id="headingOne">
                    <h2 class="mb-0">
                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            How We started this Management System
                        </button>
                    </h2>
                </div>

                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                    <div class="card-body">
                    Once i went to a medical shop there was no medicines which i wanted he said no stocks available he have to go pharmacy
                    to bring so i got a idea why not a management who provides products to medical shop so they no need of going pharmacy
                    then we got a dbms miniproject so this idea we implemented.

                       
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingTwo">
                    <h2 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Who is the Owner Of Medical Mangement System?
                        </button>
                    </h2>
                </div>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                    <div class="card-body">
                    Design by: APOORVA A.N 
                   Implemented by: ANEES-UR-REHMAN
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingThree">
                    <h2 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            How to Reach ARK Mangement SYSTEM?
                        </button>
                    </h2>
                </div>
                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                    <div class="card-body">
                    R.t.nagar 5th phase hmt playground  aruna complex 2nd floor Bangalore 562132


                    </div>
                </div>


            </div>

            <div class="card">
                <div class="card-header" id="headingFourcollapseFour">
                    <h2 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                            How To Download the Medical Mangement App?
                        </button>
                    </h2>
                </div>
                <div id="collapseFour" class="collapse" aria-labelledby="headingFourcollapseFour" data-parent="#accordionExample">
                    <div class="card-body">
                    Its avaiable in Playstore :ARK application
                    </div>
                </div>


            </div>

            <div class="card">
                <div class="card-header" id="headingFive">
                    <h2 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                            How to Avail Discount At ARK?
                        </button>
                    </h2>
                </div>
                <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
                    <div class="card-body">
                    THE MORE YOU ORDER SOON WE DELIVER
                    WITH CASHBACKS OFFER WHEN YOU PAY WITH DEBITCARD OR UPI PAYMENTS
                    </div>
                </div>


            </div>


        </div>
    </div>



    <form action="login.php" method="POST"> 
        <div class="modal-body">

        <div class="form-group">
        
            <label> LOG OUT </label>
            
          </div>  
         
        </div>
         <div class="modal-footer">
           <
           <!-- <h4> do yo want to delete data </h4> -->
           <button type="submit" name="" class="btn btn-danger">Logout</button>
         </div>
     </form>


    <footer class="container">
        <hr>
        <p class="float-right"><a href="#">Back to top</a></p>
        <p>© 2017-2019 National medical, Inc. · <a href="#">Privacy</a> · <a href="#">Terms</a></p>
        <hr>
    </footer>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>