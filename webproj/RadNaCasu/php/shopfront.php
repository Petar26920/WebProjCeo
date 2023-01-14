<div class="page-header">
  <h2>Shop </h2>
</div>
<form action="php/order.php" method="post">  <!-- otvaramo formu prodavnice a zatvaramo je pre footera -->
 <div class="row"><!-- otvoren red za thumnails -->
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <h3>Proizvod 1</h3>
      <img src="img/slika7.jpg" alt="...">
      <div class="caption">
        <p>Ovde napisati najvažnije informacije o proizvodu...</p>
        <p>Cena<strong> 1.100,00 </strong></p>
        <label for="jedan"></label><input type="text" id="jedan" name="kolicina1" size="3" placeholder="0">
      </div>
    </div>
  </div>
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <h3>Proizvod 2</h3>
      <img src="img/slika8.jpg" alt="...">
      <div class="caption">
        <p>Ovde napisati najvažnije informacije o proizvodu...</p>
        <p>Cena<strong> 1.500,00 </strong></p>
        <label for="dva"></label><input type="text" id="dva" name="kolicina2" size="3" placeholder="0">
      </div>
    </div>
  </div>
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <h3>Proizvod 3</h3>
      <img src="img/slika9.jpg" alt="...">
      <div class="caption">
        <p>Ovde napisati najvažnije informacije o proizvodu...</p>
        <p>Cena<strong> 1.900,00 </strong></p>
        <label for="tri"></label><input type="text" id="tri" name="kolicina3" size="3" placeholder="0">
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-md-12">
    <tr>
      <td>Adresa za isporuku</td>
      <td align=center> <input type="text" name="adresa" size=40 maxlength=40></td>
    </tr>
    <input type="submit" value="Poruci"> 
  </div>
</div>
</form>