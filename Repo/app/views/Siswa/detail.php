<div class="container mt-5 p-5 border border-light">
    <h1 class="mb-4">Detail Siswa</h1>
    <div class="card" style="width: 18rem;">
        <div class="card-body bg-dark text-light">
            <h5 class="card-title">Nama :  <?= $data['sws']['nama'];?></h5>
            <h6 class="card-subtitle">Kelas : <?= $data['sws']['kelas'];?></h6>
            <p class="card-text">Jurusan : <?= $data['sws']['jurusan'];?></p>
            <a href="<?= MAINURL;?>/siswa" class="card-link link-light">Kembali</a>
        </div>
    </div>
</div>