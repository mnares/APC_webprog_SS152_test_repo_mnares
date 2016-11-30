<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Marc Nares</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">

    <!-- Theme CSS -->
    <link href="css/grayscale.min.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    

</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

    <!-- Navigation -->
    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">
                    <i class="fa fa-play-circle"></i> <span class="light">Marc</span> Nares
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                <ul class="nav navbar-nav">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#about">About</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#download">Trivia</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">C.R.U.D</a>
                    </li>
                    <!--<li>
                        <a class="page-scroll" href="<?php echo base_url(); index.php/signup?> ">Sign-Up</a>
                    </li>
                    -->
                    
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Intro Header -->
    <header class="intro">
        <div class="intro-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <h1 class="brand-heading">Welcome</h1>
                        <p class="intro-text"><i>“Hard work beats talent when talent fails to work hard.”</i>
                            <br>- Kevin Durant</p>
                        <a href="#about" class="btn btn-circle page-scroll">
                            <i class="fa fa-angle-double-down animated"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- About Section -->
    <section id="about" class="container content-section text-center">
        <div class="row">
            <div>
            <img style = "border-radius: 50%;width: 30%;height: 90%;" src = "assets/5.jpg">
            </div>


            <div class="col-lg-8 col-lg-offset-2">
                <h2></br>About Me</h2>
                <p>Hi! My name is Marc Anthony Nares but you can just call me either Marc or Mac. In the 17 years of my existence, I'm fond of playing different kinds of sport as well as video games. When I'm alone, travelling is my only option. Another good thing about me is that I eat a lot. I want to try different cuisines while jamming to my favorite songs in order to satisfy my daily cravings.
                In the near future, I would like to learn the art of photography because it's my way of keeping my experiences and memories with me as I grow old. Lastly, playing any musical instrument is one of my life goals because it can serve as one of my growing talents that I can showcase to everyone.

                <ul class="list-inline banner-social-buttons">
                    <li>
                        <a href="https://twitter.com/Markkyy08" class="btn btn-default btn-lg"><i class="fa fa-twitter fa-fw"></i> <span class="network-name">Twitter</span></a>
                    </li>
                    <li>
                        <a href="https://github.com/mnares/APC_webprog_SS152_test_repo_mnares" class="btn btn-default btn-lg"><i class="fa fa-github fa-fw"></i> <span class="network-name">Github</span></a>
                    </li>
                    <li>
                        <a href="https://facebook.com/iloveshoes41" class="btn btn-default btn-lg"><i class="fa fa-facebook fa-fw"></i> <span class="network-name">Facebook</span></a>
                    </li>
                </ul>

            </div>
        </div>
    </section>

    <!-- Download Section -->
    <section id="download" class="content-section text-center">
        <div class="download-section">
            <div class="container">
                <div class="col-lg-8 col-lg-offset-2">
                    <h2>Trivia</h2>
                        <div class="panel-group" id="accordion">
                            <div class="panel panel-default">
                              <div class="panel-heading">
                                <h4 class="panel-title">
                                  <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">What's my favorite food?</a>
                                </h4>
                              </div>
                              <div id="collapse1" class="panel-collapse collapse">
                                <div class="panel-body">Sinigang</div>
                              </div>
                            </div>
                        </div>
                        <div class="panel-group" id="accordion">
                            <div class="panel panel-default">
                              <div class="panel-heading">
                                <h4 class="panel-title">
                                  <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">Where was I born?</a>
                                </h4>
                              </div>
                              <div id="collapse2" class="panel-collapse collapse">
                                <div class="panel-body">Japan</div>
                              </div>
                            </div>
                        </div>
                        <div class="panel-group" id="accordion">
                            <div class="panel panel-default">
                              <div class="panel-heading">
                                <h4 class="panel-title">
                                  <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">Favorite Song?</a>
                                </h4>
                              </div>
                              <div id="collapse3" class="panel-collapse collapse">
                                <div class="panel-body">Go Flex</div>
                              </div>
                            </div>
                        </div>
                        <div class="panel-group" id="accordion">
                            <div class="panel panel-default">
                              <div class="panel-heading">
                                <h4 class="panel-title">
                                  <a data-toggle="collapse" data-parent="#accordion" href="#collapse4">Favorite Sport?</a>
                                </h4>
                              </div>
                              <div id="collapse4" class="panel-collapse collapse">
                                <div class="panel-body">Basketball</div>
                              </div>
                            </div>
                        </div>
                        <div class="panel-group" id="accordion">
                            <div class="panel panel-default">
                              <div class="panel-heading">
                                <h4 class="panel-title">
                                  <a data-toggle="collapse" data-parent="#accordion" href="#collapse5">Favorite Color?</a>
                                </h4>
                              </div>
                              <div id="collapse5" class="panel-collapse collapse">
                                <div class="panel-body">Pink</div>
                              </div>
                            </div>
                        </div>
                </div>
            </div>

        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="container content-section text-center">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <h2>C.R.U.D</h2>
                <div>
                    <table border="2">
                        <tr>
                            <th>Full Name</th>
                            <th>Nickname</th>
                            <th>Email Address</th>
                            <th>Address</th>
                            <th>Gender</th>
                            <th>Phone No.</th>
                            <th>Comment</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                        <?php foreach ($user as $usr) : ?>
                            <tr>
                                <td><?=  $usr->fullname ?></td>
                                <td><?=  $usr->nickname ?></td>
                                <td><?=  $usr->email ?></td>
                                <td><?=  $usr->address ?></td>
                                <td><?=  $usr->gender ?></td>
                                <td><?=  $usr->phoneNum ?></td>
                                <td><?=  $usr->comment ?></td>
                                <td><?=  anchor('Users/edit/'.$usr->user_id,'Edit',['role'=>'button']) ?></td>
                                <td><?=  anchor('Users/delete/'.$usr->user_id,'Delete',['role'=>'button','onclick'=>'return confirm(\'Are you sure? \')']) ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </table>
                    <br/>
                    <?=  anchor('Users/index/','Create new user',['role'=>'button']) ?>
                    <br/>

                </div>
            </div>
        </div>
    </section>


    <!-- Footer -->
    <footer>
        <div class="container text-center">
            <p>Copyright &copy; Marc Anthony Nares 2016</p>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="vendor/jquery/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

    <!-- Google Maps API Key - Use your own API key to enable the map feature. More information on the Google Maps API can be found at https://developers.google.com/maps/ -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCRngKslUGJTlibkQ3FkfTxj3Xss1UlZDA&sensor=false"></script>

    <!-- Theme JavaScript -->
    <script src="js/grayscale.min.js"></script>

</body>

</html>
