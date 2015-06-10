<div class="container">
    <div class="row">
        <div class="span12">
            <div class="widget">
                <div class="widget-header">
                    <i class="icon-pencil"></i>
                    <h3> SUNTING KEGIATAN: Nama kegiatan </h3>
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
                                                        if ($gambarnum==0) echo "No Pictures";
                                                        for ($i = 0; $i < $gambarnum; $i+=5) {
                                                    ?>
                                                    <div class="row" style="margin:2% 0%;">
                                                        <?php for ($j = $i; $j < $gambarnum; $j++) { 
                                                            if ($j == $i+5) break;
                                                        ?>
                                                        <div class="span2">
                                                            <div class="thumbnail">
                                                                <a href="#" title="hapus gambar" onclick="konfirmHapusGam(<?php echo $gambar[$j]['id']?>); return false;"><div class="control">x</div></a>
                                                                <img src="data:image/jpeg;base64, <?php echo base64_encode($gambar[$j]['data']); ?>">
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
</script>