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
                <input type="text" class="form-control required-field" id="name" name="name" required disabled>
                <div class="invalid-feedback">Este campo é obrigatório.</div>
            </div>
            <div class="mb-3">
                <label for="birthDate" class="form-label">Data de nascimento:</label>
                <input type="date" class="form-control required-field" id="birthDate" name="birthDate" required disabled>
                <div class="invalid-feedback">Este campo é obrigatório.</div>
                <input type="hidden" name="idPatient" id="idPatient">
            </div>
            <button type="button" class="btn btn-primary next-btn" data-next="#collapseTwo">Próximo</button>
        </div>
    </div>
</div>