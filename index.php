<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Accueil Primo-Pres</title>
  <!--bootstrap-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<!--Font family-->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?Nunito+Sans:wght@300&family=Roboto+Slab:wght@300&family=Tenor+Sans&family=Akshar&family=Cantata+One&family=Fjalla+One&display=swap" rel="stylesheet">
<!--Mon propre Css-->
  <link rel="stylesheet" href="css/styles.css">
</head>
<body>
  <!--Menu-->
<?php include 'header.php'; ?>
<!--Menu-->
<main>
  <!--carrousel-->
  <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/AdobeStock_351.webp" alt="">
      <div class="container">
        <div class="carousel-caption">
          <h1>Example headline.</h1>
          <p>Some representative placeholder content for the first slide of the carousel.</p>
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/AdobeStock_338.webp" alt="">
      <div class="container">
        <div class="carousel-caption">
          <h1>Another example headline.</h1>
          <p>Some representative placeholder content for the second slide of the carousel.</p>
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/AdobeStock_321.webp" alt="" >
      <div class="container">
        <div class="carousel-caption">
          <h1>One more for good measure.</h1>
          <p>Some representative placeholder content for the third slide of this carousel.</p>
        </div>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<!--carrousel-->
<div class="container ">


<div class="row sp ">
    <div  class="col-lg-4">
      <div class="">
      <img src="images/AdobeStock_163.webp" alt="">
      <h4>Un Concept Ideal</h4>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam vulputate odio dapib sapien iaculis ullamcorper.
         Interdum et malesuada fames ac ante ipsum primis in faucibus. Fusce eu malesuada ipsum.
          Nunc tristique aliquet dui, at ultrices felis.</p>
    </div>
  </div>
    <div class="col-lg-4">
      <div class="">
      <h4>Satisfaction du Client</h4>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam vulputate odio dapib sapien iaculis ullamcorper.
         Interdum et malesuada fames ac ante ipsum primis in faucibus. Fusce eu malesuada ipsum.
          Nunc tristique aliquet dui, at ultrices felis.</p>

          <img src="images/AdobeStock_326.webp" alt="">
    </div>
    </div>
    <div class="col-lg-4 ">
      <div class="">
      <img src="images/AdobeStock_244.webp" alt="">
      <h4>Le parfait Design</h4>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam vulputate odio dapib sapien iaculis ullamcorper.
         Interdum et malesuada fames ac ante ipsum primis in faucibus. Fusce eu malesuada ipsum.
          Nunc tristique aliquet dui, at ultrices felis.</p>
    </div>
    </div>
   </div>
</div>
<!--exploit-->
<div class="exploit">

  <section id="counter" class="sec-padding">
    <div class="exploit-desc">
      <h1>Quelques exploits</h1>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
         Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
     </p><br>
     <p>&#10004; Lorem ipsum dolor sit amet, consectetur adipiscing elit </p>
     <p>✔ Lorem ipsum dolor sit amet, consectetur adipiscing elit </p>
     <p>✔ Lorem ipsum dolor sit amet, consectetur adipiscing elit </p>
</div>
    <div class="container">
      <div class="row">

        <div class="col-md-4 col-sm-4">
          <div class="count"> <span class="fa fa-smile-o"></span>
            <p class="number">16</p>
            <h4>Clients Satisfaits</h4> </div>
        </div>
        <div class="col-md-4 col-sm-4">
          <div class="count"> <span class="fa fa-smile-o"></span>
            <p class="number">4</p>
            <h4>Années d'experience</h4> </div>
        </div>
        <div class="col-md-4 col-sm-4 ">
          <div class="count"> <span class="fa fa-smile-o"></span>
            <p class="number">7</p>
            <h4>Projets réalisés</h4> </div>
        </div>
      </div>
    </div>
  </section>
  </div>
  <!--exploit-->
<div class="row Competences ">
  <div><h3>Nos Competences</h3><hr></div>

 <div class=" stats" >
   <h4>Plan 2D</h4>
    <div class="progress">
      <div class="progress-bar" role="progressbar" style="width: 95%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
    </div>
    <h4>Modelisation 3D</h4>
     <div class="progress">
       <div class="progress-bar" role="progressbar" style="width: 90%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
     </div>
    <h4>Machin</h4>
     <div class="progress">
       <div class="progress-bar" role="progressbar" style="width: 82%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
     </div>
    <h4>Machinchin</h4>
     <div class="progress">
       <div class="progress-bar" role="progressbar" style="width: 87%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
     </div>
  </div>
</div>
<div class="container" style="max-width: 100%;background-color: #ebebeb;">
  <div class="row devis">


    <div class="col-lg-12" >
      <a href="contact.php" class="btn btn-primary btn-lg" style="width: 18rem;font-size: 2rem;">Avoir Un <strong>Devis</strong></a>
<!--<a href="contact.php" style="color:white;"><h2>Contact-Nous</h2></a>-->
    </div>
  </div>
</div>


</main>

<!--footer-->
<?php include 'footer.php'; ?>
  <!--footer-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>

<script type="text/javascript">

$(window).on("load",function(){$(window).scroll(function(){var o=$(this).scrollTop()+$(this).innerHeight();$(".col-lg-4").each(function(){$(this).offset().top+$(this).outerHeight()<o?0==$(this).css("opacity")&&$(this).fadeTo(500,1):1==$(this).css("opacity")&&$(this).fadeTo(500,1)})}).scroll()}),$(window).on("load",function(){$(window).scroll(function(){var o=$(this).scrollTop()+$(this).innerHeight();$(".count").each(function(){$(this).offset().top+$(this).outerHeight()<o?0==$(this).css("opacity")&&$(this).fadeTo(500,1):1==$(this).css("opacity")&&$(this).fadeTo(500,0)})}).scroll()});
  </script>
</body>
</html>
