<?php
session_start();
require ('register/mysqli_connect.php');
if(isset($_POST['submit']))
{
    $id=$_SESSION['userID'];
    $amount=$_POST['amt'];
    $insert=mysqli_query($con,"INSERT INTO transaction (user_id,amt) VALUES ($id,$amount)");
    if($insert)
    {
        echo "<scrupt>alert('Payment Successful')</script>";
        header('location: index.php');
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
      <!-- Bootstrap CDN -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

<!-- Owl-carousel CDN -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha256-UhQQ4fxEeABh4JrcmAJ1+16id/1dnlOEVCFOxDef9Lw=" crossorigin="anonymous" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha256-kksNxjDRxd/5+jGurZUJd1sdR2v+ClrCl3svESBaJqw=" crossorigin="anonymous" />

<!-- font awesome icons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" integrity="sha256-h20CPZ0QyXlBuAw7A+KluUYx/3pK+c7lYEpqLTlxjYQ=" crossorigin="anonymous" />

<!-- Custom CSS file -->
<link rel="stylesheet" href="style.css">
    <style>
    head,
body {
    background-color: #FFCCBC
}

.container {
    margin-top: 40px;
    margin-bottom: 40px
}

img {
    width: 100%
}

.card-title {
    justify-content: space-between;
    margin-top: 25px
}

.register {
    font-size: 10px;
    position: relative;
    bottom: 5px
}

.cvc {
    width: 2.5em;
    position: absolute
}

input {
    border: none;
    padding-left: 4px;
    background-color: #f7f1f1;
    font-size: 15px
}

.card-body {
    background-color: #f7f1f1
}

.footer {
    background-color: #00BCD4;
    color: white
}

.footer:hover {
    cursor: pointer;
    background-color: #0097A7
}

.numbr {
    border-bottom: 1px solid #c1bcbc;
    padding-bottom: 8px
}

.line2 {
    border-bottom: 1px solid #c1bcbc;
    padding-bottom: 8px;
    padding-left: 0px
}

input.focus,
input:focus {
    outline: 0;
    box-shadow: none !important
}

.numbr.numbr.hover,
.numbr:hover {
    border-bottom: 1px solid aqua
}

.line2.hover,
.line2:hover {
    border-bottom: 1px solid aqua
}

.fa-lock {
    margin-right: 10px
}

.order {
    margin-top: 10px
}
    </style>
</head>
<body>
<div class='container'>
    <div class="card mx-auto col-md-5 col-8 mt-3 p-0"> 
        <div class="card-title d-flex px-4">
            <p class="item text-muted">Barcelona<label class="register">&reg;</label> Chair</p>
            <p><?php echo $_GET['amt']; ?></p>
        </div>
        <form method="POST">
        <div class="card-body">
            <p class="text-muted">Your payment details</p>
            <div class="numbr mb-3"> <i class=" col-1 fas fa-credit-card text-muted p-0"></i> <input required class="col-10 p-0" type="number" placeholder="Card Number"> </div>
            <div class="line2 col-lg-12 col-12 mb-4"> <i class="col-1 far fa-calendar-minus text-muted p-0"></i> <input required class="cal col-5 p-0" type="number" placeholder="MM/YY"> <i class="col-1 fas fa-lock text-muted"></i> <input required class="cvc col-5 p-0" type="number" placeholder="CVC">
            
            <input required name="amt" class="cvc col-5 p-0" type="hidden" placeholder="CVC" value="<?php echo $_GET['amt']; ?>"> </div>
        </div>
        <div class=" text-center p-0">
            <div class="col-lg-12 col-12 p-0">
                <button type="submit" name="submit" class="btn btn-success">Order Now</button>
            </div>
        </div>
        <br>
        </form>
    </div>
</div>
</body>
</html>