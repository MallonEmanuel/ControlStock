<script>
// Creacion del DataTable
  $(document).ready(function() {
      var table = $('#table').DataTable({
          "stateSave": true,
          "paging":   true,
          "ordering": true,
          "info":     true,
          // "responsive": true,
          "order": [[ 0, "desc" ]],
          "columnDefs": [
            {
              "targets": [ 1 ],
              "visible": true,
              "searchable": true
            },
            {
              "targets": [ 3,4,5,6 ], //numericos
              "searchable": false
            }
          ]
      });
  } );
</script>
