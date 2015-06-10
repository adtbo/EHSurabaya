<div class="container">
    <div class="row">
        <div class="span6">
            <div class="widget">
                <div class="widget-header">
                    <i class="icon-list-alt"></i>
                    <h3> Menambahkan Kegiatan </h3>
                </div>
                <div class="widget-content">
                    <p>
                        Pada bagian ini Anda bisa menambahkan dan menyunting kegiatan yang ingin ditampilkan pada halaman website.
                    </p>
                    <form id="tambahkegiatan_f" role="form" class="form-default" action="<?php echo site_url('dasbor/inskeg'); ?>" method="post">
                        <fieldset>
                            <div class="control-group">
                                <label class="control-label" for="NamaKegiatan"><strong>Nama Kegiatan</strong></label>
                                <div class="controls">
                                    <input type="text" class="span5" id="NamaKegiatan" name="NamaKegiatan" placeholder="Nama Kegiatan" onkeyup="updateSelfMsg('NamaKegiatan','msg1'); return false;">
                                    <br><span id="msg1"></span>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label" for="TanggalMulai"><strong>Tanggal Mulai</strong></label>
                                <div class="controls">
                                    <input type="text" class="span2" id="TanggalMulai" name="TanggalMulai" placeholder="Tanggal Mulai" onfocus="cekIsi(2); return false;" onchange="updateSelfMsg('TanggalMulai','msg2'); return false;" onkeyup="updateSelfMsg('TanggalMulai','msg2'); return false;">
                                    <br><span id="msg2"></span>
                                </div>
                            </div>
                            <script type="text/javascript"> // When the document is ready
                              $(document).ready(function () {                                                
                                $('#TanggalMulai').datepicker({
                                  format: "dd/mm/yyyy"
                                });  
                              });
                            </script>
                            <div class="control-group">
                                <label class="control-label" for="TanggalSelesai"><strong>Tanggal Selesai</strong></label>
                                <div class="controls">
                                    <input type="datetime" class="span2" id="TanggalSelesai" name="TanggalSelesai" placeholder="Tanggal Selesai" onfocus="cekIsi(3); return false;" onchange="updateSelfMsg('TanggalSelesai','msg3'); return false;" onkeyup="updateSelfMsg('TanggalSelesai','msg3'); return false;">
                                    <br><span id="msg3"></span>
                                </div>
                            </div>
                            <script type="text/javascript"> // When the document is ready
                              $(document).ready(function () {                                                
                                $('#TanggalSelesai').datepicker({
                                  format: "dd/mm/yyyy"
                                });  
                              });
                            </script>                                
                            <div class="control-group">
                                <label class="control-label" for="Deskripsi"><strong>Deskripsi</strong></label>
                                <div class="controls">
                                    <textarea class="form-control" rows="5" id="deskripsi" name="deskripsi" onfocus="cekIsi('TanggalSelesai', 'msg3', 'TanggalSelesai'); return false;"></textarea>
                                    <br><span id="msg4"></span>
                                </div>
                            </div>
                            <div class="form-actions">
                                <a href="#" onclick="konfirmReset(); return false;" class="btn btn-danger" title="Memuat ulang formulir tambah kegiatan"><i class="icon-eraser"></i> Reset</a>
                                <button onclick="finishing(); return false;" class="btn btn-primary"><i class="icon-ok"></i> Simpan</button>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
        <div class="span6">
            <div class="widget">
                <div class="widget-header">
                    <i class="icon-list-alt"></i>
                    <h3> Daftar Kegiatan </h3>
                </div>
                <div class="widget-content">
                    <div class="bs-example">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Nama Kegiatan</th>
                                    <th>Tanggal Mulai</th>
                                    <th>Tanggal Selesai</th>
                                    <th>#</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php for ($i = 0; $i < $numkegiatan; $i++){ ?>
                                <tr>
                                    <td><?php echo $i+1; ?></td>
                                    <td><?php echo $kegiatan[$i]['nama']; ?></td>
                                    <td><?php echo $kegiatan[$i]['mulai']; ?></td>
                                    <td><?php echo $kegiatan[$i]['selesai']; ?></td>
                                    <td width="40">
                                        <button class="btn btn-success" style="margin:1px;" title="Sunting Kegiatan Ini" onclick="konfirmSunting(<?php echo $kegiatan[$i]['id']; ?>, '<?php echo $kegiatan[$i]['nama'] ?>'); return false;"><i class="icon-pencil"></i></button>
                                        <button class="btn btn-danger" style="margin:1px;" title="Hapus Kegiatan Ini" onclick="konfirmHapus(<?php echo $kegiatan[$i]['id']; ?>, '<?php echo $kegiatan[$i]['nama'] ?>'); return false;"><i class="icon-trash"></i></button>
                                    </td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<form id="detailkegiatan_f" action="<?php echo site_url('dasbor/ekegiatan'); ?>" method="post">
    <input type="hidden" id="ptr" name="ptr">
</form>
<form id="hapuskegiatan_f" action="<?php echo site_url('dasbor/delKegiatan'); ?>" method="post">
    <input type="hidden" id="iddelkegiatan" name="iddelkegiatan">
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
    var elem = ["NamaKegiatan", "TanggalMulai", "TanggalSelesai", "deskripsi"];
    var msg = ["msg1", "msg2", "msg3", "msg4"];
    
    CKEDITOR.replace('deskripsi');
    
    function detailKegiatan(id){
        form = document.getElementById('detailkegiatan_f');
        elem = form.elements['ptr'];
        elem.value = id;
        form.submit();
    }
    
    CKEDITOR.instances.deskripsi.on('focus', function(){
        var stat  = cekIsi(4);
    });
    
    CKEDITOR.instances.deskripsi.on('key', function(){
        updateSelfMsg('deskripsi', 'msg4');
    });
    
    function hapusKegiatan(id){
        form = document.getElementById('hapuskegiatan_f');
        elem = form.elements['iddelkegiatan'];
        elem.value = id;
        form.submit();
    }
    
    function cekIsi(curridx){
        var stat = 0;
        for (i = 0; i < curridx-1; i++){
            currelem = document.getElementById(elem[i]);
            currmsg = document.getElementById(msg[i]);
            if (i == 3){
                var data = CKEDITOR.instances.deskripsi.getData();
                if (data == ""){
                    currelem.style.backgroundColor = "#ff6666";
                    currmsg.style.color = "#ff6666"; 
                    currmsg.innerHTML = "Deskripsi kegiatan tidak boleh kosong!";
                    stat = 1;
                }
            }
            else if (currelem.value == ""){
                currelem.style.backgroundColor = "#ff6666";
                currmsg.style.color = "#ff6666";
                if (i == 0) currmsg.innerHTML = "Nama kegiatan tidak boleh kosong!";
                else if (i == 1) currmsg.innerHTML = "Tanggal mulai tidak boleh kosong!";
                else if (i == 2) currmsg.innerHTML = "Tanggal selesai tidak boleh kosong!";
                stat = 1;
            }
        }
        return stat;
    }
    
    function resetMsg(){
        for (i = 0; i < 4; i++){
            currmsg = document.getElementById(msg[i]);
            currelem = document.getElementById(elem[i]);
            if (i == 3){
                CKEDITOR.instances.deskripsi.setData("");  
            }
            else{
                currelem.value = "";
                currelem.style.backgroundColor = "transparent";
            }
            currmsg.innerHTML = "";
            currmsg.style.color = "transparent";
        }
    }
    
    function updateSelfMsg($this, $msgThis){
        var elem = document.getElementById($this);
        var message = document.getElementById($msgThis);
        if ($this == "deskripsi"){
            var data = CKEDITOR.instances.deskripsi.getData();
            if (data != ""){
                message.innerHTML = "";
                elem.style.backgroundColor = "transparent";
            }  
        }
        else if (elem.value != "" && ($this != "pass" || $this != "konfirmpass"))
        {
            message.innerHTML = "";
            elem.style.backgroundColor = "transparent";
        }
    }
    
    function finishing(){
        var stat = cekIsi(5);
        if (stat == 0){
            document.getElementById('konfirmModalLabel').innerHTML = 'Konfirmasi Penambahan Kegiatan Baru';
            document.getElementById('konfirmModalBody').innerHTML = '<p>Pastikan data yang anda masukkan sudah benar! Jika ingin membatalkan aksi ini silakan tekan tombol Batal.</p><p>Apakah anda yakin ingin menambah kegiatan tersebut ke dalam daftar kegiatan?</p>';
            document.getElementById('konfirmModalBtnRed').innerHTML = 'Batal';
            document.getElementById('konfirmModalBtnBlue').innerHTML = 'Ya. Simpan Data Baru';
            document.getElementById('konfirmModalBtnBlue').onclick = function() {document.getElementById('tambahkegiatan_f').submit();};
            $('#konfirmModal').modal({show: 'true', backdrop: 'static'});
        }
    }
    
    function konfirmHapus(id, judul){
        document.getElementById('konfirmModalLabel').innerHTML = 'Konfirmasi Penghapusan Kegiatan';
        document.getElementById('konfirmModalBody').innerHTML = '<p>Apakah anda yakin ingin menghapus kegiatan "' + judul + '"?</p>';
        document.getElementById('konfirmModalBtnRed').innerHTML = 'Batal';
        document.getElementById('konfirmModalBtnBlue').innerHTML = 'Ya. Hapus Kegiatan';
        document.getElementById('konfirmModalBtnBlue').onclick = function() {hapusKegiatan(id);};
        $('#konfirmModal').modal({show: 'true', backdrop: 'static'});
    }
    
    function konfirmReset(){
        document.getElementById('konfirmModalLabel').innerHTML = 'Konfirmasi Memuat Ulang Halaman';
        document.getElementById('konfirmModalBody').innerHTML = '<p>Aksi Reset akan memuat ulang halaman ini dan mengosongkan kembali formulir untuk menambah kegiatan.</p><p>Apakah anda yakin ingin melanjutkan aksi Reset?</p>';
        document.getElementById('konfirmModalBtnRed').innerHTML = 'Batal';
        document.getElementById('konfirmModalBtnBlue').innerHTML = 'Ya. Reset Halaman Ini';
        document.getElementById('konfirmModalBtnBlue').onclick = function() {resetMsg(); $('#konfirmModal').modal('hide');};
        $('#konfirmModal').modal({show: 'true', backdrop: 'static'});
    }
    
    function konfirmSunting(id, judul){
        document.getElementById('konfirmModalLabel').innerHTML = 'Konfirmasi Menyunting Kegiatan';
        document.getElementById('konfirmModalBody').innerHTML = '<p>Apakah anda yakin ingin menyunting detail kegiatan "' + judul + '"?</p>';
        document.getElementById('konfirmModalBtnRed').innerHTML = 'Batal';
        document.getElementById('konfirmModalBtnBlue').innerHTML = 'Ya. Sunting Kegiatan Ini';
        document.getElementById('konfirmModalBtnBlue').onclick = function() {detailKegiatan(id);};
        $('#konfirmModal').modal({show: 'true', backdrop: 'static'});  
    }
    
</script>