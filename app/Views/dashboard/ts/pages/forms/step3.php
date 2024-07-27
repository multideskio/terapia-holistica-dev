<div class="accordion-item accordion-section">
    <h2 class="accordion-header" id="headingThree">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree" disabled>
            <span class="number">3</span> Chakras Superiores
        </button>
    </h2>
    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#wizardAccordion">
        <div class="accordion-body">
            <!-- Conteúdo específico desta etapa -->
            <p>Trata-se da medição energética de cada um dos 7 principais chakras e glândulas correspondentes.</p>

            <div class="row">
                <div class="col-md-6">
                    <div class="p-3 border border-1">
                        <div class="question-container">
                            <h5>Chakra Coronário</h5>
                            <div class="mb-2">
                                <label class="form-label">Tem desequilíbrio?</label>
                                <div>
                                    <div class="btn-group">
                                        <input class="btn-check form-check-input required-field" type="radio" name="chakraCoronarioDesiquilibrio" id="chakraCoronarioDesiquilibrioSim" value="sim">
                                        <label class="btn btn-outline-primary form-check-label" for="chakraCoronarioDesiquilibrioSim">Sim</label>
                                        <input class="btn-check form-check-input required-field" type="radio" name="chakraCoronarioDesiquilibrio" id="chakraCoronarioDesiquilibrioNao" value="não">
                                        <label class="btn btn-outline-danger form-check-label" for="chakraCoronarioDesiquilibrioNao">Não</label>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-2 range-container hidden">
                                <label for="chakraCoronarioPercentual" class="form-label mt-2">Qual a % do desequilíbrio?</label>
                                <div>
                                    <input type="range" id="chakraCoronarioPercentual" min="0" max="100" value="50" name="chakraCoronarioPercentual">
                                    <div class="range-label" id="value-chakraCoronarioPercentual">50%</div>
                                    <div class="invalid-feedback">Este campo é obrigatório.</div>
                                </div>
                                <div class="invalid-feedback">Este campo é obrigatório.</div>
                            </div>
                            <div class="mb-2">
                                <label for="chakraCoronarioAtividade">Qual a atividade do chakra?</label>
                                <input type="text" class="form-control required-field" id="chakraCoronarioAtividade" name="chakraCoronarioAtividade">
                                <div class="invalid-feedback">Este campo é obrigatório.</div>
                            </div>
                        </div>
                        <div class="mb-2">
                            <label class="form-label">Afeta glândula/órgão correspondente?</label>
                            <div>
                                <div class="btn-group">
                                    <input class="btn-check form-check-input required-field" type="radio" name="chakraCoronarioOrgao" id="chakraCoronarioOrgaoSim" value="sim">
                                    <label class="btn btn-outline-primary form-check-label" for="chakraCoronarioOrgaoSim">Sim</label>
                                    <input class="btn-check form-check-input required-field" type="radio" name="chakraCoronarioOrgao" id="chakraCoronarioOrgaoNao" value="não">
                                    <label class="btn btn-outline-danger form-check-label" for="chakraCoronarioOrgaoNao">Não</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="p-3 border border-1">
                        <div class="question-container">
                            <h5>Chakra Frontal</h5>
                            <div class="mb-2">
                                <label class="form-label">Tem desequilíbrio?</label>
                                <div>
                                <div class="btn-group">
                                    <input class="btn-check form-check-input required-field" type="radio" name="chakraFrontalDesiquilobrio" id="chakraFrontalDesiquilibrioSim" value="sim">
                                    <label class="btn btn-outline-primary form-check-label" for="chakraFrontalDesiquilibrioSim">Sim</label>
                                    <input class="btn-check form-check-input required-field" type="radio" name="chakraFrontalDesiquilobrio" id="chakraFrontalDesiquilibrioNao" value="não">
                                    <label class="btn btn-outline-danger form-check-label" for="chakraFrontalDesiquilibrioNao">Não</label>
                                </div>
                            </div>
                            </div>
                            <div class="mb-2 range-container hidden">
                                <label for="chakraFrontalPercentual" class="form-label mt-2">Qual a % do desequilíbrio?</label>
                                <div>
                                    <input type="range" id="chakraFrontalPercentual" min="0" max="100" value="50" name="chakraFrontalPercentual">
                                    <div class="range-label" id="value-chakraFrontalPercentual">50%</div>
                                    <div class="invalid-feedback">Este campo é obrigatório.</div>
                                </div>
                                <div class="invalid-feedback">Este campo é obrigatório.</div>
                            </div>
                            <div class="mb-2">
                                <label for="chakraFrontalAtividade">Qual a atividade do chakra?</label>
                                <input type="text" class="form-control required-field" id="chakraFrontalAtividade" name="chakraFrontalAtividade">
                                <div class="invalid-feedback">Este campo é obrigatório.</div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Afeta glândula/órgão correspondente?</label>
                            <div>
                                <div class="btn-group">
                                    <input class="btn-check form-check-input required-field" type="radio" name="chakraFrontalOrgao" id="chakraFrontalOrgaoSim" value="sim">
                                    <label class="btn btn-outline-primary form-check-label" for="chakraFrontalOrgaoSim">Sim</label>
                                    <input class="btn-check form-check-input required-field" type="radio" name="chakraFrontalOrgao" id="chakraFrontalOrgaoNao" value="não">
                                    <label class="btn btn-outline-danger form-check-label" for="chakraFrontalOrgaoNao">Não</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-end mt-3">
                <button type="button" class="btn btn-secondary prev-btn" data-prev="#collapseTwo">Anterior</button>
                <button type="button" class="btn btn-primary next-btn" data-next="#collapseFour">Próximo</button>
            </div>
        </div>
    </div>
</div>