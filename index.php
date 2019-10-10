<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Avengers House</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">

    <!-- Fonts -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div class="brand">Avengers House</div>
    <div class="address-bar">Avengers Assemble</div>
    <?php	
        if (isset($_GET["logout"])) {
            
            if ($_GET["logout"] == "true") { 
    ?>
                <div class="alert alert-success text-center">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <strong>You have been logged out of the system.</strong>
                </div>   

    <?php
            }
        }
	?>
    <!-- Navigation -->
    <?php require_once 'nav.php'; ?>

    <div class="container">

        <div class="row">
            <div class="box">
                <div class="col-lg-12 text-center">
                    <div id="carousel-example-generic" class="carousel slide">
                        <!-- Indicators -->
                        <ol class="carousel-indicators hidden-xs">
                            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                        </ol>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                            <div class="item active">
                                <img class="img-responsive img-full" src="img/slide-0.jpg" alt="">
                            </div>
                            <div class="item">
                                <img class="img-responsive img-full" src="img/slide-1.jpg" alt="">
                            </div>
                            <div class="item">
                                <img class="img-responsive img-full" src="img/slide-2.jpg" alt="">
                            </div>
                            <div class="item">
                                <img class="img-responsive img-full" src="img/slide-3.jpg" alt="">
                            </div>
                        </div>

                        <!-- Controls -->
                        <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                            <span class="icon-prev"></span>
                        </a>
                        <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                            <span class="icon-next"></span>
                        </a>
                    </div>
                    <h2 class="brand-before">
                        <small>Welcome to</small>
                    </h2>
                    <h1 class="brand-name">Avengers House</h1>
                    <hr class="tagline-divider">
                    <h2>
                        <small>By
                            <strong>Sohel Raja</strong>
                        </small>
                    </h2>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">Avengers
                        <strong>Assemble</strong>
                    </h2>
                    <hr>
                    <img class="img-responsive img-border img-left" src="img/intro-pic.jfif" alt="">
                    <hr class="visible-xs">
                    <p>The Avengers were a team of extraordinary individuals, with either superpowers or other special characteristics. Its purpose was to protect global stability from inner or extraterrestrial threats. Though primarily affiliated with the United States of America, they worked with the peaceful interests of the whole world in mind rather than a specific country or organization. The Avengers were first assembled by S.H.I.E.L.D. when Loki invaded Earth with his Chitauri army to conquer the planet. The team defeated him and went their separate ways for a while.</p>
                    <p>After S.H.I.E.L.D. became a defunct agency due to HYDRA infiltration, Stark Industries remodeled Stark Tower into Avengers Tower and the team joined together in the fight against HYDRA. After they finished the fight, Tony Stark built Ultron hoping that the A.I. would be able to defend the world from any threats necessary. The plan backfired and Ultron started a war against humanity, forcing Tony and the Avengers to fight Ultron. When Ultron was defeated, the team gained new recruits and relocated to the New Avengers Facility.</p>
                    <p>Under Captain America's leadership, the team successfully completed several operations around the world, until the amount of collateral damage caused during their conflicts caused the United Nations to pass the Sokovia Accords in an attempt to regulate their actions. The differences in opinions created a rift within the organization which split the Avengers into two factions, one led by Iron Man and another by Captain America. After Captain America was able to stop Helmut Zemo, the instigator of their fight, the team was divided; Iron Man, Vision and War Machine remained official members, while a small group consisting of Captain America, Black Widow, and Falcon continued to operate in the shadows. Stark would try to boost the Avengers' membership by inviting Spider-Man to join, but the young hero turned down the offer to remain closer to the people he had sworn to protect.</p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">Avengers
                        <strong>Whatever it takes</strong>
                    </h2>
                    <hr>
                    <p>Two years after the Accords were ratified, Thanos, the Mad Titan warlord and instigator behind Loki's Chitauri invasion, launched a crusade against the universe in his quest to gather the Infinity Stones. The Avengers were split up into different groups as they fought to combat Thanos before he succeeded, joining forces with the Masters of the Mystic Arts, the Wakandans, and the Guardians of the Galaxy in the process, with Iron Man and Spider Man going to Titan alongside Doctor Strange and meeting and allying with Star-Lord, Nebula, Mantis and Drax to try to stop Thanos while Captain America, Hulk, Black Widow, War Machine, Falcon, Thor, Groot, Rocket and Scarlet Witch protected Vision from the Black Order in Wakanda. While the team on Wakanda was successful in killing Thanos' minions, the team fighting on Titan was defeated. Thanos arrived and overpowered the heroes on Wakanda with ease before killing Vision in order to receive the Mind Stone, thus completing the Infinity Gauntlet. Even after Thor severely wounded him, Thanos still managed to eradicate half of the universe's population, triumphing over Earth's Mightiest Heroes. Several Avengers were among the victims, including Falcon, Scarlet Witch and Spider-Man; with only Iron Man, Captain America, Thor, Hulk, Black Widow, and War Machine surviving the war.In the aftermath of the Snap, the remaining members of the Avengers were joined by Rocket Raccoon, Nebula, Captain Marvel, and Okoye as they tried to maintain order on Earth and the wider universe.</p>
                    <p>Five years later after Wasp and her family, who were supposed to pull Ant-Man from the Quantum Realm, were decimated, Ant-Man finally escaped the Quantum Realm, and Hawkeye rejoined the team in hopes of bringing his family back. The Avengers utilized the properties of the Quantum Realm, following Ant-Man's advice, and created a time machine that allowed them to collect the Infinity Stones years before Thanos. Returning to the present with the Stones, Hulk donned the Nano Gauntlet and was able to resurrect those that lost their lives in the Snap. Following Thanos' defeat and the subsequent deaths of Iron Man and Black Widow, Captain America decided to remain in the past with Peggy Carter, Hawkeye and Ant-Man reuniting with their families, while Rocket Raccoon and Nebula returned to the Guardians of the Galaxy with Thor joining them. With the war won and everyone departing, the Avengers disbanded.</p>
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

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>

</body>

</html>
