
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style/styles.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <title>Book My Movie</title>
    <link rel="icon" type="image/png" href="img/logo.png">
</head>
<?php
    $link = mysqli_connect("localhost", "root", "123456789", "cinema_db");
    $sql = "SELECT * FROM movieTable WHERE language='English'";
    $sql1 = "SELECT * FROM movieTable WHERE language='Kannada'";
    $sql2 = "SELECT * FROM movieTable WHERE language='Hindi'";
    ?>
<body>

    <header> 
    <div class="navbar-brand">
    <a href="index.php">
        <h1 class="navbar-heading">Book My Ticket </h1>
    </a>
</div>
<div class="navbar-container">
    <nav class="navbar">
        <ul class="navbar-menu">
            <li><a href="index.php">Home</a></li>
            <li><a href="faq.html">Faq</a></li>
         
           
            <li><a href="contact-us.php">Contact</a></li>
             <li><a href="index.html">Logout</a></li>
        </ul>
    </nav>
</div></header>
    <div id="home-section-1" class="movie-show-container">
        <h1>KANNADA</h1>
        <h3>Book a movie now</h3>
        <h3 style="float: right;"></h3>

        <div class="movies-container">

            <?php
                        if($result = mysqli_query($link, $sql1)){
                            if(mysqli_num_rows($result) > 0){
                                for ($i = 0; $i <=3; $i++){
                                    $row = mysqli_fetch_array($result);
                                    echo '<div class="movie-box">';
                                    echo '<img src="'. $row['movieImg'] .'" alt=" ">';
                                    echo '<div class="movie-info ">';
                                    echo '<h3>'. $row['movieTitle'] .'</h3>';
                                    echo '<a href="booking.php?id='.$row['movieID'].'"><i class="fas fa-ticket-alt"></i> Book a seat</a>';
                                    echo '</div>';
                                    echo '</div>';
                                    
                                }
                                echo "<br>";
                                for ($i = 4; $i <=6; $i++){
                                    $row = mysqli_fetch_array($result);
                                    echo '<div class="movie-box">';
                                    echo '<img src="'. $row['movieImg'] .'" alt=" ">';
                                    echo '<div class="movie-info ">';
                                    echo '<h3>'. $row['movieTitle'] .'</h3>';
                                    echo '<a href="booking.php?id='.$row['movieID'].'"><i class="fas fa-ticket-alt"></i> Book a seat</a>';
                                    echo '</div>';
                                    echo '</div>';
                                }
                                mysqli_free_result($result);
                            } else{
                                echo '<h4 class="no-annot">No Booking to our movies right now</h4>';
                            }
                        } else{
                            echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
                        }
                        echo "</div></div></div>";
                ?>

</body>
</html>