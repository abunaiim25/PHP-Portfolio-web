<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>

    <link rel="stylesheet" href="css/contact.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


    <!--font awesome-->
    <link rel="stylesheet" href="./cssfontawesome/all.min.css">
    <link rel="stylesheet" href="./cssfontawesome/fontawesome.min.css">

</head>

<body>



    <header>


        <nav class="navbar navbar-expand-lg navbar-light bg-transparent   px-4">

            <div class="container-fluid">

                <a class="navbar-brand" href="#">
                    <img style="width: 120px; height: 25px;" src="./images/nlogo.png" alt="">
                </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0  mt-2">

                        <li class="nav-item">
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
                        <li class="nav-item active">
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

        <!--
        <div class="middel">

            <h1 class="header-contact"><span class="text-warning">Contact</span></h1>
        </div>
-->
    </header>




    <section class="">

        <div class="container">

            <!--vartical card right-->
            <div class="contact  mb-5">

                <h2 class="text-center mt-5">Contact <span class="text-warning">Me</span></h2>

                <div class="row">
                    <div class="col-11 ">

                        <div class="card-group my-5">


                            <div class="card  m-3  p-1">

                                <img class="card-img-top  " src="./images/call.gif" alt="">

                                <div class="card-body ">
                                    <h6 class="pt-2  text-center">+8801316057864</h6>

                                </div>
                            </div>


                            <div class="card  m-3  p-1">

                                <img class="card-img-top  " src="./images/whatsup.gif" alt="">

                                <div class="card-body ">
                                    <h6 class="pt-2  text-center">+8801316057864</h6>

                                </div>
                            </div>


                            <div class="card  m-3  p-1">
                                <img class="card-img-top" src="./images/email.gif" alt="">

                                <div class="card-body ">
                                    <h6 class="pt-2  text-center">abu15-13860@diu.edu.bd</h6>
                                </div>
                            </div>


                            <div class="card  m-3  p-1">
                                <a href="https://www.facebook.com/profile.php?id=100010098828694">
                                    <img class="card-img-top " src="./images/face.gif" alt="">

                                    <div class="card-body">
                                        <h6 class="pt-2  text-center">Facebook</h6>

                                    </div>
                                </a>
                            </div>

                            <div class="card  m-3  p-1">
                                <a href="https://www.linkedin.com/in/abu-naiim-516949210/">
                                    <img class="card-img-top " src="./images/link.gif" alt="">

                                    <div class="card-body">
                                        <h6 class="pt-2  text-center">Linked In</h6>
                                </a>
                            </div>
                        </div>


                        <div class="card  m-3  p-1">
                            <a href="https://www.linkedin.com/in/abu-naiim-516949210/">
                                <img class="card-img-top " src="./images/instagram-logo.gif" alt="">

                                <div class="card-body">
                                    <h6 class="pt-2  text-center">Instagram</h6>
                            </a>
                        </div>
                    </div>




                </div>
            </div>

        </div>

        </div>
    </section>





    <!--form-->
    <section class="my-5">
        <div class="container">

            <div class="card  p-5 bg-light">
                <div class="">
                    <h2 class="text-center mb-5">Contact <span class="text-warning">Form</span> </h2>
                </div>

                <div class="w-75 m-auto">
                    <form action="userinfo.php" method="post">

                        <div class="form-group mb-3">
                            <label class="mb-1" for="">Username</label>
                            <input type="text" name="user" autocomplete="on" class="form-control">
                        </div>
                        <div class="form-group  mb-3">
                            <label class="mb-1" for="">Email Id</label>
                            <input type="text" name="email" autocomplete="on" class="form-control">
                        </div>
                        <div class="form-group  mb-3">
                            <label class="mb-1" for="">Mobile</label>
                            <input type="text" name="mobile" autocomplete="on" class="form-control">
                        </div>
                        <div class="form-group  mb-3">
                            <label class="mb-1" for="">Comment</label>
                            <!--textarea name="" id="" cols="30" rows="10"-->
                            <textarea class="form-control" name="comment">
                </textarea>
                        </div>

                        <button type="submit" class="button button-design">Submit</button>


                    </form>
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
                    <li><a href="https://www.facebook.com/profile.php?id=100010098828694"><i
                                class="fab fa-facebook-f"></i></a></li>
                    <li><a href="https://www.linkedin.com/in/abu-naiim-516949210/"><i
                                class="fab fa-linkedin-in"></i></i></a></li>
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