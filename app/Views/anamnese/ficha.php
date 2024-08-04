<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Relatório de Anamnese</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .container {
            max-width: 600px;
            margin: 0 auto;
        }
        .section-header {
            background-color: #6c63ff;
            color: white;
            padding: 10px;
            margin-top: 20px;
        }
        .card {
            margin-top: 20px;
        }
        .card-header {
            background-color: #f8f9fa;
            font-weight: bold;
        }
        .card-body .row {
            margin-bottom: 10px;
        }
        .slider-container {
            display: flex;
            align-items: center;
        }
        .slider-container input[type="range"] {
            flex-grow: 1;
            margin: 0 10px;
        }
        .slider-value {
            width: 50px;
            text-align: right;
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
<div class="container">
    <h1 class="text-center">Relatório de Anamnese</h1>
    <img id="photo" src="" alt="Foto do Usuário" class="img-thumbnail mb-3 d-block mx-auto">

    <div class="section-header">Campos Energéticos</div>

    <div class="card">
        <div class="card-header">Chakra Coronário</div>
        <div class="card-body">
            <div class="row">
                <div class="col-6">Tem desequilíbrio?</div>
                <div class="col-6" id="coronary_chakra_imbalance"></div>
            </div>
            <div class="row slider-container">
                <div class="col-6">Qual a % do desequilíbrio?</div>
                <div class="col-6">
                    <input type="range" id="coronary_chakra_percentage" disabled>
                    <span class="slider-value" id="coronary_chakra_percentage_value"></span>
                </div>
            </div>
            <div class="row">
                <div class="col-6">Qual a atividade do chakra?</div>
                <div class="col-6" id="coronary_chakra_activity"></div>
            </div>
            <div class="row">
                <div class="col-6">Afeta o corpo físico?</div>
                <div class="col-6" id="coronary_chakra_affects_organ"></div>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-header">Chakra Frontal</div>
        <div class="card-body">
            <div class="row">
                <div class="col-6">Tem desequilíbrio?</div>
                <div class="col-6" id="frontal_chakra_imbalance"></div>
            </div>
            <div class="row slider-container">
                <div class="col-6">Qual a % do desequilíbrio?</div>
                <div class="col-6">
                    <input type="range" id="frontal_chakra_percentage" disabled>
                    <span class="slider-value" id="frontal_chakra_percentage_value"></span>
                </div>
            </div>
            <div class="row">
                <div class="col-6">Qual a atividade do chakra?</div>
                <div class="col-6" id="frontal_chakra_activity"></div>
            </div>
            <div class="row">
                <div class="col-6">Afeta o corpo físico?</div>
                <div class="col-6" id="frontal_chakra_affects_organ"></div>
            </div>
        </div>
    </div>

    <!-- Adicione mais seções de chakras conforme necessário -->
    <div class="card">
        <div class="card-header">Chakra Laríngeo</div>
        <div class="card-body">
            <div class="row">
                <div class="col-6">Tem desequilíbrio?</div>
                <div class="col-6" id="laryngeal_chakra_imbalance"></div>
            </div>
            <div class="row slider-container">
                <div class="col-6">Qual a % do desequilíbrio?</div>
                <div class="col-6">
                    <input type="range" id="laryngeal_chakra_percentage" disabled>
                    <span class="slider-value" id="laryngeal_chakra_percentage_value"></span>
                </div>
            </div>
            <div class="row">
                <div class="col-6">Qual a atividade do chakra?</div>
                <div class="col-6" id="laryngeal_chakra_activity"></div>
            </div>
            <div class="row">
                <div class="col-6">Afeta o corpo físico?</div>
                <div class="col-6" id="laryngeal_chakra_affects_organ"></div>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-header">Chakra Cardíaco</div>
        <div class="card-body">
            <div class="row">
                <div class="col-6">Tem desequilíbrio?</div>
                <div class="col-6" id="cardiac_chakra_imbalance"></div>
            </div>
            <div class="row slider-container">
                <div class="col-6">Qual a % do desequilíbrio?</div>
                <div class="col-6">
                    <input type="range" id="cardiac_chakra_percentage" disabled>
                    <span class="slider-value" id="cardiac_chakra_percentage_value"></span>
                </div>
            </div>
            <div class="row">
                <div class="col-6">Qual a atividade do chakra?</div>
                <div class="col-6" id="cardiac_chakra_activity"></div>
            </div>
            <div class="row">
                <div class="col-6">Afeta o corpo físico?</div>
                <div class="col-6" id="cardiac_chakra_affects_organ"></div>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-header">Chakra Plexo Solar</div>
        <div class="card-body">
            <div class="row">
                <div class="col-6">Tem desequilíbrio?</div>
                <div class="col-6" id="solar_plexus_chakra_imbalance"></div>
            </div>
            <div class="row slider-container">
                <div class="col-6">Qual a % do desequilíbrio?</div>
                <div class="col-6">
                    <input type="range" id="solar_plexus_chakra_percentage" disabled>
                    <span class="slider-value" id="solar_plexus_chakra_percentage_value"></span>
                </div>
            </div>
            <div class="row">
                <div class="col-6">Qual a atividade do chakra?</div>
                <div class="col-6" id="solar_plexus_chakra_activity"></div>
            </div>
            <div class="row">
                <div class="col-6">Afeta o corpo físico?</div>
                <div class="col-6" id="solar_plexus_chakra_affects_organ"></div>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-header">Chakra Sacral</div>
        <div class="card-body">
            <div class="row">
                <div class="col-6">Tem desequilíbrio?</div>
                <div class="col-6" id="sacral_chakra_imbalance"></div>
            </div>
            <div class="row slider-container">
                <div class="col-6">Qual a % do desequilíbrio?</div>
                <div class="col-6">
                    <input type="range" id="sacral_chakra_percentage" disabled>
                    <span class="slider-value" id="sacral_chakra_percentage_value"></span>
                </div>
            </div>
            <div class="row">
                <div class="col-6">Qual a atividade do chakra?</div>
                <div class="col-6" id="sacral_chakra_activity"></div>
            </div>
            <div class="row">
                <div class="col-6">Afeta o corpo físico?</div>
                <div class="col-6" id="sacral_chakra_affects_organ"></div>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-header">Chakra Base</div>
        <div class="card-body">
            <div class="row">
                <div class="col-6">Tem desequilíbrio?</div>
                <div class="col-6" id="base_chakra_imbalance"></div>
            </div>
            <div class="row slider-container">
                <div class="col-6">Qual a % do desequilíbrio?</div>
                <div class="col-6">
                    <input type="range" id="base_chakra_percentage" disabled>
                    <span class="slider-value" id="base_chakra_percentage_value"></span>
                </div>
            </div>
            <div class="row">
                <div class="col-6">Qual a atividade do chakra?</div>
                <div class="col-6" id="base_chakra_activity"></div>
            </div>
            <div class="row">
                <div class="col-6">Afeta o corpo físico?</div>
                <div class="col-6" id="base_chakra_affects_organ"></div>
            </div>
        </div>
    </div>
</div>

<script>
    var url = window.location.href;
    var urlParts = url.split('/');
    var id = urlParts[urlParts.length - 1];
    console.log(id);

    $(document).ready(function() {
        $.getJSON(`/api/v1/anamnese/${id}`, function(data) {
            $("#photo").attr("src", data.photo);
            
            $("#coronary_chakra_imbalance").text(data.coronary_chakra_imbalance);
            $("#coronary_chakra_percentage").val(data.coronary_chakra_percentage);
            $("#coronary_chakra_percentage_value").text(data.coronary_chakra_percentage + "%");
            $("#coronary_chakra_activity").text(data.coronary_chakra_activity);
            $("#coronary_chakra_affects_organ").text(data.coronary_chakra_affects_organ);

            $("#frontal_chakra_imbalance").text(data.frontal_chakra_imbalance);
            $("#frontal_chakra_percentage").val(data.frontal_chakra_percentage);
            $("#frontal_chakra_percentage_value").text(data.frontal_chakra_percentage + "%");
            $("#frontal_chakra_activity").text(data.frontal_chakra_activity);
            $("#frontal_chakra_affects_organ").text(data.frontal_chakra_affects_organ);

            $("#laryngeal_chakra_imbalance").text(data.laryngeal_chakra_imbalance);
            $("#laryngeal_chakra_percentage").val(data.laryngeal_chakra_percentage);
            $("#laryngeal_chakra_percentage_value").text(data.laryngeal_chakra_percentage + "%");
            $("#laryngeal_chakra_activity").text(data.laryngeal_chakra_activity);
            $("#laryngeal_chakra_affects_organ").text(data.laryngeal_chakra_affects_organ);

            $("#cardiac_chakra_imbalance").text(data.cardiac_chakra_imbalance);
            $("#cardiac_chakra_percentage").val(data.cardiac_chakra_percentage);
            $("#cardiac_chakra_percentage_value").text(data.cardiac_chakra_percentage + "%");
            $("#cardiac_chakra_activity").text(data.cardiac_chakra_activity);
            $("#cardiac_chakra_affects_organ").text(data.cardiac_chakra_affects_organ);

            $("#solar_plexus_chakra_imbalance").text(data.solar_plexus_chakra_imbalance);
            $("#solar_plexus_chakra_percentage").val(data.solar_plexus_chakra_percentage);
            $("#solar_plexus_chakra_percentage_value").text(data.solar_plexus_chakra_percentage + "%");
            $("#solar_plexus_chakra_activity").text(data.solar_plexus_chakra_activity);
            $("#solar_plexus_chakra_affects_organ").text(data.solar_plexus_chakra_affects_organ);

            $("#sacral_chakra_imbalance").text(data.sacral_chakra_imbalance);
            $("#sacral_chakra_percentage").val(data.sacral_chakra_percentage);
            $("#sacral_chakra_percentage_value").text(data.sacral_chakra_percentage + "%");
            $("#sacral_chakra_activity").text(data.sacral_chakra_activity);
            $("#sacral_chakra_affects_organ").text(data.sacral_chakra_affects_organ);

            $("#base_chakra_imbalance").text(data.base_chakra_imbalance);
            $("#base_chakra_percentage").val(data.base_chakra_percentage);
            $("#base_chakra_percentage_value").text(data.base_chakra_percentage + "%");
            $("#base_chakra_activity").text(data.base_chakra_activity);
            $("#base_chakra_affects_organ").text(data.base_chakra_affects_organ);

            // Continue preenchendo os campos conforme necessário
        });
    });
</script>
</body>
</html>
