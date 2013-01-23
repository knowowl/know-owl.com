<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
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
             <?php $dato["btn"]=""; ?>
            <?= $this->load->view("includes/nav.php", $dato); ?>
        </nav>
        <div class="bgpic">
            <div class="slider">
                <div class="item">
                    
                </div>
            </div>
            
    
        </div>
       
        
    </div>
        <div class="container">

              <div class="row-fluid">
                
                <h3 class="span12 titleLayouts">
                  Apostamos a un futuro mejor, Contribuimos en su construccion.
                </h3>
                <div class="span6 parrafo offset3">
                    La creencia de un mejor mañana se ha convertido en la fuente de energia que nos permite trabajar con impetu dia a dia, amando lo que hacemos y soñando con lo que podemos lograr, estamos firmemente convencidos de que lo imposible si se puede lograr. 
                </div>
            </div>
           

            <!-- Example row of columns -->
            <div class="row-fluid">
                
                <h3 class="span12 titleLayouts2">
                  DE ESTA FORMA COLABORAMOS, CREAMOS Y APRENDEMOS.
                </h3>

            </div>
            <div class="row">
                <a href="#" class="linkProducts">
                <div class="span4 service">
                    <div class="serviceImg">
                        <em></em>
                    </div>
                    <h2>Servicios</h2>
                    <p>Te ayudamos a alcanzar el exito en cada proyecto tecnologico que te propongas.</p>
                    
               </div>
                </a>
                 <a href="#" class="linkProducts">
                <div class="span4 product">
                    <div class="productImg">
                        <em></em>
                    </div>
                    <h2>Productos</h2>
                    <p>Combinamos la creatividad y el conocimiento para crear.</p>
                    
                </div>
                </a>
                 <a href="#" class="linkProducts">
                <div class="span4 lab">
                    <div class="labImg">
                        <em></em>
                    </div>
                    <h2>Laboratorio.</h2>
                    <p>Sabemos que siempre se puede ser mejor, en eso trabajamos.</p>
                   
                </div>
               </a>
            </div>

           
          

        </div> <!-- /container -->
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
