                <div class="card">
                        <div class="card-header d-flex justify-content-between bg-secondary mb-3">
                                <input type="search" placeholder="Search">
                                <button class='btn btn-primary ml-auto'><a href="<?= base_url('mahasiswa/tambah_data'); ?>" style="color:#fff;">Tambah Data</a></button>
                        </div>
                            
                        <div class="card-body">
                        <?php if (!empty(session()->getFlashdata('sukses_tambahData'))) {?>
                            <div class="alert alert-success">
                                <?= session()->getFlashdata('sukses_tambahData'); ?>
                            </div>
                        <?php } ?>
                        <?php if (!empty(session()->getFlashdata('sukses_editData'))) {?>
                            <div class="alert alert-success">
                                <?= session()->getFlashdata('sukses_editData'); ?>
                            </div>
                        <?php } ?>
                        <?php if (!empty(session()->getFlashdata('sukses_deleteData'))) {?>
                            <div class="alert alert-success">
                                <?= session()->getFlashdata('sukses_deleteData'); ?>
                            </div>
                        <?php } ?>

                            <table id="table" class="table table-bordered table-striped">
                                <thead>
                                    <tr align="center">
                                        <th>NO</th>
                                        <th>NIM</th>
                                        <th>Nama Mahasiswa</th>
                                        <th>Jurusan</th>
                                        <th>Semester</th>
                                        <th>Foto</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody align="center">
                                    <?php 
                                        $no = 1;
                                        foreach($mahasiswa as $value){
                                    ?>
                                        <tr>
                                            <td><?= $no++ ?></td>
                                            <td><?= $value['nim'] ?></td>
                                            <td><?= $value['nama']; ?></td>
                                            <td><?= $value['nama_jurusan']; ?></td>
                                            <td><?= $value['semester']; ?></td>
                                            <td><img src="<?= base_url('images/'.$value['foto']); ?>" alt="" width="100"></td>
                                            <td>
                                                <button type="submit" class="btn btn-warning btn-sm"><a href="<?= base_url('mahasiswa/get_edit/'.$value['nim']); ?>">Edit</button>
                                                <button type="submit" class="btn btn-danger btn-sm"><a href="<?= base_url('mahasiswa/delete/'.$value['nim']); ?>">Delete</button>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    
