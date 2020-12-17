<?php
    $title = 'Bio';
    $metaTitle = 'Rotten Pork biography';
    $description = 'With more than ten years Rotten Pork has become a Death Metal standard in Puerto Vallarta';
    $currentPage = 'Bio';
	include ('includes/header.php');
?>
<body>
    <main>
        <article class="bio">
            <div class="bio__img">

            </div>
            <h1 class="top-title">BIOGRAPHY</h1>
           
            <p>With more than ten years in the scene <span>Rotten Pork</span>  has become a <span>Death Metal</span>  standard in the Puerto Vallarta and Bahía de Banderas area.</p>

            <p>This rotten pork <span>started to cook in 2009</span>, by  David Valenciana (Guitar/Drums) and Javier Ponce (Bass); creators of this project that has been evolving throughout the years.</p> 
                
            <p>With a demo and a single they started this journey at<span> local gigs in Puerto Vallarta</span>, which is when Ulises joined the band. A talented singer that grew up on quality growls and pig squeals.</p>
            <figure>
                <img src="https://rottenporkofficial.com/img/rotten-primera-alineacion.jpg" alt="">
                <figcaption>Javier, Ulises y David 2009</figcaption>
            </figure> 
            <p>In the year 2012 the first EP arrived, displaying a solid direction for the band. <span>"Pútrida Insanidad"</span> has 7 sick songs, in which you can hear a real <span>Grindcore and Slamming </span> influence.</p>    
            
            <p>In the same year Sacha Desautels joined the band. Being a talented musician, drummer and performer; he brought energy they needed because of the aggressive way he plays on the stage.</p> 
                
            <p>Until this day the band holds a <span>stable line-up </span> with Axl’s arrival as a guitar player in the year 2014.</p> 
            <figure>
                <img src="https://rottenporkofficial.com/img/rotten-pork-2012.jpg" alt="">
                <figcaption>Rotten Pork 2014 lineup
                    <p class="credit">📷 Giovanni Rodríguez</p>
                </figcaption>
            </figure> 
            <p>The execution and composition of the band has been getting more mature, and the result of that is  <span>"Tales Of Failure"</span>,  the first full length of the band. It has 13 songs that show an array of technical and blackened riffs without letting brutality go.</p>
                
             <p>Theres no doubt that <span>Rotten Pork</span> has earned the unconditional support of the Vallarta music scene. Due to that support, they have traveled to other states to perform.</p>
                
            <p>The band has shared the stage with bands like <span>Equipoise</span>, <span>Faceless</span>, <span>Origin</span>, <span>Putrid Pile</span>, <span>Unidad Trauma</span>, <span>Carnal Diafragma</span>, <span>Dios Perro</span>, <span>Medical Negligence</span>, <span>Frank Metal Mascara</span>, entre otras.</p>
            <section class="container-photos">
            <div class="shows">    
                <div class="photo">
                    <img src="https://rottenporkofficial.com/img/rotten-live-qro.jpg" alt="">
                </div>
                <div class="photo">
                    <img src="https://rottenporkofficial.com/img/rotten-pork-escenario.jpg" alt="">
                </div>
                <div class="photo">
                    <img src="https://rottenporkofficial.com/img/rotten-pork-live-gig.jpg" alt="">
                </div>
            </div>
            </section>
        </article>   
    </main>
    <?php
	    include ('includes/footer.php');
    ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.2/min/tiny-slider.js"></script>
	<script>
		var slider =tns({
  container: ".shows",
  items: 3,
  center: true,
  edgePadding: 10,
  responsive: {
    "360": {
      items: 1,
	  autoplay: true,
	  center: true,
    },
    "600": {
      items: 2
    }
  },
  autoplay: true,
  autoplayButtonOutput: false,
  loop: true,
  controls: false,	
  mouseDrag: true,
  slideBy: "page",
  swipeAngle: false,
  speed: 500,
  navPosition: "bottom",
  nav: true
});
</script>

   <!-- JS, Popper.js, and jQuery -->
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    </body>
</html>