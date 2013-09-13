<script>
    $(document).ready(function(){
    //fadeout flash messages on click
        $('.alert').alert();
    });

</script>

<style>
    .alert {
        position: relative;
        display:block;
        margin-left:auto;
        margin-right:auto;
    }
</style>

    <div class="alert alert-success fade in">
        <a class="close" data-dismiss="alert" href="#">&times;</a>
        <?php echo $message; ?>
    </div>
