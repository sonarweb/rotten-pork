<?php
	include ('includes/header.php');
?>
<body>
    <main>
        <article class="bio">
            <div class="bio__img">

            </div>
            <h1 class="top-title">Biografía</h1>
           
            <p>Con más de diez años en la escena <span>Rotten Pork</span> se ha convertido en un referente del <span>Death Metal</span> en la región de Puerto Vallarta y Bahía de Banderas.</p>

            <p>El pútrido cerdo comenzó a gestarse <span>a partir del 2009</span>, de la mano de David Valenciana (Guitarra/Batería) y Javier Ponce (Bajo), progenitores de este proyecto que hasta la fecha ha ido evolucionando.</p> 
                
            <p>Con un demo y un single comienza la travesía en los <span>escenarios vallartenses</span>, fue ahí cuando Ulises se une a la agrupación, un talentoso vocalista que desde una corta edad se caracterizó por la calidad de sus growls y pig squeals.</p>
            <figure>
                <img src="img/rotten-primera-alineacion.png" alt="">
                <figcaption>Javier, Ulises y David en 2009</figcaption>
            </figure> 
            <p>Fue para el año 2012 cuando surgió el EP que definió un estilo sólido a la agrupación, <span>Pútrida Insanidad</span> consta de siete temas brutales. en los que se ve una marcada influencia del <span>Grindcore y el Slamming</span>.</p>    
            
            <p>En el mismo año se añade como baterista Sacha Desautels, destacado músico en la escena local, quien aporta una agresividad muy marcada a la agrupación.</p> 
                
            <p>Hasta la fecha la agrupación se mantiene con <span>una alineación estable</span> con la llegada de Axl como guitarrista, quien a partir del 2014 forma parte del proyecto.</p> 
            <figure>
                <img src="img/rotten-pork-2012.jpg" alt="">
                <figcaption>Rotten Pork Alineación 2014
                    <p class="credit">📷 Giovanni Rodríguez</p>
                </figcaption>
            </figure> 
            <p>La ejecución y la composición de la banda ha ido madurando, dando como resultado <span>Tales Of Failure</span>, primer Full Length, con un total de 13 canciones, que abarcan pasajes más técnicos y obscuros, sin dejar a un lado la brutalidad.</p>
                
             <p>No cabe duda que <span>Rotten Pork</span> se ha ganado el apoyo incondicional de la escena vallartense, gracias a ese soporte, ha recorrido <span>distintos escenarios</span> en algunas partes del país.</p>
                
            <p>La agrupación ha compartido escenario con bandas como <span>Equipoise</span>, <span>Faceless</span>, <span>Origin</span>, <span>Putrid Pile</span>, <span>Unidad Trauma</span>, <span>Carnal Diafragma</span>, <span>Dios Perro</span>, <span>Medical Negligence</span>, <span>Frank Metal Mascara</span>, entre otras.</p>
            <section class="container-photos">
            <div class="shows">    
                <div class="photo">
                    <img src="img/rotten-live-qro.jpg" alt="">
                </div>
                <div class="photo">
                    <img src="img/rotten-pork-escenario.jpg" alt="">
                </div>
                <div class="photo">
                    <img src="img/rotten-pork-live-gig.jpg" alt="">
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