<?= $this->extend('dashboard/template') ?>
<?php $this->section('css') ?>
<!-- nouisliderribute css -->
<link rel="stylesheet" href="/assets/libs/nouislider/nouislider.min.css">

<style>
    .required-field:invalid {
        border-color: red;
    }

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