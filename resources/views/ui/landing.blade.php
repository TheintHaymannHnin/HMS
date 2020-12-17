<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hotel Management System</title>
    <!-- BOOTSTRAP CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <!-- fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
        integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA=="
        crossorigin="anonymous" />
    <!-- Add icon library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- external css -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/yms.css')}}" />

    <!-- GOOGLE FONT  -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Padauk&display=swap" rel="stylesheet">
    <!-- AOS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">


                <!-- ========================== HEADER SECTION  ========================== -->
                <header class="masthead">
                    <!-- Navigation -->
                    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
                        <div class="container">
                            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                                data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
                                aria-label="Toggle navigation">
                                Menu
                                <i class="fas fa-bars"></i>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarResponsive">
                                <ul class="navbar-nav mr-auto">
                                    <li class="nav-item">
                                        <a class="nav-link" href="index.html"><b class="text-white">Home</b></a>
                                    </li>
                                    <li class="nav-item">

                                        <a class="nav-link" href="about.html"><b class="text-white">About</b></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="contact.html"><b class="text-white">Contact</b></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="collapse navbar-collapse" id="navbarResponsive">
                                <ul class="navbar-nav ml-auto">
                                    <li class="nav-item">
                                        <a class="nav-link" href="index.html"><b class="text-white">Sign
                                                up</b></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="about.html"><b class="text-white">Sign
                                                in</b></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </header>
                <!-- ========================== END HEADER SECTION ========================== -->

                <!-- ========================== GALLERY SECTION ========================== -->
                <section id="room">
                    <div class="accommodation text-center">Accommodation</div>
                    <div class="row">
                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                            <div class="card">
                                <div class="card-body" data-aos="flip-left">
                                    <img src="{{asset('assets/img/room2.jpg')}}" alt="Paris">
                                    <div>sdf sdaf</div>
                                    <div>sdf sdaf</div>
                                    <div>sdf sdaf</div>
                                    <div class="row">
                                        <div class="col-6">
                                            <button class="btn btn-success btn-block">Book</button>
                                        </div>
                                        <div class="col-6">
                                            <button class="btn btn-warning btn-block">Details</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                            <div class="card">
                                <div class="card-body" data-aos="flip-left">
                                    <img src="https://www.maids.com/blog/wp-content/uploads/2020/01/bigstock-Hotel-Bed-1653767.jpg" alt="Paris">
                                    <div>sdf sdaf</div>
                                    <div>sdf sdaf</div>
                                    <div>sdf sdaf</div>
                                    <div class="row">
                                        <div class="col-6">
                                            <button class="btn btn-success btn-block">Book</button>
                                        </div>
                                        <div class="col-6">
                                            <button class="btn btn-warning btn-block">Details</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                            <div class="card">
                                <div class="card-body" data-aos="flip-left">
                                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR4xzLYe_t_RDB7Fsj_xbCqV_7tdgiCS60rtQ&usqp=CAU" alt="Paris">
                                    <div>sdf sdaf</div>
                                    <div>sdf sdaf</div>
                                    <div>sdf sdaf</div>
                                    <div class="row">
                                        <div class="col-6">
                                            <button class="btn btn-success btn-block">Book</button>
                                        </div>
                                        <div class="col-6">
                                            <button class="btn btn-warning btn-block">Details</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                            <div class="card">
                                <div class="card-body" data-aos="flip-left">
                                    <img src="https://kualalumpurhotels.impiana.com.my/wp-content/uploads/sites/183/2015/08/1-Deluxe-Room_5535-Small.jpg" alt="Paris">
                                    <div>sdf sdaf</div>
                                    <div>sdf sdaf</div>
                                    <div>sdf sdaf</div>
                                    <div class="row">
                                        <div class="col-6">
                                            <button class="btn btn-success btn-block">Book</button>
                                        </div>
                                        <div class="col-6">
                                            <button class="btn btn-warning btn-block">Details</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </section>
                <!-- ========================== END GALLERY SECTION ========================== -->

                <!-- ========================== FOOD SECTION ========================== -->
                <section id="food">
                    <div class="accommodation text-center">Delicious Meal We Offer</div>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="card">
                                <img src="{{asset('assets/img/food1.jpg')}}">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card">
                                <img src="{{asset('assets/img/food2.jpg')}}">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card">
                                <img src="{{asset('assets/img/food3.jpg')}}">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card">
                                <img src="{{asset('assets/img/food4.jpg')}}">
                            </div>
                        </div>
                    </div>
                </section>
                <!-- ========================== END FOOD SECTION ========================== -->

                <!-- ========================== OUR RESTAURANT ========================== -->
                <section id="restaurant">
                    <div class="accommodation text-center">About Us && Our Restaurant</div>
                    <div class="row mb-2">
                        <div class="col-md-6 col-sm-12">
                            <div class="card" data-aos="fade-right"
                            data-aos-offset="300"
                            data-aos-easing="ease-in-sine">
                                <img src="https://i.pinimg.com/originals/4e/6b/b2/4e6bb25d3c26872296b3951e3b74af5c.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <h5>About Us</h5>
                            <div align="justify">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rem eos dolor velit eaque vitae nostrum delectus iure optio cum officiis aliquam soluta commodi consectetur ducimus iste sint, molestiae, accusantium iusto! Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique accusantium deserunt voluptates, consequatur eum illum. Quibusdam illum dolor odio vel necessitatibus qui ea possimus voluptates et nisi facilis, ullam rem! Similique accusantium deserunt voluptates, consequatur eum illum. Quibusdam illum dolor odio vel necessitatibus qui ea possimus voluptates et nisi facilis, ullam rem!ullam rem! Similique accusantium deserunt voluptates, consequatur eum illum. Quibusdam illum dolor odio vel necessitatibus qui ea possimus voluptates et nisi facilis, ullam rem!</div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <h5>About Our Restaurant</h5>
                            <div align="justify">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rem eos dolor velit eaque vitae nostrum delectus iure optio cum officiis aliquam soluta commodi consectetur ducimus iste sint, molestiae, accusantium iusto! Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique accusantium deserunt voluptates, consequatur eum illum. Quibusdam illum dolor odio vel necessitatibus qui ea possimus voluptates et nisi facilis, ullam rem! Similique accusantium deserunt voluptates, consequatur eum illum. Quibusdam illum dolor odio vel necessitatibus qui ea possimus voluptates et nisi facilis, ullam rem!ullam rem! Similique accusantium deserunt voluptates, consequatur eum illum. Quibusdam illum dolor odio vel necessitatibus qui ea possimus voluptates et nisi facilis, ullam rem!</div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="card" data-aos="fade-right"
                            data-aos-offset="300"
                            data-aos-easing="ease-in-sine">
                                <img src="https://www.goldenpalmshoteldelhi.com/images/content/restaurants-2.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </section>
                <!-- ========================== END OUR RESTAURANT ========================== -->

                <!-- ========================== FOOTER SECTION ========================== -->
                <section id="footer">
                    <div class="row">
                        <div class="col-md-3 col-xs-12">
                            <div class="footer-title">Contact Info</div>
                            <ul>
                               
                              <li> <i class="far fa-envelope"></i> hotel@novotel.com </li>
                              <li> <i class="fas fa-mobile-alt"></i>  09798059425</li>
                               
                            </ul>
                        </div>
                        <div class="col-md-3 col-xs-12">
                            <div  class="footer-title">Follow us on</div>
                            <ul>
                                <li><a href="https://www.facebook.com/wuttyee.min" target="_blank" class="text-white">
                                    <i class="fab fa-facebook-square"></i>  Facebook
                                  </a></li>
                                <li><a href="https://www.instagram.com/theinthaymannhnin/" target="_blank" class="text-white">
                                    <i class="fab fa-instagram-square"></i>  Instagram
                                  </a></li>
                                <li><a href="https://www.linkedin.com/" target="_blank" class="text-white">
                                    <i class="fab fa-linkedin"></i>  Linkedin
                                  </a></li>
                                <li><a href="https://twitter.com/" class="text-white">
                                    <i class="fab fa-twitter-square"></i>  Twitter
                                  </a></li>
                            </ul>
                        </div>
                         <div class="col-md-6 col-xs-12 contact-col">
                            
                            <div >Contact Form</div>
                            <!-- <ul>
                                <li>dfhgdfg sdlkfjsd ffjk</li>
                                <li>dfhgdfg sdlkfjsd ffjk</li>
                                <li>dfhgdfg sdlkfjsd ffjk</li>
                                <li>dfhgdfg sdlkfjsd ffjk</li> -->
                                
                                   
                                    <form action="" class="form">
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    
                                                    <input type="text" name="name" id="name" class="form-control mt-2" placeholder="Name"></div>
                                                <div class="col-md-6">
                                                    
                                                    <input type="text" name="name" id="name" class="form-control mt-2" placeholder="Email"></div>
                                            </div>
                                                
                                        </div>
                                        <div class="form-group">
                                               
                                                <textarea name="name" id="name" class="form-control"placeholder="Message" rows="4"></textarea>
                                        </div>
                                            <button type="submit" class="btn btn-info btn-block">Submit</button>
                                    
                                   
                                    </form>
                              
                                
                            
                        </div>
                       
                    </div>
                </section>
                <!-- ========================== END FOOTER SECTION ========================== -->

            </div>
        </div>
    </div>

    <!-- jQuery and JS bundle w/ Popper.js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
        crossorigin="anonymous"></script>
    <!-- CUSTOM JS  -->
    
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
      </script>
</body>

</html>