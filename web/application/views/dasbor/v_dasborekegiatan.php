<div class="container">
    <div class="row">
        <div class="span12">
            <div class="alert alert-info">
                <h3>Halaman Sunting Kegiatan </h3> 
                <h4>Pada halaman ini anda bisa menyunting detail kegiatan.</h4>
            </div>
        </div>
        <div class="span12">
            <div class="widget">
                <div class="widget-header">
                    <i class="icon-pencil"></i>
                    <h3> SUNTING KEGIATAN: <?php echo $nama; ?> </h3>
                </div>
                <div class="widget-content">
                    <form id="suntingKegiatan_f" role="form" class="form-default" action="<?php echo site_url('dasbor/updatekeg'); ?>" method="post" enctype="multipart/form-data">
                        <fieldset>
                            <div class="control-group">
                                <div class="span10">
                                    <label class="control-label" for="NamaKegiatan"><strong>Nama Kegiatan</strong></label>
                                    <div class="controls">
                                        <input type="text" class="span8" id="NamaKegiatan" name="NamaKegiatan" placeholder="Nama Kegiatan" value="<?php echo $nama; ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="control-group">
                                <div class="span4">
                                    <label class="control-label" for="TanggalMulai"><strong>Tanggal Mulai</strong></label>
                                    <div class="controls">
                                        <input type="text" class="span2" id="TanggalMulai" name="TanggalMulai" placeholder="Tanggal Mulai" value="<?php echo $mulai; ?>">
                                    </div>
                                    <script type="text/javascript"> // When the document is ready
                              $(document).ready(function () {                                                
                                $('#TanggalMulai').datepicker({
                                  format: "dd/mm/yyyy"
                                });  
                              });
                            </script>
                                </div>
                                <div class="span4">
                                    <label class="control-label" for="TanggalSelesai"><strong>Tanggal Selesai</strong></label>
                                <div class="controls">
                                    <input type="datetime" class="span2" id="TanggalSelesai" name="TanggalSelesai" placeholder="Tanggal Selesai" value="<?php echo $selesai; ?>">
                                </div>
                                </div>
                                <script type="text/javascript"> // When the document is ready
                              $(document).ready(function () {                                                
                                $('#TanggalSelesai').datepicker({
                                  format: "dd/mm/yyyy"
                                });  
                              });
                            </script>                            
                            </div>
                            
                            
                            
                            <div class="control-group">
                            </div>
                                
                            <div class="control-group">
                                <div class="span11">
                                    <label class="control-label" for="Deskripsi"><strong>Deskripsi</strong></label>
                                    <div class="controls">
                                        <textarea class="form-control" id="deskripsi" name="deskripsi"><?php echo $des; ?></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="control-group">
                                <div class="span11">
                                    <label class="control-label" for="Deskripsi">&nbsp;</label>
                                    <div class="accordion" id="gambar">
                                        <div class="accordion-group">
                                            <div class="accordion-heading">
                                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#gambar" href="#gambarkegiatan">Daftar Gambar Kegiatan</a>
                                            </div>
                                            <div class="accordion-body collapse in" id="gambarkegiatan">
                                                <div class="accordion-inner">
                                                    
                                                            <div class="form-actions">  
                                                                <label class="control-label">Tambah Gambar Baru: </label>
                                                                <input type="file" id="gambar" name="gambar[]" multiple>                                                                          
                                                            </div>
                                                    <?php 
                                                        if ($gambarnum==0) echo "Belum ada gambar.";
                                                        for ($i = 0; $i < $gambarnum; $i+=5) {
                                                    ?>
                                                    <div class="row" style="margin:2% 0%;">
                                                        <?php for ($j = $i; $j < $gambarnum; $j++) { 
                                                            if ($j == $i+5) break;
                                                            $judul = explode(".", $gambar[$j]['judul']);
                                                        ?>
                                                        <div class="span2">
                                                            <div class="thumbnail thumbnail-event">
                                                                <div class="control">
                                                                    <a href="#" title="hapus gambar" onclick="konfirmHapusGam(<?php echo $gambar[$j]['id']?>); return false;"><img src="<?php echo base_url('assets/images/icons/close_circle.png'); ?>"></a>
                                                                    <a href="#" title="edit detail gambar" onclick="editGambar('<?php echo $gambar[$j]['id']; ?>', '<?php echo $gambar[$j]['judul']; ?>', '<?php echo $gambar[$j]['deskripsi']; ?>'); return false;"><img src="<?php echo base_url('assets/images/icons/edit_circle.png'); ?>"></a>
                                                                </div>
                                                                <img src="data:image/jpeg;base64, <?php echo base64_encode($gambar[$j]['data']); ?>">
                                                                
                                                                    <p><strong>Judul: </strong><br><?php echo $judul[0]; ?></p>
                                                                    <p><strong>Deskripsi: </strong><br><?php echo substr($gambar[$j]['deskripsi'],0,25).'...'; ?></p>
                                                                
                                                            </div>
                                                        </div>
                                                        <?php } ?>
                                                    </div>
                                                    <?php } ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                        <fieldset>
                            <div class="form-group">
                                <div class="span11">
                                    <div class="form-actions">
                                        <input type="hidden" name="id" id="id" value="<?php echo $id; ?>">
                                        <a class="btn btn-danger" onclick="konfirmKembali(); return false;"><i class="icon-chevron-left"></i> Kembali</a>
                                        <button class="btn btn-primary" onclick="konfirmSimpan(); return false;"><i class="icon-ok"></i> Simpan</button>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<form id="deleteForm" action="<?php echo site_url('dasbor/delgambar'); ?>" method="POST">
    <input type="hidden" name="iddelgambar" id="iddelgambar">
</form>

<!-- form edit gambar -->
<div id="editGambarModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="editGambarModalLabel" aria-hidden="true">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3 id="editGambarModalLabel">Edit Detail Gambar</h3>
    </div>
    <div class="modal-body" id="editGambarModalBody">
    <form role="form" class="form-default" id="editGambar_f" action="<?php echo site_url('dasbor/updateGambar'); ?>" method="POST">
        <fieldset>        
            <div class="control-group">
                <div class="span5">
                    <label class="control-label" for="judulGambar"><strong>Judul Gambar</strong></label>
                    <div class="controls">
                        <input type="text"id="judulGambar" class="span5" name="judulGambar" placeholder="Judul Gambar">
                    </div>
                </div>
            </div>
            <div class="control-group">
                <div class="span5">
                    <label class="control-label" for="deskripsiGambar"><strong>Deskripsi Gambar</strong></label>
                    <div class="controls">
                        <textarea rows="10" id="deskripsiGambar" class="span5" name="deskripsiGambar" placeholder="Deskripsi Gambar"></textarea>
                    </div>
                </div>
            </div>
        </fieldset>
    </div>
    <div class="modal-footer">
        <fieldset>
            <div class="form-group">
                <div class="span5">
                        <input type="hidden" name="idGambar" id="idGambar_edit">
                        <input type="hidden" name="look" id="look" value="<?php echo $id; ?>">
                        <button class="btn btn-danger" data-dismiss="modal" aria-hidden="true" id="editGambarModalBtnRed">Batal</button>
                        <button class="btn btn-primary" id="editGambarModalBtnBlue" onclick="document.getElementById('editGambar_f').submit(); return false;">Simpan Perubahan</button>
                </div>
            </div>
        </fieldset>
    </form>
    </div>
</div>
<!-- /form edit gambar -->

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
    CKEDITOR.replace('deskripsi');
    CKEDITOR.instances.deskripsi.config.height = 500;

    function doDelete(id){
        form = document.getElementById('deleteForm');
        elem = form.elements['iddelgambar'];
        elem.value = id;
        form.submit();
    }
    
    function konfirmSimpan(){
        document.getElementById('konfirmModalLabel').innerHTML = 'Konfirmasi Penyimpanan Perubahan Detail Kegiatan';
        document.getElementById('konfirmModalBody').innerHTML = '<p>Pastikan data yang anda masukkan sudah benar! Jika ingin membatalkan aksi ini silakan tekan tombol Batal.</p><p>Apakah anda yakin ingin menyimpan perubahan pada kegiatan tersebut?</p>';
        document.getElementById('konfirmModalBtnRed').innerHTML = 'Batal';
        document.getElementById('konfirmModalBtnBlue').innerHTML = 'Ya. Simpan Perubahan';
        document.getElementById('konfirmModalBtnBlue').onclick = function() {document.getElementById('suntingKegiatan_f').submit();};
        $('#konfirmModal').modal({show: 'true', backdrop: 'static'});
    }
    
    function konfirmKembali(){
        document.getElementById('konfirmModalLabel').innerHTML = 'Konfirmasi Pindah Halaman';
        document.getElementById('konfirmModalBody').innerHTML = '<p>Aksi ini akan mengarahkan anda ke halaman daftar kegiatan dan segala perubahan pada halaman ini tidak akan tersimpan.</p><p>Apakah anda yakin ingin melanjutkan aksi ini?</p>';
        document.getElementById('konfirmModalBtnRed').innerHTML = 'Batal';
        document.getElementById('konfirmModalBtnBlue').innerHTML = 'Ya. Lanjutkan';
        document.getElementById('konfirmModalBtnBlue').onclick = function() {location.href = "<?php echo site_url('dasbor/kegiatan'); ?>";};
        $('#konfirmModal').modal({show: 'true', backdrop: 'static'});  
    }
    
    function konfirmHapusGam(id){
        document.getElementById('konfirmModalLabel').innerHTML = 'Konfirmasi Hapus Gambar';
        document.getElementById('konfirmModalBody').innerHTML = '<p>Aksi ini akan menghapus gambar secara permanen dan tidak bisa dikembalikan.</p><p>Apakah anda yakin ingin menghapus gambar tersebut?</p>';
        document.getElementById('konfirmModalBtnRed').innerHTML = 'Batal';
        document.getElementById('konfirmModalBtnBlue').innerHTML = 'Ya. Hapus Gambar';
        document.getElementById('konfirmModalBtnBlue').onclick = function() {doDelete(id);};
        $('#konfirmModal').modal({show: 'true', backdrop: 'static'}); 
    }

    function editGambar(i, j, d){
        f = document.getElementById('editGambar_f');
        document.getElementById('idGambar_edit').value = i;
        document.getElementById('judulGambar').value = j;
        document.getElementById('deskripsiGambar').innerHTML = d;
        $('#editGambarModal').modal({show: 'true', backdrop: 'static'}); 
    }
</script>