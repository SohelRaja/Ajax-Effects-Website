<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Avengers House - Register</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">

    <!-- Fonts -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

</head>

<body>

    <div class="brand">Avengers House</div>
    <div class="address-bar">Avengers Assemble</div>

    <!-- Navigation -->
    <?php require_once 'nav.php'; ?>

    <div class="container">
        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">Registration
                        <strong>form</strong>
                    </h2>
                    <hr>
                    <form role="form">
                        <div class="row">
                            <div class="form-group col-lg-6">
                                <label>Fist Name</label>
                                <input type="text" class="form-control" id='fname' name='fname' maxlength="25">
                            </div>
                            <div class="form-group col-lg-6">
                                <label>Last Name</label>
                                <input type="text" class="form-control" id='lname' name='lname' maxlength="25">
                            </div>
                            <div class="form-group col-lg-6">
                                <label>Email Address</label>
                                <input type="email" class="form-control" id='email' name='email' maxlength="25">
                            </div>
                            <div class="form-group col-lg-6">
                                <label>Password</label>
                                <input type="password" class="form-control" id='password' name='password' maxlength="10">
                            </div>
                            <div class="clearfix"></div>
                            <div class="form-group col-lg-12 text-center">
                                <button type="submit" class="btn btn-default" id='register'>Register</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container -->

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <p>Copyright &copy; Avengers House 2019</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
