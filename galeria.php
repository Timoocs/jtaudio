<?php 

    include 'header.php'

?>
<body>
      <main>
            <section class="galsec">
            <h1 class="contact-me">
                <span class="showIn">G</span><span class="showIn">a</span><span class="showIn">l</span><span class="showIn">é</span><span class="showIn">r</span><span class="showIn">i</span><span class="showIn">a</span>

            </h1>

                <div class="image-gallery">
                    <img class="thumbnail" src="./img/371036257_792561506206132_4428870687779999259_n.jpg" alt="" onclick="enlargeImage(this)">
                    <img class="thumbnail" src="./img/379339939_809425771186372_6142501134534384430_n.jpg" alt="" onclick="enlargeImage(this)">
                    <img class="thumbnail" src="./img/419045448_936748401787441_946544253651170705_n.jpg" alt="" onclick="enlargeImage(this)">
                    <img class="thumbnail" src="./img/441880821_996310039164610_3414811677387898465_n.jpg" alt="" onclick="enlargeImage(this)">
                    <img class="thumbnail" src="./img/MATO2839.JPG" alt="" onclick="enlargeImage(this)">
                    <img class="thumbnail" src="./img/MATO2742.JPG" alt="" onclick="enlargeImage(this)">
                </div>

                <div id="overlay" class="overlay" onclick="closeOverlay()">
                    <img id="overlayImage" class="overlay-image">
                </div>

            </section>
      </main>


      <?php 
    
    include 'footer.php'
   
   ?>

</body>

</html>