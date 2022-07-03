<?php 
include("db_conn.php");
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {
}
else{

  header("Location: index.php");

  exit();

}

 ?>

<!DOCTYPE html>

<html>

<head>

    <title>Product Update</title>

    <link rel="stylesheet" type="text/css" href="css/style.css">
    
        <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aadhunik Kisan Sahayak</title>
    
    <!-- All CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/style.css">
    
         <h1>Hello, <?php echo $_SESSION['user_name']; ?></h1>

     <!-- <a href="logout.php">Logout</a> -->

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
                <a class="nav-link" href="logout.php">Logout</a>
              </li> 
            </ul>
          </div>
        </div>
      </nav>
      <!-- services section Starts -->
      <section class="services section-padding" id="services">
          <div class="container">
              <div class="row">
                  <div class="col-md-12">
                      <div class="section-header text-center pb-5">
                          <h2>Hello, <?php echo $_SESSION['user_name']; ?> Update Items</h2>
                          <p>Update Items List with Price and Quantity</p>
                      </div>
                  </div>
              </div>
              <form action="#" method="POST" class="row g-4">
                <div class="col-md-3">
                  <label for="inputState" class="form-label">ID</label>
                  <input type="text" class="form-control" placeholder="ID" aria-label="Item name" name="id">
                </div>
                <div class="col-md-3">
                  <label for="inputState" class="form-label">Items</label>
                  <input type="text" class="form-control" placeholder="Item Name" aria-label="Item name" name="item">
                </div>
                <div class="col-md-3">
                  <label for="inputState" class="form-label">Quantity</label>
                  <input type="text" class="form-control" placeholder="Item Quantity" aria-label="Item Quantity" name="qnt">
                </div>
                <div class="col-md-3">
                  <label for="inputState" class="form-label">Price</label>
                  <input type="text" class="form-control" placeholder="Item Price" aria-label="Item Price" name="price">
                </div>
                <div class="col-12">
                  <input type="submit" value="Save" class="btn btn-primary" name="save">
                </div>
              </form>
          </div>
      </section>
      <!-- services section Ends -->
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

<?php 
  error_reporting(0);
  if($_POST['save'])
  {
    $id    = $_POST['id'];
    $item  = $_POST['item'];
    $qnt   = $_POST['qnt'];
    $price = $_POST['price'];

    $query = "INSERT INTO items VALUES('$id','$item','$qnt','$price')";
    $data = mysqli_query($conn,$query);

    // if($data)
    // {
    //   echo "Data inserted into database";
    // }
    // else
    // {
    //   echo " Faild";
    // }
  }
?>