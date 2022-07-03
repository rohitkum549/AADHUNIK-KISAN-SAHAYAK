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
          <a class="navbar-brand" href="http://localhost/project/index1.php"><span class="text-warning">aadhunik Kis</span>an Sahayak</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        </div>
    </nav>

      <section class="services section-padding" id="services">
          <div class="container">
              <div class="row">
                  <div class="col-md-12">
                      <div class="section-header text-center pb-5">
                          <h2>Login </h2>
                          <p>Plese Enter Your Crendential</p>
                      </div>
                  </div>
              </div>
         <form action="login.php" method="post">
            <div class="mb-3">
                 <label for="exampleInputEmail1" class="form-label">User Name</label>
                 <input type="text" name="uname" class="form-control" placeholder="User Name" aria-label="User Name">
            </div>
            <div class="mb-3">
                 <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" name="password" placeholder="Password" class="form-control" id="exampleInputPassword1">
             </div>
            <button type="submit" class="btn btn-primary">Login</button>
         </form>
          </div>
      </section>
</body>

</html>
