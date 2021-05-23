<style>
    .alert {
        margin-bottom: 0px;
    }
    .alert-dismissible .btn-close{
        padding: 1rem ;
    }
    .alert-dismissible{
        padding-right: 2rem ;
    }
</style>
<div class="alert alert-danger alert-dismissible " role="alert">
    <div id="err"></div>
    <button type="button" class="btn-close"></button>
</div>
</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    $(document).ready(function() {
        var strMessage = '<?= $message ?>';
        $('.alert').hide();
        if (strMessage) {
            $('#err').html(strMessage);
            $('.alert').show();
        };
        $('.btn-close').click(function() {
            $('.alert').hide();
        });

    })
</script>