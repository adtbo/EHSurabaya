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
                        Pada bagian ini anda bisa mengganti video utama pada halaman depan, mengisi informasi komunitas serta kontak yang bisa dihubungi.
                    </p>
                    <form role="form" class="form-default">
                        <fieldset>
                            <div class="control-group">
                                <label class="control-label" for="NamaKegiatan"><strong>Nama Kegiatan</strong></label>
                                <div class="controls">
                                    <input type="text" class="span5" id="NamaKegiatan" placeholder="Nama Kegiatan">
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label" for="TanggalMulai"><strong>Tanggal Mulai</strong></label>
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
                                <label class="control-label" for="TanggalSelesai"><strong>Tanggal Selesai</strong></label>
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
                                <label class="control-label" for="Deskripsi"><strong>Deskripsi</strong></label>
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
                    <div class="bs-example">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Row</th>
                                    <th>Nama Kegiatan</th>
                                    <th>Tanggal Mulai</th>
                                    <th>Tanggal Selesai</th>
                                    <th>#</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>John</td>
                                    <td>Carter</td>
                                    <td>johncarter@mail.com</td>
                                    <td><a href="<?php echo site_url('dasbor/ekegiatan'); ?>" class="btn btn-success"><i class="icon-pencil"> Sunting</a></td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Peter</td>
                                    <td>Parker</td>
                                    <td>peterparker@mail.com</td>
                                    <td><a href="<?php echo site_url('dasbor/ekegiatan'); ?>" class="btn btn-success"><i class="icon-pencil"> Sunting</a></td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>John</td>
                                    <td>Rambo</td>
                                    <td>johnrambo@mail.com</td>
                                    <td><a href="<?php echo site_url('dasbor/ekegiatan'); ?>" class="btn btn-success"><i class="icon-pencil"> Sunting</a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>


<script>
    CKEDITOR.replace('deskripsi');
</script>