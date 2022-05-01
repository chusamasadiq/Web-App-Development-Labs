<?php


$nameErr = "";
if(empty($_POST['fname']))
{
    $nameErr= "Enter your name";
}
else if(strlen($_POST['fname']) <=2 )
{
    $nameErr = "First Name should consists of more than 3 letters";   
}
else if(!preg_match('/^[a-zA-Z ]*$/', $_POST['fname'])){
    $nameErr= "Only alphabets and spaces are allowed";   
}
else
{
    echo $_POST['fname'];
}

$zipErr="";

if(empty($_POST['zip']))
{            
    $zipErr = "Please enter zip code";
}
else if(!preg_match("/^[0-9]*$/", $_POST['zip']))
{
    $zipErr = "Only digit values are allowed";
}
else
{
    echo "<br>". $_POST['zip'];
}

$emailErr="";
if(empty($_POST['email']))
{
    $emailErr= "Please your email address";
}

else
{
    echo "<br>". $_POST['email'];
}

$countryErr="";
if(empty($_POST['country']))
{
    $countryErr= "Please select your country";
}
else
{
    echo "<br>". $_POST['country'];
}


?>

<!DOCTYPE html>
<html>

<head>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
  integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

  <title>Lab-9</title>

  <style>
        .error_msg
        {
            color: red;
        }
    </style>


</head>

<body>

<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
    <div class="container bg-light">
      <h1 class="Heading" style="text-align: center;"> Billing Adress </h1>
      <div class="row">
        <div class="col-6">
          <div class="form-group">
            <label for="fname">First name</label>
            <input type="text" class="form-control" name="fname" placeholder="First name">
            <span class="error_msg">* <?php echo $nameErr; ?></span>

          </div>
        </div>

        <div class="col-6">
          <div class="form-group">
            <label for="lname">Last name</label>
            <input type="text" class="form-control" name="lname"   placeholder="Last name">
          </div>
        </div>

        <div class="col-12">
          <label for="username">Username</label>
          <div class="form-group">

            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text">@</span>
              </div>
              <input type="username" class="form-control" placeholder="Username" name="uname">
            </div>
          </div>
        </div>

        <div class="col-12">
          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" name="email" placeholder="you@example.com" required>
            <span class="error_msg">* <?php echo $emailErr; ?></span>
          </div>
        </div>

        <div class="col-12">
          <div class="form-group">
            <label for="Address1">Address</label>
            <input type="text" class="form-control" name="Address1" placeholder="1234 Main St">
          </div>
        </div>

        <div class="col-12">
          <div class="form-group">
            <label for="Address2">Address 2</label>
            <input type="text" class="form-control" name="Address2" placeholder="Appartment or suite">
          </div>
        </div>

        <div class="col-md-4 mb-3">
          <label for="">Country</label>
          <select class="custom-select form-control"  name="country" placeholder="country" required >
          <option value="" disabled selected hidden>Choose Country</option>
            <option>Pakistan</option>
            <option>India</option>
            <option>United Kingdom</option>
          </select>
          <span class="error_msg">* <?php echo $countryErr; ?></span>
        </div>

        <div class="col-md-4 mb-3">
          <label for="">State</label>
          <select class="custom-select form-control" name="state">
            <option selected> Choose..</option>
            <option>Punjab </option>
            <option>Delhi</option>
            <option>London</option>
          </select>
        </div>


        <div class="col-md-4 mb-3">
          <label for="">Zip Code</label>
          <input type="text" class="form-control" name="zip">
          <span class="error_msg">* <?php echo $zipErr; ?></span>

        </div>

      </div>

      <hr>

      <div class="form-check">
        <label for="form-check-label" for="BAddress">
          <input class="form-check-input" type="checkbox" name="BAddress">
          Shipping Adress is Same as My Billing Adress
        </label>
      </div>

      <div class="form-check">
        <label for="form-check-label" for="info">
          <input class="form-check-input" type="checkbox" name="info">
          Save this information for next time
        </label>
      </div>

      <hr>

      <button type="submit" class="btn btn-secondary"> Submit</button>
    </div>
  </form>
</body>

</html>