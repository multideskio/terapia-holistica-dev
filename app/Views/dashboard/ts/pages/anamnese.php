<?= $this->extend('dashboard/template') ?>
<?php $this->section('css') ?>
<!-- nouisliderribute css -->
<link rel="stylesheet" href="/assets/libs/nouislider/nouislider.min.css">
<link rel="stylesheet" href="/assets/css/custom/anamnese.css?v=<?= time() ?>">
<?php $this->endSection(); ?>
<?php $this->section('page') ?>
<div class="row">
    <div class="col-md-8">
        <div class="card">
            <div class="card-body">
                <h2 class="mb-5 mt-3">Crie uma anamnese</h2>
                <form id="wizard-form" class="needs-validation" novalidate>
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
<!-- nouisliderribute js -->
<script src="/assets/libs/nouislider/nouislider.min.js"></script>
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

    });


    /*function verifyPatient() {
        if (!_idPatient) {
            Swal.fire({
                title: 'Você precisa definir um paciente antes de começar a anamnese',
                type: 'error'
            });
        }
    }*/

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
            event.preventDefault();
            if (!this.checkValidity()) {
                event.stopPropagation();
            }
            this.classList.add('was-validated');
        });
    });
</script>
<?php $this->endSection(); ?>