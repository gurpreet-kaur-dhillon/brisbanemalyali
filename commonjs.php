<script>

    function submitFunction(formData, url) {
        return $.ajax({
            url: url,
            type: "POST",
            data: formData,
            dataType: 'JSON',
            contentType: false,
            cache: false,
            processData: false
        });
    }



</script>