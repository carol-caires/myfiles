<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no">

    <title>Meus Arquivos</title>
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/dropzone.js"></script>

    <script>
        // Configurando o form de upload
        Dropzone.options.UploadForm = {
            maxFilesize: 5, // MB
            url: 'upload.php',
            dictFileTooBig: "Arquivo muito grande ({{filesize}}MB) máximo {{maxFilesize}}MB",
            accept: function(file, done){
                done();
            }
        };
    </script>

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/dropzone.css">
    <link rel="stylesheet" href="css/custom.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3 class="text-info">Upload de arquivos</h3>
                <form action="upload.php" class="dropzone" id="UploadForm">
                    <div class="dz-message" data-dz-message><span id="dropzone-label" class="text-info">
                        Arraste e solte um arquivo para carregar<br>
                        <small>(ou clique aqui)</small>
                    </span></div>
                    <div class="fallback">
                        <input name="file" type="file" multiple />
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>