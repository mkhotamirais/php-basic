$(function () {
  $(".tombolTambahData").on("click", function () {
    $("#judulModal").html("Tambah Data Mahasiswa");
    $(".modal-footer button[type=submit]").html("Tambah Data");
    const baseUrl = $(".modal-content form").data("baseurl");
    $(".modal-content form").attr("action", `${baseUrl}/mahasiswa/tambah`);
  });

  $(".tampilModalUbah").on("click", function () {
    $("#judulModal").html("Ubah Data Mahasiswa");
    $(".modal-footer button[type=submit]").html("Ubah Data");

    const id = $(this).data("id");
    const baseUrl = $(this).data("baseurl");
    $(".modal-content form").attr("action", `${baseUrl}/mahasiswa/ubah`);

    $.ajax({
      url: `${baseUrl}/Mahasiswa/getUbah`,
      data: { id: id },
      method: "post",
      dataType: "json",
      success: function (data) {
        $("#nama").val(data.nama);
        $("#nrp").val(data.nrp);
        $("#email").val(data.email);
        $("#jurusan").val(data.jurusan);
        $("#id").val(data.id);
      },
    });
  });
});
