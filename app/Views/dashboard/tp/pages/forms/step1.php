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
                <input type="text" class="form-control" id="name" name="name" disabled autocomplete="off">
                <div class="invalid-feedback">Este campo é obrigatório.</div>
            </div>
            <div class="mb-3">
                <label for="birthDate" class="form-label">Data de nascimento:</label>
                <input type="date" class="form-control" id="birthDate" name="birthDate" disabled autocomplete="off">
                <div class="invalid-feedback">Este campo é obrigatório.</div>
                <input type="hidden" name="idPatient" id="idPatient">
            </div>
            <div class="mb-3">
                <label for="appointmentId" class="form-label">Atendimento</label>
                <input type="text" id="appointmentId" class="form-control" disabled>
            </div>
            <div class="text-end mt-3">
                <button type="button" class="btn btn-primary next-btn" data-next="#collapseTwo">Próximo</button>
            </div>
        </div>
    </div>
</div>