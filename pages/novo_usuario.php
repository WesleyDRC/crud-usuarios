<h1> Novo usuário </h1>
<form action="?page=salvar" method="POST" enctype="multipart/form-data">
    <input type="hidden" name="acao" value="cadastrar">
    <div class="item-form">
        <label for="name"> Nome</label>
        <input type="text" class="form-control" name="name" id="name" />
    </div>
    <div class="item-form">
        <label for="telefone"> Telefone</label>
        <input type="text" class="form-control" name="telefone" id="telefone" />
    </div>
    <div class="item-form">
        <div class="btnSendImage">
            <label for="imagemUser" class="labelSendImage">
                Enviar imagem
            </label>
            <input id="imagemUser" class="inputSendImage" type="file" accept=".jpg, .jpeg, .png" name="imagemUser" />
        </div>

    </div>
    <div class="item-form">
        <button class="btn" type="submit">
            Enviar
        </button>
    </div>

</form>