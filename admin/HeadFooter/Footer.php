</div>
<script type="text/javascript">
    $(document).ready(function() {
        $(".x--sidebar-btn").click(function() {
            $(".x--wrapper").toggleClass("x--collapse");
        });

        

        // on edit button clicked
        $('.editButton').on('click', function() {
            $tr = $(this).closest("tr");
            var tdata = $tr.children("td").map(function () {
                return $(this).text();
            })
            $('#exampleModal').on('show.bs.modal', function (event) {
                var button = $(event.relatedTarget) // Button that triggered the modal
                var schoolid = button.data('schoolid') // Extract info from data-* attributes
                var lastname = button.data('lastname')
                var firstname = button.data('firstname')
                var age = button.data('age')
                var address = button.data('address')
                // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
                // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
                var modal = $(this)
                modal.find('.modal-title').text("@EDIT USER: " + tdata[0])
                modal.find('.modal-body input.school-id-name').val(tdata[0])
                modal.find('.modal-body input.last-name-name').val(tdata[1])
                modal.find('.modal-body input.first-name-name').val(tdata[2])
                modal.find('.modal-body input.age-name').val(tdata[3])
                modal.find('.modal-body textarea.address-name').val(tdata[4])
            })
            
            console.log(tdata)
            
            $('input.school-id-name').val(tdata[0])
            $('input.last-name-name').val(tdata[1])
            $('input.first-name-name').val(tdata[2])
            $('input.age-name').val(tdata[3])
            $('input.address-name').val(tdata[4])
           
        })
    });
</script>
</body>
</html>