<?php
include '../aset/header.php';
?>

<div class="container">
    <div class="row mt-4">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">
                    <h2>Tambah Anggota</h2>
                </div>
            <div class="card-body">
                <form method="post" action="proses-tambah.php">
                    <div class="form-group">
                        <label for="anggota">Nama Lengkap</label>
                        <input type="type" class="form-contorl" name="nama" id="anggota" placeholder="Masukkan nama lengkap">
                    </div>
                    <div class="form-group">
                        <label for="kelas">Kelas</label>
                        <input type="text" class="form-control" name="kelas" id="kelas" placeholder="Masukkan kelas">
                        <small class="form-text text-muted">Contoh:XRPL7</small>
                    </div>
                    <div class="form-group">
                        <label for="telp">Nomor Telepone</label>
                        <input type="text" class="form-control" name="telp" id="telp" placeholder="Masukkan nomor telepon">
                        <small class="form-text text-muted">Contoh:001-000-0000</small>
                    </div>
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" class="form-control" name="username" id="username" placeholder="Masukkan usernama">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" name="password" id="password" placeholder="Masukkan password">
                    </div>

                    <button type="submit" class="btn btn-primary" name="simpan">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>            

<?php
include  '../aset/footer.php';
?>
