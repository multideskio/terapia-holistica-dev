<div class="accordion-item accordion-section">
    <h2 class="accordion-header" id="headingTwo">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" disabled>
            <span class="number">2</span> Campos Energéticos
        </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#wizardAccordion">
        <div class="accordion-body">
            <p>Trata-se do acesso aos campos eletromagnéticos, possibilitando a medição energética dos campos mental, emocional, espiritual e físico.</p>
            <p class="text-info fw-bold">* Todos os campos devem ser respondidos</p>
            <div class="mb-3 p-2 border border-1">
                <label class="form-label">Campo/Corpo Mental</label>
                <div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input required-field" type="radio" name="mentalDesequilibrio" id="mentalSim" value="sim" required>
                        <label class="form-check-label" for="mentalSim">Sim</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input required-field" type="radio" name="mentalDesequilibrio" id="mentalNao" value="não" required>
                        <label class="form-check-label" for="mentalNao">Não</label>
                    </div>
                </div>
                <label for="mentalPercentual" class="form-label mt-2">Qual a % do desequilíbrio?</label>
                <input type="range" class="form-range required-field" id="mentalPercentual" min="0" max="100" value="50" required>
                <div class="invalid-feedback">Este campo é obrigatório.</div>
            </div>

            <div class="mb-3 p-2 border border-1">
                <label class="form-label">Campo/Corpo Emocional</label>
                <div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input required-field" type="radio" name="emocionalDesequilibrio" id="emocionalSim" value="sim" required>
                        <label class="form-check-label" for="emocionalSim">Sim</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input required-field" type="radio" name="emocionalDesequilibrio" id="emocionalNao" value="não" required>
                        <label class="form-check-label" for="emocionalNao">Não</label>
                    </div>
                </div>
                <label for="emocionalPercentual" class="form-label mt-2">Qual a % do desequilíbrio?</label>
                <input type="range" class="form-range required-field" id="emocionalPercentual" min="0" max="100" value="50" required>
                <div class="invalid-feedback">Este campo é obrigatório.</div>
            </div>

            <div class="mb-3 p-2 border border-1">
                <label class="form-label">Campo/Corpo Espiritual</label>
                <div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input required-field" type="radio" name="espiritualDesequilibrio" id="espiritualSim" value="sim" required>
                        <label class="form-check-label" for="espiritualSim">Sim</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input required-field" type="radio" name="espiritualDesequilibrio" id="espiritualNao" value="não" required>
                        <label class="form-check-label" for="espiritualNao">Não</label>
                    </div>
                </div>
                <label for="espiritualPercentual" class="form-label mt-2">Qual a % do desequilíbrio?</label>
                <input type="range" class="form-range required-field" id="espiritualPercentual" min="0" max="100" value="50" required>
                <div class="invalid-feedback">Este campo é obrigatório.</div>
            </div>

            <div class="mb-3 p-2 border border-1">
                <label class="form-label">Campo/Corpo Físico</label>
                <div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input required-field" type="radio" name="fisicoDesequilibrio" id="fisicoSim" value="sim" required>
                        <label class="form-check-label" for="fisicoSim">Sim</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input required-field" type="radio" name="fisicoDesequilibrio" id="fisicoNao" value="não" required>
                        <label class="form-check-label" for="fisicoNao">Não</label>
                    </div>
                </div>
                <label for="fisicoPercentual" class="form-label mt-2">Qual a % do desequilíbrio?</label>
                <input type="range" class="form-range required-field" id="fisicoPercentual" min="0" max="100" value="50" required>
                <div class="invalid-feedback">Este campo é obrigatório.</div>
            </div>

            <button type="button" class="btn btn-secondary prev-btn" data-prev="#collapseOne">Anterior</button>
            <button type="button" class="btn btn-primary next-btn" data-next="#collapseThree">Próximo</button>
        </div>
    </div>
</div>