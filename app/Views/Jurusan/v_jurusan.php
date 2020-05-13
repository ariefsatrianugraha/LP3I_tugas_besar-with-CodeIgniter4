                    <div class="card">
                        <div class="card-header d-flex justify-content-between bg-secondary mb-3">
                                <input type="search" placeholder="Search">
                        </div>
                            
                        <div class="card-body">
                            <table id="table" class="table table-bordered table-striped">
                                <thead>
                                    <tr align="center">
                                        <th>NO</th>
                                        <th>Kode Jurusan</th>
                                        <th>Nama Jurusan</th>
                                        <th>Deskripsi</th>
                                    </tr>
                                </thead>
                                <tbody align="center">
                                    <?php 
                                        $no = 1;
                                        foreach($jurusan as $value){
                                    ?>
                                        <tr>
                                            <td><?= $no++ ?></td>
                                            <td><?= $value['kode_jurusan']; ?></td>
                                            <td><?= $value['nama_jurusan']; ?></td>
                                            <td><?= $value['deskripsi']; ?></td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
