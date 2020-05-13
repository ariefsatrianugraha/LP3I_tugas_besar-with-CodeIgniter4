    <div class="card card-secondary">
        <div class="card-header">
            <h3 class="card-title">Tambah Data Mahasiswa</h3>
        </div>

        <?php 
            $input = session()->getFlashData('input');
            $errors = session()->getFlashData('errors');
            if(!empty($errors)){ 
        ?>
                <div class="alert alert-danger">
                    Anda melakukan kesalahan :
                    <ul>
                        <?php foreach($errors as $error) { ?>
                            <li><?= esc($error); ?></li> 
                        <?php } ?>
                    </ul>
                </div>
        <?php  
            }
        ?>

        <?= form_open_multipart(base_url('mahasiswa/save')) ?>
            <div class="card-body">
                <div class="form-group">
                    <label for="nim">NIM</label>
                    <input type="text" class="form-control" id="nim" name="nim" placeholder="Masukan nim anda..">
                </div>
                <div class="form-group">
                    <label for="nama">Nama Mahasiswa</label>
                    <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukan nama anda..">
                </div>
                <div class="form-group">
                    <label>Kode Jurusan</label>
                    <select class="form-control" style="width: 100%;" name="kode_jurusan">
                        <option selected="selected">~~ Pilih ~~</option>
                        <option>001</option>
                        <option>002</option>
                        <option>003</option>
                        <option>004</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Semester</label>
                    <select class="form-control" style="width: 100%;" name="semester">
                        <option selected="selected">1 Semester</option>
                        <option>2 Semester</option>
                        <option>3 Semester</option>
                        <option>4 Semester</option>
                        <option>5 Semester</option>
                        <option>6 Semester</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="foto">Input Foto</label>
                    <div class="input-group">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="foto" name="foto">
                            <label class="custom-file-label" for="foto">Pilih Foto</label>
                        </div>
                        <div class="input-group-append">
                            <span class="input-group-text" id="">Upload</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card-footer" align="right">
                <button type="submit" class="btn btn-primary btn-lg">Submit</button>
            </div>
        <?= form_close() ?>
    </div>