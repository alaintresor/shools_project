<!DOCTYPE html>
<html lang="en">

<head>
  <title>Farm Admin</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="style.css" rel="stylesheet">
  <link href="assets/css/font-awesome.css" rel="stylesheet">
  <!-- Bootstrap -->
  <link href="assets/css/bootstrap.css" rel="stylesheet">
  <!-- Slick slider -->
  <link rel="stylesheet" type="text/css" href="assets/css/slick.css">
  <!-- Date Picker -->
  <link rel="stylesheet" type="text/css" href="assets/css/bootstrap-datepicker.css">
  <!-- Gallery Lightbox -->
  <link href="assets/css/magnific-popup.css" rel="stylesheet">
  <!-- Theme color -->
  <link id="switcher" href="assets/css/theme-color/default-theme.css" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
    .fakeimg {
      height: 200px;
      background: #aaa;
    }
  </style>
</head>

<body>
  <nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">



      <div style="display: flex;">
        <h5 style="flex: 1;color: white;">Username</h5>
        <p style="flex: 1; " align="right">
        <h5 style="color:white;">Logout</h5>
        </p>

      </div>

    </div>
  </nav>
  <br><br><br>
  <div class="container">
    <p>
    <h4 class=" header-line">Application Form</h4>
    </p>
    <div class="panel panel-info">
      <div class="panel-heading">
        Product Info
      </div>
      <div class="panel-body">
        <form method="post" action="add_product.php" enctype='multipart/form-data'>

          <div class="form-group">
            <label for="firstname">Product name:</label>
            <input type="text" class="form-control" required='' name="name" placeholder="Enter product name">
          </div>
          <div class="form-group">
            <label for="firstname">Product Quantity:</label>
            <input type="text" class="form-control" required='' name="qty" placeholder="Enter product qty">
          </div>
          <div class="form-group">
            <label for="firstname">Product Unit price:</label>
            <input type="text" class="form-control" required='' name="u_price" placeholder="Enter product U/P">
          </div>
          <div class="form-group">
            <label for="firstname">Product Description:</label>
            <input type="text" class="form-control" required='' name="desc" placeholder="Enter Description">
          </div>
          <div class="form-group">
            <label for="firstname">Product Image:</label>
            <input type="file" class="form-control" required='' name="file">
          </div>
          <div class="form-group">
            <label for="gender">Category:</label>
            <select class="form-control" name="category">
              <option class="disabled">......</option>

            </select>
          </div>
          <div class="form-group">
            <label for="gender">Owner Id:</label>
            <select class="form-control" name="owner">
              <option class="disabled">......</option>

            </select>
          </div>


          <div class="form-group">
            <input type="submit" class="btn btn-primary from-control" value="Add" name="done">
          </div>

        </form>
      </div>
    </div>
  </div>

</body>

</html>