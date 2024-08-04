<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ficha de Anamnese</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .container {
            max-width: 600px;
        }
        .table td, .table th {
            white-space: nowrap;
            vertical-align: middle;
        }
        @media print {
            .container {
                width: 100%;
            }
        }
    </style>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
</head>
<body>
<div class="container mt-5">
    <h1 class="text-center">Ficha de Anamnese</h1>
    <img id="photo" src="" alt="Foto do Usuário" class="img-thumbnail mb-3 d-block mx-auto">
    <table class="table table-bordered">
        <tbody>
            <tr>
                <th>Nome</th>
                <td id="name"></td>
            </tr>
            <tr>
                <th>Email</th>
                <td id="email"></td>
            </tr>
            <tr>
                <th>Desequilíbrio Mental</th>
                <td id="mental_imbalance"></td>
            </tr>
            <tr>
                <th>Percentual Mental</th>
                <td id="mental_percentage"></td>
            </tr>
            <tr>
                <th>Desequilíbrio Emocional</th>
                <td id="emotional_imbalance"></td>
            </tr>
            <tr>
                <th>Percentual Emocional</th>
                <td id="emotional_percentage"></td>
            </tr>
            <tr>
                <th>Desequilíbrio Espiritual</th>
                <td id="spiritual_imbalance"></td>
            </tr>
            <tr>
                <th>Percentual Espiritual</th>
                <td id="spiritual_percentage"></td>
            </tr>
            <tr>
                <th>Desequilíbrio Físico</th>
                <td id="physical_imbalance"></td>
            </tr>
            <tr>
                <th>Percentual Físico</th>
                <td id="physical_percentage"></td>
            </tr>
            <tr>
                <th>Chakra Coronário - Desequilíbrio</th>
                <td id="coronary_chakra_imbalance"></td>
            </tr>
            <tr>
                <th>Chakra Coronário - Percentual</th>
                <td id="coronary_chakra_percentage"></td>
            </tr>
            <tr>
                <th>Chakra Coronário - Atividade</th>
                <td id="coronary_chakra_activity"></td>
            </tr>
            <tr>
                <th>Chakra Coronário - Afeta Órgão</th>
                <td id="coronary_chakra_affects_organ"></td>
            </tr>
            <!-- Continue adicionando os campos conforme necessário -->
        </tbody>
    </table>
</div>

<script>
    var url = window.location.href;
    var urlParts = url.split('/');
    var id = urlParts[urlParts.length - 1];
    console.log(id);

    $(document).ready(function() {
        $.getJSON(`/api/v1/anamnese/${id}`, function(data) {
            $("#photo").attr("src", data.photo);
            $("#name").text(data.name);
            $("#email").text(data.email);
            $("#mental_imbalance").text(data.mental_imbalance);
            $("#mental_percentage").text(data.mental_percentage);
            $("#emotional_imbalance").text(data.emotional_imbalance);
            $("#emotional_percentage").text(data.emotional_percentage);
            $("#spiritual_imbalance").text(data.spiritual_imbalance);
            $("#spiritual_percentage").text(data.spiritual_percentage);
            $("#physical_imbalance").text(data.physical_imbalance);
            $("#physical_percentage").text(data.physical_percentage);
            $("#coronary_chakra_imbalance").text(data.coronary_chakra_imbalance);
            $("#coronary_chakra_percentage").text(data.coronary_chakra_percentage);
            $("#coronary_chakra_activity").text(data.coronary_chakra_activity);
            $("#coronary_chakra_affects_organ").text(data.coronary_chakra_affects_organ);
            // Continue preenchendo os campos conforme necessário
        });
    });
</script>
</body>
</html>