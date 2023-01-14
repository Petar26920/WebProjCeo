<form class="prodavnica" id="proizvodi">  <!-- otvaramo formu prodavnice a zatvaramo je pre footera -->
 <div class="row"><!-- otvoren red za thumnails -->
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <h3>Proizvod 1</h3>
      <img src="img/slika1.jpg" alt="...">
      <div class="caption">
        <p>Ovde napisati najvažnije informacije o proizvodu...</p>
        <p>Cena:<strong> 10 </strong><span class="glyphicon glyphicon-eur" aria-hidden="true"></span></p>
        <label for="jedan"></label><input type="text" id="jedan" size="3" placeholder="0">
      </div>
    </div>
  </div>
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <h3>Proizvod 2</h3>
      <img src="img/slika1.jpg" alt="...">
      <div class="caption">
        <p>Ovde napisati najvažnije informacije o proizvodu...</p>
        <p>Cena:<strong> 8 </strong><span class="glyphicon glyphicon-eur" aria-hidden="true"></span></p>
        <label for="dva"></label><input type="text" id="dva" size="3" placeholder="0">
      </div>
    </div>
  </div>
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <h3>Proizvod 3</h3>
      <img src="img/slika1.jpg" alt="...">
      <div class="caption">
        <p>Ovde napisati najvažnije informacije o proizvodu...</p>
        <p>Cena<strong> 10 </strong><span class="glyphicon glyphicon-eur" aria-hidden="true"></span></p>
        <label for="tri"></label><input type="text" id="tri" size="3" placeholder="0">
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-md-12">
    <div id="detalji">
      <h2>Detalji narudžbenice:</h2>  
      <div class="grad"> 
        <label for="s-grad">Izaberite grad za isporuku:</label>
        <select id="s-grad">
          <option value="">-- IZABERITE --</option>
          <option value="BG">Beograd</option>
          <option value="NS">Novi Sad</option>
          <option value="DR">Nešto drugo (20% pdv primera radi)</option>
          <option value="PA">Pančevo</option>
        </select>
      </div> 
      <div class="grupa metoda"> 
        <label for="r-metod-preuzimanje">Način isporuke:</label><br>
        <input type="radio" value="preuzimanje" name="r_method" id="r-metod-preuzimanje" checked><label for="r-metod-preuzimanje">Lično preuzimanje (besplatno)</label><br> 
        <input type="radio" value="kompanijski" name="r_method" id="r-metod-kompanijski"><label for="r-metod-kompanijski">Kompanijski prevoz (2 eura po proizvodu)</label><br>
        <input type="radio" value="postexpres" name="r_method" id="r-metod-postexpres"><label for="r-metod-postexpres">Post expres (3 eura po proizvodu)</label>
      </div>
      <div class="grupa izracunavanja"> 
        <p> 
          <label for="btn-izracunaj">Izračunaj ukupno: </label>
          <input type="submit" value="Ukupan iznos" id="btn-izracunaj">
          <input type="text" id="txt-izracunaj" placeholder="0.00 eura">
        </p>
        <div id="rezultati">
        </div> 
      </div>
    </div>
  </div>
</div>
</form>