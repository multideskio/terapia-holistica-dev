<div class="accordion-item accordion-section">
    <h2 class="accordion-header" id="headingTwo">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" disabled>
            <span class="number">2</span> Campos Energéticos
        </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#wizardAccordion">
    <div class="accordion-body">
            <!-- Conteúdo específico desta etapa -->
            <p>Trata-se da medição energética de cada um dos 7 principais chakras e glândulas correspondentes.</p>
            <div class="row mb-3">
                <div class="col-md-6">
                    <div class="p-3 border border-1">
                        <h5>Chakra Coronário</h5>
                        <div class="question-container">
                            <div class="mb-3">
                                <p class="fw-bold text-dark mt-3 mb-1">Tem desequilíbrio?</p>
                                <input class="btn-check form-check-input required-field" type="radio" name="chakraCoronarioDesiquilibrio" id="chakraCoronarioDesiquilibrioSim" value="sim" required>
                                <label class="btn btn-outline-primary form-check-label" for="chakraCoronarioDesiquilibrioSim">Sim</label>
                                <input class="btn-check form-check-input required-field" type="radio" name="chakraCoronarioDesiquilibrio" id="chakraCoronarioDesiquilibrioNao" value="não">
                                <label class="btn btn-outline-danger form-check-label" for="chakraCoronarioDesiquilibrioNao">Não</label>
                                <p class="invalid-feedback">Escolha obrigatória</p>
                            </div>
                            <div class="mb-3 range-container hidden">
                                <p class="fw-bold text-dark mt-3 mb-1">Qual a % do desequilíbrio?</p>
                                <input type="range" step="10" id="chakraCoronarioPercentual" min="0" max="100" value="50" name="chakraCoronarioPercentual">
                                <div class="range-label" id="value-chakraCoronarioPercentual">50%</div>
                                <div class="invalid-feedback">Este campo é obrigatório.</div>
                            </div>
                        </div>
                        <div class="mb-2">
                            <p class="fw-bold text-dark mt-3 mb-1">Qual a atividade do chakra?</p>
                            <input class="btn-check form-check-input required-field" type="radio" name="chakraCoronarioAtividade" id="chakraCoronarioAtividadeHipo" value="HIPO" required>
                            <label class="btn btn-outline-dark form-check-label" for="chakraCoronarioAtividadeHipo">HIPO</label>
                            <input class="btn-check form-check-input required-field" type="radio" name="chakraCoronarioAtividade" id="chakraCoronarioAtividadeHiper" value="HIPER">
                            <label class="btn btn-outline-dark form-check-label" for="chakraCoronarioAtividadeHiper">HIPER</label>
                            <p class="invalid-feedback">Escolha obrigatória</p>
                        </div>
                        <div class="mb-2">
                            <p class="fw-bold text-dark mt-3 mb-1">Afeta o corpo físico?</p>
                            <input class="btn-check form-check-input required-field" type="radio" name="chakraCoronarioOrgao" id="chakraCoronarioOrgaoSim" value="sim" required>
                            <label class="btn btn-outline-primary form-check-label" for="chakraCoronarioOrgaoSim">Sim</label>
                            <input class="btn-check form-check-input required-field" type="radio" name="chakraCoronarioOrgao" id="chakraCoronarioOrgaoNao" value="não">
                            <label class="btn btn-outline-danger form-check-label" for="chakraCoronarioOrgaoNao">Não</label>
                            <p class="invalid-feedback">Escolha obrigatória</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="p-3 border border-1">
                        <h5>Chakra Frontal</h5>
                        <div class="question-container">
                            <div class="mb-2">
                                <p class="fw-bold text-dark mt-3 mb-1">Tem desequilíbrio?</p>
                                <input class="btn-check form-check-input required-field" type="radio" name="chakraFrontalDesiquilibrio" id="chakraFrontalDesiquilibrioSim" value="sim" required>
                                <label class="btn btn-outline-primary form-check-label" for="chakraFrontalDesiquilibrioSim">Sim</label>
                                <input class="btn-check form-check-input required-field" type="radio" name="chakraFrontalDesiquilibrio" id="chakraFrontalDesiquilibrioNao" value="não">
                                <label class="btn btn-outline-danger form-check-label" for="chakraFrontalDesiquilibrioNao">Não</label>
                                <p class="invalid-feedback">Escolha obrigatória</p>
                            </div>
                            <div class="mb-2 range-container hidden">
                                <p class="fw-bold text-dark mt-3 mb-1">Qual a % do desequilíbrio?</p>
                                <input type="range" step="10" id="chakraFrontalPercentual" min="0" max="100" value="50" name="chakraFrontalPercentual">
                                <div class="range-label" id="value-chakraFrontalPercentual">50%</div>
                                <div class="invalid-feedback">Este campo é obrigatório.</div>
                            </div>
                        </div>

                        <div class="mb-2">
                            <p class="fw-bold text-dark mt-3 mb-1">Qual a atividade do chakra?</p>
                            <input class="btn-check form-check-input required-field" type="radio" name="chakraFrontalAtividade" id="chakraFrontalAtividadeHipo" value="HIPO" required>
                            <label class="btn btn-outline-dark form-check-label" for="chakraFrontalAtividadeHipo">HIPO</label>
                            <input class="btn-check form-check-input required-field" type="radio" name="chakraFrontalAtividade" id="chakraFrontalAtividadeHiper" value="HIPER">
                            <label class="btn btn-outline-dark form-check-label" for="chakraFrontalAtividadeHiper">HIPER</label>
                            <p class="invalid-feedback">Escolha obrigatória</p>
                        </div>
                        <div class="mb-2">
                            <p class="fw-bold text-dark mt-3 mb-1">Afeta glândula/órgão correspondente?</p>
                            <input class="btn-check form-check-input required-field" type="radio" name="chakraFrontalOrgao" id="chakraFrontalOrgaoSim" value="sim" required>
                            <label class="btn btn-outline-primary form-check-label" for="chakraFrontalOrgaoSim">Sim</label>
                            <input class="btn-check form-check-input required-field" type="radio" name="chakraFrontalOrgao" id="chakraFrontalOrgaoNao" value="não">
                            <label class="btn btn-outline-danger form-check-label" for="chakraFrontalOrgaoNao">Não</label>
                            <p class="invalid-feedback">Escolha obrigatória</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="p-3 border border-1">
                        <h5>Chakra Laríngeo</h5>
                        <div class="question-container">
                            <div class="mb-2">
                                <p class="fw-bold text-dark mt-3 mb-1">Tem desequilíbrio?</p>
                                <input class="btn-check form-check-input required-field" type="radio" name="chakraLaringeoDesiquilibrio" id="chakraLaringeoDesiquilibrioSim" value="sim" required>
                                <label class="btn btn-outline-primary form-check-label" for="chakraLaringeoDesiquilibrioSim">Sim</label>
                                <input class="btn-check form-check-input required-field" type="radio" name="chakraLaringeoDesiquilibrio" id="chakraLaringeoDesiquilibrioNao" value="não">
                                <label class="btn btn-outline-danger form-check-label" for="chakraLaringeoDesiquilibrioNao">Não</label>
                                <p class="invalid-feedback">Escolha obrigatória</p>
                            </div>
                            <div class="mb-2 range-container hidden">
                                <p class="fw-bold text-dark mt-3 mb-1">Qual a % do desequilíbrio?</p>
                                <input type="range" step="10" id="chakraLaringeoPercentual" min="0" max="100" value="50" name="chakraLaringeoPercentual">
                                <div class="range-label" id="value-chakraLaringeoPercentual">50%</div>
                                <div class="invalid-feedback">Este campo é obrigatório.</div>
                            </div>
                        </div>
                        <div class="mb-2">
                            <p class="fw-bold text-dark mt-3 mb-1">Qual a atividade do chakra?</p>
                            <input class="btn-check form-check-input required-field" type="radio" name="chakraLaringeoAtividade" id="chakraLaringeoAtividadeHipo" value="HIPO" required>
                            <label class="btn btn-outline-dark form-check-label" for="chakraLaringeoAtividadeHipo">HIPO</label>
                            <input class="btn-check form-check-input required-field" type="radio" name="chakraLaringeoAtividade" id="chakraLaringeoAtividadeHiper" value="HIPER">
                            <label class="btn btn-outline-dark form-check-label" for="chakraLaringeoAtividadeHiper">HIPER</label>
                            <p class="invalid-feedback">Escolha obrigatória</p>
                        </div>
                        <div class="mb-2">
                            <p class="fw-bold text-dark mt-3 mb-1">Afeta glândula/órgão correspondente?</p>
                            <input class="btn-check form-check-input required-field" type="radio" name="chakraLaringeoOrgao" id="chakraLaringeoOrgaoSim" value="sim" required>
                            <label class="btn btn-outline-primary form-check-label" for="chakraLaringeoOrgaoSim">Sim</label>
                            <input class="btn-check form-check-input required-field" type="radio" name="chakraLaringeoOrgao" id="chakraLaringeoOrgaoNao" value="não">
                            <label class="btn btn-outline-danger form-check-label" for="chakraLaringeoOrgaoNao">Não</label>
                            <p class="invalid-feedback">Escolha obrigatória</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="p-3 border border-1">
                        <h5>Chakra Cardíaco</h5>
                        <div class="question-container">
                            <div class="mb-2">
                                <p class="fw-bold text-dark mt-3 mb-1">Tem desequilíbrio?</p>
                                <input class="btn-check form-check-input required-field" type="radio" name="chakraCardiacoDesiquilibrio" id="chakraCardiacoDesiquilibrioSim" value="sim" required>
                                <label class="btn btn-outline-primary form-check-label" for="chakraCardiacoDesiquilibrioSim">Sim</label>
                                <input class="btn-check form-check-input required-field" type="radio" name="chakraCardiacoDesiquilibrio" id="chakraCardiacoDesiquilibrioNao" value="não">
                                <label class="btn btn-outline-danger form-check-label" for="chakraCardiacoDesiquilibrioNao">Não</label>
                                <p class="invalid-feedback">Escolha obrigatória</p>
                            </div>
                            <div class="mb-2 range-container hidden">
                                <p class="fw-bold text-dark mt-3 mb-1">Qual a % do desequilíbrio?</p>
                                <input type="range" step="10" id="chakraCardiacoPercentual" min="0" max="100" value="50" name="chakraCardiacoPercentual">
                                <div class="range-label" id="value-chakraCardiacoPercentual">50%</div>
                                <div class="invalid-feedback">Este campo é obrigatório.</div>
                            </div>
                        </div>
                        <div class="mb-2">
                            <p class="fw-bold text-dark mt-3 mb-1">Qual a atividade do chakra?</p>
                            <input class="btn-check form-check-input required-field" type="radio" name="chakraCardiacoAtividade" id="chakraCardiacoAtividadeHipo" value="HIPO" required>
                            <label class="btn btn-outline-dark form-check-label" for="chakraCardiacoAtividadeHipo">HIPO</label>
                            <input class="btn-check form-check-input required-field" type="radio" name="chakraCardiacoAtividade" id="chakraCardiacoAtividadeHiper" value="HIPER">
                            <label class="btn btn-outline-dark form-check-label" for="chakraCardiacoAtividadeHiper">HIPER</label>
                            <p class="invalid-feedback">Escolha obrigatória</p>
                        </div>

                        <div class="mb-2">
                            <p class="fw-bold text-dark mt-3 mb-1">Afeta glândula/órgão correspondente?</p>
                            <input class="btn-check form-check-input required-field" type="radio" name="chakraCardiacoOrgao" id="chakraCardiacoOrgaoSim" value="sim" required>
                            <label class="btn btn-outline-primary form-check-label" for="chakraCardiacoOrgaoSim">Sim</label>
                            <input class="btn-check form-check-input required-field" type="radio" name="chakraCardiacoOrgao" id="chakraCardiacoOrgaoNao" value="não">
                            <label class="btn btn-outline-danger form-check-label" for="chakraCardiacoOrgaoNao">Não</label>
                            <p class="invalid-feedback">Escolha obrigatória</p>
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