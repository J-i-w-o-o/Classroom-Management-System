
<div class="container text-start pd-5" id="student_wrapper">
    <table id="studentView" class="table-bordered display responsive compact table table-striped" width="100%  ">
        <thead>
        <tr>
            <th class="">ID</th>
            <th class="">SCHOOL ID</th>
            <th class="">NAME</th>
            <th class="">SECTION</th>
        </tr>
        </thead>
    </table>
</div>

<script>
  $(document).ready(function() {
    var table = $('#studentView ').DataTable({
      autoWidth: true,
      lengthChange: false,
      pageLength: 10,
      responsive: true,
      "processing": true,
      "ajax": "./admin_script/student_data.php",
      "columns": [{
          data:'id'
        },
        {
          data:'school_id'
        },
        {
          data:'first_name', data:'last_name'
        },
        {
          data: 'section'
        }],
      columnDefs: [{
        "targets": [2],
        "render": function(data, type, row) {
          return row.first_name + '  ' + row.last_name;
        },
      }]
      
    });
    table.buttons().container()
      .appendTo('#student_wrapper .col-md-6:eq(0)');

  });
</script>