                <section class="page container">
                    <div class="row">
                        <div class="span8">
                            <div class="blockoff-right">
                                <legend class="lead">
                                    Pengaturan Menambahkan Kegiatan
                                </legend>
                                <p>
                                    Pada bagian ini anda bisa mengganti video utama pada halaman depan, mengisi informasi komunitas serta kontak yang bisa dihubungi.
                                </p>
                            </div>
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
                                    <textarea class="form-control" rows="5" id="Deskripsi"></textarea>
                                </div>
                                <button type="submit" class="btn btn-default">Submit</button>
                            </form>
                        </div>
                        
                        <div class="span8">
                            <div class="blockoff-right">
                                <legend class="lead">
                                    Daftar Kegiatan
                                </legend>
                                <p>
                                    Pada bagian ini anda bisa mengganti video utama pada halaman depan, mengisi informasi komunitas serta kontak yang bisa dihubungi.
                                </p>
                            </div>
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
                </section>

                <script>
                    CKEDITOR.replace('tentang');
                </script>