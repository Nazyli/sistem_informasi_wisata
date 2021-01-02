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
      "sEmptyTable":   "Tidak ada data yang tersedia pada tabel ini",
      "sProcessing":   "Sedang memproses...",
      "sLengthMenu":   "Tampilkan _MENU_ entri",
      "sZeroRecords":  "Tidak ditemukan data yang sesuai",
      "sInfo":         "Menampilkan _START_ sampai _END_ dari _TOTAL_ entri",
      "sInfoEmpty":    "Menampilkan 0 sampai 0 dari 0 entri",
      "sInfoFiltered": "(disaring dari _MAX_ entri keseluruhan)",
      "sInfoPostFix":  "",
      "sSearch":       "Cari:",
      "sUrl":          "",
      "oPaginate": {
          "sFirst":    "<i class='fas fa-sm fa-backward'></i>",
          "sPrevious": "<i class='fas fa-sm fa-chevron-left'></i>",
          "sNext":     "<i class='fas fa-sm fa-chevron-right'></i>",
          "sLast":     "<i class='fas fa-sm fa-forward'></i>"
      }
  }
    });
  });