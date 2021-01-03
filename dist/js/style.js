$(function () {
  $('#datatable').DataTable({
    "paging": true,
    "lengthChange": true,
    "searching": true,
    "ordering": true,
    "info": true,
    "autoWidth": false,
    "responsive": true,
    "bJQueryUI": true,
    "sPaginationType": "full_numbers",
    //  "sDom": '<"clear">lfrtip' ,
    "oLanguage": {
      "sEmptyTable": "Tidak ada data yang tersedia pada tabel ini",
      "sProcessing": "Sedang memproses...",
      "sLengthMenu": "Tampilkan _MENU_ entri",
      "sZeroRecords": "Tidak ditemukan data yang sesuai",
      "sInfo": "Menampilkan _START_ sampai _END_ dari _TOTAL_ entri",
      "sInfoEmpty": "Menampilkan 0 sampai 0 dari 0 entri",
      "sInfoFiltered": "(disaring dari _MAX_ entri keseluruhan)",
      "sInfoPostFix": "",
      "sSearch": "Cari:",
      "sUrl": "",
      "oPaginate": {
        "sFirst": "<i class='fas fa-sm fa-backward'></i>",
        "sPrevious": "<i class='fas fa-sm fa-chevron-left'></i>",
        "sNext": "<i class='fas fa-sm fa-chevron-right'></i>",
        "sLast": "<i class='fas fa-sm fa-forward'></i>"
      }
    }
  });
});



// Validation Form
$('#addRekreasi').validate({
  onkeyup: function (element) { $(element).valid() },
  onclick: function (element) { $(element).valid() },
  rules: {
    namaWisata: { required: true },
    jenisWisata: { required: true },
    deskripsi: { required: true },
    cp: { required: true },
    noTelp: { required: true },
    email: { required: true, email: true },
    alamatWeb: { required: true },
    alamat: { required: true },
    LatLot: { required: true },
  },
  messages: {},
  errorClass: "invalid-feedback",
  // errorElement: 'div',
  // validClass: "valid-tooltip",
  highlight: function (element, errorClass, validClass) {

    $(element).removeClass('is-valid').addClass('is-invalid');
  },
  unhighlight: function (element, errorClass, validClass) {
    $(element).removeClass('is-invalid').addClass('is-valid');
  },
});

$(function() {
  $(document).on('click', '[data-toggle="lightbox"]', function(event) {
    event.preventDefault();
    $(this).ekkoLightbox({
      alwaysShowClose: true
    });
  });
  var Toast = Swal.mixin({
    toast: true,
    position: 'top-end',
    showConfirmButton: false,
    timer: 3000
  });
$('.swalSuccesDelete').click(function() {
  Toast.fire({
    icon: 'success',
    title: ' Data Berhasil Dihapus'
  })
});
});