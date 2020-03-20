<!DOCTYPE html>
<html>
<head>
    <title>
    </title>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link rel="stylesheet" type="text/css" href="">
</head>
<style type="text/css">
    body { margin-top:150px;
        margin-left: 300px;
 }



</style>
<body style="background-color:#6e5a11;">
   
<div class="container">
    <div class="row">
        <div class="col-xs-12 col-md-8">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        Payment Details
                    </h3>
                </div>
                <div class="panel-body">
                    <form role="form" action="payment.php" method="POST">
                    <div class="form-group">
                        <label for="cardNumber">
                            CARD NUMBER</label>
                        <div class="input-group">
                            <input type="text" class="form-control" name="cardNumber" placeholder="Valid Card Number"
                                required autofocus />
                            <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-7 col-md-7">
                            <div class="form-group">
                                <label for="expityMonth">
                                    EXPIRY DATE</label><br>
                                <div class="col-xs-6 col-lg-6 pl-ziro">
                                    <input type="text" class="form-control"  placeholder="MM" name="month" required />
                                </div>
                                <div class="col-xs-6 col-lg-6 pl-ziro">
                                    <input type="text" class="form-control" placeholder="YY" 
                                    name="year"required /></div>
                            </div>
                        </div>
                        <div class="col-xs-5 col-md-5 pull-right">
                            <div class="form-group">
                                <label for="cvCode">
                                    CV CODE</label>
                                <input type="password" name="cvv" class="form-control" placeholder="CV" required />
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
            <ul class="nav nav-pills nav-stacked">
                <li class="active"><a href="#"><span class="badge pull-right"><span class=""></span>200 Ruppes</span> Final Payment</a>
                </li>
            </ul>
            <br/>
            <input  name="Submit" type="submit" value="Pay">
        </div>
    </form>
    </div>
</div>




<?php
if(isset($_POST['Submit'])){
$Name=$_POST['cardNumber'];
    $Email=$_POST['month'];
    $PhoneNumber=$_POST['year'];
    $password=$_POST['cvv'];


/// Check wheather input is empty or not

    // if (!empty($Name)|| !empty($DOB)|| !empty($AUID)|| !empty($password)|| !empty($Dept)|| !empty($Sec)|| !empty($Sem)|| !empty($Year)) {
        $host="localhost";
        $dbUsername="root";
        $dbpassword="123456789";
        $dbname="cinema_db";
/// Create a connection
        $conn= new mysqli($host,$dbUsername,$dbpassword,$dbname);
/// for error accurs in connection
        if (mysqli_connect_error()) {
            die('Connect Error('.mysqli_connect_error().')'.mysqli_connect_error());
        }
        else{
            // $SELECT= " SELECT AUID from register where AUID=? limit 1";
            $INSERT= "INSERT INTO payment(cardNumber,month,year,cvv) VALUES(?,?,?,?)";
/// prepare statement
            // $stmt=$conn->prepare($SELECT);
            // $stmt->bind_param("s",$AUID);
            // $stmt->execute();
            // $stmt->bind_result($AUID);
            // $stmt->store_result();
            // $rnum = $stmt->num_rows;
/// insert record with no duplication
    
                $stmt = $conn->prepare($INSERT);
                $stmt->bind_param("ssss",$Name,$password,$Email,$PhoneNumber);
                $stmt->execute();
                header('location: http://localhost/cinema-reservation/thankyou.html');
            
            // else{
            //  echo "already register using this AUID";
                
            // }

            $stmt->close();
            $conn->close();
        }
    }



?>



</body>
</html>