<?php
session_start();

if (!isset($_SESSION['logged_in'])) {
    session_destroy();
    header('location: nologin.php');
}
$user_id= $_SESSION['user_id'];
include_once('config.php');
$sql = "SELECT * FROM student WHERE matricNo='$user_id'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($res = $result->fetch_assoc()) {
        $profilepicPath = $res["profilepicPath"];
    }
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>College Activities</title>

        <!-- Override Bootstrap CSS with custom CSS file -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="../css/activity.css">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
        <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">

        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

        <!-- jQuery -->
        <script>
            $(window).scroll(function () {
                $('nav').toggleClass('scrolled', $(this).scrollTop() > 75);
            });
            $(function () {
                $('[data-toggle="tooltip"]').tooltip()
            });
        </script>
    </head>
    <body>
        <header>
            <div class="jumbotron text-center">
                <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top py-0">
                    <a class="navbar-brand" href="#"><img src="https://drive.google.com/uc?id=1ANPwmvZ9bZPQjywWeXCLm56GNkuzQJEX&export=download" width="40" height="40" alt="kk8 logo"></a>
                    <!-- This button appear at the navbar when the user make the browser smaller -->
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                    <!-- 	This navbar dissapear when the user make the browser smaller -->
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <!-- Items in the navbar can be included in the list -->
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="dashboard.php">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="activityList.php">Activities</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="foodOrder.php">Food</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="accoApply.php">Accommodation</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="report.php">Report</a>
                            </li>
                        </ul>

                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <div class="dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <img src="<?php echo $profilepicPath ?>" width="30" height="30" class="rounded-circle" alt="default-pic"></a>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                                        <a class="dropdown-item" href="manage.php">Manage Profile</a>
                                        <a class="dropdown-item" href="logout.php">Log Out</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
                <br><br>
                <h1 class="display-4">College Activities</h1>
                <p>An overview of what our college have in hand and what makes it lively throughout the year.</p>
            </div>
        </header>
        <main>
            <div style="padding: 50px;">
                <div class="grid-container">

                    <!-- KINAWORKS -->

                    <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                        <div class="mainflip">
                            <div class="frontside">
                                <div class="card">
                                    <img src="https://drive.google.com/uc?id=122R-9xD3CPVD0KwN2tkgKjEiVCLBZtpZ&export=download" alt="Kinaworks">
                                </div>
                            </div>
                            <div class="backside">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">KINAWORKS</h5>
                                        <p class="card-text">Kinabalu Residential College’s Main Multimedia, Technical and Documentation Club.</p>
                                        <a href="https://www.instagram.com/kinaworks/?hl=en" target="_blank"><i class="px-2 fa fa-instagram fa-lg"></i>@kinaworks</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- MAK -->

                    <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                        <div class="mainflip">
                            <div class="frontside">
                                <div class="card">
                                    <img src="https://drive.google.com/uc?id=1iCj-CvonZyu2BFWJZWLqi9zHlDaQBvTR&export=download"
                                        alt="malam anugerah kinabalu">
                                </div>
                            </div>
                            <div class="backside">
                                <div class="card">
                                    <div class="card-body">
                                        <h6 class="card-title">MALAM ANUGERAH KINABALU</h6>
                                        <p class="card-text">A committee that organizes Kinabalu Residential College's
                                            annual dinner.</p>
                                        <a href="https://www.instagram.com/mak8th/" target="_blank"><i
                                                class="px-2 fa fa-instagram fa-lg"></i>@mak8th</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- KKC -->

                    <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                        <div class="mainflip">
                            <div class="frontside">
                                <div class="card">
                                    <img src="https://drive.google.com/uc?id=1vpko-eM5WK_8Xk0B5Ef8Oqg5sBE_MCF-&export=download"
                                        alt="kelab kebudayaan cina">
                                </div>
                            </div>
                            <div class="backside">
                                <div class="card">
                                    <div class="card-body">
                                        <h6 class="card-title">KELAB KEBUDAYAAN CINA</h6>
                                        <p class="card-text">A place where Chinese culture and Mandarin language is
                                            taught by the KK8's residents.</p>
                                        <a href="https://www.instagram.com/kelaskebudayaancina_kk8/" target="_blank"><i
                                                class="px-2 fa fa-instagram fa-lg"></i>@kelaskebudayaancina_kk8</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- LEPAKINA -->

                    <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                        <div class="mainflip">
                            <div class="frontside">
                                <div class="card">
                                    <img src="https://drive.google.com/uc?id=16sqmdakeXDJQz3-diGcZnXPGuuQASocD&export=download"
                                        alt="Lepakina">
                                </div>
                            </div>
                            <div class="backside">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">LEPAKINA</h5>
                                        <p class="card-text">An entrepreneur club under KEMAS in KK8, University of
                                            Malaya in which involved to activities and programs throughout the year.</p>
                                        <a href="https://www.instagram.com/lepakina/" target="_blank"><i
                                                class="px-2 fa fa-instagram fa-lg"></i>@lepakina</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Octacares -->

                    <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                        <div class="mainflip">
                            <div class="frontside">
                                <div class="card">
                                    <img src="https://drive.google.com/uc?id=1GHZfWW3UvpHYVohX7DnnrL47xzoGns8B&export=download"
                                        alt="Octacares">
                                </div>
                            </div>
                            <div class="backside">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">OCTACARES</h5>
                                        <p class="card-text">Our mission and vision is to help those in need
                                            and protect the environment. The main goal is to save the world and we hope
                                            you would help us achieve it!
                                        </p>
                                        <a href="https://www.instagram.com/octacares/" target="_blank"><i
                                                class="px-2 fa fa-instagram fa-lg"></i>@octacares</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- FESTAKA -->

                    <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                        <div class="mainflip">
                            <div class="frontside">
                                <div class="card">
                                    <img src="https://drive.google.com/uc?id=15Xjhhw1ZClYkO6roBhGiK9ZayLbTsgD7&export=download"
                                        alt="festaka">
                                </div>
                            </div>
                            <div class="backside">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">FESTAKA</h5>
                                        <p class="card-text">Festival Tari Kanak-Kanak is a Malay traditional dance
                                            competition involving primary schools in the
                                            vicinity of Selangor and Kuala Lumpur.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- ROF -->

                    <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                        <div class="mainflip">
                            <div class="frontside">
                                <div class="card">
                                    <img src="https://drive.google.com/uc?id=1WEut0-p0yyW8-zqumlWD1nROKcQV6v3v&export=download"
                                        alt="rof">
                                </div>
                            </div>
                            <div class="backside">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">RACE OF FITTEST</h5>
                                        <p class="card-text">One of the projects that has been organized by JKP Sports
                                        </p>
                                        <a href="https://www.instagram.com/_unmaskedreality_/" target="_blank"><i
                                                class="px-2 fa fa-instagram fa-lg"></i>@_unmaskedreality_</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Octa Sports Fest -->

                    <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                        <div class="mainflip">
                            <div class="frontside">
                                <div class="card">
                                    <img src="https://drive.google.com/uc?id=1a2R4Jcb9PjjL5xJXJCiADmWo8nhuMtAZ&export=download"
                                        alt="octa sports fest">
                                </div>
                            </div>
                            <div class="backside">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">OCTA SPORTS FEST</h5>
                                        <p class="card-text">Sports tournament for residents of Kinabalu Residential
                                            College.</p>
                                        <a href="https://www.instagram.com/octasportsfest/" target="_blank"><i
                                                class="px-2 fa fa-instagram fa-lg"></i>@octasportsfest</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- FBI -->

                    <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                        <div class="mainflip">
                            <div class="frontside">
                                <div class="card">
                                    <img src="https://drive.google.com/uc?id=1PfvIFDP2Vsrs1mV9jK0cQ6QRQ3LkWef2&export=download"
                                        alt="festival belia islam">
                                </div>
                            </div>
                            <div class="backside">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">FESTIVAL BELIA ISLAM</h5>
                                        <p class="card-text">FBI is a program under the management of JKP Kerohanian dan
                                            Perpaduan</p>
                                        <a href="https://www.instagram.com/festivalbeliaislam_um/" target="_blank"><i
                                                class="px-2 fa fa-instagram fa-lg"></i>@festivalbeliaislam_um</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Surau -->

                    <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                        <div class="mainflip">
                            <div class="frontside">
                                <div class="card">
                                    <img src="https://drive.google.com/uc?id=1os-2M80bxJdCakdf-Q6XzRD5KxPFsKs9&export=download"
                                        alt="surau">
                                </div>
                            </div>
                            <div class="backside">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">SURAU KINABALU</h5>
                                        <p class="card-text"> Balai Islam ini bernaung di
                                            bawah JKP Kerohanian dan Perpaduan.</p>
                                        <a href="https://www.instagram.com/suraukinabalu/" target="_blank"><i
                                                class="px-2 fa fa-instagram fa-lg"></i>@suraukinabalu</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- FESKEK -->

                    <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                        <div class="mainflip">
                            <div class="frontside">
                                <div class="card">
                                    <img src="https://drive.google.com/uc?id=1M1nmBwUf8lQY3Z3nMNIjXTpZ7x3QSvNd&export=download"
                                        alt="feskek">
                                </div>
                            </div>
                            <div class="backside">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">FESKEK</h5>
                                        <p class="card-text">Festival Kesenian dan Kebudayaann Kinabalu is a project
                                            that brings together the culture of all ethnic groups in Malaysia in one
                                            project.</p>
                                        <a href="https://www.instagram.com/feskek_8th/" target="_blank"><i
                                                class="px-2 fa fa-instagram fa-lg"></i>@feskek_8th</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- end grid container -->
                <div style="text-align: center;">
                    <a href="../php/activityReg.php" class="button my-auto">Activity Registration</a>
                </div>
            </div> <!-- end of jumbotron -->
        </main>
        <footer class="container-fluid px-2 px-sm-5 py-auto">
            <div class="d-flex flex-column flex-sm-row text-light font-italic">
                <div class="py-1 ml-sm-0 text-center">
                    Copyright © 2020 - Kinabalu Residential College,&nbsp;<a class="text-light text-nowrap ml-sm-0"
                        data-toggle="tooltip" data-placement="top" href="https://www.um.edu.my/" title="um.edu.my"><u>
                            University
                            of Malaya</u>
                    </a>.
                </div>
                <div class="mx-auto mr-sm-0 pt-sm-1 pb-2 pb-sm-0">
                    <a tabindex="0" class="text-light" data-toggle="tooltip" data-placement="top"
                        href="https://www.instagram.com/unimalaya/" title="@unimalaya"><i
                            class="px-2 fa fa-instagram fa-lg"></i></a><a tabindex="0" class="text-light"
                        data-toggle="tooltip" data-placement="top" href="https://twitter.com/unimalaya/"
                        title="@unimalaya"><i class="px-2 fa fa-twitter fa-lg"></i></a>
                </div>
            </div>
        </footer>
    </body>
</html>