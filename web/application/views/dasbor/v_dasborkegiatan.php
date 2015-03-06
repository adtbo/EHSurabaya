<div class="container">
    <div class="row">
        <div class="span6">
            <div class="widget">
                <div class="widget-header">
                    <i class="icon-list-alt"></i>
                    <h3> Pengaturan Menambahkan Kegiatan </h3>
                </div>
                <div class="widget-content">
                    <p>
                        Pada bagian ini anda bisa mengganti video utama pada halaman depan, mengisi informasi komunitas serta kontak yang bisa dihubungi.
                    </p>
                    <form role="form" class="form-default">
                        <fieldset>
                            <div class="control-group">
                                <label class="control-label" for="NamaKegiatan">Nama Kegiatan</label>
                                <div class="controls">
                                    <input type="text" class="span5" id="NamaKegiatan" placeholder="Nama Kegiatan">
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label" for="TanggalMulai">Tanggal Mulai</label>
                                <div class="controls">
                                    <input type="text" class="span2" id="TanggalMulai" placeholder="Tanggal Mulai">
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
                                <label class="control-label" for="TanggalSelesai">Tanggal Selesai</label>
                                <div class="controls">
                                    <input type="datetime" class="span2" id="TanggalSelesai" placeholder="Tanggal Selesai">
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
                                <label class="control-label" for="Deskripsi">Deskripsi</label>
                                <div class="controls">
                                    <textarea class="form-control" rows="5" id="deskripsi"></textarea>
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
                    <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Kegiatan</th>
                                <th>Tangaal Mulai</th>
                                <th>Tanggal Selesai</th>
                                <th>Deskripsi</th>
                            </tr>
                        </thead>

                        <tfoot>
                            <tr>
                                <th>No</th>
                                <th>Nama Kegiatan</th>
                                <th>Tangaal Mulai</th>
                                <th>Tanggal Selesai</th>
                                <th>Deskripsi</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>


<script>
    CKEDITOR.replace('deskripsi');
</script>