
<html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    </head>
        <body>
        <div class="container">
            <div class="row">
            <div class="col-20">
                       <h1> signup </h1>
                       <form method="post">
                              <div class="from-group">
                                  <label class="form-label"> email </label>
                                  <input type="Email" class="form-control" name="email">
                              </div>

                                      <div class="from-group">
                                         <label class="form-label"> password </label>
                                         <input type="passwordS" class="form-control" name="password">
                                          </div>

                                             <div>
                                                  <button type="submit" class="btn btn-success" name="sub"> login</button>
                                             </div>
                         </form>
                   </div>           
             </div>    
        </div>
        </body>
</html>
<?php
include('config.php');

if(isset($_POST['sub']))
{
$email=$_POST['email'];
$password=$_POST['password'];

$qry="SELECT * FROM admin WHERE email='$email' and password='$password'";
$result= mysqli_query($con,$qry);
if($row=mysqli_fetch_assoc($result)>0)
{
    header("location:index.php");
}
else{
    echo "error";
}
mysqli_close($con);
}
?>