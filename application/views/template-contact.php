<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title><?=$title?></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <link rel="stylesheet" href="<?= base_url('css/bootstrap.min.css'); ?>">
        <style>
            body {
                padding-top: 40px;
                padding-bottom: 0px;
            }
        </style>
        <link rel="stylesheet" href="<?= base_url('css/bootstrap-responsive.min.css'); ?>">
        <link rel="stylesheet" href="<?= base_url('css/main.css'); ?>">
         <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:300" type="text/css" />
         <link rel="stylesheet" href='http://fonts.googleapis.com/css?family=Philosopher'   type='text/css'> 
        <script src="<?= base_url('js/vendor/modernizr-2.6.2-respond-1.1.0.min.js'); ?>"></script>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

        <!-- This code is taken from http://twitter.github.com/bootstrap/examples/hero.html -->
        <div class="header row">
            
        
         <nav class="row-fluid" >
            <?php $dato["btn"]=$main_content; ?>
            <?= $this->load->view("includes/nav.php", $dato); ?>
        </nav>
       
       
        
    </div>
        <ul class="container services-list row-fluid">
            <li >
            <div class="row-fluid">                
                <h3 class="h3 span3 titleLayouts offset2">            
                  CONTACTANOS 
                </h3>
              
            </div>
             <div class="row-fluid">                
                
                <div class="span3  offset2 emailContact">
                    (info@know-owl.com)
                </div>
            </div>
            <div class="row-fluid">
                <div class="span3  offset2">
                  <label>¿Cual es tu nombre?.</label><input type="text" name="nombre">
                  <label>¿Cual es tu numero de telefono?.</label><input type="text" name="telefono">
                  <label>¿Cual es tu correo electronico?.</label><input type="text" name="correo">
                  <label>Danos una descripcion general de tu proyecto.</label><textarea name="mensaje"></textarea>
                </div>
            </div>           
            </li>
        </ul> <!-- /container -->
  <footer class="row-fluid">                
                <?= $this->load->view("includes/footer.php"); ?>        
            </footer>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="'+<?= base_url('js/vendor/jquery-1.8.3.min.js'); ?>+'"'><\/script>')</script>

        <script src="<?= base_url('js/vendor/bootstrap.min.js'); ?>"></script>

        <script src="<?= base_url('js/main.js'); ?>"></script>

        <script>
            var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
            (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
            g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
            s.parentNode.insertBefore(g,s)}(document,'script'));
        </script>
    </body>
</html>
