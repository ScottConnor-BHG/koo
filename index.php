
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Tangerine">
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">

    <title>John Koo | Designer</title>


    <!-- Bootstrap core CSS -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/css/dashboard.css" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">
    <script src="js/modernizr-1.5.min.js"></script>
    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
              
              <!-- <img src="/img/snow.jpg" id="banner" class="img-responsive"  alt="Responsive image">
               <button class="btn1" style="float:right;">Slide up</button>
               <button class="btn2" style="float:right;">Slide down</button> -->
<!--         <img src="/img/snow.jpg" class="img-responsive" alt="Responsive image">
        <button class="btn1" >Slide up</button>
        <button class="btn2" >Slide down</button> -->
  </head>

  <body>
<!--     <div class="body1">
      <img src="/img/snow.jpg" class="img-responsive" id="banner" alt="Responsive image">
            
            <button type="button"  class="btn1 btn-default btn-lg">
              <i class="fa fa-chevron-down"></i> 
            </button>
           
           
    </div> -->

  <div class="body2" id="body2">
    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container-fluid">
       <!--  <img src="/img/snow.jpg"   alt=""> -->

        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>

          
          <a class="navbar-brand" href="#">John Koo | <small>Designer<small></small></a>
        </div>
        <div class="navbar-collapse collapse">
           <ul class="nav navbar-nav navbar-right">
            <li><a href="blog.php"><i class="fa fa-facebook-square"></i></a></li>
            <li><a href="blog.php"><i class="fa fa-instagram"></i></a></li>
            <li><a href="blog.php"><i class="fa fa-twitter"></i></a></li>
            
          </ul>
          <form class="navbar-form navbar-right">
            <input type="text" class="form-control" placeholder="Search...">
          </form>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="portfolio.php">Categories</a></li>
            <li><a href="blog.php">About</a></li>
            <li><a href="contact.php">Contact</a></li>
          </ul>
        </div>
      </div>
    </div>

        <!-- ********About ME************** -->
        <div class="col-sm-8 col-sm-offset-2 main">
          <h1 class="page-header">John Koo</h1>
        <div class="well">
          <div class="row placeholders">
            <div class="col-xs-6 col-sm-3 ">
              

            </div><!--  column -->
            <div class="col-xs-12 col-sm-6">
              <div class="well bio">
              <h3>John Koo</h3>
            </div><!-- well -->
            <div class="well bio">
              <span class="text-muted">Make your own T-shirts today!</span>
              <img src="/img/me.jpeg" class="img-responsive" alt="">
            </div><!-- well -->
              
<!--               <div class="well bio">
                <h4>Location: Burlington, Vermont</h4>
                <h4>Email: scottay81[at]gmail.com</h4>
              </div> <!-- well -->
            </div><!--  column -->
            <!-- <a  name="hobbies"></a> -->
          </div><!-- row -->
        </div> <!-- well -->

    <!-- Bootstrap core JavaScript
    ==================================================
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
     <!-- <script src="../../assets/js/docs.min.js"></script>-->
        <script>
            $(document).ready(function(){
                




                //hide submenu until clicked
                 $('.submenu').hide();
                $("li:has(ul)").click(function(){

                $("ul",this).slideDown();
                });
                // $(".body2").show();
                // $(".btn1").click(function(){
                // $(".body1").slideUp(1000);
                // $(".btn1").hide();
                //  $(".body2").show();
                // delayedShow();
                });


            });

      // script for shutter doors
          var jQueryScriptOutputted = false;
    
    function initJQuery() {
        
        if (typeof(jQuery) == 'undefined') {
        
            if (!jQueryScriptOutputted) {
                jQueryScriptOutputted = true;
                
                // Primitive way of loading scripts (no library yet)
                document.write("<scr" + "ipt src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.2.6/jquery.min.js\"></scr" + "ipt>");
            }
            setTimeout("initJQuery()", 50);
            
        } else {
          
          // jQuery way of loading scripts
          $.getScript('js/jquery.backgroundPosition.js', function() {
            

                // Set CSS in Firefox (Required to use the backgroundPosition js)
          $('#shutter1').css({backgroundPosition: '0px 0px'});
          $('#shutter2').css({backgroundPosition: '0px 0px'});
          $('#shutter3').css({backgroundPosition: '0px 0px'});
          $('#shutter4').css({backgroundPosition: '0px 0px'});
    
          // Animate the Shutter  
          $("#garagedoor a").hover(function() { 
                $(this).parent().stop().animate({backgroundPosition: '(0px -100px)'}, 500);
              }, function() {
                $(this).parent().stop().animate({backgroundPosition: '(0px 0px)'}, 500);
          });
          
          });
    
        }
                
    }
    
    if (!Modernizr.csstransitions) {
      initJQuery();
    }
    </script>
  </body>
</html>
