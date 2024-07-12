<?php $this->extend('layout/template'); ?>
<?php $this->section('content'); ?>

<div class="card my-4">
    <div class="card-header bg-primary text-white">
        <h5 class="mb-0">Tambah Data User</h5>
    </div>
    <div class="card-body">
        <form action="<?= base_url('users/simpan'); ?>" method="POST">
            <div class="mb-3">
                <label for="nama" class="form-label">Nama User</label>
                <input type="text" class="form-control" id="nama" name="nama" required>
            </div>
            <div class="mb-3">
                <label for="kelamin" class="form-label">Jenis Kelamin</label>
                <select name="kelamin" id="kelamin" class="form-select" required>
                    <option value="Laki-Laki">Laki-Laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control" id="username" name="username" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Simpan</button>
        </form>
    </div>
</div>

<style>
    .card {
        border: 1px solid #ddd;
        box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075);
    }

    .card-header {
        background-color: #007bff;
        color: white;
    }

    .form-label {
        font-weight: bold;
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
