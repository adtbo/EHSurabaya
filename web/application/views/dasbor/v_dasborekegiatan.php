<div class="container">
    <div class="row">
        <div class="span12">
            <div class="widget">
                <div class="widget-header">
                    <i class="icon-pencil"></i>
                    <h3> SUNTING KEGIATAN: Nama kegiatan </h3>
                </div>
                <div class="widget-content">
                    <form role="form" class="form-default">
                        <fieldset>
                            <div class="control-group">
                                <div class="span10">
                                    <label class="control-label" for="NamaKegiatan"><strong>Nama Kegiatan</strong></label>
                                    <div class="controls">
                                        <input type="text" class="span8" id="NamaKegiatan" placeholder="Nama Kegiatan">
                                    </div>
                                </div>
                            </div>
                            <div class="control-group">
                                <div class="span4">
                                    <label class="control-label" for="TanggalMulai"><strong>Tanggal Mulai</strong></label>
                                    <div class="controls">
                                        <input type="text" class="span2" id="TanggalMulai" placeholder="Tanggal Mulai">
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
                            </div>
                            
                            
                            
                            <div class="control-group">
                            </div>
                                
                            <div class="control-group">
                                <div class="span11">
                                    <label class="control-label" for="Deskripsi"><strong>Deskripsi</strong></label>
                                    <div class="controls">
                                        <textarea class="form-control" id="deskripsi"></textarea>
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
                                                    <img src="<?php echo base_url('assets/images/testimonial2.png'); ?>" height="50">
                                                    <img src="<?php echo base_url('assets/images/testimonial2.png'); ?>" height="50">
                                                    <img src="<?php echo base_url('assets/images/testimonial2.png'); ?>" height="50">
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
                                        <a class="btn btn-danger" href="<?php echo site_url('dasbor/kegiatan'); ?>"><i class="icon-chevron-left"></i> Kembali</a>
                                        <button type="submit" class="btn btn-primary"><i class="icon-ok"></i> Simpan</button>
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


<script>
    CKEDITOR.replace('deskripsi');
</script>