<?php
include 'capa.php';
include 'header.php';
include 'save_objeto.php';

$view = new stdClass();
$view->tabla1 =Aprende::getTabla1();

?>

<p class="lead" style="margin-top: 20px" >Modulos de Aprendizaje </p> <hr class="my-4" >


<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel" style="margin-top: 20px">

  <ol class="carousel-indicators">

<?php    foreach ($view->tabla1 as $value) { ?>
    <li data-target="#carouselExampleCaptions" data-slide-to="<?php echo ($value['id']-1); ?>" class="<?php if(($value['id']-1)==0) echo "active"; ?>">
    	
    </li>
<?php } ?>

  </ol>

  <div class="carousel-inner">



<?php    foreach ($view->tabla1 as $value) { ?>

    <div class="carousel-item <?php if(($value['id']-1)==0) echo "active"; ?> ">
      <img src="https://mdbootstrap.com/img/Photos/Slides/img%20(68).jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5><?php echo $value['modulo'] ?></h5>
        <p><?php echo $value['descrito'] ?></p>
        <a href="actividad.php?id=<?php echo $value['id']?>"><small class="text-muted"> Aprender </small></a>
      </div>
    </div>

<?php } ?>

  </div>
  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>


<script >

$('.carousel').carousel();


</script>

 <?php include 'footer.php'; ?>