$(function () {
  $(".tombolData").on("click", function () {
    $("#formmodalLabel").html("Tambah Data siswa");
    $(".modal-footer button[type=submit]").html("Tambah Data");
  });
  $(".tampilSiswa").on("click", function () {
    $("#formmodalLabel").html("Ubah Data Siswa");
    $(".modal-footer button[type=submit]").html("Ubah Data");
    $("#formUbah").attr("action", "http://localhost/REPO/public/siswa/ubah");
    const id = $(this).data("id");
    console.log(id);
    //jalankan ajax
    $.ajax({
      url: "http://localhost/REPO/public/siswa/getUbah",
      data: { id: id }, //id yang pertama id yang dikirimkan dan id yang kedua merupakan isi data dari id
      method: "post",
      dataType: "json",
      success: function (data) {
        $("#nama").val(data.nama);
        $("#kelas").val(data.kelas);
        $("#jurusan").val(data.jurusan);
        $("#id").val(data.id);
      },
    });
  });
});
