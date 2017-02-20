<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- All in One SEO Pack -->
	<!-- All in One SEO Pack -->
    <meta content='width=device-width, initial-scale=1, maximum-scale=1' name='viewport'/>
    <meta name="description" content="قص روابط جوجل قص روابط الصور كيوت قص  بدون اعلانات Cutter URL Shortener">
    <meta content='shortcut,link,to,desktop shortcut,link,shortcut,links,not,working shortcut,Cutter URL Shortener' name='keywords'/>
    <link href='Cutter' rel='author'/>
    
    <meta property="og:url"           content="<?php echo $_SERVER['HTTP_HOST']; ?>" />
    <meta property="og:type"          content="website" />
    <meta property="og:title"         content="Cutter" />

    <meta property="og:image"         content="img/profile.png" />
    <base href="/">
    
<?php if($this->_controller != "to") {echo '<link rel="icon" type="image/x-icon" href="favicon.ico" /> <title>Cutter URL Shortener</title>'; 

}  else { ?>  
        <title><?php echo $this->myFunction->get_title( $this->row1['l_name'] ); ?></title>
        <link rel="shortcut icon" href="<?php echo $this->myFunction->get_icon( $this->row1['l_name'],$this->row1['l_name'] ); ?>">

            <?php } ?>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo CSSBOOT; ?>" rel="stylesheet">
    <!-- Theme CSS -->
    <link href="<?php echo style; ?>" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" >
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top" class="index">
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-92222791-1', 'auto');
  ga('send', 'pageview');

</script>
    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top navbar-custom affix">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <?php  if($this->_controller == "to"){ ?>
                <button type="button" class="navbar-toggle" id="rep-mob" >
                    <a class="btn-4" ><span  id='count'>5</span></a> <i class="fa fa-bars"></i>
                </button>
                <?php }else{ ?>
                <button type="button" class="navbar-toggle " data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>                    <?php } ?>
                <a class="navbar-brand" href="/">  Start Bootstrap</a>
                <h2 class="noneForSeo">
                    قص اللينكات
قص ال يوتيوب
قص الروابط هتون
موقع قص اللينكات
قص الروابط قوقل
قص الروابط ق
قص الروابط بلاك بيري
قص الروابط v ht
قص الروابط cutt
قص الروابط للايفون
قص الروابط المتعدده
قص الروابط المتعدد الذكي
قص الروابط 2013
قص الروابط اليوتيوب
قص الروابط جوجل
قص الروابط تويتر
                </h2>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <?php  if($this->_controller == "to"){ ?>
                    <li class="page-scroll" id="rep">
                        <a class="btn-4" ><span class="" id='count-mob'>5</span></a>
                    </li>
                        
                    </li>                        
                    <?php }else{ ?>
                    <?php if($this->user_login->is_logged_in() == ""){ ?>
                    <li class="page-scroll">
                        <a href="signup"><i class="fa fa-user-plus" aria-hidden="true"></i>&nbsp;Sign up</a>
                    </li>
                    <li class="dropdown">
                        <a href="signin" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-sign-in" aria-hidden="true"></i>&nbsp;Sign in<span class="caret"></span></a>
                        <ul id="login-dp" class="dropdown-menu">
                            <li>
                                <div class="row">
                                    <div class="col-md-12">
<!-- 								Login via
                                            <div class="social-buttons">
                                                    <a href="#" class="btn btn-fb"><i class="fa fa-facebook"></i> Facebook</a>
                                                    <a href="#" class="btn btn-tw"><i class="fa fa-twitter"></i> Twitter</a>
                                            </div>
            or -->
                                        <form class="form" method="post" action="login" accept-charset="UTF-8" >
                                            <div class="form-group">
                                                <label class="sr-only" for="exampleInputEmail2">Email address</label>
                                                <input name="navemail" type="email" class="form-control" id="exampleInputEmail2" placeholder="Email address" required>
                                            </div>
                                            <div class="form-group">
                                                <label class="sr-only" for="exampleInputPassword2">Password</label>
                                                <input name="navpass" type="password" class="form-control" id="exampleInputPassword2" placeholder="Password" required>
                                                <div class="help-block text-right"><a href="">Forget the password ?</a></div>
                                            </div>
                                            <div class="form-group">
                                                <input type="submit" name="supnavlogin" class="btn btn-primary btn-block" value="Sign in">
                                            </div>
                                        </form>
                                    </div>
                                    <div class="bottom btn-danger btn-block text-center">
                                            New here ? <a href="signup"><b>Join Us</b></a>
                                    </div>
                                 </div>
                            </li>
                        </ul>
                    </li>
                    <?php }  else { ?>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user" aria-hidden="true"></i>&nbsp;<?php if(isset($this->Lname)){echo $this->Lname;}else{echo $this->Fname;} ?><span class="caret"></span></a>
                            <ul  id="login-dp" class="dropdown-menu" role="menu" aria-labelledby="menu1">
                                <li role="presentation"><a href="account"><i class="fa fa fa-gear" aria-hidden="true"></i>&nbsp;My Account</a></li>
                                <li class="page-scroll"><a href="logout"><i class="fa fa-sign-out" aria-hidden="true"></i>&nbsp;Logout</a></li>
                                <li role="presentation" class="divider"></li>
                                <li role="presentation"><a href="#"><i class="fa fa fa-handshake-o" ></i>&nbsp;My API</a></li>
                            </ul>
                    </li>
                  <?php }
                  
                    } ?>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
    <h1 class="noneForSeo" ><a class="noneForSeo" href="account">my account</a></h1>
