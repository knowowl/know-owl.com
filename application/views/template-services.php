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
                  CREATIVIDAD Y BRANDING.
                </h3>
            </div>
            <div class="row-fluid">
                <div class="span3 parrafo offset2">
                   La imagen es el primer contacto entre tu y tus clientes, sabemos lo importante que es dar una buena impresion y hacer lo posible para mantener esa huella en la mente de todas esas personas a quienes llegas, es por eso que trabajamos para ofrecerte todos los servicios que tu negocio necesite para tener una imagen corporativa exitosa.

                   <ul >
                    <li>Manual de identidad corporativa.</li>
                    <li>Logotipo, isotipo e isologo.</li>
                    <li>Tipografia.</li>
                   </ul>
                   
                </div>
            </div>           
            </li>
            <li>
                <div class="row-fluid"> 
                    <h3 class="span3 titleLayouts offset8">
                        ANIMACION E ILUSTRACION.
                    </h3>
                </div>
                <div class="row-fluid">
                    <div class="span3 parrafo offset8">
                    El arte visual puede ayudar a expresar sentimientos e ideas de una manera unica, dandole forma a lo que deseas transmitir y llamando la atencion de aquellos que son persuadidos por la bellaza de lo que captan sus ojos.
                    <ul>                    
                    <li>Ilustracion.</li>
                    <li>Renderizado.</li>
                    <li>Animacion 2D y 3D.</li>
                   </ul>
                    </div>
                    
                </div>
            </li>
            <li>
                <div class="row-fluid">                
                    <h3 class="span3 titleLayouts offset2">
                       CONSULTORIA.
                    </h3>
                </div>
                <div class="row-fluid">
                    <div class="span3 parrafo offset2">
                    No se trata solo de una presencia en internet, todo proyecto debe estar sujeto a una planificacion estrategica. No dejes el exito de tu proyecto tecnologico a la suerte, te ayudamos a alcanzar tus metas.
                    
                    </div>
                </div>
            </li>
            <li>
                <div class="row-fluid">                
                    <h3 class="span3 titleLayouts offset8">
                     DESARROLLO.
                    </h3>
                </div>
                <div class="row-fluid">
                    <div class="span3 parrafo offset8">
                    Detras de cada proyecto web existe todo un conjunto de tecnologias que hacen posible la interaccion entre tu y tus clientes. Desarrollamos el sistema de cada aplicacion de manera eficiente y eficaz para garantizar un optimo desempeño durante su ejecucion.
                    <ul>                    
                        <li>Sitios web.</li>
                        <li>Aplicaciones.</li>
                        <li>Comercio electronico.</li>
                        <li>Base de datos.</li>
                        <li>Video juegos.</li>
                    </ul>
                    </div>
                </div>
             </li>
            <li>
                <div class="row-fluid">                
                    <h3 class="span3 titleLayouts offset2">
                     EXPERIENCIA DE USUARIO.
                    </h3>
                </div>
                <div class="row-fluid">
                    <div class="span3 parrafo offset2">
                    El tiempo que los usuarios invierten en una aplicacion tiene un gran valor. Para nosotros es indispensable simplificar interacciones y hacer lo mas confortable posible la estadia.
                    <ul>                    
                        <li>Diseño ajustable (Responsive design).</li>                        
                        <li>Interacción Incentivada.</li>
                        <li>Encontrabilidad (Findability).</li>
                        <li>Usabilidad.</li>                       
                    </ul>
                    </div>
                </div>
             </li>
             <li>
            <div class="row-fluid">                
                <h3 class="span3 titleLayouts offset8">
                  MERCADEO EN LINEA.
                </h3>
            </div>
            <div class="row-fluid">
                <div class="span3 parrafo offset8">
                   Date a conocer y aprende de ellos. Crear una comunidad en torno a tu producto o servicio es muy importante, la presencia en las redes sociales te permite crear lazos mas fuertes entre tus clientes y tu marca.
                   <ul>                    
                        <li>Redes Sociales.</li>                        
                        <li>Optimizacion en motores de busqueda.</li>
                        <li>Monitoreo de actividades.</li>
                                              
                    </ul>
                </div>
                
            </div>
            </li>
        

            <!-- Example row of columns -->
            
            

           
          

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
