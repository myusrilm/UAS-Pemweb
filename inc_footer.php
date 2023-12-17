</main>
<footer class='bg-ligt'>
    <div class='text-center p-3' style="background: #CCCCCC">
        Copyright &copy; 2023
</footer>
<script>
$(document).ready(function() {
    $('#summernote').summernote({
        callbacks: {
            onImageUpload: function(fi; es) {
                for (let i = 0; i < files.length; i++) {
                    $.upload(files[i]);
                }
            }
        },
        height: 200,
        }
    });

</script>
</body>

</html>