<?= $this->extend('dashboard/template') ?>
<?php $this->section('css') ?>

<link rel="stylesheet" href="/assets/css/custom/anamnese.css?v=<?= time() ?>">

<?php $this->endSection(); ?>

<?php $this->section('page') ?>
<div class="row">
    <div class="col-lg-8 col-xxl-8">
        <div class="card">
            <div class="card-body">
                <h3 class="mb-5 mt-3">Crie uma anamnese</h3>
                <?= form_open('api/v1/anamnese', 'id="wizard-form" class="needs-validation" novalidate') ?>
                <div class="accordion" id="wizardAccordion">
                    <!-- Step 1 -->
                    <?= $this->include('dashboard/ts/pages/forms/step1.php'); ?>
                    <!-- Step 2 -->
                    <?= $this->include('dashboard/ts/pages/forms/step2.php'); ?>
                    <!-- Step 3 -->
                    <?= $this->include('dashboard/ts/pages/forms/step3.php'); ?>
                    <!-- Step 4 -->
                    <?= $this->include('dashboard/ts/pages/forms/step4.php'); ?>
                    <!-- Step 5 -->
                    <?= $this->include('dashboard/ts/pages/forms/step5.php'); ?>
                    <!-- Step 6 -->
                    <?= $this->include('dashboard/ts/pages/forms/step6.php'); ?>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php $this->endSection(); ?>
<?php $this->section('js'); ?>

<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script src="/assets/js/pages/select2.init.js"></script>
<script>
    $(document).ready(function() {

        // Mostrar ou esconder o range-container baseado na seleção dos botões de rádio
        $('input[type="radio"]').on('click', function() {
            var $questionContainer = $(this).closest('.question-container');
            if ($(this).val() === 'sim') {
                $questionContainer.find('.range-container').removeClass('hidden').fadeIn(1000);
            } else {
                $questionContainer.find('.range-container').addClass('hidden');
            }
        });

        // Atualizar o fundo do range e a div correspondente com o valor
        $('input[type="range"]').each(function() {
            $(this).on('input', function() {
                var value = $(this).val();
                var min = $(this).attr('min') ? $(this).attr('min') : 0;
                var max = $(this).attr('max') ? $(this).attr('max') : 100;
                var percentage = (value - min) / (max - min) * 100;

                $(this).css('background', 'linear-gradient(to right, #6c63ff ' + percentage + '%, #cacaca ' + percentage + '%)');

                // Atualiza o valor na div correspondente
                var $valueLabel = $(this).siblings('.range-label');
                $valueLabel.text(value + '%');
            });
        });


        const rangeInput = document.getElementById('energia');
        const rangeValue = document.getElementById('value-energia');

        rangeInput.addEventListener('input', function() {
            rangeValue.textContent = `${this.value} A`;
        });
    });

    $(document).ready(function() {
        searchPatient(_idPatient)
        //verifyPatient();
    });

    function searchPatient(_idPatient) {
        $("#loadTimeLine").show();
        $.getJSON(`${_baseUrl}api/v1/patient/search/${_idPatient}`,
            function(data, textStatus, jqXHR) {
                $("#idPatient").val(data.id)
                $("#name").val(data.name)
                $("#birthDate").val(data.birthDate)

                $("#loadTimeLine").hide();
            }).fail(function() {
            Swal.fire({
                title: 'Dados não encontrados.',
                icon: 'error'
            });
        });
    }
</script>




<script>
    $(document).ready(function() {
        function validateStep(currentSection) {
            let isValid = true;
            currentSection.find('.required-field').each(function() {
                if (!this.checkValidity()) {
                    isValid = false;
                    $(this).addClass('is-invalid');
                } else {
                    $(this).removeClass('is-invalid');
                }
            });
            return isValid;
        }

        $('.next-btn').on('click', function() {
            const currentSection = $(this).closest('.accordion-section');
            const nextSectionId = $(this).data('next');
            const nextButton = $(nextSectionId).prev().find('.accordion-button');

            if (validateStep(currentSection)) {
                nextButton.prop('disabled', false);
                $(nextSectionId).collapse('show');
                currentSection.find('.accordion-button').attr('aria-expanded', 'false').addClass('collapsed');
                currentSection.find('.accordion-collapse').removeClass('show');
            }
        });

        $('.prev-btn').on('click', function() {
            const prevSectionId = $(this).data('prev');
            $(prevSectionId).collapse('show');
            const currentSection = $(this).closest('.accordion-section');
            currentSection.find('.accordion-button').attr('aria-expanded', 'false').addClass('collapsed');
            currentSection.find('.accordion-collapse').removeClass('show');
        });

        $('.accordion-button').on('click', function() {
            const isDisabled = $(this).attr('disabled');
            if (isDisabled) {
                return false;
            }
        });

        $('#wizard-form').on('submit', function(event) {
            if (this.checkValidity()) {
                // Se o formulário for válido, o envio será permitido
                this.classList.add('was-validated');
                // Não impede o envio do formulário
            } else {
                // Se o formulário não for válido, impede o envio e mostra a validação
                event.preventDefault();
                event.stopPropagation();
                this.classList.add('was-validated');
            }
        });

    });
</script>
<?php $this->endSection(); ?>