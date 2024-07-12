<?php $this->extend('layout/template'); ?>
<?php $this->section('content'); ?>

<div class="card">
    <div class="card-header bg-primary text-white">
        <h5 class="mb-0">Data Users</h5>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-striped table-hover">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">No.</th>
                        <th scope="col">Nama User</th>
                        <th scope="col">Kelamin</th>
                        <th scope="col">User name</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1;
                    foreach ($users as $data) : ?>
                        <tr>
                            <th scope="row"><?= $no; ?></th>
                            <td><?= $data['nama_users']; ?></td>
                            <td><?= $data['kelamin_users']; ?></td>
                            <td><?= $data['username']; ?></td>
                            <td>
                                <a href="<?= base_url('users/ubah/' . $data['id_users']); ?>" class="btn btn-sm btn-info"><i class="fas fa-edit"></i> Ubah</a>
                                <a href="<?= base_url('users/delete/' . $data['id_users']); ?>" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this user?');"><i class="fas fa-trash"></i> Hapus</a>
                            </td>
                        </tr>
                    <?php $no++;
                    endforeach; ?>
                </tbody>
            </table>
        </div>
        <a href="<?= base_url('users/tambah'); ?>" class="btn btn-sm btn-primary mt-3"><i class="fas fa-plus"></i> Add User</a>
    </div>
</div>

<style>
    .card {
        border: 1px solid #ddd;
        box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075);
    }

    .table-striped tbody tr:nth-of-type(odd) {
        background-color: rgba(0, 0, 0, 0.05);
    }

    .table-hover tbody tr:hover {
        background-color: rgba(0, 123, 255, 0.15);
    }

    .btn {
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .btn i {
        margin-right: 5px;
    }
</style>

<!-- Include Font Awesome for Icons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

<?php $this->endSection(); ?>