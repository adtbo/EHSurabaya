    <div class="container">
        <div class="row">
            <div class="span6">
                <div class="widget">
                    <div class="widget-header">
                        <i class="icon-bookmark"></i>
                        <h3> Pengaturan Dasar </h3>
                    </div>
                    <div class="widget-content">
                        <p>
                            Pada bagian ini anda bisa mengganti video utama pada halaman depan, mengisi informasi komunitas serta kontak yang bisa dihubungi.
                        </p>
                    </div>
                </div>
                <div class="widget">
                    <div class="widget-header">
                        <i class="icon-play-circle"></i>
                        <h3> Video Utama </h3>
                    </div>
                    <div class="widget-content">
                        <form class="form-default">
                            <fieldset>
                            <div class="control-group">
                                <label class="control-label" for="videoutama">Link Video</label>
                                <div class="controls">                                                  <input class="span5" type="text" name="videoutama" id="videoutama" placeholder="link video utama">
                                </div>
                                <div class="form-actions">
                                    <button type="submit" class="btn btn-primary"><i class="icon-ok"></i>Simpan</button>
                                </div>
                            </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
            <div class="span6">
                <div class="widget">
                    <div class="widget-header">
                        <i class="icon-book"></i>
                        <h3> Tentang EH Surabaya </h3>
                    </div>
                    <div class="widget-content">
                        <form class="form-default">
                            <fieldset>
                            <div class="control-group  span5">
                                <div class="controls"> 
                                    <textarea name="tentang" id="tentang"></textarea>
                                </div>
                                <div class="form-actions">
                                    <button type="submit" class="btn btn-primary"><i class="icon-ok"></i>Simpan</button>
                                </div>
                            </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
                <div class="widget">
                    <div class="widget-header">
                        <i class="icon-search"></i>
                        <h3> Kontak EH Surabaya </h3>
                    </div>
                    <div class="widget-content">
                        <form class="form-inline">
                            <fieldset>
                            <div class="control-group  span5">
                                <div class="controls"> 
                                    <div class="input-prepend">
                                        <span class="add-on"><i class="icon-envelope"></i></span>
                                        <input class="span4" type="email" name="email" id="email" placeholder="Alamat Email">
                                    </div>
                                    <div class="input-prepend">
                                        <span class="add-on"><i class="icon-phone"></i></span>
                                        <input class="span4" type="text" name="telepon" id="telepon" placeholder="No. Telepon">
                                    </div>
                                    <div class="input-prepend">
                                        <span class="add-on"><i class="icon-facebook"></i></span>
                                        <input class="span4" type="text" name="telepon" id="telepon" placeholder="Facebook">
                                    </div>
                                    <div class="input-prepend">
                                        <span class="add-on"><i class="icon-twitter"></i></span>
                                        <input class="span4" type="text" name="telepon" id="telepon" placeholder="Twitter">
                                    </div>
                                    <div class="input-prepend">
                                        <span class="add-on"><i class="icon-google-plus"></i></span>
                                        <input class="span4" type="text" name="telepon" id="telepon" placeholder="Google+">
                                    </div>
                                    <div class="input-prepend">
                                        <span class="add-on"><i class="icon-pinterest"></i></span>
                                        <input class="span4" type="text" name="telepon" id="telepon" placeholder="Pinterest">
                                    </div>
                                    <div class="input-prepend">
                                        <span class="add-on"><i class="icon-camera-retro"></i></span>
                                        <input class="span4" type="text" name="telepon" id="telepon" placeholder="Instagram">
                                    </div>
                                    <div class="input-prepend">
                                        <span class="add-on"><i class="icon-linkedin"></i></span>
                                        <input class="span4" type="text" name="telepon" id="telepon" placeholder="LinkedIn">
                                    </div>
                                    <div class="input-prepend">
                                        <span class="add-on"><i class="icon-home"></i></span>
                                        <input class="span4" type="text" name="telepon" id="telepon" placeholder="Alamat Kantor">
                                    </div>
                                </div>
                                <div class="form-actions">
                                    <button type="submit" class="btn btn-primary"><i class="icon-ok"></i>Simpan</button>
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
        CKEDITOR.replace('tentang');
    </script>