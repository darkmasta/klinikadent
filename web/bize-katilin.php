<!DOCTYPE html>
<html>
	 <head>
		 <title>Klinika</title>
	 	 <?php require('inc/common_head.php'); ?>
	 </head>
<body>
  <div id="page">


    <?php require('inc/header.php'); ?>
    

    <div class="content">

      <h1 class="main-header">INSAN KAYNAKLARI BASVURU FORMU</h1>


      <div class="form-content">
        <h2 class="randevu-header">Kisisel Bilgileriniz</h2>

        <div class="personal-information-form">
            <label>BASVURULAN POZISYON*</label>

            <select id="">
              <option value="Merkez Sancaktepe">Merkez Sancaktepe</option>
              <option value="Merkez Sancaktepe">Merkez Sancaktepe</option>
            </select>


            <label>BASVURULAN SUBEMIZ*</label>

            <select id="">
              <option value="Merkez Sancaktepe">Merkez Sancaktepe</option>
              <option value="Merkez Sancaktepe">Merkez Sancaktepe</option>
            </select>

            <div class="input-area" id="first">
              <label>ADINIZ*</label>
              <input type="text">
            </div>

            <div class="input-area">
              <label>SOYADINIZ*</label>
              <input type="text">
            </div>

            <div class="input-area">
              <label>EMAIL ADRESINIZ*</label>
              <input type="text">
            </div>

            <div class="input-area">
              <label>TELEFON NUMARANIZ*</label>
              <input type="text">
            </div>
        </div>

        
        <label>CV'NIZI YUKLEYINIZ*</label>
        <button id="cv-button">DOSYA SEC</button>
        <input id="hidden-upload" type="file"></input>
        <button id="submit-job">BASVURUYU TAMAMLA</button>

      </div>

      
      <div class="contact-content">
        <h2>BIZE ULASIN</h2>

        <div class="contact-box">

          <div class="contact-logo" id="whatsapp-icon">
          </div>

          <div class="contact-info">
            <p class="contact-phone">WhatsApp'la Online Basvuru!</p>
            <h3 id="whatsapp-number">0 (532) 428 21 40</h3>
            <p>WhatsApp'tan yazin aninda cevap alin!</p>
          </div>

        </div>

        <div class="contact-box">

          <div class="contact-logo" id="phone-icon">
          </div>

          <div class="contact-info">
            <h3>Telefon</h3>
            <p class="contact-phone">+90 (212) 36502 04-62 (merkez)</p>
            <p class="contact-phone">+90 (212) 312 77 70-71 (tasdelen)</p>
            <p>Randevu almak icin bizi arayin!</p>
          </div>

        </div>

        <div class="contact-box">

          <div class="contact-logo" id="email-icon">
          </div>

          <div class="contact-info">
            <h3>E-mail</h3>
            <p class="contact-phone" id="contact-email">info@klinikadent.com</p>
            <p>Bize ulasin!</p>
          </div>

        </div>
      </div>
       

    </div>

    <?php require('inc/footer.php') ?>

  </div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="js/bize-katilin.js"></script>
</body>
</html> 
