<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>



</head>

<body>
    <div class="modal-container pt-5 mx-5" id="example_wrapper">
        <table id="example" class="table table-striped" style="width:100%">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Subject</th>
                    <th>Subject_code</th>
                    <th>COURSE</th>
                    <th>ACTION</th>
                </tr>
            </thead>
        </table>
    </div>
</body>
<script>
    
    $(document).ready(function() {
        var table = $('#example').DataTable({
            dom: 'Bfrtip',
            lengthChange: false,
            responsive: true,
            pageLength: 10,
            "processing": true,
             "ajax": "fetch_data.php",
              "columns": [
            {data: 'id'},
            {data: 'subject'},
            {data: 'subject_code'},
            {data: 'course'},
            {
                "data":"id",
                render:function(data,type,row)
                {
                return'<a href="test.php?role=instructor&action=edit&id='+data+'"><button type="submit" class="btn btn-primary mx-1">Edit<i class="fa-solid fa-pen-to-square h5"></i></button></a><a href="test.php?role=instructor&action=delete&id='+data+'" class="text-white text-decoration-none"><button type="submit" class="btn btn-danger mx-1 ">Delete<i class="fa fa-trash h5" aria-hidden="true"></i></button></a>'
            }
            }

        ],
        columnDefs: [{
                "targets": [ 2 ],
                "render": function ( data, type, row ) {
                        return row.subject +'  '+ row.subject_code +' ' ;
                    }
                    }],
        buttons: [ 'copy', 'excel', 'pdf', 'colvis' ]
        });
        table.buttons().container()
        .appendTo( '#example_wrapper .col-md-6:eq(0)' );

    });

</script>

</html>