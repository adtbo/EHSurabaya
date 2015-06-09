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
                    <form role="form" class="form-default" action="<?php echo site_url('dasbor/inskeg'); ?>" method="post">
                        <fieldset>
                            <div class="control-group">
                                <label class="control-label" for="NamaKegiatan"><strong>Nama Kegiatan</strong></label>
                                <div class="controls">
                                    <input type="text" class="span5" id="NamaKegiatan" name="NamaKegiatan" placeholder="Nama Kegiatan">
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label" for="TanggalMulai"><strong>Tanggal Mulai</strong></label>
                                <div class="controls">
                                    <input type="text" class="span2" id="TanggalMulai" name="TanggalMulai" placeholder="Tanggal Mulai">
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
                                    <input type="datetime" class="span2" id="TanggalSelesai" name="TanggalSelesai" placeholder="Tanggal Selesai">
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
                                    <textarea class="form-control" rows="5" id="deskripsi" name="deskripsi"></textarea>
                                </div>
                            </div>
                            <div class="form-actions">
                                <button type="submit" class="btn btn-primary"><i class="icon-ok"></i>Simpan</button>
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
                                        <button class="btn btn-success" style="margin:1px;" title="Sunting Kegiatan Ini" onclick="detailKegiatan(<?php echo $kegiatan[$i]['id']; ?>); return false;"><i class="icon-pencil"></i></button>
                                        <button class="btn btn-danger" style="margin:1px;" title="Hapus Kegiatan Ini" onclick="hapusKegiatan(<?php echo $kegiatan[$i]['id']; ?>); return false;"><i class="icon-trash"></i></button>
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

<script>
    CKEDITOR.replace('deskripsi');
    function detailKegiatan(id){
        form = document.getElementById('detailkegiatan_f');
        elem = form.elements['ptr'];
        elem.value = id;
        form.submit();
    }
    
    function hapusKegiatan(id){
        form = document.getElementById('hapuskegiatan_f');
        elem = form.elements['iddelkegiatan'];
        elem.value = id;
        form.submit();
    }
</script>