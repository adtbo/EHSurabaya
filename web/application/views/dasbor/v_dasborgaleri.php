<div class="container">
    <div class="row">
        <div class="span6">
            <div class="widget">
                <div class="widget-header">
                    <i class="icon-bookmark"></i>
                    <h3> Input Gambar </h3>
                </div>
                <div class="widget-content">
                        <p>
                           Pada bagian ini anda dapat menyimpan gambar yang akan disimpan dalam Galeri.
                        </p>
                    </div>
                </div>
            <div class="widget">
                <div class="widget-header">
                    <i class="icon-camera"></i>
                    <h3> Input Gambar </h3>
                </div>
                
                <div class="widget-content">
                    <form role="form" class="form-default" action="<?php echo site_url('dasbor/insgam'); ?>" method="post" enctype="multipart/form-data">
                    <div class="input-prepend">
						<div class="form-group">
                        <label class="control-label">Unggah gambar dari komputer anda</label>
                            <input class="span4" type="file" id="DataGambar" placeholder="gambar">
                        </div>

                            <div class="form-group">
                                <div class="control-group">
                                    <label class="control-label"><strong>Nama Gambar</strong></label>
                                    <div class="controls">
                                        <input type="text" class="span3" id="NamaGambar" placeholder="ex: nama kegiatan">
                                    </div>
                                </div>
                            </div>
                            
                            <div class="form-group">
                            <div class="control-group">
                                <label class="control-label" for="WaktuGambar"><strong>Waktu Gambar</strong></label>
                                <div class="controls">
                                	<input class="form-control" size="16" type="text" readonly="" name="mulai" value="" id="mulai">
                                    <input type="text" size="16" class="span3" id="WaktuGambar" placeholder="dd/mm/yyyy">
                                </div>
                            </div>
                            <script type="text/javascript"> // When the document is ready
                              $(document).ready(function () {                                                
                                $('#WaktuGambar').datepicker({
                                  format: "dd/mm/yyyy"
                                });  
                              });
                            </script>

                            <div class="form-group">
                                <div class="control-group">
                                    <label class="control-label"><strong>Deskripsi Gambar</strong></label>
                                    <div class="controls">
                                        <textarea class="span3" rows="5"></textarea>
                                    </div>
                                </div>
                            </div>
                            
                            </div>
                            <div class="form-group">
                            <button type="submit" class="btn btn-primary">
                                <i class="icon-ok"></i>
                                    Unggah
                            </button>
                        </div>
					</div>
                    </form>
                </div>
            </div>
        </div>
        <div class="span6">
            <div class="widget">
                <div class="widget-header">
                    <i class="icon-bookmark"></i>
                    <h3> Input Video </h3>
                </div>
                <div class="widget-content">
                    <p>
                        Pada bagian ini anda dapat menyimpan video yang akan disimpan dalam Galeri.
                    </p>
                </div>
            </div>
            <div class="widget">
                <div class="widget-header">
                    <i class="icon-facetime-video"></i>
                    <h3> Input Video </h3>
                </div>
                <div class="widget-content">
                    <form role="form" class="form-default" action="<?php echo site_url('dasbor/insvid'); ?>" method="post" enctype="multipart/form-data">
                    <div class="input-prepend">

                        <div class="form-group">
                            <div class="control-group">
                                <label class="control-label"><strong>Video URL</strong></label>
                                <div class="controls">
                                    <input type="text" class="span3" id="LinkVideo" placeholder="ex: https://www.youtube.co...">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="control-group">
                                <label class="control-label"><strong>Nama Video</strong></label>
                                <div class="controls">
                                    <input type="text" class="span3" id="NamaVideo" placeholder="ex: video aksi">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">
                                <i class="icon-ok"></i>
                                    Unggah
                            </button>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

                <script>
                    CKEDITOR.replace('tentang');
                </script>