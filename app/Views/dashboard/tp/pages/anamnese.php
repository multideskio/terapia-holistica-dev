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
                    <?= $this->include('dashboard/tp/pages/forms/step1.php'); ?>
                    <!-- Step 2 -->
                    <?= $this->include('dashboard/tp/pages/forms/step2.php'); ?>
                    <!-- Step 3 -->
                    <?= $this->include('dashboard/tp/pages/forms/step3.php'); ?>
                    <!-- Step 4 -->
                    <?= $this->include('dashboard/tp/pages/forms/step4.php'); ?>
                    <!-- Step 5 -->
                    <?= $this->include('dashboard/tp/pages/forms/step5.php'); ?>
                    <!-- Step 6 -->
                    <?= $this->include('dashboard/tp/pages/forms/step6.php'); ?>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php $this->endSection(); ?>
<?php $this->section('js'); ?>

<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<script>
    var url = window.location.href;
    var urlParts = url.split('/');
    var id = urlParts[urlParts.length - 1];

    $(document).ready(function() {
        searchPatient(_idPatient)

        $("#appointmentId").val(getCookie('appointmentId'));

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

    function searchPatient(_idPatient) {
        $("#loadTimeLine").show();
        $.getJSON(`${_baseUrl}api/v1/customer/search/${_idPatient}`,
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

    $(document).ready(function() {
        // Inicializar Select2
        $('#corExcesso').select2();
        $('#corFalta').select2();

        // Função para validar passo
        function validateStep(currentSection) {
            let isValid = true;
            currentSection.find('.required-field').each(function() {
                const $this = $(this);
                if (!this.checkValidity() || !$this.val().length) {
                    isValid = false;
                    $this.addClass('is-invalid');
                    $this.siblings('.invalid-feedback').show();
                } else {
                    $this.removeClass('is-invalid');
                    $this.siblings('.invalid-feedback').hide();
                }
            });
            return isValid;
        }

        // Configurar navegação de passos
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

        // 
        $('.prev-btn').on('click', function() {
            const prevSectionId = $(this).data('prev');
            $(prevSectionId).collapse('show');
            const currentSection = $(this).closest('.accordion-section');
            currentSection.find('.accordion-button').attr('aria-expanded', 'false').addClass('collapsed');
            currentSection.find('.accordion-collapse').removeClass('show');
        });

        // Impedir navegação se o botão estiver desabilitado
        $('.accordion-button').on('click', function() {
            const isDisabled = $(this).attr('disabled');
            if (isDisabled) {
                return false;
            }
        });



        $('#wizard-form').ajaxForm({
            beforeSubmit: function(formData, jqForm, options) {
                // Verificação de validade do formulário
                if (!jqForm[0].checkValidity()) {
                    jqForm[0].classList.add('was-validated');
                    return false; // Impede o envio do formulário se for inválido
                }

                Swal.fire({
                    text: 'Enviando informações...',
                    icon: 'info',
                    showConfirmButton: false,
                    allowOutsideClick: false
                });
            },
            success: function(responseText, statusText, xhr, $form) {
                console.log(responseText.url);
                console.log(statusText);
                Swal.fire({
                    text: 'Anamnese gerada com sucesso',
                    icon: 'success',
                    showCancelButton: true,
                    confirmButtonText: 'Acessar link',
                    cancelButtonText: 'Fechar',
                    cancelButtonColor: '#d33',
                    confirmButtonColor: '#3085d6'
                }).then(function(result) {
                    // Recarrega a página após qualquer ação
                    if (result.isConfirmed) {
                        window.open(responseText.url, '_blank'); // Abre o link em uma nova aba
                    }
                    location.reload(); // Recarrega a página
                });
            },
            error: function(xhr, status, error) {
                Swal.fire({
                    text: 'Erro ao enviar o formulário.',
                    icon: 'error'
                });
            }
        });

    });


    function getCookie(name) {
        var nameEQ = name + "=";
        var ca = document.cookie.split(';');
        for (var i = 0; i < ca.length; i++) {
            var c = ca[i];
            while (c.charAt(0) == ' ') c = c.substring(1, c.length);
            if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length, c.length);
        }
        return null;
    }
</script>
<?php $this->endSection(); ?>