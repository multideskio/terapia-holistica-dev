<!-- JAVASCRIPT -->
<script src="/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="/assets/libs/simplebar/simplebar.min.js"></script>
<script src="/assets/libs/node-waves/waves.min.js"></script>
<script src="/assets/libs/feather-icons/feather.min.js"></script>
<script src="/assets/js/pages/plugins/lord-icon-2.1.0.js"></script>
<script src="/assets/js/plugins.js"></script>
<script>
    let _baseUrl = "<?= site_url() ?>";

    let _idUser <?= (!empty(session('data')['id'])) ? "= " . session('data')['id'] : null ?>;
    //let _idPatient <?= (!empty($idPatientControl))     ? "= {$idPatientControl}"  : null ?>;

    let _idPatient = (function() {
        var url = window.location.href;
        var urlParts = url.split('/');
        var lastPart = urlParts[urlParts.length - 1];

        // Verifica se o último segmento é um número
        if (!isNaN(lastPart) && lastPart.trim() !== '') {
            return Number(lastPart); // Retorna como número
        } else {
            return ''; // Retorna false se não for número
        }
    })();


    console.log(_idPatient)
</script>