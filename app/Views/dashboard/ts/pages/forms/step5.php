<div class="accordion-item accordion-section">
    <h2 class="accordion-header" id="headingFive">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive" disabled>
            <span class="number">5</span> Campo Áurico
        </button>
    </h2>
    <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#wizardAccordion">
        <div class="accordion-body">
            <!-- Conteúdo específico desta etapa -->
            <p>Trata-se do acesso ao campo áurico, possibilitando a medição energética da aura, das cores do campo e da saúde.</p>
            <div class="row">
                <div class="col-md-6 border border-1">
                    <h5 class="mt-3">Campo Áurico</h5>
                    <div class="question-container mb-5">
                        <div class="d-flex justify-content-between mt-3">
                            <span>Encolhida</span>
                            <span><b>TAMANHO DA AURA</b></span>
                            <span>Expandida</span>
                        </div>
                        <div class="text-center range-container mt-2 mb-1">
                            <input type="range" id="tamanhoAura" name="tamanhoAura" min="0" max="100" step="10" value="50">
                            <div class="range-label" id="value-tamanhoAura">50%</div>
                        </div>
                        <label class="form-label" for="tamanhoAuraComments">Comentários</label>
                        <textarea name="tamanhoAuraComments" id="tamanhoAuraComments" class="form-control" rows="3"></textarea>
                    </div>

                    <div class="question-container">
                        <div class="d-flex justify-content-between mt-3">
                            <span data-bs-toggle="tooltip" data-bs-placement="top" title="Desprotegida">Aberta</span>
                            <span><b>PROTEÇÃO DA AURA</b></span>
                            <span data-bs-toggle="tooltip" data-bs-placement="top" title="Protegida">Fechada</span>
                        </div>
                        <div class="text-center range-container mt-2 mb-1">
                            <input type="range" id="tamanhoAbertura" name="tamanhoAbertura" min="0" max="100" step="10" value="50">
                            <div class="range-label" id="value-tamanhoAbertura">50%</div>
                        </div>
                        <label class="form-label" for="tamanhoAberturaComments">Comentários</label>
                        <textarea name="tamanhoAberturaComments" id="tamanhoAberturaComments" class="form-control" rows="3"></textarea>
                    </div>





                </div>

                <div class="col-md-6 p-3 border border-1">
                    <div class="mb-3">


                        <select class="js-example-basic-multiple" name="states[]" multiple="multiple">
                            <optgroup label="UK">
                                <option value="London">London</option>
                                <option value="Manchester" selected>Manchester</option>
                                <option value="Liverpool">Liverpool</option>
                            </optgroup>
                            <optgroup label="FR">
                                <option value="Paris">Paris</option>
                                <option value="Lyon">Lyon</option>
                                <option value="Marseille">Marseille</option>
                            </optgroup>
                            <optgroup label="SP">
                                <option value="Madrid" selected>Madrid</option>
                                <option value="Barcelona">Barcelona</option>
                                <option value="Malaga">Malaga</option>
                            </optgroup>
                            <optgroup label="CA">
                                <option value="Montreal">Montreal</option>
                                <option value="Toronto">Toronto</option>
                                <option value="Vancouver">Vancouver</option>
                            </optgroup>
                        </select>



                        <label for="corFalta">Cor em falta</label>
                        <select id="corFalta" name="corFalta[]" class="form-select" multiple>
                            <option value="preto">Preto</option>
                            <option value="branco">Branco</option>
                            <option value="cinza">Cinza</option>
                            <option value="vermelho">Vermelho</option>
                            <option value="rosa">Rosa</option>
                            <option value="laranja">Laranja</option>
                            <option value="amarelo">Amarelo</option>
                            <option value="verde-claro">Verde Claro</option>
                            <option value="verde-escuro">Verde Escuro</option>
                            <option value="azul-claro">Azul Claro</option>
                            <option value="azul-escuro">Azul Escuro</option>
                            <option value="roxo">Roxo</option>
                            <option value="marrom">Marrom</option>
                            <option value="bege">Bege</option>
                            <option value="violeta">Violeta</option>
                            <option value="magenta">Magenta</option>
                            <option value="turquesa">Turquesa</option>
                            <option value="dourado">Dourado</option>
                            <option value="prateado">Prateado</option>
                            <option value="vermelho-escuro">Vermelho Escuro</option>
                            <option value="verde-oliva">Verde Oliva</option>
                            <option value="azul-celeste">Azul Celeste</option>
                            <option value="salmao">Salmão</option>
                            <option value="bordo">Bordô</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="corExcesso">Cor em excesso</label>
                        <select id="corExcesso" name="corExcesso[]" class="form-select" multiple>
                            <option value="preto">Preto</option>
                            <option value="branco">Branco</option>
                            <option value="cinza">Cinza</option>
                            <option value="vermelho">Vermelho</option>
                            <option value="rosa">Rosa</option>
                            <option value="laranja">Laranja</option>
                            <option value="amarelo">Amarelo</option>
                            <option value="verde-claro">Verde Claro</option>
                            <option value="verde-escuro">Verde Escuro</option>
                            <option value="azul-claro">Azul Claro</option>
                            <option value="azul-escuro">Azul Escuro</option>
                            <option value="roxo">Roxo</option>
                            <option value="marrom">Marrom</option>
                            <option value="bege">Bege</option>
                            <option value="violeta">Violeta</option>
                            <option value="magenta">Magenta</option>
                            <option value="turquesa">Turquesa</option>
                            <option value="dourado">Dourado</option>
                            <option value="prateado">Prateado</option>
                            <option value="vermelho-escuro">Vermelho Escuro</option>
                            <option value="verde-oliva">Verde Oliva</option>
                            <option value="azul-celeste">Azul Celeste</option>
                            <option value="salmao">Salmão</option>
                            <option value="bordo">Bordô</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="energia">Energia da saúde</label>
                        <input type="number" name="energia" id="energia" placeholder="50" class="form-control">
                    </div>
                </div>
            </div>


            <div class="text-end mt-3">
                <button type="button" class="btn btn-secondary prev-btn" data-prev="#collapseFour">Anterior</button>
                <button type="button" class="btn btn-primary next-btn" data-next="#collapseSix">Próximo</button>
            </div>
        </div>
    </div>
</div>