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

        $("#subjectcode").keyup(function(){
            var searchText = $(this).val();
            console.log("test")
            if(searchText != ''){
                $.ajax({
                    url: './instructor_components/search.php',
                    method: 'post',
                    data: {query:searchText},
                    success: function(response){
                        $("#show-list").html(response);
                    }
                });
            } else {
                $("#show-list").html("");
            }
        });
        // Set searched text in input field on click of search button
        $(document).on("click", "a", function () {
            $("#subjectcode").val($(this).text());
            $("#show-list").html("");
        });
    });
    
    $('#tableView').DataTable( {
        "pageLength": 10,
        "lengthChange": false,
    responsive: true
} );
</script>
</body>
</html>