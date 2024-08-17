$(function () {
  $(".tombolTambahData").on("click", function () {
    $("#formModalLabel").html("Form Tambah Data Anjay");
    $(".modal-footer button[type=submit]").html("Tambah Data");
    // Kosongkan form ketika modal tambah dibuka
    $("#id").val("");
    $("#nama").val("");
    $("#nrp").val("");
    $("#email").val("");
    $("#jurusan").val("");
  });

  $(".tombolEdit").on("click", function () {
    $("#formModalLabel").html("Form Edit Data ");
    $(".modal-footer button[type=submit]").html("Edit Data");
    const id = $(this).data("id");

    $.ajax({
      url: "http://localhost/mvcphp/public/mahasiswa/getubah",
      type: "POST",
      data: { id: id },
      dataType: "json",
      success: function (data) {
        if (data.error) {
          console.error(data.error);
          alert("Terjadi kesalahan: " + data.error);
          return;
        }

        $("#id").val(data.id); // Tambahkan ID ke input tersembunyi
        $("#nama").val(data.nama);
        $("#nrp").val(data.nrp);
        $("#email").val(data.email);
        $("#jurusan").val(data.jurusan);
      },
      error: function (xhr, status, error) {
        console.error("AJAX Error:", status, error);
        console.error("Response:", xhr.responseText);
      },
    });
  });
});
