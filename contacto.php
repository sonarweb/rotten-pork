<?php
    $title = 'Rotten Pork | Presskit';
	$metaTitle = 'Contacto';
	$description = 'Sí estás interesado en nuestro proyecto contáctanos';
	$currentPage = 'contacto';
	include ('includes/header.php');
?>
            <main class="container-form">
            <div class="header-form"></div>
                <h1 class="top-title">Contacto</h1>
                <p>Si estás interesado en nuestro proyecto, o si eres algún promotor, escríbenos por medio de este formulario. Nos pondremos en contacto contigo lo antes posible.</p>
                <section class="formulario">
                    <form action= "mail.php" method="POST">
                    <div class="form-group">
                        <label for="text">Nombre</label>
                        <input type="text" name="nombre" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="text">Asunto</label>
                        <input type="text" name="asunto" class="form-control" id="inputCity" required>
                      </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Correo Electrónico</label>
                        <input type="email" name="mail" class="form-control" id="mail" required>
                      </div>
                      <div class="form-group">
                          <label for="exampleFormControlTextarea1">Mensaje</label>
                          <textarea class="form-control" name="mensaje" id="form-text" rows="3" required></textarea>
                        </div>
                    <div class="contenedor-send">
                        <button type="submit" name="submit" class="btn send">Enviar</button>
                    </div>
                </section>  
            </form>
            </main>
            <div id="map"></div>   
        <?php
	        include ('includes/footer.php');
        ?>
    <script>
        function onClick(e) {
        e.preventDefault();
        grecaptcha.ready(function() {
        grecaptcha.execute('6Lc23BUaAAAAANRzwUo2xquXUJhHIYEftM0qTFFg', {action: 'submit'}).then(function(token) {
              // Add your logic to submit to your backend server here.
              methods: {
    verifyCaptcha() {
      e.preventDefault();
      grecaptcha.ready(() => {
        grecaptcha
        // Don't forget about putting your unique SECRET_SITE_KEY.
          .execute("6Lc23BUaAAAAAEroAhExFKPxof9Y3Pddya1AnYKq", {
            action: "submit"
          })
          .then(token => {
            // Try loggin the token first time to see if it got generated.
            console.log(token);
            // Add your logic to submit to your backend server here.
            // Here we will send the token to our backend using axios (install and import it to the component).
            // You could also use a Vue built in $http
            const body = { token: token };
            axios
            // We are POSTing to a dedicated URL we have on backend (it can be any URL that will need the reCAPTCHA token)
              .post("https://rottenporkofficial.com/contacto", body)
              .then(response => {
                // THe is_human part is our custom parameter comming from our backend. You can call it other name or just return something completly different. This is 100% to developer how will the reCAPTCHA returned probability be used.
                if (response.data.is_human) {
                 // Your front-end logic fired-up on success.
                } else {
                 // Your front-end logic fired-up on error.
                }
              })
              .catch(error => {
                console.log("Error : ", error);
              })
              // Boolean that could e.g. stop page loader.
              .finally(() => (this.loading = false));
          });
      });
    }
  }
          });
        });
      }
    </script>
            <script>
               function initMap(){
                map = new google.maps.Map(document.getElementById('map'), {
              center: {lat: 20.65717266849201, lng: -105.24999304642455},
              zoom: 13,
              mapId: '6949e2d392a3b005'
            });
               }
            </script>
            <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBe-PjqgiNIeSKvQL1dhveuo-A__SwjjXo&map_ids=6949e2d392a3b005&callback=initMap"></script>
           
<!-- JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>