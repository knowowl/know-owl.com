<div class="isologo span3 offset1"  alt="Knowowl"><a class=" link_home" href="http://www.know-owl.com"></a></div>
  <ul class="nav span7">
  <?php
  $btn1="";
  $btn4="";
switch ($btn) {
  case 'services':
    $btn1="active1";
    break;
  case 'contact':
    $btn4="active4";
    break;
  
  default:
    # code...
    break;
}
   ?>
    <li class="span3"><a class="btn1 <?=$btn1?>" href="/services">Servicios</a></li> 
    <li class="span3 "><a class="btn2" href="#">Productos</a></li> 
    <li class="span3 "><a class="btn3" href="#">Laboratorio</a></li>     
    <li class="span3 "><a class="btn4 <?=$btn4?>" href="/contact">Contactanos</a></li>     
  </ul>    
