            <!--main container end-->
</div> <!--end of main wrapper-->
<script type="text/javascript">
    $(document).ready(function() {
        
        $(".x--sidebar-btn").click(function() {
            $(".x--wrapper").toggleClass("x--collapse");
        });

        $(function () {
            $("#table").bootstrapTable()
        });

        function handleEdit(button){
            $(this).data('edit-id');
            console.log($('#btnEdit').data('edit-id'));
        }
    });
    $('#tableView').DataTable( {
        "pageLength": 10,
        "lengthChange": false,
    responsive: true
} );
function onlyNumberKey(evt) {
              
              // Only ASCII character in that range allowed
              var ASCIICode = (evt.which) ? evt.which : evt.keyCode
              if (ASCIICode > 31 && (ASCIICode < 48 || ASCIICode > 57))
                  return false;
              return true;
          }
</script>
</body>
</html>