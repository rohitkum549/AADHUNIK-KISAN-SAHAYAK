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
          <a class="navbar-brand" href="index1.php"><span class="text-warning">aadhunik Kis</span>an Sahayak</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          </div>
        </div>
      </nav>
      <!-- services section Starts -->
      <section class="services section-padding" id="services">
          <div class="container">
              <div class="row">
                  <div class="col-md-12">
                      <div class="section-header text-center pb-5">
                          <h2>Items List</h2>
                          <p>Update Items List with Price and Quantity</p>
                      </div>
                  </div>
              </div>
              <table class="table table-success table-striped">
                  <thead>
                    <tr>
                      <th scope="col">No.</th>
                      <th scope="col">Items</th>
                      <th scope="col">Quantity</th>
                      <th scope="col">Price</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                        include("login singup/db_conn.php");
                        error_reporting(0);
                        $query = "select * from items";
                        $data = mysqli_query($conn,$query);
                        $total = mysqli_num_rows($data);
                        if($total != 0)
                        {
                            while($result = mysqli_fetch_assoc($data))
                            {
                                echo "
                                        <tr>
                                            <th>".$result['id']."</th>
                                            <td>".$result['item']."</td>
                                            <td>".$result['quantity']."</td>
                                            <td>".$result['price']."</td>
                                        </tr>
                                    ";
                            }
                        }
                        else
                        {
                            echo "table has no record";
                        }
                    ?>
                  </tbody>
             </table>

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

<!--for getting the form download the code from download button-->
