<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About me</title>

    <link rel="stylesheet" href="css/about.css">


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

                <a class="navbar-brand" href="home.html">
                    <img style="width: 120px; height: 25px;" src="./images/nlogo.png" alt="">
                </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0  mt-2">

                        <li class="nav-item ">
                            <a class="nav-link   text-light" aria-current="page" href="home.php">Home</a>
                        </li>

                        <li class="nav-item  active">
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
                    <form class="d-flex ">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="button button-design" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>

<!--
        <div class="middel">

            <h1 class="header-about "><span class="text-white">About </span> <span class="text-warning">Me</span></h1>
        </div>
-->
    </header>


    <section class="info">
        <div class="container mt-5">

            <div class="card  my-3">

                <div class="card-header  bg-success  text-white">
                    <h4 class="text-center">Personal Information</h4>
                </div>

                <div class="card-body   text-black  bg-light">

                    <pre>
                        Name				:  Abu Naiim Md. Rayhan Siddique <br>
                        Date of Birth			:  3 July 2000<br>
                        Gender				:  Male<br>
                        Blood Group			:  A+<br>
                        Marital status		        :  Unmarried<br>
                        Nationality			:  Bangladeshi<br>
                        National Id			:  691  254  1858<br>
                                            
                    </pre>


                </div>

            </div>

        </div>
    </section>




    <section class="education  mb-5">
        <div class="container mt-5">

            <div class="card  my-3">

                <div class="card-header  bg-success  text-white">
                    <h4 class="text-center">Educational Background</h4>
                </div>

                <div class="card-body   text-black  bg-light">


                    <pre>
                        Bachelor of Science in Computer Science & Engineering (B.Sc. in CSE)
                        University          : Daffodil International University
                        Passing Year     : 2023
                        
                        Higher Secondary School Certificate (Alim)
                        Madrasah        : Darunnazat Siddique Kamil Madrasah
                        Group              : Science
                        Board              : Bangladesh Madrasah Education Board
                        Passing Year : 2019
                        
                        Secondary School Certificate (Dakhil)
                        Madrasah        : Hafez Abdur Razzak Jamia Islamia Madrasah
                        Group              : Science
                        Board              : Bangladesh Madrasah Education Board
                        Passing Year : 2017
                        
                        Junior School Certificate (JDC)
                        Madrasah       : Hafez Abdur Razzak Jamia Islamia Madrasah
                        Board             : Bangladesh Madrasah Education Board
                        Passing Year  : 2014                  
                    </pre>

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