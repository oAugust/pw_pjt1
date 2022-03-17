<!-- formulario do cadastro de carros --> 
<link rel="stylesheet" href="<?= base_url()?>/quem.css">

<div class="container-fluid">
    <div class="row">
        <div class="col-4 offset-4">
        <div class="form-floating">
        <input type="text" class="form-control" id="floatingMarca" placeholder="Marca">
        <label for="floatingMarca">Marca</label>
    </div>
</br>
        <div class="form-floating">
        <input type="text" class="form-control" id="floatingModel" placeholder="Modelo">
        <label for="floatingModel">Modelo</label>
    </div>
</br>
        <div class="form-floating">
        <input type="text" class="form-control" id="floatingSign" placeholder="Placa">
        <label for="floatingSign">Placa</label>
    </div>
</br>
        <select class="form-select-sm-light" arial-label="Default select example">
        <option selected> Cor </option>
        <option value="1"> Vermelho </option>
        <option value="2"> Azul </option>
        <option value="3"> Branco </option>
        <option value="4"> Preto </option>
        <option value="5"> Verde </option>
        <option value="6"> Laranja </option>
</select>
    <button type="button" id="btn" class="btn btn-light b"> Cadastrar</button>
        </div>
    </div>
</div>