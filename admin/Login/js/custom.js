var controleCampo = 1;

function adcionarCampo(){
    controleCampo++;
    console.log(controleCampo);

    document.getElementById("formulario").insertAdjacentHTML('beforeend', `<div id="formulario" id="campo${controleCampo}"><legend>Cadastre a Categoria</legend><input class="cadastro_produto" type="text" placeholder="nome do produto" id="produto" name="produto" required autofocus></div>`)

}