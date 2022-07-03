<!DOCTYPE html>
<html lang="en">
<!--divinectorweb.com-->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aadhunik Kisan Sahayak</title>
    
    <!-- All CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container">
          <a class="navbar-brand" href="#"><span class="text-warning">aadhunik Kis</span>an Sahayak</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#about">About</a>
              </li> 
              <li class="nav-item">
                <a class="nav-link" href="#services">Services</a>
              </li> 
              <li class="nav-item">
                <a class="nav-link" href="#portfolio">News</a>
              </li> 
              <li class="nav-item">
                <a class="nav-link" href="#contact">Contact</a>
              </li> 
              <li class="nav-item">
                <a class="nav-link" href="Login Singup/index.php">Login</a>
              </li>
                
            </ul>
          </div>
        </div>
      </nav>

         <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="img/veg-1.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption">
              <h5>Know Everything</h5>
                              <p>Is mainly focused to bring transparency among all the markets from different
                                states in India</p>
                              <p><a href="#about" class="btn btn-warning mt-3">Learn More</a></p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="img/veg-2.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption">
              <h5>Your Dream Sabjimandi</h5>
                              <p>Find Your Best Market Price And Sell Happily.</p>
                              <p><a href="#services" class="btn btn-warning mt-3">Learn More</a></p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="img/veg-3.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption">
              <h5>Eveythings On Agriculture</h5>
                              <p>Daily Updates Related To The Agriculture.</p>
                              <p><a href="#portfolio" class="btn btn-warning mt-3">Learn More</a></p>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>

      <!-- about section starts -->
      <section id="about" class="about section-padding">
          <div class="container">
              <div class="row">
                  <div class="col-lg-4 col-md-12 col-12">
                      <div class="about-img">
                          <img src="img/about.jpg" alt="" class="img-fluid">
                      </div>
                  </div>
                  <div class="col-lg-8 col-md-12 col-12 ps-lg-5 mt-md-5">
                      <div class="about-text">
                            <h2>We Provide The Live Market <br/> Feed </h2>
                            <p>Mainly focused to bring transparency among all the markets from different states in India. It helps to
                                connect smallholder farmers and buyers to markets of all over India and it creates a virtual app to interact with their
                                neighbour state's market price. Here, the buyers / seller from different states can know the price of the crops and vegetables
                                through this application. Aadhunik Kisan Sahayak to seeks to provide a transparent, open and trustworthy space for smallholder
                                farmers and buyers to see the fair prices</p>
                            <a href="#" class="btn btn-warning">Learn More</a>
                      </div>
                  </div>
              </div>
          </div>
      </section>
      <!-- about section Ends -->
      <!-- services section Starts -->
      <section class="services section-padding" id="services">
          <div class="container">
              <div class="row">
                  <div class="col-md-12">
                      <div class="section-header text-center pb-5">
                          <h2>Best Market</h2>
                          <p>Know The Best Price Of Your Product</p>
                      </div>
                  </div>
              </div>
              <form class="row g-2">
                <div class="col-md-6">
                  <label for="inputState" class="form-label">Country</label>
                  <select id="inputState" class="form-select">
                    <option selected>Choose...</option>
                    <option>India</option>
                  </select>
                </div>
                <div class="col-md-6">
                  <label for="inputState" class="form-label">State</label>
                  <select id="inputState" class="form-select">
                    <option selected>Choose...</option>
                    <option>West Bengal</option>
                  </select>
                </div>
                <div class="col-md-6">
                  <label for="inputState" class="form-label">District</label>
                  <select id="inputState" class="form-select">
                    <option selected>Choose...</option>
                    <option>South 24 Pargana</option>
                  </select>
                </div>
                <div class="col-md-6">
                  <label for="inputState" class="form-label">Market</label>
                  <select id="inputState" class="form-select">
                    <option selected>Choose...</option>
                    <option>Raidighi</option>
                  </select>
                </div>
                <div class="col-12">
                <a href="item.php" class="btn btn-primary">Find Price</a>
                <!-- <button type="submit" class="btn btn-primary">Find Price</button> -->
                </div>
              </form>
          </div>
      </section>
      <!-- services section Ends -->
      <!-- portfolio strats -->
      <section id="portfolio" class="portfolio section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-header text-center pb-5">
                        <h2>Market News</h2>
                        <p>Every time update News</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-12 col-lg-4">
                    <div class="card text-light text-center bg-white pb-2">
                        <div class="card-body text-dark">
                          <div class="img-area mb-4">
                              <img src="img/news-1.jpg" class="img-fluid" alt="">
                          </div>
                            <h3 class="card-title">Wheat Prices Increase</h3>
                            <p class="lead">Traders said that the wheat prices had declined to Rs 2350/quintal in Mumbai after the rumors about</p>
                            <a href="https://bit.ly/39S8Uxf" class="btn bg-warning text-dark" >Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-12 col-lg-4">
                    <div class="card text-light text-center bg-white pb-2">
                        <div class="card-body text-dark">
                          <div class="img-area mb-4">
                              <img src="img/news-2.jpg" class="img-fluid" alt="">
                          </div>
                            <h3 class="card-title">Nitrogen Deficiency in 90%</h3>
                            <p class="lead">50 million soil samples from across India were tested during 2015-16 to 2018-19 in...</p>
                            <a href="https://bit.ly/3N7pHLa" class="btn bg-warning text-dark">learn More</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-12 col-lg-4">
                    <div class="card text-light text-center bg-white pb-2">
                        <div class="card-body text-dark">
                          <div class="img-area mb-4">
                              <img src="img/news-3.jpg" class="img-fluid" alt="">
                          </div>
                            <h3 class="card-title">Turkey has placed orders of India Wheat </h3>
                            <p class="lead">For the first time Turkey has placed orders for 50,000 tonnes of wheat..</p>
                            <a href="https://bit.ly/3l0sYj7"class="btn bg-warning text-dark">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </section>
      <!-- portfolio ends -->
      <!-- Contact starts -->
      <section id="contact" class="contact section-padding">
        <div class="container mt-5 mb-5">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-header text-center pb-5">
                        <h2>Contact Us</h2>
                        <p> Please Contact Us <br>For any suggestion or any query</p>
                    </div>
                </div>
            </div>
			<div class="row m-0">
				<div class="col-md-12 p-0 pt-4 pb-4">
					<form action="#" class="bg-light p-4 m-auto">
						<div class="row">
							<div class="col-md-12">
								<div class="mb-3">
									<input class="form-control" placeholder="Full Name" required="" type="text">
								</div>
							</div>
							<div class="col-md-12">
								<div class="mb-3">
									<input class="form-control" placeholder="Email" required="" type="email">
								</div>
							</div>
							<div class="col-md-12">
								<div class="mb-3">
									<textarea class="form-control" placeholder="Message" required="" rows="3"></textarea>
								</div>
							</div><button class="btn btn-warning btn-lg btn-block mt-3" type="button">Send Now</button>
						</div>
					</form>
				</div>
			</div>
		</div>
      </section>
      <!-- contact ends -->
      <!-- footer starts -->
      <footer class="bg-dark p-2 text-center">
          <div class="container">
              <p class="text-white">All Right Reserved By<a href="https://www.google.com/"> @Aadhunik Kisan Sahayak</a></p>
          </div>
      </footer>
      <!-- footer ends -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- All Js -->
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/script.js"></script>
</body>
</html>

<!--for getting the form download the code from download button-->