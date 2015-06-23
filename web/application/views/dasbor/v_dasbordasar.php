    <?php
        $msg = $this->session->userdata('msg');
    ?>

    <div class="container">
        <div class="row">
            <div class="span12">
                <div class="alert alert-info">
                    <h3>Halaman Pengaturan Dasar </h3> 
                    <h4>Pada halaman ini anda bisa mengganti video utama pada halaman depan, mengisi informasi komunitas serta kontak yang bisa dihubungi.</h4>
                </div>
            </div>
            <div class="span6">
                <div class="widget">
                    <div class="widget-header">
                        <i class="icon-book"></i>
                        <h3> Tentang EH Surabaya </h3>
                    </div>
                    <div class="widget-content">
                        <?php if($msg['state'] && $msg['element']=='tentang') {
                            if ($msg['status'] == 'success') {?>
                            <div class="alert alert-success">
                                <button type="button" class="close" data-dismiss="alert">&times;</button>
                                <strong><?php echo $msg['title']; ?> </strong><?php echo $msg['content']; ?>
                            </div>
                            <?php } else if ($msg['status'] == 'failed'){?>
                            <div class="alert alert-danger">
                                <button type="button" class="close" data-dismiss="alert">&times;</button>
                                <strong><?php echo $msg['title']; ?> </strong><?php echo $msg['content']; ?>
                            </div>
                        <?php } }  ?>
                        <form id="tentang_f" class="form-default" action="<?php echo site_url('dasbor/updatedes'); ?>" method="POST">
                            <fieldset>
                            <div class="control-group">
                                <div class="controls"> 
                                    <textarea class="form-control" rows="5" id="tentang" name="tentang"><?php echo $deskripsi; ?></textarea>
                                </div>
                                <div class="form-actions">
                                    <input type="hidden" name="yap" value="1">
                                    <button onclick="konfirmTentang(); return false;" class="btn btn-primary"><i class="icon-ok"></i> Simpan</button>
                                </div>
                            </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
                <div class="widget">
                    <div class="widget-header">
                        <i class="icon-play-circle"></i>
                        <h3> Video Utama </h3>
                    </div>
                    <div class="widget-content">
                        <form class="form-default">
                            <fieldset>
                            <div class="control-group">
                                <label class="control-label" for="videoutama">Unggah Video</label>
                                <div class="controls">
									<input class="span5" type="file" name="videoutama" id="videoutama">
                                </div>
								<?php //echo $error;?>
								<?php //echo form_open_multipart('upload/do_upload');?>
                                
								<div class="form-actions">
                                    <button type="submit" class="btn btn-primary"><i class="icon-ok"></i> Unggah</button>
                                </div>
                            
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
            <div class="span6">
                <div class="widget">
                    <div class="widget-header">
                        <i class="icon-search"></i>
                        <h3> Kontak EH Surabaya </h3>
                    </div>
                    <div class="widget-content">
                        <?php if($msg['state'] && $msg['element']=='kontak') {
                            if ($msg['status'] == 'success') {?>
                            <div class="alert alert-success">
                                <button type="button" class="close" data-dismiss="alert">&times;</button>
                                <strong><?php echo $msg['title']; ?> </strong><?php echo $msg['content']; ?>
                            </div>
                            <?php } else if ($msg['status'] == 'failed'){?>
                            <div class="alert alert-danger">
                                <button type="button" class="close" data-dismiss="alert">&times;</button>
                                <strong><?php echo $msg['title']; ?> </strong><?php echo $msg['content']; ?>
                            </div>
                        <?php } }  ?>
                        <form id="kontak_f" class="form-inline" action="<?php echo site_url('dasbor/updatekon'); ?>" method="POST">
                            <fieldset>
                            <div class="control-group  span5">
                                <div class="controls"> 
                                    <div class="input-prepend">
                                        <span class="add-on"><i class="icon-envelope"></i></span>
                                        <input class="span4" type="email" name="email" id="email" placeholder="Alamat Email (contoh: user@email.com)" value="<?php echo $kontak['email']; ?>">
                                    </div>
                                    <div class="input-prepend">
                                        <span class="add-on"><i class="icon-phone"></i></span>
                                        <input class="span4" type="text" name="telepon" id="telepon" placeholder="No. Telepon (contoh: +6281765888xx)" value="<?php echo $kontak['telp']; ?>">
                                    </div>
                                    <div class="input-prepend">
                                        <span class="add-on"><i class="icon-facebook"></i></span>
                                        <input class="span4" type="text" name="facebook" id="facebook" placeholder="Facebook (contoh: https://www.facebook.com/akunku)" value="<?php echo $kontak['facebook']; ?>">
                                    </div>
                                    <div class="input-prepend">
                                        <span class="add-on"><i class="icon-twitter"></i></span>
                                        <input class="span4" type="text" name="twitter" id="twitter" placeholder="Twitter (contoh: https://twitter.com/akunku)" value="<?php echo $kontak['twitter']; ?>">
                                    </div>
                                    <div class="input-prepend">
                                        <span class="add-on"><i class="icon-google-plus"></i></span>
                                        <input class="span4" type="text" name="gplus" id="gplus" placeholder="Google+ (contoh: https://plus.google.com/+Akunku)" value="<?php echo $kontak['gplus']; ?>">
                                    </div>
                                    <div class="input-prepend">
                                        <span class="add-on"><i class="icon-pinterest"></i></span>
                                        <input class="span4" type="text" name="pinterest" id="pinterest" placeholder="Pinterest (contoh: https://pinterest.com/akunku)" value="<?php echo $kontak['pinterest']; ?>">
                                    </div>
                                    <div class="input-prepend">
                                        <span class="add-on"><i class="icon-camera-retro"></i></span>
                                        <input class="span4" type="text" name="instagram" id="instagram" placeholder="Instagram (contoh: https://instagram.com/akunku)" value="<?php echo $kontak['instagram']; ?>">
                                    </div>
                                    <div class="input-prepend">
                                        <span class="add-on"><i class="icon-home"></i></span>
                                        <input class="span4" type="text" name="alamat" id="alamat" placeholder="Alamat Kantor" value="<?php echo $kontak['alamat']; ?>">
                                    </div>
                                </div>
                                <div class="form-actions">
                                    <input type="hidden" name="yap" value="1">
                                    <button onclick="konfirmKontak(); return false;" class="btn btn-primary"><i class="icon-ok"></i> Simpan</button>
                                </div>
                            </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Modal -->
    <div id="konfirmModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="konfirmModalLabel" aria-hidden="true">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h3 id="konfirmModalLabel"></h3>
        </div>
        <div class="modal-body" id="konfirmModalBody">
        </div>
        <div class="modal-footer">
            <button class="btn btn-danger" data-dismiss="modal" aria-hidden="true" id="konfirmModalBtnRed"></button>
            <button class="btn btn-primary" id="konfirmModalBtnBlue"></button>
        </div>
    </div>
    <!-- /Modal -->

    <script>
        CKEDITOR.replace('tentang');

        function konfirmTentang(){
            document.getElementById('konfirmModalLabel').innerHTML = 'Konfirmasi Simpan Perubahan';
            document.getElementById('konfirmModalBody').innerHTML = '<p>Apakah anda yakin ingin menyimpan perubahan yang terjadi pada informasi <strong>"Tentang EH Surabaya"</strong>?</p>';
            document.getElementById('konfirmModalBtnRed').innerHTML = 'Batal';
            document.getElementById('konfirmModalBtnBlue').innerHTML = 'Ya. Simpan Perubahan';
            document.getElementById('konfirmModalBtnBlue').onclick = function() {document.getElementById('tentang_f').submit();};
            $('#konfirmModal').modal({show: 'true', backdrop: 'static'});
        }

        function konfirmKontak(){
            document.getElementById('konfirmModalLabel').innerHTML = 'Konfirmasi Simpan Perubahan';
            document.getElementById('konfirmModalBody').innerHTML = '<p>Apakah anda yakin ingin menyimpan perubahan yang terjadi pada informasi <strong>"Kontak EH Surabaya"</strong>?</p>';
            document.getElementById('konfirmModalBtnRed').innerHTML = 'Batal';
            document.getElementById('konfirmModalBtnBlue').innerHTML = 'Ya. Simpan Perubahan';
            document.getElementById('konfirmModalBtnBlue').onclick = function() {document.getElementById('kontak_f').submit();};
            $('#konfirmModal').modal({show: 'true', backdrop: 'static'});
        }
    </script>