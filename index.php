<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Meus Arquivos</title>
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/dropzone.js"></script>

    <script>
        // Configurando o form de upload
        Dropzone.options.UploadForm = {
            maxFilesize: 5, // MB
            url: 'upload.php',
            dictDefaultMessage: "Arraste e solte os arquivos aqui!",
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
                <form action="upload.php" class="dropzone" id="UploadForm">
                    <div class="fallback">
                        <input name="file" type="file" multiple />
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>