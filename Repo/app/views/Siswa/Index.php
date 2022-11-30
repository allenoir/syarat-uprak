<div class="container mt-5 bg-dark text-light border border-light p-5">
    <div class="row">
        <div class="col-lg-6">
            <?php Flasher::flash();?>
        </div>
    </div>
    <div class="row">
        <div class="col-4 bg-dark text-light">
            <button type="button" class="btn btn-light tombolData" data-bs-toggle="modal" data-bs-target="#formModal">
            Tambah Data Siswa
            </button>
            <br><br>
            <h3 class="">Daftar Siswa</h3>
                <ul class="list-group">
                    <?php foreach ($data['sws'] as $sws ) :?>
                        <li class="list-group-item  align-item-center bg-dark text-light border border-light">
                            <?= $sws['nama']?>
                            <a href="<?= MAINURL;?>/siswa/detail/<?= $sws['id']?>" class="badge bg-dark float-end me-1 border border-light">Detail</a>
                            <a href="<?= MAINURL;?>/siswa/detail/<?= $sws['id']?>" class="badge bg-dark float-end me-1 border border-light tampilSiswa" data-bs-toggle="modal" data-bs-target="#formModal" data-id="<?= $sws['id'];?>">Edit</a>
                            <a href="<?= MAINURL;?>/siswa/hapus/<?= $sws['id']?>" class="badge bg-dark float-end me-1 border border-light" onclick="return confirm('yakin')">Hapus</a>
                        </li>
                    <?php endforeach ;?>
                </ul>
        </div>
    </div>
</div>  


<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="formmodalLabel">Tambah Data Siswa</h1>
        <button type="button" class="btn-close btn-light" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="<?= MAINURL ?>/siswa/tambah" method="post" id="formUbah">
        <input type="hidden" name="id" id="id">
        <div class="mb-3">
            <label for="nama" class="form-label">Nama Siswa</label>
            <input type="text" class="form-control" id="nama" name="nama" placeholder="....">
       </div>
        <div class="mb-3">
            <label for="nama" class="form-label">Kelas</label>
            <input type="number" class="form-control" id="kelas" name="kelas" placeholder="....">
       </div>
       
       <div class="form-group">
        <label for="jurusan">Jurusan</label>
        <select class="form-control" id="jurusan" name="jurusan">
        <option value="TEI">TEI</option>
        <option value="BDP">BDP</option>
        <option value="ATPH">ATPH</option>
        <option value="TKJ">TKJ</option>
        <option value="RPL">RPL</option>
        </select>
    </div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-light">Tambah Data</button>
        </form>
      </div>
    </div>
  </div>
</div>