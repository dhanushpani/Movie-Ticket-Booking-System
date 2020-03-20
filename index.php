<!DOCTYPE html>
<html lang="en">

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

<body>
    <?php
    $link = mysqli_connect("localhost", "root", "123456789", "cinema_db");
    $sql = "SELECT * FROM movieTable WHERE language='English'";
    $sql1 = "SELECT * FROM movieTable WHERE language='Kannada'";
    $sql2 = "SELECT * FROM movieTable WHERE language='Hindi'";
    ?>
    <header></header>
    <div id="home-section-1" class="movie-show-container">
        <h1>ENGLISH</h1>
        <h3>Book a movie now</h3>

        <div class="movies-container">

            <?php
                        if($result = mysqli_query($link, $sql)){
                            if(mysqli_num_rows($result) > 0){
                                for ($i = 0; $i <=5; $i++){
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
                                  echo "<a href='english.php'><h3>ViewMore</h3></a>";
                            } else{
                                echo '<h4 class="no-annot">No Booking to our movies right now</h4>';
                            }
                        } else{
                            echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
                        }
                        echo "</div></div></div>";
                        echo "
                        <div id='home-section-1' class='movie-show-container'>
                            <h1>KANNADA</h1>
                            <h3>Book a movie now</h3>
                            <div class='movies-container'>";

                        if($result = mysqli_query($link, $sql1)){
                            if(mysqli_num_rows($result) > 0){

                                for ($i = 0; $i<=5; $i++){

                                    $row = mysqli_fetch_array($result);
                                    echo '<div class="movie-box">';
                                    echo '<img src="'. $row['movieImg'] .'" alt=" ">';
                                    echo '<div class="movie-info ">';
                                    echo '<h3>'. $row['movieTitle'] .'</h3>';
                                    echo '<a href="booking.php?id='.$row['movieID'].'"><i class="fas fa-ticket-alt"></i> Book a seat</a>';
                                    echo '</div>';
                                    echo '</div>';
                                }
                                echo "<a href='kannada.php'><h3>ViewMore</h3></a>";
                                mysqli_free_result($result);
                            } else{
                                echo '<h4 class="no-annot">No Booking to our movies right now</h4>';
                            }
                            
                        } else{
                            echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
                        }
                            echo "</div></div></div>";

                         echo "
                        <div id='home-section-1' class='movie-show-container'>
                            <h1>HINDI</h1>
                            <h3>Book a movie now</h3>
                            <div class='movies-container'>";

                        if($result = mysqli_query($link, $sql2)){
                            if(mysqli_num_rows($result) > 0){

                                    for ($i = 0; $i<=5; $i++){

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
                                 echo "<a href='hindi.php'><h3>ViewMore</h3></a>";
                            } else{
                                echo '<h4 class="no-annot">No Booking to our movies right now</h4>';
                            }
                            
                        } else{
                            echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
                        }
                            echo "</div></div></div>";
                        
                        // Close connection
                        mysqli_close($link);
                        ?>

  

    <div id="home-section-2" class="services-section">
        <h1>How it works</h1>
        <h3>3 Simple steps to book your favourit movie!</h3>

        <div class="services-container">
            <div class="service-item">
                <div class="service-item-icon">
                    <i class="fas fa-4x fa-video"></i>
                </div>
                <h2>1. Choose your favourite movie</h2>
                <p>choose the movie you want to watch at our theaters</p>
            </div>
            <div class="service-item">
                <div class="service-item-icon">
                    <i class="fas fa-4x fa-credit-card"></i>
                </div>
                <h2>2. Pay for your tickets</h2>
                <p>Make a secure Payment </p>
            </div>
            <div class="service-item">
                <div class="service-item-icon">
                    <i class="fas fa-4x fa-theater-masks"></i>
                </div>
                <h2>3. Pick your seats and Enjoy watching</h2>
                <p>Choose the seat and enjoy the movie</p>
            </div>
            <div class="service-item"></div>
            <div class="service-item"></div>
        </div>
    </div>
    
    
    <footer></footer>

    <script src="scripts/jquery-3.3.1.min.js "></script>
    <script src="scripts/script.js "></script>
</body>

</html>