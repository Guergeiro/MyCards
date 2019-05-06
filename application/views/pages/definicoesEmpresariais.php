<div class="container-fluid">

    <div class="row mb-2">

        <div class="col-12 col-md-8 mt-2">

            <div class="card h-100">

                <div class="card-header">
                    <h4 class="text-primary">Informação Geral Empresa</h4>
                    <small class="ml-1">Preencha aqui a informação relativa a sua Empresa.</small>
                </div>

                <div class="card-body">
                    <div class="row p-0">
                        <div class="col-12">
                            <div class="row">

                                <div class="col-12 col-xl-4 mt-2">
                                    <div class="card h-100 w-100 border-0 rounded shadow">
                                        <div class="card-header h-100 w-100">
                                            <h6 class="text-primary">Área Empresarial</h6>
                                            <small>Preencha aqui a Área de Serviço da Empresa</small>
                                        </div>
                                        <div class="card-body h-100 w-100">
                                            <!-- Material input -->
                                            <div class="md-form ml-2">
                                                <i class="fas fa-briefcase prefix"></i>
                                                <input type="text" id="inputIconEx7" class="form-control">
                                                <label for="form1">Área de Negócio</label>
                                            </div>

                                            <!-- Material input -->
                                            <div class="md-form ml-2">
                                                <i class="fas fa-briefcase prefix"></i>
                                                <input type="text" id="inputIconEx8" class="form-control">
                                                <label for="form3">Área de Negócio</label>
                                            </div>

                                            <!-- Material input -->
                                            <div class="md-form ml-2">
                                                <i class="fas fa-briefcase prefix"></i>
                                                <input type="text" id="inputIconEx9" class="form-control">
                                                <label for="form3">Área de Negócio</label>
                                            </div>

                                            <!-- Material input -->
                                            <div class="md-form ml-2 text-right">
                                                <button type="button" class="btn btn-primary">Gravar</button>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 col-xl-4 mt-2">
                                    <div class="card h-100 w-100 border-0 rounded shadow">
                                        <div class="card-header h-100 w-100">
                                            <h6 class="text-primary">Formas de Contacto</h6>
                                            <small>Preencha aqui as Formas de Contacto da Empresa</small>
                                        </div>
                                        <div class="card-body h-100 w-100">
                                            <!-- Material input -->
                                            <div class="md-form ml-2">
                                                <i class="fas fa-phone prefix"></i>
                                                <input type="text" id="inputIconEx1" class="form-control">
                                                <label for="form4">Telefone</label>
                                            </div>

                                            <!-- Material input -->
                                            <div class="md-form ml-2">
                                                <i class="fas fa-mobile prefix"></i>
                                                <input type="text" id="inputIconEx2" class="form-control">
                                                <label for="form5">Telemóvel</label>
                                            </div>

                                            <!-- Material input -->
                                            <div class="md-form ml-2">
                                                <i class="fas fa-envelope prefix"></i>
                                                <input type="text" id="inputIconEx3" class="form-control">
                                                <label for="form6">Email</label>
                                            </div>

                                            <!-- Material input -->
                                            <div class="md-form ml-2 text-right">
                                                <button type="button" class="btn btn-primary">Gravar</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 col-xl-4 mt-2">
                                    <div class="card h-100 w-100">
                                        <div class="card-header h-100 w-100">
                                            <h6 class="text-primary">Redes Sociais</h6>
                                            <small>Preencha aqui as Redes Sociais da Empresa</small>
                                        </div>
                                        <div class="card-body h-100 w-100">
                                            <!-- Material input -->
                                            <div class="md-form ml-2">
                                                <i class="fab fa-facebook-f prefix"></i>
                                                <input type="text" id="inputIconEx4" class="form-control">
                                                <label for="form7">Facebook</label>
                                            </div>

                                            <!-- Material input -->
                                            <div class="md-form ml-2">
                                                <i class="fab fa-twitter prefix"></i>
                                                <input type="text" id="inputIconEx5" class="form-control">
                                                <label for="form8">Twitter</label>
                                            </div>

                                            <!-- Material input -->
                                            <div class="md-form ml-2">
                                                <i class="fab fa-linkedin-in prefix"></i>
                                                <input type="text" id="inputIconEx6" class="form-control">
                                                <label for="form9">Linkedin</label>
                                            </div>

                                            <!-- Material input -->
                                            <div class="md-form ml-2 text-right">
                                                <button type="button" class="btn btn-primary">Gravar</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row mt-2 w-100 ml-0">
                        <div class="col-12">
                            <div class="row">
                                <div class="card w-100">
                                    <div class="card-header">
                                        <h6 class="text-primary">Localização da Empresa</h6>
                                        <small>Preencha aqui a Localização da Empresa</small>
                                    </div>
                                    <div class="card-body">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>


        <div class="col-12 col-md-4 mt-2">

            <div class="row pl-3 pr-3 pb-1">

                <div class="card w-100">
                    <div class="card-header">
                        <h4 class="text-primary">Logo Empresarial</h4>
                        <small class="ml-1">Selecione aqui o logo da sua Empresa.</small>
                    </div>
                    <div class="card-body w-100 h-100 text-center mb-2">
                        <!-- Card -->
                        <div class="card card-image mb-2 w-100">

                            <img id="imgSRC" src="assets\imagens\user.png" alt="your image" />

                            <div class="input-default-wrapper mt-3 ml-2 mr-2">

                                <input type="file" id="file-with-current" class="input-default-js " onchange="readURLLogo(this);">

                                <label class="label-for-default-js rounded-right mb-3" for="file-with-current"><span class="span-choose-file text-primary">Adicionar Imagem</span></label>

                            </div>

                        </div>
                        <!-- Card -->
                        <small>Esta imagem sera o logo da sua empresa quando os utilizadores encontram a sua empresa na aplicação de Telémovel.</small>
                        <hr>

                    </div>
                </div>
            </div>

            <hr class="">

            <div class="card">
                <div class="card-header text-primary pl-0 pr-0 h-100">
                    <div class="col-12 w-100">
                        <div class="row classColaboradores">
                            <div class="col-10 className">
                                Colaboradores
                            </div>
                            <div class="col-2 text-sm-right font-weight-bold classNew">
                                <a href="#" data-toggle="modal" data-target="#fullHeightModalRight"><i class="fas fa-user-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="row p-0">
                                <div class="col-4 col-sm-4 mt-1 w-25">
                                    <img src="assets\imagens\bgImg.jpg" alt="" class="w-100 border rounded-circle">
                                </div>
                                <div class="col-8 mt-2 w-50">
                                    <h4 class="font-weight-bold">João Tiago</h4>
                                    <h6>Gerente</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="row p-0">
                                <div class="col-4 col-sm-4 mt-1 w-25">
                                    <img src="assets\imagens\bgImg.jpg" alt="" class="w-100 border rounded-circle">
                                </div>
                                <div class="col-8 mt-2 w-50">
                                    <h4 class="font-weight-bold">João Tiago</h4>
                                    <h6>Gerente</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>

<!-- Full Height Modal Right -->
<div class="modal fade right" id="fullHeightModalRight" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

    <!-- Add class .modal-full-height and then add class .modal-right (or other classes from list above) to set a position to the modal -->
    <div class="modal-dialog modal-full-height modal-right" role="document">


        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title w-100 text-primary" id="myModalLabel">Criar Colaborador</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <h6 class="text-primary">Informação Colaborador</h6>
                <small>Preencha o Nome e Último nome do Colaborador</small>
                <hr>

                <!-- Small outline input -->
                <div class="md-form md-outline">
                    <i class="fas fa-signature prefix"></i>
                    <input type="text" id="primeiroNomeColaborador" class="form-control" maxlength="25">
                    <label for="primeiroNomeColaborador">Primeiro nome do Colaborador</label>
                    <small class="text-primary ml-2">Primeiro nome do Colaborador pode ter (0-25) caracteres.</small>
                </div>
                <!-- Small outline input -->
                <div class="md-form md-outline">
                    <i class="fas fa-signature prefix"></i>
                    <input type="text" id="segundoNomeColaborador" class="form-control" maxlength="50">
                    <label for="segundoNomeColaborador">Segundo nome do Colaborador</label>
                    <small class="text-primary ml-2">Segundo nome do Colaborador pode ter (0-50) caracteres.</small>
                </div>

                <hr>
                <h6 class="text-primary">Conta Colaborador</h6>
                <small>Preencha a Password e Nome do Utilizador do Colaborador</small>
                <hr>

                <!-- Small outline input -->
                <div class="md-form md-outline">
                    <i class="fas fa-user prefix"></i>
                    <input type="text" id="userColaborador" class="form-control" maxlength="50">
                    <label for="userColaborador">Nome Utilizador</label>
                    <small class="text-primary ml-2">Segundo nome do Colaborador pode ter (0-50) caracteres.</small>
                </div>

                <!-- Small outline input -->
                <div class="md-form md-outline">
                    <i class="fas fa-key prefix"></i>
                    <input type="password" id="passwordNomeColaborador" class="form-control" maxlength="25">
                    <label for="passwordNomeColaborador">Password do Colaborador</label>
                    <small class="text-primary ml-2">Password do Colaborador pode ter (0-25) caracteres.</small>
                </div>
                <!-- Small outline input -->
                <div class="md-form md-outline">
                    <i class="fas fa-key prefix"></i>
                    <input type="password" id="passwordV2NomeColaborador" class="form-control" maxlength="50">
                    <label for="passwordV2NomeColaborador">Password do Colaborador</label>
                    <small class="text-primary ml-2">Password do Colaborador pode ter (0-50) caracteres.</small>
                </div>

            </div>
            <div class="modal-footer justify-content-center">
                <button type="button" class="btn btn-primary">Criar Colaborador</button>
            </div>
        </div>
    </div>
</div>
<!-- Full Height Modal Right -->