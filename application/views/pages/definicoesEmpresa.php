<main class="container my-3 py-3">
  <div class="row">
    <div class="col-md-6 my-3">
      <div class="card">
        <div class="card-header">
          <h3 class="text-primary">Segurança</h3>
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-12">
              <div class="md-form mb-0">
                <i class="fas fa-fw fa-lock prefix"></i>
                <input type="password" id="passAtual" name="passAtual" class="form-control">
                <label for="passAtual">Password Atual</label>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-12">
              <div class="md-form mb-0">
                <i class="fas fa-fw fa-lock prefix"></i>
                <input type="password" id="passNova" name="passNova" class="form-control">
                <label for="passNova">Nova Password</label>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-12">
              <div class="md-form mb-0">
                <i class="fas fa-fw fa-lock prefix"></i>
                <input type="password" id="confirmarPassNova" name="confirmarPassNova" class="form-control">
                <label for="confirmarPassNova">Confirmar Password</label>
              </div>
            </div>
          </div>
          <div class="col-12 text-center">
            <button type="submit" class="btn btn-primary waves-effect waves-light mt-2">Guardar</button>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-6 my-3">
      <div class="card">
        <div class="card-header">
          <h3 class="text-primary">Redes Sociais</h3>
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-12">
              <div class="md-form mb-0">
                <i class="fab fa-fw fa-facebook-f prefix"></i>
                <input type="text" id="facebook" class="form-control">
                <label for="facebook">Facebook</label>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-12">
              <div class="md-form mb-0">
                <i class="fab fa-fw fa-twitter prefix"></i>
                <input type="text" id="twitter" class="form-control">
                <label for="twitter">Twitter</label>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-12">
              <div class="md-form mb-0">
                <i class="fab fa-fw fa-linkedin-in prefix"></i>
                <input type="text" id="linkedin" class="form-control">
                <label for="linkedin">LinkedIn</label>
              </div>
            </div>
          </div>
          <div class="col-12 text-center">
            <button type="submit" class="btn btn-primary waves-effect waves-light mt-2">Guardar</button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-6 my-3">
      <div class="card">
        <div class="card-header">
          <h3 class="text-primary">Área de Interesse</h3>
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-12">
              <div class="md-form mb-0">
                <select id="areaInteresse" name="areainteresse" class="custom-select">
                  <option value="0" selected>Agricultura</option>
                  <option value="1">Ciência e Tecnologia</option>
                  <option value="2">Desporto</option>
                  <option value="3">Educação</option>
                  <option value="4">Restauração</option>
                  <option value="5">Saúde</option>
                  <option value="6">Transportes e Mercadorias</option>
                  <option value="7">Turismo</option>
                </select>
              </div>
            </div>
          </div>
          <div class="col-12 text-center">
            <button type="submit" class="btn btn-primary waves-effect waves-light mt-2">Guardar</button>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-6 my-3">
      <div class="card">
        <div class="card-header">
          <h3 class="text-primary">Localização</h3>
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-12">
              <div class="md-form mb-0">
                <select id="localizacao" name="localizacao" class="custom-select">
                </select>
              </div>
            </div>
          </div>
          <div class="col-12 text-center">
            <button type="submit" class="btn btn-primary waves-effect waves-light mt-2">Guardar</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>