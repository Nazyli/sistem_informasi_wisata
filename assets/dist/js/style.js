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
$('#addWisata').validate({
  onkeyup: function (element) { $(element).valid() },
  onclick: function (element) { $(element).valid() },
  rules: {
    namaWisata: { required: true },
    jenisWisata: { required: true },
    jenisKuliner: { required: true },
    deskripsi: { required: true },
    fasilitas: { required: true },
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


$.validator.addMethod('cekEmail', function (value, element) {
  return value == 'admin@gmail.com'
}, 'Email yang anda masukkan tidak terdaftar!');

$.validator.addMethod('cekPass', function (value, element) {
  return value == 'admin'
}, 'Password yang anda masukkan salah!');

$('#login').validate({
  onkeyup: function (element) { $(element).valid() },
  onclick: function (element) { $(element).valid() },
  rules: {
    email: { required: true, email: true, /*cekEmail:true*/ },
    password: {
      required: true,
      /*cekPass: true,*/
    },
  },
  messages: {},
  errorClass: "invalid-feedback",
  // errorElement: 'div',
  highlight: function (element, errorClass, validClass) {

    $(element).removeClass('is-valid').addClass('is-invalid');
  },
  unhighlight: function (element, errorClass, validClass) {
    $(element).removeClass('is-invalid').addClass('is-valid');
  },
});

$('#register').validate({
  onkeyup: function (element) { $(element).valid() },
  onclick: function (element) { $(element).valid() },
  rules: {
    nama: { required: true },
    email: { required: true, email: true, /*cekEmail:true*/ },
    username: { required: true, },
    password: { required: true, },
    retype: {
      required: true,
      equalTo: "#password"
    },
    role: { required: true, },
    profesi: { required: true, },
    passLama: { required: true, },

  },
  messages: {},
  errorClass: "invalid-feedback",
  // errorElement: 'div',
  highlight: function (element, errorClass, validClass) {

    $(element).removeClass('is-valid').addClass('is-invalid');
  },
  unhighlight: function (element, errorClass, validClass) {
    $(element).removeClass('is-invalid').addClass('is-valid');
  },
});
$('#testimoni').validate({
  onkeyup: function (element) { $(element).valid() },
  onclick: function (element) { $(element).valid() },
  rules: {
    rating: { required: true },
    komentar: { required: true },
  },
  ignore: [],
  messages: {
    rating: "Silakan masukkan penilaian bintang wisata",
  },
  errorClass: "invalid-feedback",
  // errorElement: 'div',
  highlight: function (element, errorClass, validClass) {

    $(element).removeClass('is-valid').addClass('is-invalid');
  },
  unhighlight: function (element, errorClass, validClass) {
    $(element).removeClass('is-invalid').addClass('is-valid');
  },
});


$('#addJenisWisata').validate({
  onkeyup: function (element) { $(element).valid() },
  onclick: function (element) { $(element).valid() },
  rules: {
    namaJenisWisata: { required: true },
  },
  messages: {},
  errorClass: "invalid-feedback",
  // errorElement: 'div',
  highlight: function (element, errorClass, validClass) {

    $(element).removeClass('is-valid').addClass('is-invalid');
  },
  unhighlight: function (element, errorClass, validClass) {
    $(element).removeClass('is-invalid').addClass('is-valid');
  },
});
$(function () {
  $(document).on('click', '[data-toggle="lightbox"]', function (event) {
    event.preventDefault();
    $(this).ekkoLightbox({
      alwaysShowClose: true
    });
  });
});
function swalSuccesDelete(ev) {
  ev.preventDefault();
  var urlToRedirect = ev.currentTarget.getAttribute('href');
  Swal.fire({
    title: ' Hapus Data!',
    text: "Apakah anda yakin ingin menghapus data ini ?",
    icon: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Yes, delete it!'
  }).then((result) => {
    if (result.isConfirmed) {
      window.location = urlToRedirect;
    }
  })
}
function showNotif(status, message) {
  toastr.options = {
    "closeButton": true,
    "debug": false,
    "newestOnTop": true,
    "progressBar": true,
    "positionClass": "toast-top-right",
    "preventDuplicates": true,
    "onclick": null,
    "showDuration": "300",
    "hideDuration": "1000",
    "timeOut": "5000",
    "extendedTimeOut": "1000",
    "showEasing": "swing",
    "hideEasing": "linear",
    "showMethod": "fadeIn",
    "hideMethod": "fadeOut"
  }
  // toastr.error('Lorem ipsum dolor sit amet, consetetur sadipscing elitr.')
  toastr[status](message);
}

$(function () {
  bsCustomFileInput.init();
});