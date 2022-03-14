<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- fontawsome Link -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700;800&display=swap" rel="stylesheet">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <Link rel="stylesheet" href="./css/home.css"></Link>
    <title>Booking</title>
</head>
<body>
    
    <!-- navbar start -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="/Booking.php">
                <img src="./img/logo.png" alt="" class="img-fluid">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ml-auto mt-3 mt-lg-0">
                <li class="nav-item ">
                  <a class="nav-link" href="/Booking.php">Book Room </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/Booked.php">Booked Rooms</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="/Rooms.php">Search</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link auth" href="#">Logout</a>
                  </li>
              </ul>
            </div>
          </nav>

          <!-- section booked rooms start -->
          <div class="container">
            <section class="booked-rooms mt-5 p-4">

                <!-- Filter section start -->
               <div class="row">
                   <div class="col-12">
                       <div class="booking-filter px-5 py-4">
                           <div class="row justify-content-center align-items-center">
                            <div class="col-lg-9 col-12 ">
                                <div class="row">
                                    <div class="col-lg-4 col-md-4 col-12 mb-2 ">
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input">
                                            <label class="form-check-label" >Small Room</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-12 mb-2">
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input">
                                            <label class="form-check-label" >Medium Room</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-12 mb-2">
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input">
                                            <label class="form-check-label" >large Room</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4 col-md-4 col-12 mb-2">
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input">
                                            <label class="form-check-label" >Corrider 1</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-12 mb-2">
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input">
                                            <label class="form-check-label" >Corrider 2</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-12 mb-2">
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input">
                                            <label class="form-check-label" >Corrider 3</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-12 col-12 p-0">
                                <button class="search-btn w-100 py-2">Search</button>
                            </div>
                           </div>
                       </div>
                   </div>
               </div>
               <!-- Filter section end -->

                <!-- Book Room Card start -->
                <div class="row">
                    <div class="col-md-6 col-12 mt-5">
                        <div class="bookNow-card">
                            <div class="row align-items-center ">
                                <div class="col-lg-6 col-md-12 col-12">
                                        <div class="card-room-img">
                                            <img src="./img/my-rrom.jpg" alt="room-img" class="">
                                            <div class="room-details">
                                                <p class="mb-0">Corrider 1</p>
                                                <p class="mb-0">Room 101</p>
                                            </div>
                                        </div>
                                </div>
                                <div class="col-lg-6 col-md-12 col-12 text-center py-5">
                                        <button class="btn book-btn my-5 w-75">Book</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-12 mt-5">
                        <div class="bookNow-card">
                            <div class="row align-items-center ">
                                <div class="col-lg-6 col-md-12 col-12">
                                        <div class="card-room-img">
                                            <img src="./img/my-rrom.jpg" alt="room-img" class="">
                                            <div class="room-details">
                                                <p class="mb-0">Corrider 1</p>
                                                <p class="mb-0">Room 101</p>
                                            </div>
                                        </div>
                                </div>
                                <div class="col-lg-6 col-md-12 col-12 text-center py-5">
                                        <button class="btn book-btn my-5 w-75">Book</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-12 mt-5">
                        <div class="bookNow-card">
                            <div class="row align-items-center ">
                                <div class="col-lg-6 col-md-12 col-12">
                                        <div class="card-room-img">
                                            <img src="./img/my-rrom.jpg" alt="room-img" class="">
                                            <div class="room-details">
                                                <p class="mb-0">Corrider 1</p>
                                                <p class="mb-0">Room 101</p>
                                            </div>
                                        </div>
                                </div>
                                <div class="col-lg-6 col-md-12 col-12 text-center py-5">
                                        <button class="btn book-btn my-5 w-75">Book</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-12 mt-5">
                        <div class="bookNow-card">
                            <div class="row align-items-center ">
                                <div class="col-lg-6 col-md-12 col-12">
                                        <div class="card-room-img">
                                            <img src="./img/my-rrom.jpg" alt="room-img" class="">
                                            <div class="room-details">
                                                <p class="mb-0">Corrider 1</p>
                                                <p class="mb-0">Room 101</p>
                                            </div>
                                        </div>
                                </div>
                                <div class="col-lg-6 col-md-12 col-12 text-center py-5">
                                        <button class="btn book-btn my-5 w-75">Book</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
                <!-- Book Room Card end -->
            </section>
          </div>
            <!-- section booked rooms end -->
    <!-- navbar end -->
<!-- Bootstrap script -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>