    <!-- ########## START: MAIN PANEL ########## -->
    <div class="br-mainpanel">
      <div class="pd-30">
        <h4 class="tx-gray-800 mg-b-5"><?php echo ucfirst(str_replace('_', ' ', $this->uri->segment(2))); ?></h4>
        <p class="mg-b-0"><?php echo subtitle(); ?></p>
        <hr>
      </div><!-- d-flex -->

      <div class="br-pagebody mg-t-0 pd-x-30">
        <?php if(isset($_SESSION['flashdata'])): ?>
        <div id="alert-box"><?php echo $_SESSION['flashdata']; ?></div>
        <?php endif; ?>

          <form class="form-layout form-layout-2" action="<?php echo base_url(); ?>panel/<?php echo $this->uri->segment(2); ?>/action/<?php echo $this->uri->segment(4) . '/' . $this->uri->segment(2); ?>/<?php echo @$value->id; ?>" method="post"  enctype="multipart/form-data">

            <div class="row no-gutters">
                <div class="col-md">
                    <div class="row"> 
                        <div class="col-md-12 pr-0">
                            <div class="form-group">
                                <label class="form-control-label">Tytuł: <span class="tx-danger">*</span></label>
                                <input class="form-control" type="text" name="title" value="<?php echo @$value->title; ?>" required>
                            </div>
                        </div>
                        <div class="col-md-12 pr-0">
                            <div class="form-group bd-t-0-force">
                                <label class="form-control-label">Stanowisko: </label>
                                <input class="form-control" type="text" name="work_place" value="<?php echo @$value->work_place; ?>" required>
                            </div>
                        </div>
                        <div class="col-md-12 pr-0">
                            <div class="form-group bd-t-0-force">
                                <label class="form-control-label">Miejsce pracy: </label>
                                <input class="form-control" type="text" name="city" value="<?php echo @$value->city; ?>" required>
                            </div>
                        </div>
                        <div class="col-md-12 pr-0">
                            <div class="form-group bd-t-0-force">
                                <label class="form-control-label">Oferujemy: </label>
                                <input class="form-control" type="text" name="description" value="<?php echo @$value->description; ?>" required>
                            </div>
                        </div>
                        <div class="col-md-12 pr-0">
                            <div class="form-group bd-t-0-force">
                                <label class="form-control-label">Tytuł formularza: </label>
                                <input class="form-control" type="text" name="form_title" value="<?php echo @$value->form_title; ?>" required>
                            </div>
                        </div>
                        <div class="col-md-12 pr-0">
                            <div class="form-group bd-t-0-force">
                                <label class="form-control-label">Imię i nazwisko (formularz): </label>
                                <input class="form-control" type="text" name="name" value="<?php echo @$value->name; ?>" required>
                            </div>
                        </div>
                        <div class="col-md-12 pr-0">
                            <div class="form-group bd-t-0-force">
                                <label class="form-control-label">Adres E-mail (formularz): </label>
                                <input class="form-control" type="text" name="email" value="<?php echo @$value->email; ?>" required>
                            </div>
                        </div>
                        <div class="col-md-12 pr-0">
                            <div class="form-group bd-t-0-force">
                                <label class="form-control-label">Numer telefonu (formularz): </label>
                                <input class="form-control" type="text" name="phone" value="<?php echo @$value->phone; ?>" required>
                            </div>
                        </div>
                        <div class="col-md-12 pr-0">
                            <div class="form-group bd-t-0-force">
                                <label class="form-control-label">Stanowisko (formularz): </label>
                                <input class="form-control" type="text" name="form_work_place" value="<?php echo @$value->form_work_place; ?>" required>
                            </div>
                        </div>
                        <div class="col-md-12 pr-0">
                            <div class="form-group bd-t-0-force">
                                <label class="form-control-label">Miejsce pracy (formularz): </label>
                                <input class="form-control" type="text" name="form_city" value="<?php echo @$value->form_city; ?>" required>
                            </div>
                        </div>
                        <div class="col-md-12 pr-0">
                            <div class="form-group bd-t-0-force">
                                <label class="form-control-label">Wiadomość (formularz): </label>
                                <input class="form-control" type="text" name="message" value="<?php echo @$value->message; ?>" required>
                            </div>
                        </div>
                        <div class="col-md-12 pr-0">
                            <div class="form-group bd-t-0-force">
                                <label class="form-control-label">Napis na przycisku CV: </label>
                                <input class="form-control" type="text" name="cv_button_name" value="<?php echo @$value->cv_button_name; ?>" required>
                            </div>
                        </div>
                        <div class="col-md-12 pr-0">
                            <div class="form-group bd-t-0-force">
                                <label class="form-control-label">Napis na przycisku wysyłającym: </label>
                                <input class="form-control" type="text" name="submit_button_name" value="<?php echo @$value->submit_button_name; ?>" required>
                            </div>
                        </div>
                        
                    </div> 
                    
                   
                    <div class="row">
                        <div class="col-md-12 pr-0">
                            <div class="form-layout-footer bd pd-20 bd-t-0-force">
                                <button class="btn btn-info" type="submit">Zapisz</button>
                                <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Anuluj</button>
                            </div><!-- form-group -->
                        </div>
                    </div>
                </div>
                
            </div><!-- row -->
          </form><!-- form-layout -->