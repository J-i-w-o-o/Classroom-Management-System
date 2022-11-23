</div>
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
</script>
</body>
</html>