<?= $this->extend('dashboard/template') ?>
<?php $this->section('css') ?>
<style>
    .step {
        display: none;
    }

    .step.active {
        display: block;
    }

    .wizard-nav {
        list-style: none;
        padding: 0;
    }

    .wizard-nav li {
        padding: 10px;
        display: flex;
        align-items: center;
    }

    .wizard-nav li .number {
        background: #6c63ff;
        color: white;
        border-radius: 50%;
        width: 30px;
        height: 30px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-right: 10px;
    }

    .wizard-nav li.active .number {
        background: #6c63ff;
    }

    .wizard-nav li.completed .number {
        background: #28a745;
    }
</style>
<?php $this->endSection(); ?>
<?php $this->section('page') ?>

<div class="container mt-5">
    <div class="row">
        <div class="col-3">
            <ul class="wizard-nav">
                <li class="active"><span class="number">1</span> Informações Básicas</li>
                <li><span class="number">2</span> Campos Energéticos</li>
                <li><span class="number">3</span> Chakras Superiores</li>
                <li><span class="number">4</span> Chakras Inferiores</li>
                <li><span class="number">5</span> Campo Áurico</li>
                <li><span class="number">6</span> Finalizar</li>
            </ul>
        </div>
        <div class="col-9">
            <form id="wizard-form">
                <!-- Step 1 -->
                <div class="step active">
                    <h3>Informações Básicas</h3>
                    <p>Preencha as informações do paciente.</p>
                    <div class="mb-3">
                        <label for="nome" class="form-label">Nome Completo:</label>
                        <input type="text" class="form-control" id="nome" value="PAULO HENRIQUE" required>
                    </div>
                    <div class="mb-3">
                        <label for="data_nascimento" class="form-label">Data de nascimento:</label>
                        <input type="date" class="form-control" id="data_nascimento" value="1990-01-01" required>
                    </div>
                    <button type="button" class="btn btn-primary next-btn">Próximo</button>
                </div>

                <!-- Step 2 -->
                <div class="step">
                    <h3>ETAPA 1 - Campos Energéticos</h3>
                    <!-- Conteúdo específico desta etapa -->
                    <button type="button" class="btn btn-secondary prev-btn">Anterior</button>
                    <button type="button" class="btn btn-primary next-btn">Próximo</button>
                </div>

                <!-- Step 3 -->
                <div class="step">
                    <h3>ETAPA 2 - Chakras Superiores</h3>
                    <!-- Conteúdo específico desta etapa -->
                    <button type="button" class="btn btn-secondary prev-btn">Anterior</button>
                    <button type="button" class="btn btn-primary next-btn">Próximo</button>
                </div>

                <!-- Step 4 -->
                <div class="step">
                    <h3>ETAPA 2 - Chakras Inferiores</h3>
                    <!-- Conteúdo específico desta etapa -->
                    <button type="button" class="btn btn-secondary prev-btn">Anterior</button>
                    <button type="button" class="btn btn-primary next-btn">Próximo</button>
                </div>

                <!-- Step 5 -->
                <div class="step">
                    <h3>ETAPA 3 - Campo Áurico</h3>
                    <!-- Conteúdo específico desta etapa -->
                    <button type="button" class="btn btn-secondary prev-btn">Anterior</button>
                    <button type="button" class="btn btn-primary next-btn">Próximo</button>
                </div>

                <!-- Step 6 -->
                <div class="step">
                    <h3>Finalizar</h3>
                    <button type="button" class="btn btn-secondary prev-btn">Anterior</button>
                    <button type="submit" class="btn btn-success">Enviar</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php $this->endSection(); ?>
<?php $this->section('js'); ?>
<script>
    $(document).ready(function() {
        var currentStep = 0;
        var steps = $(".step");
        var navItems = $(".wizard-nav li");

        function showStep(step) {
            steps.removeClass("active");
            steps.eq(step).addClass("active");

            navItems.removeClass("active completed");
            for (var i = 0; i <= step; i++) {
                navItems.eq(i).addClass("completed");
            }
            navItems.eq(step).addClass("active");
        }

        $(".next-btn").click(function() {
            if (currentStep < steps.length - 1) {
                currentStep++;
                showStep(currentStep);
            }
        });

        $(".prev-btn").click(function() {
            if (currentStep > 0) {
                currentStep--;
                showStep(currentStep);
            }
        });

        $("#wizard-form").submit(function(event) {
            event.preventDefault();
            alert("Formulário enviado com sucesso!");
        });

        showStep(currentStep);
    });
</script>
<?php $this->endSection(); ?>