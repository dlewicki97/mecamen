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
                <div class="col-md-8">
                    <div class="row"> <!-- set -->
                        <div class="col-md-6 pr-0">
                            <div class="form-group">
                                <label class="form-control-label">Tytuł: <span class="tx-danger">*</span></label>
                                <input class="form-control" type="text" name="title" value="<?php echo @$value->title; ?>" required>
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-md-6 px-0">
                            <div class="form-group bd-l-0-force bd-r-0-force">
                                <label class="form-control-label">Napis na przycisku:</label>
                                <input class="form-control" type="text" name="button_name" value="<?php echo @$value->button_name; ?>">
                            </div>
                        </div><!-- col-4 -->
                    </div> <!-- set -->
                    <div class="row"> <!-- set -->
                        <div class="col-md-12 pr-0">
                            <div class="form-group bd-t-0-force bd-b-0-force bd-r-0-force">
                                <label class="form-control-label">Link przycisku:</label>
                                <input class="form-control" type="text" name="link" value="<?php echo @$value->link; ?>">
                            </div>
                        </div><!-- col-4 -->
                    </div> <!-- set -->
                    <div class="row">
                        <div class="col-md-12 pr-0">
                            <div class="form-layout-footer bd pd-20 bd-r-0-force">
                                <button class="btn btn-info" type="submit">Zapisz</button>
                                <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Anuluj</button>
                            </div><!-- form-group -->
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="col-md-12">
                        <div id="photoViewer_1" class="form-group  text-center delete_photo cursor" onclick="clear_box(1);">
                            <?php if(@$value->photo != '') {
                                echo '<img class="img-fluid img-thumbnail" src="' . base_url() . 'uploads/' . @$value->photo . '" width=75%>';
                            } else {
                                echo '<img class="img-fluid img-thumbnail" src="http://via.placeholder.com/64x64" alt="">';
                            } ?>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group  bd-t-0-force ">
                            <label class="form-control-label">Zdjęcie:</label>
                            <input type="hidden" id="name_photo_1" name="name_photo_1">
                            <button type="button" class="btn btn-info white w-100" onclick="openModal(1);">Dodaj</button>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div id="photoViewer_1" class="form-group bd-b-0-force   bd-t-0-force ">
                            <label class="form-control-label">Tekst alternatywny zdjęcia:</label>
                            <input class="form-control" type="text" name="alt" value="<?php echo @$value->alt; ?>">
                        </div>
                    </div>
                    <?php if(empty(@$video)):?>
                    <div class="col-md-12">
                        <div class="form-group <?php if(!empty(@$video)) echo 'bd-b-0-force' ?>  ">
                            <label id="infoFile" class="form-control-label"></label>
                            <label class="form-control-label">Film:</label>
                            <label class="custom-file">
                                <input multiple type="file" id="video" class="custom-file-input" name="video" onchange="uploadFile();">
                                <span class="custom-file-control custom-file-control-inverse"></span>
                            </label>
                        </div>
                    </div><!-- col-12 -->
                <?php endif; ?>
                    <?php if(!empty(@$video)):?>
                        <div class="col-md-12">
                            <div class="form-group ">
                                <label class="form-control-label mb-0">Wrzucony film:
                                    <div class="d-flex align-items-end mt-2">
                                        <div class="d-flex flex-column align-items-center  mr-2">
                                            <?php
                                            $full_path = explode('/', $video[0]->full_path);
                                            $path = $full_path[count($full_path) - 2] . '/'. $full_path[count($full_path) - 1];
                                            ?>
                                            <!-- <a target="_blank" href="<?php echo base_url(); ?>uploads/<?php echo $path ?>"><i class="fas fa-file-download fa-3x tx-black"></i></a> -->
                                            <video controls width="100%" height="100%" src="<?php echo base_url(); ?>uploads/<?php echo $path ?>"></video>
                                            <p style="cursor: pointer" class="tx-danger mb-0 mt-1" onclick="deleteVideo('<?= $video[0]->id ?>')">Usuń</p>
                                        </div>
                                    </div>
                                </label>
                            </div>
                        </div>
                    <?php endif; ?>
                    
                </div>
            </div><!-- row -->
            <?php $this->load->view('back/forms/double_modal'); ?>
          </form><!-- form-layout -->

          <script>
        function uploadFile() {
            document.getElementById('infoFile').innerHTML = '<span class="text-center"><i class="fas fa-spinner fa-pulse loader"></i></span>';
            setTimeout(function(){
                document.getElementById('infoFile').innerHTML = '<span class="text-success"><i class="fas fa-check"></i> Plik został przygotowany do wysłania</span>';
            }, 200);
        }
        function deleteVideo(id) {
            if(!confirm('Czy na pewno usunąć film?')) return;
            $.ajax({
                type: "post",
                url:"<?php echo base_url(); ?>panel/slider/delete_video",
                data: {id:id},
                cache: false,
                complete: function(html) {
                    location.reload();
                }
            });
        }
    </script>