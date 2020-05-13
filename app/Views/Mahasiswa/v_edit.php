    <div class="card card-secondary">
        <div class="card-header">
            <h3 class="card-title">Tambah Data Mahasiswa</h3>
        </div>

    

        <form role="form" action="<?= base_url('mahasiswa/edit/'.$mahasiswa['nim']); ?>" method="post">
            <div class="card-body">
                <div class="form-group">
                    <label for="nim">NIM</label>
                    <input type="text" class="form-control" id="nim" name="nim" placeholder="Masukan nim anda.." value="<?= $mahasiswa['nim']?>" disabled>
                </div>
                <div class="form-group">
                    <label for="nama">Nama Mahasiswa</label>
                    <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukan nama anda.." value="<?= $mahasiswa['nama'] ?>">
                </div>
                <div class="form-group">
                    <label>Kode Jurusan</label>
                    <select class="form-control" style="width: 100%;" name="kode_jurusan">
                        <option selected="selected" value="<?= $mahasiswa['kode_jurusan']; ?>"><?= $mahasiswa['kode_jurusan']; ?></option>
                        <option>~~ Pilih ~~</option>
                        <option>001</option>
                        <option>002</option>
                        <option>003</option>
                        <option>004</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Semester</label>
                    <select class="form-control" style="width: 100%;" name="semester">
                        <option selected="selected" value="<?= $mahasiswa['semester']; ?>"><?= $mahasiswa['semester']; ?> Semester</option>
                        <option>2 Semester</option>
                        <option>3 Semester</option>
                        <option>4 Semester</option>
                        <option>5 Semester</option>
                        <option>6 Semester</option>
                    </select>
                </div>
                <!-- <div class="form-group">
                    <label for="foto">Input Foto</label>
                    <div class="input-group">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="foto" name="foto" value="">
                            <label class="custom-file-label" for="foto"></label>
                        </div>
                        <div class="input-group-append">
                            <span class="input-group-text" id="">Upload</span>
                        </div>
                    </div>
                </div> -->
                <div>
                    <label for="foto">Input Foto</label>
                    <input type="file" value="<?=  base_url('images/'.$mahasiswa['foto']); ?>" name="foto">
                    <img src="<?=  base_url('images/'.$mahasiswa['foto']); ?>" alt="" width="100px" name="foto">
                </div>
            </div>

            <div class="card-footer" align="right">
                <button type="submit" class="btn btn-primary btn-lg">Submit</button>
            </div>
        </form>
    </div>