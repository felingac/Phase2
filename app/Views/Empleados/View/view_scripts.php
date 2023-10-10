<script>
  $('#empleados').DataTable({
    "paging": true,
    "lengthChange": true,
    "searching": true,
    "ordering": true,
    "info": true,
    "autoWidth": true,
    "responsive": true,
  });

  $(document).on('click', '.delete', function() {
    Swal.fire({
      position: 'top-center',
      icon: 'info',
      title: 'Are you sure you want to delete this employee?',
      //text: '',
      showConfirmButton: true,
      confirmButtonText: 'Yes, delete',
      showCancelButton: true,
      cancelButtonText: 'Cancel',
      cancelButtonColor: '#dd0000',
    }).then((result) => {
      if (result.value == true) {
        let employee = {
          id: $(this).attr('data-id'),
        }
        $.ajax({
          url: "<?= base_url('Empleados/delete') ?>",
          method: "POST",
          data: employee,
          dataType: 'JSON',
          success: function(response) {
            var empleadosDataTable = $('#empleados').DataTable();
            empleadosDataTable.clear().draw();
          }
        });
      }

      if (result.dismiss == 'cancel') {}
    });
  })
</script>