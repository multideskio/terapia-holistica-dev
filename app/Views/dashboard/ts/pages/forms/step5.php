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
                <div class="col-md-6 p-3 border border-1">
                    <h5>Campo Áurico</h5>
                    <div class="btn-group">
                        <input class="btn-check form-check-input required-field" type="radio" name="campoAurico" id="campoAuricoAberto" value="aberto">
                        <label class="btn btn-outline-primary form-check-label" for="campoAuricoAberto">Aberto</label>
                        <input class="btn-check form-check-input required-field" type="radio" name="campoAurico" id="campoAuricoMedia" value="media">
                        <label class="btn btn-outline-primary form-check-label" for="campoAuricoMedia">Média</label>
                        <input class="btn-check form-check-input required-field" type="radio" name="campoAurico" id="campoAuricoFechado" value="fechado">
                        <label class="btn btn-outline-primary form-check-label" for="campoAuricoFechado">Fechado</label>
                    </div>
                    <h5 class="mt-3">Campo Áurico</h5>
                    <div class="mt-2 btn-group">
                        <input class="btn-check form-check-input required-field" type="radio" name="campoAurico2" id="campoAurico2Expandido" value="expandido">
                        <label class="btn btn-outline-primary form-check-label" for="campoAurico2Expandido">Expandido</label>
                        <input class="btn-check form-check-input required-field" type="radio" name="campoAurico2" id="campoAurico2Media" value="media">
                        <label class="btn btn-outline-primary form-check-label" for="campoAurico2Media">Média</label>
                        <input class="btn-check form-check-input required-field" type="radio" name="campoAurico2" id="campoAuricoEncolhido" value="encolhido">
                        <label class="btn btn-outline-primary form-check-label" for="campoAuricoEncolhido">Encolhido</label>
                    </div>
                    <label class="form-label mt-3" for="campoAurico2Comments">Comentários</label>
                    <textarea name="campoAurico2Comments" id="campoAurico2Comments" class="form-control" name="" id="" rows="6"></textarea>
                </div>

                <div class="col-md-6 p-3 border border-1">
                    <div class="mb-3">
                        <label for="corFalta">Cor em falta</label>
                        <select name="corEmFalta" id="corEmFalta" class="form-select">
                            <option selected>Escolha uma opção</option>
                            <option value="vermelho">Vermelho</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="corExcesso">Cor em excesso</label>
                        <select name="" id="" class="form-select">
                            <option selected>Escolha uma opção</option>
                            <option value="">Vermelho</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="">Energia da saúde</label>
                        <input type="number" class="form-control">
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