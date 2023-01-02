<link href="https://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css" rel="stylesheet">
<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
<script src="https://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
<script>
    function submitForm() {
        $(document).ready(function() {
            // alert("hello");
            var data={
                name : $("#name").val(),
                email : $("#email").val(),
                website : $("#website").val(),
                mobile : $("#mobile").val(),
                gender: $("input[name=gender]:checked").val(),
                comment : $("#comment").val()
            };
            // alert(name);
            $.ajax({
                url:"validate.php",
                type: "post",
                data: data,
                success:function(data){
                    alert(data);
                    window.location.reload();
                }
            });
        });
    }
</script>