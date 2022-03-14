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
    <title>Book room</title>
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

          <!-- Booking section start -->
            <div class="container book-container">
                <div class="row">
                    <div class="col-12">
                        <div class="book-now mt-5 p-4">
                            <div class="row">
                                <div class="col-12">
                                        <h2>Booked Rooms</h2>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4 col-md-6 col-12 mt-0 mt-md-2">
                                    <div class="form-group text-center">
                                        <label >Full Name</label>
                                        <input type="text" class="form-control">
                                      </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-12 mt-0 mt-md-2">
                                    <div class="form-group text-center">
                                        <label >Room</label>
                                            <select class="custom-select" id="inputGroupSelect01">
                                                <option selected></option>
                                                <option value="101">101</option>
                                                <option value="102">102</option>
                                                <option value="103">103</option>
                                            </select>
                                      </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-12 mt-0 mt-md-2">
                                    <div class="form-group text-center">
                                        <label >Date</label>
                                        <input type="date" class="form-control">
                                      </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-12 mt-0 mt-md-2">
                                    <div class="form-group text-center">
                                        <label >Email</label>
                                        <input type="email" class="form-control">
                                      </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-12 mt-0 mt-md-2">
                                    <div class="form-group text-center">
                                        <label >Corridor</label>
                                        <select class="custom-select" id="inputGroupSelect01">
                                            <option selected></option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                        </select>
                                      </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-12 mt-0 mt-md-2">
                                    <div class="form-group text-center">
                                        <label >Booking Start Time</label>
                                        <input type="time" class="form-control">
                                      </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-12 mt-0 mt-md-2">
                                    <div class="form-group text-center">
                                        <label >How many people?</label>
                                        <input type="number" class="form-control">
                                      </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-12 mt-0 mt-md-2">
                                    <div class="form-group text-center">
                                        <label >Special Equipment</label>
                                        <input type="text" class="form-control">
                                      </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-12 mt-0 mt-md-2">
                                    <div class="form-group text-center">
                                        <label >Booking Start End</label>
                                        <input type="time" class="form-control">
                                      </div>
                                </div>
                            </div>
                            <div class="row justify-content-center">
                                <div class="col-lg-4 col-md-6 col-10  mt-4">
                                    <button class="w-100 book-btn py-1">Book</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
          <!-- Booking section end -->
    <!-- navbar end -->
<!-- Bootstrap script -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>