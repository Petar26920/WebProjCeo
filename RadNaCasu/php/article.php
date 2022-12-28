<div class="row"><!-- otvoren red za thumnails -->

    <div class="col-sm-6 col-md-4">
      <div class="thumbnail">
        <h3>Proizvod 1</h3>
        <img src="img/slika1.jpg" alt="...">
        <div class="caption">
          <p>Ovde napisati najvažnije informacije o proizvodu...</p>

          <!-- modal na button klik -->
          <button type="button" class="btn btn-info" data-toggle="modal" data-target=".bs-example-modal-lg">Pogledajte &rarr;</button> 
          <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
            <div class="modal-dialog modal-lg" role="document">
              <div class="modal-content">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                  consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                  cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
              </div>
            </div>
          </div> <!-- kraj modal elementa -->

        </div>
      </div>
    </div>

    <div class="col-sm-6 col-md-4">
      <div class="thumbnail">
        <h3>Proizvod 2</h3>
        <!-- tooltip element -->
        <img data-toggle="tooltip" data-placement="top" title="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat." src="img/slika1.jpg" alt="...">
        <div class="caption">
          <p>Ovde napisati najvažnije informacije o proizvodu...</p>
          <p><a href="#" class="btn btn-info" role="button">Pogledajte &rarr;</a></p>
        </div>
      </div>
    </div>
    
    <div class="col-sm-6 col-md-4"> <!-- modal na klik na sliku -->
      <div class="thumbnail">
        <h3>Proizvod 3</h3>
        <img src="img/slika1.jpg" alt="" data-toggle="modal" data-target="#Modal">
        <div class="caption">
         <p>Ovde napisati najvažnije informacije o proizvodu...</p>
         <p><a href="#" class="btn btn-info" role="button">Pogledajte &rarr;</a></p>
       </div>
     </div>
   </div>
   <!-- modal okvir -->

   <!-- Modal -->
   <div class="modal fade" id="Modal" tabindex="-1" role="dialog" aria-labelledby="ModalOkvir" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h3 class="modal-title" id="ModalOkvir">Opis slike</h3>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ullam nemo tempore deserunt corporis explicabo
          expedita? Error, molestiae accusamus sint eveniet placeat perferendis minus. Veniam repudiandae nisi numquam
          consectetur, debitis hic quaerat, illum distinctio obcaecati soluta tempore totam accusamus eligendi ipsum
          vel quos placeat quo a. Qui commodi saepe sint illo?
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-info" data-dismiss="modal">Zatvori</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Kraj Modala -->
</div><!-- zatvoren red za thumbnails -->