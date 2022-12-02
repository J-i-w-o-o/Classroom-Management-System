
<div class="container text-start pd-5" id="admin_wrapper">
<table id="adminView" class=" table-bordered display responsive compact table table-striped" width="100%  ">
    <thead>
    <tr>
        <th class="">ID</th>
        <th class="">SCHOOL ID</th>
        <th class="">NAME</th>
    </tr>
    </thead>
</table>
</div>

<script>
  $(document).ready(function() {
    var table = $('#adminView ').DataTable({
      autoWidth: true,
      lengthChange: false,
      pageLength: 10,
      responsive: true,
      "processing": true,
      "ajax": "./admin_script/admin_data.php",
      "columns": [{
          data:'id'
        },
        {
          data:'school_id'
        },
        {
          data:'first_name', data:'last_name'
        }],
      columnDefs: [{
        "targets": [2],
        "render": function(data, type, row) {
          return row.first_name + '  ' + row.last_name;
        },
      }]
      
 
    });
    table.buttons().container()
      .appendTo('#admin_wrapper .col-md-6:eq(0)');

  });
</script>