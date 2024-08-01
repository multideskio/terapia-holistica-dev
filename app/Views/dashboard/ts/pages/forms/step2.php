<div class="accordion-item accordion-section">
    <h2 class="accordion-header" id="headingTwo">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" disabled>
            <span class="number">2</span> Campos Energéticos
        </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#wizardAccordion">
        <div class="accordion-body">
            <p>Trata-se do acesso aos campos eletromagnéticos, possibilitando a medição energética dos campos mental, emocional, espiritual e físico.</p>
            <p class="text-primary fw-bold">* Todos os campos devem ser respondidos</p>
            <div class="row">
                <div class="col-md-6 p-2">
                    <div class="question-container mb-3">
                        <p class="w-900">Campo/Corpo Mental</p>
                        <p>Tem desequilíbrio?</p>
                        <div class="mb-3 btn-group">
                            <input class="btn-check form-check-input required-field" type="radio" name="mentalDesequilibrio" id="mentalSim" value="sim">
                            <label class="btn btn-outline-primary form-check-label" for="mentalSim">Sim</label>
                            <input class="btn-check form-check-input required-field" type="radio" name="mentalDesequilibrio" id="mentalNao" value="não">
                            <label class="btn btn-outline-danger form-check-label" for="mentalNao">Não</label>
                        </div>
                        <div class="range-container hidden">
                            <label for="mentalPercentual" class="form-label mt-2">Qual a % do desequilíbrio?</label>
                            <div>
                                <input type="range" id="mentalPercentual" min="0" max="100" value="50" name="mentalPercentual">
                                <div class="range-label" id="value-mentalPercentual">50%</div>
                                <div class="invalid-feedback">Este campo é obrigatório.</div>
                            </div>
                        </div>
                    </div>
                    <div class="question-container">
                        <p class="w-900">Campo/Corpo Emocional</p>
                        <p>Tem desequilíbrio?</p>
                        <div class="mb-3 btn-group">
                            <input class="btn-check form-check-input required-field" type="radio" name="emocionalDesequilibrio" id="emocionalSim" value="sim">
                            <label class="btn btn-outline-primary form-check-label" for="emocionalSim">Sim</label>
                            <input class="btn-check form-check-input required-field" type="radio" name="emocionalDesequilibrio" id="emocionalNao" value="não">
                            <label class="btn btn-outline-danger form-check-label" for="emocionalNao">Não</label>
                        </div>

                        <div class="range-container hidden">
                            <label for="emocionalPercentual" class="form-label mt-2">Qual a % do desequilíbrio?</label>
                            <div>
                                <input type="range" id="emocionalPercentual" min="0" max="100" value="50" name="emocionalPercentual">
                                <div class="range-label" id="value-emocionalPercentual">50%</div>
                                <div class="invalid-feedback">Este campo é obrigatório.</div>
                            </div>
                        </div>
                    </div>


                </div>
                <div class="col-md-6 p-2">
                    <div class="question-container mb-3">
                        <p class="w-900">Campo/Corpo Espiritual</p>
                        <p>Tem desequilíbrio?</p>
                        <div class="mb-3 btn-group">
                            <input class="btn-check form-check-input required-field" type="radio" name="espiritualDesequilibrio" id="espiritualSim" value="sim">
                            <label class="btn btn-outline-primary form-check-label" for="espiritualSim">Sim</label>
                            <input class="btn-check form-check-input required-field" type="radio" name="espiritualDesequilibrio" id="espiritualNao" value="não">
                            <label class="btn btn-outline-danger form-check-label" for="espiritualNao">Não</label>
                        </div>
                        <div class="range-container hidden">
                            <label for="espiritualPercentual" class="form-label mt-2">Qual a % do desequilíbrio?</label>
                            <div>
                                <input type="range" id="espiritualPercentual" min="0" max="100" value="50" name="espiritualPercentual">
                                <div class="range-label" id="value-espiritualPercentual">50%</div>
                                <div class="invalid-feedback">Este campo é obrigatório.</div>
                            </div>
                        </div>
                    </div>

                    <div class="question-container">
                        <p class="w-900">Campo/Corpo Físico</p>
                        <p>Tem desequilíbrio?</p>
                        <div class="mb-3 btn-group">
                            <input class="btn-check form-check-input required-field" type="radio" name="fisicoDesequilibrio" id="fisicoSim" value="sim">
                            <label class="btn btn-outline-primary form-check-label" for="fisicoSim">Sim</label>
                            <input class="btn-check form-check-input required-field" type="radio" name="fisicoDesequilibrio" id="fisicoNao" value="não">
                            <label class="btn btn-outline-danger form-check-label" for="fisicoNao">Não</label>
                        </div>
                        <div class="range-container hidden">
                            <label for="fisicoPercentual" class="form-label mt-2">Qual a % do desequilíbrio?</label>
                            <div>
                                <input type="range" id="fisicoPercentual" min="0" max="100" value="50" name="fisicoPercentual">
                                <div class="range-label" id="value-fisicoPercentual">50%</div>
                                <div class="invalid-feedback">Este campo é obrigatório.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-end mt-3">
                <div class="btn-group">
                    <button type="button" class="btn btn-secondary prev-btn" data-prev="#collapseOne">Anterior</button>
                    <button type="button" class="btn btn-primary next-btn" data-next="#collapseThree">Próximo</button>
                </div>
            </div>
        </div>
    </div>
</div>