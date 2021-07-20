<!-- Crear un CRUD para la Veterinaria, donde podamos gestionar a los
clientes y sus mascotas en BBDD-->
<!-- front del CRUD -->
<?php require_once("connection.php");?>

<?php require_once("head.php");?>

<?php require_once("header.php");?>

<div class="container">
  <div class="row">

    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="./img/boca.jpg" class="d-block w-100" title="400$" width="320px" height="800px">
      <div class="carousel-caption d-none d-md-block">
        <h5>Sweet Choco</h5>
        <p>El chocolate derretido mas delicioso con un toque de crema rosa, ideal para esas ocaciones tan hermosas</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="./img/boda3.jpg" class="d-block w-100" title="900$" width="620px" height="800px">
      <div class="carousel-caption d-none d-md-block">
        <h5>Brahma Cake</h5>
        <p>La popular cerveza plasmada en un pastel hecho solo para usted y sus momentos felices</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="./img/boda1.jpg" class="d-block w-100" title="1200$" width="620px" height="800px">
      <div class="carousel-caption d-none d-md-block">
        <h5>Pastel para Bodas</h5>
        <p>Para el dia mas feliz de tu vida tenemos lo mejor en pasteles de Bodas</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
    
</div>


<?php require_once("endofpage.php");

