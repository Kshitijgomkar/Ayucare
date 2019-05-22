<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Gallery</title>
  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css'>

      <link rel="stylesheet" href="css/style1.css">

  
</head>

<body>
  <div class="gallery">
  <?php
  include '../Gallery.php';
  $obj = new Gallery;
  $section_count = $obj->noOfSections();
  $sections = $obj->nameOfSections();
  for($i=0;$i<sizeof($sections);$i++){
    $images = $obj->fetchGallery($sections[$i]);
      for($j=1;$j<sizeof($images);$j++){
?>
   <div class="imgWrap imgWrap1" style="background-image:url(<?php echo $images[0];?>); ">
   <div class="full-content">
      <div class="images">
            <ul class="gallery">
            <li>
                  <a href="<?php echo $images[$j];?>" 
                     class="with-caption image-link" >
                  <img src="<?php echo $images[$j];?>"/>
                  </a>
               </li>
            </ul>
            </div>
      </div>
   </div>
<?php 
      }
    $section_count--;
  } 
?>
   
      </div>
   </div>
</div>
<a href="../../"><div id="close" title="Close (Esc)" class="mfp-close">×</div></a>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='https://ricostacruz.com/jquery.transit/jquery.transit.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js'></script>

  

    <script  src="js/index1.js"></script>




</body>

</html>
