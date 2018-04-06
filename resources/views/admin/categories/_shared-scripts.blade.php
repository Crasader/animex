<!-- Bootstrap Datepicker -->
<script src="/js/admin/bootstrap-datepicker.js"></script>

<!-- CK Editor -->
<script src="/js/admin/ckeditor/ckeditor.js"></script>

<script>
    $(function () {
        //Date picker
        $('#datepicker').datepicker({
            autoclose: true
        });

        // Replace the <textarea id="editor"> with a CKEditor
        // instance, using default configuration.
        CKEDITOR.replace('content', {
            language: 'es',
            scayt_sLang: 'es_ES',
        });
    })
</script>