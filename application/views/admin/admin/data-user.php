<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?> </h1>

    <div class="row">
        <div class="col-lg">

            <a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#newUserModal"> Tambah Pengguna Baru </a>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Email</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($nama as $nm) : ?>
                        <tr>
                            <th scope="row"><?= $i ?></th>
                            <td><?= $nm['nama']; ?></td>
                            <td><?= $nm['email']; ?></td>
                            <td>
                                <a href="" class="badge badge-success">Edit</a>
                                <a href="" class="badge badge-danger">Hapus</a>
                            </td>
                        </tr>
                        <?php $i++ ?>
                    <?php endforeach; ?>
                </tbody>
            </table>


        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<!-- modal -->

<!-- Modal -->
<div class="modal fade" id="newUserModal" tabindex="-1" aria-labelledby="newUserModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="newUserModalLabel">Tambah Pengguna Baru</h5>
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="<?= base_url('datauser/adddata'); ?>" method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" class="form-control" id="nama" name="Nama" placeholder="Masukan Nama">
                    </div>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" class="form-control" id="email" name="Email" placeholder="Masukan Email">
                    </div>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <input type="password" class="form-control" id="password" name="Password" placeholder="Password">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Tambah</button>
                </div>
            </form>
        </div>
    </div>
</div>