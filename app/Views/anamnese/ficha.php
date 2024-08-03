<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anamnese</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container p-4">
        <pre class="data"></pre>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
        // Obtém a URL atual
        var url = window.location.href;

        // Separa a URL em partes dividindo pelo "/"
        var urlParts = url.split('/');

        // O ID é o último elemento do array resultante
        var id = urlParts[urlParts.length - 1];

        // Exibe o ID no console
        console.log(id);

        $(document).ready(function() {
            $.getJSON(`/api/v1/anamnese/${id}`, function(data) {
                $(".data").text(JSON.stringify(data, null, 2));
            });
        });
    </script>
</body>

</html>