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
            <a class="navbar-brand" href="/bookingPlatform/Booking.php">
                <img src="./img/logo.png" alt="" class="img-fluid">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ml-auto mt-3 mt-lg-0">
                <li class="nav-item ">
                  <a class="nav-link" href="/bookingPlatform/Booking.php">Book Room </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/bookingPlatform/Booked.php">Booked Rooms</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="/bookingPlatform/Rooms.php">Search</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link auth" href="#">Logout</a>
                  </li>
              </ul>
            </div>
          </nav>

          <!-- section booked rooms start -->
          <div class="container mt-5">
            <section class="booked-rooms p-4">
               <div class="row">
                   <div class="col-12">
                       <h2>Booked Rooms</h2>
                   </div>
               </div>
               <div class="row">
                <div class="col-12">
                    <div class="booked-rooms-card mt-4">
                        <div class="row">
                            <div class="col-lg-3 col-md-5 ">
                                <div class="card-img p-2 p-md-0">
                                    <img src="./img/corridor.jpg" alt="card-img" class="">
                                    <div class="card-img-text">
                                        <p class="mb-0">Corrider 1</p>
                                        <p class="mb-0">Room 101</p>
                                    </div>
                                </div>
                                
                            </div>
                            <div class="col-lg-9 col-md-7">
                                <div class="my-card-body p-2 p-lg-3 pb-4 pb-md-2 pb-md-0">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-12 mt-lg-2 mt-0">
                                            <div class="form-group mb-0 mb-md-2 mb-lg-3">
                                                <label >Booking Start Time</label>
                                                <input type="text" class="form-control" >
                                              </div>
                                        </div>
                                        <div class="col-lg-4 col-md-12 mt-lg-2 mt-0">
                                            <div class="form-group mb-0 mb-md-2 mb-lg-3">
                                                <label>Booking End Time</label>
                                                <input type="text" class="form-control">
                                              </div>
                                        </div>
                                        <div class="col-lg-4 col-md-12 mt-lg-2 mt-0">
                                            <div class="form-group mb-0 mb-md-2 mb-lg-3">
                                                <label >Numbers of People</label>
                                                <input type="number" class="form-control">
                                              </div>
                                        </div>
                                        <div class="col-lg-4 col-md-12 mt-lg-2 mt-0">
                                            <div class="form-group mb-0 mb-md-2 mb-lg-3">
                                                <label >Booked by</label>
                                                <input type="text" class="form-control">
                                              </div>
                                        </div>
                                        <div class="col-lg-8 col-md-12  mt-lg-2 mt-0">
                                            <div class="form-group mb-0 mb-md-2 mb-lg-3">
                                                <label >Special Equipment</label>
                                                <input type="text" class="form-control">
                                              </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="booked-rooms-card mt-4">
                        <div class="row">
                            <div class="col-lg-3 col-md-5 ">
                                <div class="card-img p-2 p-md-0">
                                    <img src="./img/corridor.jpg" alt="card-img" class="">
                                    <div class="card-img-text">
                                        <p class="mb-0">Corrider 1</p>
                                        <p class="mb-0">Room 101</p>
                                    </div>
                                </div>
                                
                            </div>
                            <div class="col-lg-9 col-md-7">
                                <div class="my-card-body p-2 p-lg-3 pb-4 pb-md-2 pb-md-0">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-12 mt-lg-2 mt-0">
                                            <div class="form-group mb-0 mb-md-2 mb-lg-3">
                                                <label >Booking Start Time</label>
                                                <input type="text" class="form-control" >
                                              </div>
                                        </div>
                                        <div class="col-lg-4 col-md-12 mt-lg-2 mt-0">
                                            <div class="form-group mb-0 mb-md-2 mb-lg-3">
                                                <label>Booking End Time</label>
                                                <input type="text" class="form-control">
                                              </div>
                                        </div>
                                        <div class="col-lg-4 col-md-12 mt-lg-2 mt-0">
                                            <div class="form-group mb-0 mb-md-2 mb-lg-3">
                                                <label >Numbers of People</label>
                                                <input type="number" class="form-control">
                                              </div>
                                        </div>
                                        <div class="col-lg-4 col-md-12 mt-lg-2 mt-0">
                                            <div class="form-group mb-0 mb-md-2 mb-lg-3">
                                                <label >Booked by</label>
                                                <input type="text" class="form-control">
                                              </div>
                                        </div>
                                        <div class="col-lg-8 col-md-12  mt-lg-2 mt-0">
                                            <div class="form-group mb-0 mb-md-2 mb-lg-3">
                                                <label >Special Equipment</label>
                                                <input type="text" class="form-control">
                                              </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="booked-rooms-card mt-4">
                        <div class="row">
                            <div class="col-lg-3 col-md-5 ">
                                <div class="card-img p-2 p-md-0">
                                    <img src="./img/corridor.jpg" alt="card-img" class="">
                                    <div class="card-img-text">
                                        <p class="mb-0">Corrider 1</p>
                                        <p class="mb-0">Room 101</p>
                                    </div>
                                </div>
                                
                            </div>
                            <div class="col-lg-9 col-md-7">
                                <div class="my-card-body p-2 p-lg-3 pb-4 pb-md-2 pb-md-0">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-12 mt-lg-2 mt-0">
                                            <div class="form-group mb-0 mb-md-2 mb-lg-3">
                                                <label >Booking Start Time</label>
                                                <input type="text" class="form-control" >
                                              </div>
                                        </div>
                                        <div class="col-lg-4 col-md-12 mt-lg-2 mt-0">
                                            <div class="form-group mb-0 mb-md-2 mb-lg-3">
                                                <label>Booking End Time</label>
                                                <input type="text" class="form-control">
                                              </div>
                                        </div>
                                        <div class="col-lg-4 col-md-12 mt-lg-2 mt-0">
                                            <div class="form-group mb-0 mb-md-2 mb-lg-3">
                                                <label >Numbers of People</label>
                                                <input type="number" class="form-control">
                                              </div>
                                        </div>
                                        <div class="col-lg-4 col-md-12 mt-lg-2 mt-0">
                                            <div class="form-group mb-0 mb-md-2 mb-lg-3">
                                                <label >Booked by</label>
                                                <input type="text" class="form-control">
                                              </div>
                                        </div>
                                        <div class="col-lg-8 col-md-12  mt-lg-2 mt-0">
                                            <div class="form-group mb-0 mb-md-2 mb-lg-3">
                                                <label >Special Equipment</label>
                                                <input type="text" class="form-control">
                                              </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
                
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