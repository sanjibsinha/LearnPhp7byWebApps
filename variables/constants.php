<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, shrink-to-fit=no, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Learn PHP 7 by Web Apps</title>

    <!-- Bootstrap Core CSS -->
    <link href="../public/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="../public/css/simple-sidebar.css" rel="stylesheet">

</head>

<body>
                   
    <div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href="#">
                        PHP 7
                    </a>
                </li>
                <li>
                    <a href="http://localhost/php7-scratch/index.php">Dashboard</a>
                </li>
                <li>
                    <?php include 'global-constants.php'; ?>
                    <a href="<?php echo VARIABLES; ?>">Variable Page</a>
                </li>
                
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1>Learn PHP 7 by Web Apps</h1>
                        <h2>PHP 7 Constants Page</h2>
                        <p>                           
                            <?php
                            // a simple variable
                            $variable = "I am a simple variable.";
                            // Constants page
                            define("OUR_CONSTANTS", "This is our first constant.");
                            echo $variable;
                            echo '<br>';
                            echo OUR_CONSTANTS;
                            echo '<br>';
                            //define("OUR_CONSTANTS", "This is our second constant.");
                            //echo OUR_CONSTANTS;
                            ?> 
                        </p>
                        <p>This template has a responsive menu toggling system. The menu will appear collapsed on smaller screens, and will appear non-collapsed on larger screens. When toggled using the button below, the menu will appear/disappear. On small screens, the page content will be pushed off canvas.</p>
                        <p>Make sure to keep all page content within the <code>#page-content-wrapper</code>.</p>
                        <a href="#menu-toggle" class="btn btn-default" id="menu-toggle">Toggle Menu</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../public/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../public/js/bootstrap.min.js"></script>

    <!-- Menu Toggle Script -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>

</body>

</html>




