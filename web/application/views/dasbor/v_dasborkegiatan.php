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
                    <form role="form">
                        <div class="form-group">
                            <label for="NamaKegiatan">Nama Kegiatan</label>
                            <input type="text" class="form-control" id="NamaKegiatan" placeholder="Nama Kegiatan">
                        </div>
                        <div class="form-group">
                            <label for="TanggalMulai">Tanggal Mulai</label>
                            <input type="text" class="form-control" id="TanggalMulai" placeholder="Tanggal Mulai">
                        </div>
                        <script type="text/javascript"> // When the document is ready
                          $(document).ready(function () {                                                
                            $('#TanggalMulai').datepicker({
                              format: "dd/mm/yyyy"
                            });  
                          });
                        </script>
                        <div class="form-group">
                            <label for="TanggalSelesai">Tanggal Selesai</label>
                            <input type="datetime" class="form-control" id="TanggalSelesai" placeholder="Tanggal Selesai">
                        </div>
                        <script type="text/javascript"> // When the document is ready
                          $(document).ready(function () {                                                
                            $('#TanggalSelesai').datepicker({
                              format: "dd/mm/yyyy"
                            });  
                          });
                        </script>                                
                        <div class="form-group">
                            <label for="Deskripsi">Deskripsi</label>
                            <textarea class="form-control" rows="5" id="deskripsi"></textarea>
                        </div>
                        <button type="submit" class="btn btn-default">Submit</button>
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