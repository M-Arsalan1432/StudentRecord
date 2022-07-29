<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP AJAX CRUD</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>

<body>
    <div class="container mt-5">
        <h1 class="alert-info text-center mb-5 p-3">
            AJAX -- PHP -- BootStrap 5 -- Vanilla JavaScript (CRUD)
        </h1>

        <div class="row">
            <form class="col-sm-5" id="myform">
                <h3 class="alert-warning text-center p2">
                    Add/Update Student
                </h3>

                <div>
                    <input type="text" class="form-control" style="display:none;" id="stuid">
                    <label for="nameid" class="form-label">Name</label>
                    <input type="text" class="form-control" id="nameid">
                </div>
                <div>
                    <label for="emailid" class="form-label">Email</label>
                    <input type="email" class="form-control" id="emailid">
                </div>
                <div>
                    <label for="passwordid" class="form-label">Password</label>
                    <input type="password" class="form-control mb-2" id="passwordid">
                    <input type="checkbox" onclick="myFunction()"> Show Password
                </div>
                <div class="mt-5">
                    <button type="submit" class="btn btn-primary" id="btnadd">Save</button>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#mymodal"> Show Record</button>
                </div>
                <div id="msg"></div>
            </form>
            <!-- <div class="col-sm-7 text-center">
                <h3 class="alert-warning p2">Show Student Information</h3>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Password</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody id="tbody"></tbody>
                </table> -->
                <!-- </div> -->

                <div class="modal " id="mymodal">
    <div class="modal-dialog modal-dialog-scrollable modal-lg">
      <div class="modal-content ">
        
     <!--- Model Header -->
       
       <div class="modal-header">
         <p class="modal-title"> Student Data </p>
         <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
       </div>
       
       <!-- Model body -->
       <div class="modal-body">
         <div class="col text-center">
                <h3 class="alert-warning p2">Show Student Information</h3>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Password</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody id="tbody"></tbody>
                </table> 
                </div>
       </div>
        
        <!-- Model Footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
        </div>


      </div>
    </div>
  </div>





                <!-- sjdfvsjdfvsfvifioawioefioaw -->
            

        </div>
    </div>
    <script src="js/bootstrap.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/ajaxscript.js"></script>
    <script>
function myFunction() {
  var x = document.getElementById("passwordid");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>
</body>

</html>

