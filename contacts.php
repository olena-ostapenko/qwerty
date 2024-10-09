<?php require "header.php";?>
    <main>
        <section class= "contact">
    
        <h1>Contacten</h1>
        <ul class="info">
           <li> <div class="geo icon"> </div><p>2 Broekhuizerlaan, 3956 NS Leersum, Nederland</p></li>
           <li> <div class="phone icon"> </div><p ><a class="guid" href="tel:+31343745858">+31 343-745858</a></p></li>
           <li> <div class="letter icon"> </div><p ><a class="guid" href="mailto:wessels.berendina0103@gmail.com">wessels.berendina0103@gmail.com</a></p></li>
        </ul>

  
        <form class="form" action="" method="post" name="form" autocomplete="off">
            <div class="inputs">
              <input class="form__input input" type="text" name="text" id="text" placeholder="Naam" required>
              <input class="form__input input" type="email" name="email" id="email" placeholder="Mail" required>
            </div>
            <button class="form__button but" type="submit">Versturen</button>
          </form>

          <div class="map">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1252367.6541382596!2d2.782259846768413!3d52.18831695496593!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c609c3db87e4bb%3A0xb3a175ceffbd0a9f!2z0J3QuNC00LXRgNC70LDQvdC00Ys!5e0!3m2!1sru!2sua!4v1728479281497!5m2!1sru!2sua" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
    
        </section>
    </main>
    <?php require "footer.php"?>
