<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <link rel="stylesheet" href="css/home.css">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


    <!--font awesome-->
    <link rel="stylesheet" href="./cssfontawesome/all.min.css">
    <link rel="stylesheet" href="./cssfontawesome/fontawesome.min.css">
</head>

<body>






    <header>

        <!--navbar-->
        <nav class="navbar navbar-expand-lg navbar-light bg-transparent  px-4">

            <div class="container-fluid">

                <a class="navbar-brand" href="#">
                    <img style="width: 120px; height: 30px;" src="./images/nlogo.png" alt="">
                </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0  mt-2">

                        <li class="nav-item active">
                            <a class="nav-link   text-light" aria-current="page" href="home.php">Home</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link  text-light" href="about.php">About</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link  text-light" href="skill.php">Skills</a>
                        </li>


                        <!--
                        <li class="nav-item">
                            <a class="nav-link  text-light" href="project.html">Project</a>
                        </li>
                         -->

                        <li class="nav-item">
                            <a class="nav-link  text-light" href="contact.php">Contact</a>
                        </li>

                    </ul>
                    <form class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="button button-design" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>





        <div class="container ">



            <div class="naiim ">

                <div class="left">

                    <img src="./images/naiim.png" alt="">
                </div>

                <div class="right ">
                    <h1 class="text-warning">Abu Naiim</h1>
                    <h6>Progammer, Softwer Developer and Learner</h6>


                    </p>


                </div>
            </div>

        </div>

    </header>







    <section class="about">
        <!--Horigontal card-->
        <div class="">

            <h2 class="aboutme">About<span class="text-warning"> Me</span></h2>

            <div class="card  mt-5 p-3">

                <div class="row">
                    <div class="col">
                        <div class="row">


                            <div class="col-4 mb-3">
                                <img class="card-img-top  img-fluid" src="./images/bg2.jpg" alt="">
                            </div>
                            <div class="col-8">

                                <p> I was born in a middle-class Muslim family. Now, I am studying at Daffodil
                                    International University in
                                    the department of B.Sc in Computer Science & Engineering. I have passed Alim from
                                    Darunnazat
                                    Siddiqua Kamil Madrasah and Dakhil & JDC from Hafez Abdur Razzak Jamia Islamia
                                    Madrasah. I would
                                    like to be a Software Engineer. Currently, I am in Karanigong, Dhaka. My home
                                    village is Rarirchor,
                                    Chandpur. My hobbies are fishing, playing cricket, watching cricket and football.
                                </p>



                                <ul class="social">
                                    <li><a href="https://www.facebook.com/profile.php?id=100010098828694">
                                            <i class="fab fa-facebook"></i></a></li>
                                    <li><a href="https://www.linkedin.com/in/abu-naiim-516949210/">
                                            <i class="fab fa-linkedin-in"></i></i></a></li>
                                    <li><a href="https://github.com/abunaiim25"><i class="fab fa-github"></i></a></li>
                                    <li><a
                                            href="https://www.instagram.com/abu_naiim/?fbclid=IwAR3CVx9Ou487r0VEv5XNcikvPuLh6m6ONsmwnzYrzG2A0RQrjQ4I3h5v8dk"><i
                                                class="fab fa-instagram"></i></i></i></a></li>
                                </ul>


                            </div>

                        </div>

                    </div>
                </div>
            </div>

        </div>
    </section>


    

  <!--carousel-->
    <section class="my-5">
    <div class="container">

        <div class="card  bg-light">
            <div class="container-carousel">
                <h2 class="text-center my-5">My <span class="text-warning">Photos</span></h2>

                <div class="container-fluid  bg-light">
                    <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">

                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0"
                                class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1"
                                aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2"
                                aria-label="Slide 3"></button>
                        </div>


                        <div class="carousel-inner">
                            <div class="carousel-item active" data-bs-interval="10000">
                                <img src="./images/n5.jpeg" class="d-block w-100" alt="">
                                <div class="carousel-caption d-none d-md-block">
                                
                                </div>
                            </div>
                            <div class="carousel-item" data-bs-interval="2000">
                                <img src="./images/n4.jpg" class="d-block w-100" alt="">
                                <div class="carousel-caption d-none d-md-block">
                                    
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="./images/n3.jpg" class="d-block w-100" alt="">
                                <div class="carousel-caption d-none d-md-block">
                                    
                                </div>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>


                </div>
                
            </div>
        </div>
        </div>
    </section>










    <div class="footer-body">
        <footer>
            <div class="footer-contener">
                <h3>Abu Naiim</h3>
                <p>I am studying Computer Science & Engineering at Daffodil International University</p>

                <ul class="socials">
                    <li><a href="https://www.facebook.com/profile.php?id=100010098828694">
                            <i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="https://www.linkedin.com/in/abu-naiim-516949210/">
                            <i class="fab fa-linkedin-in"></i></i></a></li>
                    <li><a href="https://github.com/abunaiim25"><i class="fab fa-github"></i></a></li>
                    <li><a
                            href="https://www.instagram.com/abu_naiim/?fbclid=IwAR3CVx9Ou487r0VEv5XNcikvPuLh6m6ONsmwnzYrzG2A0RQrjQ4I3h5v8dk"><i
                                class="fab fa-instagram"></i></i></i></a></li>
                </ul>
            </div>

            <div class="footer-bottom">
                <p>copyright &copy;2021 codeOpacity. designed by <span>Naiim</span></p>
            </div>
        </footer>
    </div>




    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
</body>

</html>