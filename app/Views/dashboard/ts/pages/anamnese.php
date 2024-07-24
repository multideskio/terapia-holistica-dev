<?= $this->extend('dashboard/template') ?>
<?php $this->section('css') ?>
<!-- nouisliderribute css -->
<link rel="stylesheet" href="/assets/libs/nouislider/nouislider.min.css">

<style>
    .accordion-button:not(.collapsed) {
        background-color: #6c63ff;
        color: white;
    }

    .accordion-button {
        display: flex;
        align-items: center;
    }

    .accordion-button .number {
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

    .accordion-button.completed .number {
        background: #28a745;
    }
</style>
<?php $this->endSection(); ?>
<?php $this->section('page') ?>

<div class="container mt-5">
    <h2>Formulário Wizard</h2>
    <form id="wizard-form" class="needs-validation" novalidate>
        <div class="accordion" id="wizardAccordion">
            <!-- Step 1 -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        <span class="number">1</span> Informações Básicas
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#wizardAccordion">
                    <div class="accordion-body">
                        <div class="mb-3">
                            <label for="nome" class="form-label">Nome Completo:</label>
                            <input type="text" class="form-control" id="nome" value="PAULO HENRIQUE" required>
                            <div class="invalid-feedback">Este campo é obrigatório.</div>
                        </div>
                        <div class="mb-3">
                            <label for="data_nascimento" class="form-label">Data de nascimento:</label>
                            <input type="date" class="form-control" id="data_nascimento" value="1990-01-01" required>
                            <div class="invalid-feedback">Este campo é obrigatório.</div>
                        </div>
                        <button type="button" class="btn btn-primary next-btn" data-next="#collapseTwo">Próximo</button>
                    </div>
                </div>
            </div>

            <!-- Step 2 -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        <span class="number">2</span> Campos Energéticos
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#wizardAccordion">
                    <div class="accordion-body">
                        <p>Trata-se do acesso aos campos eletromagnéticos, possibilitando a medição energética dos campos mental, emocional, espiritual e físico.</p>

                        <div class="mb-3">
                            <label class="form-label">Campo/Corpo Mental</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="mentalDesequilibrio" id="mentalSim" value="sim" required>
                                <label class="form-check-label" for="mentalSim">Sim</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="mentalDesequilibrio" id="mentalNao" value="não" required>
                                <label class="form-check-label" for="mentalNao">Não</label>
                            </div>
                            <label for="mentalPercentual" class="form-label mt-2">Qual a % do desequilíbrio?</label>
                            <input type="range" class="form-range" id="mentalPercentual" min="0" max="100" value="50">
                            <div class="invalid-feedback">Este campo é obrigatório.</div>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Campo/Corpo Emocional</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="emocionalDesequilibrio" id="emocionalSim" value="sim" required>
                                <label class="form-check-label" for="emocionalSim">Sim</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="emocionalDesequilibrio" id="emocionalNao" value="não" required>
                                <label class="form-check-label" for="emocionalNao">Não</label>
                            </div>

                            <label for="emocionalPercentual" class="form-label mt-2">Qual a % do desequilíbrio?</label>
                            <br>
                            <span id="emocionalPercentualReturn">50</span>%
                            <input type="range"  class="form-range" id="emocionalPercentual" min="0" max="100" value="50">
                            
                            <div data-rangeslider data-slider-color="primary" data-slider-size="sm" class="noUi-target noUi-ltr noUi-horizontal noUi-txt-dir-ltr"></div>

                            <div class="invalid-feedback">Este campo é obrigatório.</div>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Campo/Corpo Espiritual</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="espiritualDesequilibrio" id="espiritualSim" value="sim" required>
                                <label class="form-check-label" for="espiritualSim">Sim</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="espiritualDesequilibrio" id="espiritualNao" value="não" required>
                                <label class="form-check-label" for="espiritualNao">Não</label>
                            </div>
                            <label for="espiritualPercentual" class="form-label mt-2">Qual a % do desequilíbrio?</label>
                            <input type="range" class="form-range" id="espiritualPercentual" min="0" max="100" value="50">
                            <div class="invalid-feedback">Este campo é obrigatório.</div>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Campo/Corpo Físico</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="fisicoDesequilibrio" id="fisicoSim" value="sim" required>
                                <label class="form-check-label" for="fisicoSim">Sim</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="fisicoDesequilibrio" id="fisicoNao" value="não" required>
                                <label class="form-check-label" for="fisicoNao">Não</label>
                            </div>
                            <label for="fisicoPercentual" class="form-label mt-2">Qual a % do desequilíbrio?</label>
                            <input type="range" class="form-range" id="fisicoPercentual" min="0" max="100" value="50">
                            <div class="invalid-feedback">Este campo é obrigatório.</div>
                        </div>

                        <button type="button" class="btn btn-secondary prev-btn" data-prev="#collapseOne">Anterior</button>
                        <button type="button" class="btn btn-primary next-btn" data-next="#collapseThree">Próximo</button>
                    </div>
                </div>
            </div>

            <!-- Outras etapas aqui... -->

            <!-- Step 3 -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        <span class="number">3</span> Chakras Superiores
                    </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#wizardAccordion">
                    <div class="accordion-body">
                        <!-- Conteúdo específico desta etapa -->
                        <button type="button" class="btn btn-secondary prev-btn" data-prev="#collapseTwo">Anterior</button>
                        <button type="button" class="btn btn-primary next-btn" data-next="#collapseFour">Próximo</button>
                    </div>
                </div>
            </div>

            <!-- Step 4 -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingFour">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                        <span class="number">4</span> Chakras Inferiores
                    </button>
                </h2>
                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#wizardAccordion">
                    <div class="accordion-body">
                        <!-- Conteúdo específico desta etapa -->
                        <button type="button" class="btn btn-secondary prev-btn" data-prev="#collapseThree">Anterior</button>
                        <button type="button" class="btn btn-primary next-btn" data-next="#collapseFive">Próximo</button>
                    </div>
                </div>
            </div>

            <!-- Step 5 -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingFive">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                        <span class="number">5</span> Campo Áurico
                    </button>
                </h2>
                <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#wizardAccordion">
                    <div class="accordion-body">
                        <!-- Conteúdo específico desta etapa -->
                        <button type="button" class="btn btn-secondary prev-btn" data-prev="#collapseFour">Anterior</button>
                        <button type="button" class="btn btn-primary next-btn" data-next="#collapseSix">Próximo</button>
                    </div>
                </div>
            </div>

            <!-- Step 6 -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingSix">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                        <span class="number">6</span> Finalizar
                    </button>
                </h2>
                <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#wizardAccordion">
                    <div class="accordion-body">
                        <div class="mb-3">
                            <label for="observacoes" class="form-label">Observações:</label>
                            <textarea class="form-control" id="observacoes" rows="3"></textarea>
                        </div>
                        <button type="button" class="btn btn-secondary prev-btn" data-prev="#collapseFive">Anterior</button>
                        <button type="submit" class="btn btn-success">Finalizar</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>

<?php $this->endSection(); ?>
<?php $this->section('js'); ?>
<!-- nouisliderribute js -->
<script src="/assets/libs/nouislider/nouislider.min.js"></script>
<script>
    var sliderColorScheme = document.querySelectorAll('[data-rangeslider]');

    sliderColorScheme.forEach(function(slider) {
        noUiSlider.create(slider, {
            start: 50,
            connect: 'lower',
            range: {
                'min': 0,
                'max': 100
            },
        });
    });
</script>
<script>
    (function() {
        'use strict'

        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.querySelectorAll('.needs-validation')

        // Loop over them and prevent submission
        Array.prototype.slice.call(forms)
            .forEach(function(form) {
                form.addEventListener('submit', function(event) {
                    if (!form.checkValidity()) {
                        event.preventDefault()
                        event.stopPropagation()
                    }

                    form.classList.add('was-validated')
                }, false)
            })
    })()

    $(document).ready(function() {
        $('.next-btn').click(function() {
            var nextId = $(this).data('next');
            var currentAccordion = $(this).closest('.accordion-item');

            if (currentAccordion.find('input:invalid').length === 0) {
                $(nextId).collapse('show');
                currentAccordion.find('.accordion-button').addClass('completed');
            }
        });

        $('.prev-btn').click(function() {
            var prevId = $(this).data('prev');
            $(prevId).collapse('show');
        });


        $('#emocionalPercentual').on('input', function() {
            var rangeValue = $(this).val();
            $('#emocionalPercentualReturn').text(rangeValue);
        });
    });
</script>
<?php $this->endSection(); ?>