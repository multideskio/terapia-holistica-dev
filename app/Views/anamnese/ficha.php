<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados Anamnese</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.3.0/jquery.form.min.js"></script>
</head>
<body>
<div class="container mt-5">
    <h1>Dados do Usuário</h1>
    <img id="photo" src="" alt="Foto do Usuário" class="img-thumbnail">
    <p><strong>Nome:</strong> <span id="name"></span></p>
    <p><strong>Email:</strong> <span id="email"></span></p>
    <p><strong>Desequilíbrio Mental:</strong> <span id="mental_imbalance"></span> (<span id="mental_percentage"></span>%)</p>
    <p><strong>Desequilíbrio Emocional:</strong> <span id="emotional_imbalance"></span> (<span id="emotional_percentage"></span>%)</p>
    <!-- Adicione mais campos conforme necessário -->
    <div class="data" style="white-space: pre-wrap;"></div>
</div>

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
            // Inserir dados nos elementos HTML
            $("#photo").attr("src", data.photo);
            $("#name").text(data.name);
            $("#email").text(data.email);
            $("#mental_imbalance").text(data.mental_imbalance);
            $("#mental_percentage").text(data.mental_percentage);
            $("#emotional_imbalance").text(data.emotional_imbalance);
            $("#emotional_percentage").text(data.emotional_percentage);
            // Adicione mais campos conforme necessário

            // Exibir todos os dados em um formato legível
            $(".data").text(JSON.stringify(data, null, 2));
        });
    });
</script>
</body>
</html>
