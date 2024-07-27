<div class="accordion-item accordion-section">
    <h2 class="accordion-header" id="headingOne">
        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
            <span class="number">1</span> Informações Básicas
        </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#wizardAccordion">
        <div class="accordion-body">
            <p>Informações do paciente.</p>
            <div class="mb-3">
                <label for="name" class="form-label">Nome Completo:</label>
                <input type="text" class="form-control required-field" id="name" name="name" disabled>
                <div class="invalid-feedback">Este campo é obrigatório.</div>
            </div>
            <div class="mb-3">
                <label for="birthDate" class="form-label">Data de nascimento:</label>
                <input type="date" class="form-control required-field" id="birthDate" name="birthDate" disabled>
                <div class="invalid-feedback">Este campo é obrigatório.</div>
                <input type="hidden" name="idPatient" id="idPatient">
            </div>
            <div class="text-end mt-3">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalId">Atualizar paciente</button>
                <button type="button" class="btn btn-primary next-btn" data-next="#collapseTwo">Próximo</button>
            </div>
        </div>
    </div>
</div>


<!-- if you want to close by clicking outside the modal, delete the last endpoint:data-bs-backdrop and data-bs-keyboard -->
<div class="modal fade" id="modalId" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalTitleId">
                    Atualizar paciente
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <?= form_open('', 'class=""') ?>
            <div class="modal-body">

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save</button>
            </div>
            </form>
        </div>
    </div>
</div>