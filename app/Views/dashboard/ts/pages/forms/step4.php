<div class="accordion-item accordion-section">
    <h2 class="accordion-header" id="headingFour">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour" disabled>
            <span class="number">4</span> Chakras Inferiores
        </button>
    </h2>
    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#wizardAccordion">
        <div class="accordion-body">
            <!-- Conteúdo específico desta etapa -->
            <p>Trata-se da medição energética de cada um dos 7 principais chakras e glândulas correspondentes.</p>
            <div class="row">
                <div class="col-md-6 mb-3">
                    <div class="p-3 border border-1">
                        <h5>Chakra Plexo Solar</h5>
                        <div class="question-container">
                            <div class="mb-2">
                                <p class="fw-bold text-dark mt-3 mb-1">Tem desequilíbrio?</p>
                                <input class="btn-check form-check-input required-field" type="radio" name="chakraPlexoSolarDesiquilobrio" id="chakraPlexoSolarDesiquilobrioSim" value="sim" required>
                                <label class="btn btn-outline-primary form-check-label" for="chakraPlexoSolarDesiquilobrioSim">Sim</label>
                                <input class="btn-check form-check-input required-field" type="radio" name="chakraPlexoSolarDesiquilobrio" id="chakraPlexoSolarDesiquilobrioNao" value="não">
                                <label class="btn btn-outline-danger form-check-label" for="chakraPlexoSolarDesiquilobrioNao">Não</label>
                                <p class="invalid-feedback">Escolha obrigatória</p>
                            </div>
                            <div class="mb-2 range-container hidden">
                                <p class="fw-bold text-dark mt-3 mb-1">Qual a % do desequilíbrio?</p>
                                <input type="range" id="chakraPlexoSolarPercentual" min="0" max="100" value="50" name="chakraPlexoSolarPercentual" required>
                                <div class="range-label" id="value-chakraPlexoSolarPercentual">50%</div>
                                <div class="invalid-feedback">Este campo é obrigatório.</div>
                            </div>
                        </div>
                        <div class="mb-2">
                            <p class="fw-bold text-dark mt-3 mb-1">Qual a atividade do chakra?</p>
                            <input class="btn-check form-check-input required-field" type="radio" name="chakraPlexoSolarAtividade" id="chakraPlexoSolarAtividadeHipo" value="HIPO" required>
                            <label class="btn btn-outline-dark form-check-label" for="chakraPlexoSolarAtividadeHipo">HIPO</label>
                            <input class="btn-check form-check-input required-field" type="radio" name="chakraPlexoSolarAtividade" id="chakraPlexoSolarAtividadeHiper" value="HIPER">
                            <label class="btn btn-outline-dark form-check-label" for="chakraPlexoSolarAtividadeHiper">HIPER</label>
                            <div class="invalid-feedback">Este campo é obrigatório.</div>
                        </div>
                        <div class="mb-2">
                            <p class="fw-bold text-dark mt-3 mb-1">Afeta glândula/órgão correspondente?</p>
                            <input class="btn-check form-check-input required-field" type="radio" name="chakraPlexoSolarOrgao" id="chakraPlexoSolarOrgaoSim" value="sim" required>
                            <label class="btn btn-outline-primary form-check-label" for="chakraPlexoSolarOrgaoSim">Sim</label>
                            <input class="btn-check form-check-input required-field" type="radio" name="chakraPlexoSolarOrgao" id="chakraPlexoSolarOrgaoNao" value="não">
                            <label class="btn btn-outline-danger form-check-label" for="chakraPlexoSolarOrgaoNao">Não</label>
                            <p class="invalid-feedback">Escolha obrigatória</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 mb-3">
                    <div class="p-3 border border-1">
                        <h5>Chakra Sacro</h5>
                        <div class="question-container">
                            <div class="mb-2">
                                <p class="fw-bold text-dark mt-3 mb-1">Tem desequilíbrio?</p>
                                <input class="btn-check form-check-input required-field" type="radio" name="chakraSacroDesiquilobrio" id="chakraSacroDesiquilobrioSim" value="sim" required>
                                <label class="btn btn-outline-primary form-check-label" for="chakraSacroDesiquilobrioSim">Sim</label>
                                <input class="btn-check form-check-input required-field" type="radio" name="chakraSacroDesiquilobrio" id="chakraSacroDesiquilobrioNao" value="não">
                                <label class="btn btn-outline-danger form-check-label" for="chakraSacroDesiquilobrioNao">Não</label>
                                <p class="invalid-feedback">Escolha obrigatória</p>
                            </div>
                            <div class="mb-2 range-container hidden">
                                <p class="fw-bold text-dark mt-3 mb-1">Qual a % do desequilíbrio?</p>
                                <input type="range" id="chakraSacroPercentual" min="0" max="100" value="50" name="chakraSacroPercentual">
                                <div class="range-label" id="value-chakraSacroPercentual">50%</div>
                                <div class="invalid-feedback">Este campo é obrigatório.</div>
                            </div>
                        </div>

                        <div class="mb-2">
                            <p class="fw-bold text-dark mt-3 mb-1">Qual a atividade do chakra?</p>
                            <input class="btn-check form-check-input required-field" type="radio" name="chakraSacroAtividade" id="chakraSacroAtividadeHipo" value="HIPO" required>
                            <label class="btn btn-outline-dark form-check-label" for="chakraSacroAtividadeHipo">HIPO</label>
                            <input class="btn-check form-check-input required-field" type="radio" name="chakraSacroAtividade" id="chakraSacroAtividadeHiper" value="HIPER">
                            <label class="btn btn-outline-dark form-check-label" for="chakraSacroAtividadeHiper">HIPER</label>
                            <p class="invalid-feedback">Escolha obrigatória</p>
                        </div>

                        <div class="mb-2">
                            <p class="fw-bold text-dark mt-3 mb-1">Afeta glândula/órgão correspondente?</p>
                            <input class="btn-check form-check-input required-field" type="radio" name="chakraSacroOrgao" id="chakraSacroOrgaoSim" value="sim" required>
                            <label class="btn btn-outline-primary form-check-label" for="chakraSacroOrgaoSim">Sim</label>
                            <input class="btn-check form-check-input required-field" type="radio" name="chakraSacroOrgao" id="chakraSacroOrgaoNao" value="não">
                            <label class="btn btn-outline-danger form-check-label" for="chakraSacroOrgaoNao">Não</label>
                            <p class="invalid-feedback">Escolha obrigatória</p>
                        </div>
                    </div>
                </div>


                <div class="col-md-6 mb-3">
                    <div class="p-3 border border-1">
                        <h5>Chakra Básico</h5>
                        <div class="question-container">
                            <div class="mb-2">
                                <p class="fw-bold text-dark mt-3 mb-1">Tem desequilíbrio?</p>
                                <input class="btn-check form-check-input required-field" type="radio" name="chakraBasicoDesiquilobrio" id="chakraBasicoDesiquilibrioSim" value="sim" required>
                                <label class="btn btn-outline-primary form-check-label" for="chakraBasicoDesiquilibrioSim">Sim</label>
                                <input class="btn-check form-check-input required-field" type="radio" name="chakraBasicoDesiquilobrio" id="chakraBasicoDesiquilibrioNao" value="não">
                                <label class="btn btn-outline-danger form-check-label" for="chakraBasicoDesiquilibrioNao">Não</label>
                                <p class="invalid-feedback">Escolha obrigatória</p>
                            </div>
                            <div class="mb-2 range-container hidden">
                                <p class="fw-bold text-dark mt-3 mb-1">Qual a % do desequilíbrio?</p>
                                <input type="range" id="chakraBasicoPercentual" min="0" max="100" value="50" name="chakraBasicoPercentual">
                                <div class="range-label" id="value-chakraBasicoPercentual">50%</div>
                                <div class="invalid-feedback">Este campo é obrigatório.</div>
                            </div>
                        </div>
                        <div class="mb-2">
                            <p class="fw-bold text-dark mt-3 mb-1">Qual a atividade do chakra?</p>
                            <input class="btn-check form-check-input required-field" type="radio" name="chakraBasicoAtividade" id="chakraBasicoAtividadeHipo" value="HIPO" required>
                            <label class="btn btn-outline-dark form-check-label" for="chakraBasicoAtividadeHipo">HIPO</label>
                            <input class="btn-check form-check-input required-field" type="radio" name="chakraBasicoAtividade" id="chakraBasicoAtividadeHiper" value="HIPER">
                            <label class="btn btn-outline-dark form-check-label" for="chakraBasicoAtividadeHiper">HIPER</label>
                            <p class="invalid-feedback">Escolha obrigatória</p>
                        </div>
                        <div class="mb-3">
                            <p class="fw-bold text-dark mt-3 mb-1">Afeta glândula/órgão correspondente?</p>
                            <input class="btn-check form-check-input required-field" type="radio" name="chakraBasicoOrgao" id="chakraBasicoOrgaoSim" value="sim" required>
                            <label class="btn btn-outline-primary form-check-label" for="chakraBasicoOrgaoSim">Sim</label>
                            <input class="btn-check form-check-input required-field" type="radio" name="chakraBasicoOrgao" id="chakraBasicoOrgaoNao" value="não">
                            <label class="btn btn-outline-danger form-check-label" for="chakraBasicoOrgaoNao">Não</label>
                            <p class="invalid-feedback">Escolha obrigatória</p>
                        </div>
                    </div>
                </div>


                <div class="text-end mt-3">
                    <div class="btn-group btn-group-sm">
                        <button type="button" class="btn btn-secondary prev-btn" data-prev="#collapseThree">Anterior</button>
                        <button type="button" class="btn btn-primary next-btn" data-next="#collapseFive">Próximo</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>