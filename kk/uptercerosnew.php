<?php  ?>
<!DOCTYPE html>
<!-- release v4.5.1, copyright 2014 - 2018 Kartik Visweswaran -->
<!--suppress JSUnresolvedLibraryURL -->
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/fileinput.css" media="all" rel="stylesheet" type="text/css"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" media="all" rel="stylesheet" type="text/css"/>
    <link href="themes/explorer-fa/theme.css" media="all" rel="stylesheet" type="text/css"/>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="js/plugins/sortable.js" type="text/javascript"></script>
    <script src="js/fileinput.min.js" type="text/javascript"></script>
    <script src="js/locales/es.js" type="text/javascript"></script>
    <script src="themes/explorer-fa/theme.js" type="text/javascript"></script>
    <script src="themes/fa/theme.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" type="text/javascript"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" type="text/javascript"></script>
</head>
<body>
<div class="container kv-main">
    <div class="page-header">
        <h1>Subir archivos
            <small><a href="https://github.com/kartik-v/bootstrap-fileinput-samples"><i
                    class="glyphicon glyphicon-download"></i> </a></small>
        </h1>
    </div>
    <div class="file-loading">
        <input id="archivos" name="archivos[]" type="file" multiple=true class="file-loading" >
    </div>

</div>
</body>
<?php
$directory = "pagos/";
$images = glob($directory."*.*");
?>
<script>
    $('#archivos').fileinput({
        theme: 'fa',
        language: 'es',
        uploadUrl: 'upload.php',
        uploadAsync: false,
        minFileCount: 1,
        maxfileCount: 2,
        showUpload: true,
        showRemove: false,
        allowedFileExtensions: ['txt'],

    });


</script>
</html>
