<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>CHW Map</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- FontAwesome CDN -->
  <script src="https://kit.fontawesome.com/0d814f095e.js" crossorigin="anonymous"></script>

  <!-- Custom styles for this template -->
  <link href="css/simple-sidebar.css" rel="stylesheet">

</head>

<body>

  <div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <div class="bg-light border-right" id="sidebar-wrapper">
      <div class="sidebar-heading"><i class="fas fa-hands-helping pr-1" aria-hidden="true"></i>CHW Map</div>
      <div class="list-group list-group-flush">
        <?php include_once 'includes/menus/sidebar-links.php'; ?>
      </div>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">

      <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom p-1">
        <button class="btn btn-link" id="menu-toggle" aria-label="Toggle Navigation Menu">
          <i id="menu-toggle-icon-1" class="fas fa-angle-double-left" aria-hidden="true"></i>
          <i id="menu-toggle-icon-2" class="fas fa-angle-double-right" aria-hidden="true"></i>
        </button>
      </nav>

      <div class="container-fluid">
        <?php include_once 'includes/pages/table.php'; ?>
      </div>
    </div>
    <!-- /#page-content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Menu Toggle Script -->
  <script>
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
  </script>

</body>

</html>
