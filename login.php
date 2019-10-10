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

    <!-- jQuery -->
    <script src="js/jquery.js"></script>
    <!-- Script -->
    <script type="text/javascript">
        $(document).ready(function(){
            $("#login").click(function(){
                email=$("#email").val();
                password=$("#password").val();
                $.ajax({
                    type: "POST",
                    url: "authcheck.php",
                    data: "email="+email+"&password="+password,
                    success: function(html){
                        html = $.trim(html);
                        if(html=='true')
                        { 
                            $("#message-log").html('<div class="alert alert-success"> \
                                                <strong>Authenticated</strong> \ \
                                            </div>');
                            window.location.href = "blog.php";
                        
                        } else if (html=='false') {
                            $("#message-log").html('<div class="alert alert-danger"> \
                                                <strong>Authentication</strong> failure. \ \
                                            </div>');
                        } else {
                            $("#message-log").html('<div class="alert alert-danger"> \
                                                <strong>Error</strong> processing request. Please try again. \ \
                                            </div>');
                        }
                    },
                    beforeSend:function()
                    {
                        $("#message-log").html("loading...");
                    }
                });
                return false;
            });
        });
    </script>
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
                    <div class="alert alert-danger">
					    <strong>You must be logged in to view the blog.</strong>
					</div>
                    <hr>
                    <h2 class="intro-text text-center">Login
                        <strong>form</strong>
                    </h2>
                    <div id="message-log"></div>
                    <hr>
                    <form role="form" method='POST' style='text-align: center;'>
                        <div class="row">
                            <div class="form-group col-lg-6">
                                <label>Email Address</label>
                                <input type="email" class="form-control text-center" id='email' name='email' maxlength="25" autocomplete='off'>
                            </div>
                            <div class="form-group col-lg-6">
                                <label>Password</label>
                                <input type="password" class="form-control text-center" id='password' name='password' maxlength="10" autocomplete='off'>
                            </div>
                            <div class="clearfix"></div>
                            <div class="form-group col-lg-12 text-center">
                                <button type="submit" class="btn btn-default" id='login'>Login</button>
                            </div>
                        </div>
                    </form>
                    <div class="form-group col-lg-12 text-center">
						<a href="register.php">Not an Avenger? Click here</a>
					</div>
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

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
