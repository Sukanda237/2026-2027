<?php require 'navbar.php' ?>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h4>Form Tambah Siswa</h4>
                </div>
                <div class="card-body">
                    <form action="" method="POST">
                        <h3>Data Profil Siswa</h3>
                        <!-- <label>NIS:</label><br> -->
                        <input type="text" name="nis" class="form-control"
                            Placeholder="Nomor Induk Siswa | Contoh: 1234567890"><br>

                        <!-- <label>Nama Lengkap:</label><br> -->
                        <input type="text" name="nama" class="form-control"
                            Placeholder="Nama Lengkap Siswa | Contoh: Ujang Asep"><br>

                        <!-- <label>Kelas:</label><br> -->
                        <input type="text" name="kelas" class="form-control"
                            placeholder="Kelas Siswa | Contoh: XI-RPL-1"><br>

                        <label class="form-check-label">Jenis Kelamin:</label><br>
                        <input type="radio" name="jenis_kelamin" value="Laki-laki" class="form-check-input"> Laki-laki
                        <br>
                        <input type="radio" name="jenis_kelamin" value="Perempuan" class="form-check-input">
                        Perempuan<br><br>

                        <hr>
                        <h3>Data Kredensial Akun (Tabel Users)</h3>
                        <!-- <label>Username:</label><br> -->
                        <input type="text" name="username" class="form-control"
                            placeholder="Username Akun | Contoh: ujang123"><br>

                        <!-- <label>Password Akun:</label><br> -->
                        <input type="password" name="password" class="form-control"
                            placeholder="Password Akun | Contoh: password123"><br>

                        <button type="submit" name="kirim" class="btn btn-primary">Simpan Data</button>
                        <a href="index.php" class="btn btn-secondary">Kembali</a>
                    </form>
                </div>
            </div><br><br>

            <!-- hasil -->
            <?php if (isset($_POST['kirim'])):
                $nis = $_POST['nis'] ?? '';
                $nama = $_POST['nama'] ?? '';
                $kelas = $_POST['kelas'] ?? '';
                $jenis_kelamin = $_POST['jenis_kelamin'] ?? '';
                $username = $_POST['username'] ?? '';
                $password = $_POST['password'] ?? '';

                // 2. Cek apakah ada field yang kosong
                if (empty($nis) || empty($nama) || empty($kelas) || empty($jenis_kelamin) || empty($username) || empty($password)):
                    // Jika ada yang kosong, munculkan alert saja (Card TIDAK dipanggil di sini)
                    echo "<script>alert('Silahkan isi datanya dulu');</script>";
                else:
                    // Jika SEMUA data terisi (TIDAK kosong), baru tampilkan Card ini:
                    ?>
                    <div class="card">
                        <div class="card-header">
                            <h4>Form Tambah Siswa</h4>
                            <hr>
                            <p>NIS:
                                <?= htmlspecialchars($nis) ?>
                            </p>
                            <p>Nama:
                                <?= htmlspecialchars($nama) ?>
                            </p>
                            <p>Kelas:
                                <?= htmlspecialchars($kelas) ?>
                            </p>
                            <p>Jenis Kelamin:
                                <?= htmlspecialchars($jenis_kelamin) ?>
                            </p>
                        </div>
                    </div>
                    <?php
                endif; // Akhir dari pengecekan data kosong
            
            endif; // Akhir dari isset($_POST['kirim'])
            ?><br><br>
            <?php require 'footer.php' ?>