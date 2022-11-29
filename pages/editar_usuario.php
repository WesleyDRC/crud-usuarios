<h1> Editar usuário </h1>

<?php
$sql_code = "SELECT * FROM USUARIOS WHERE ID=" . $_REQUEST["id"];

$response = $mysqli->query($sql_code);

$row = $response->fetch_object();
?>

<form action="?page=salvar" method="POST" enctype="multipart/form-data">
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="id" value="<?php print $row->ID ?>" />
    <div class="item-form">
        <label for="name"> Nome</label>
        <input type="text" class="form-control" name="name" id="name" value="<?php print $row->NOME ?>" />
    </div>
    <div class="item-form">
        <label for="telefone"> Telefone</label>
        <input type="text" class="form-control" name="telefone" id="telefone" value="<?php print $row->TELEFONE ?>" />
    </div>
    <div class="skinUser">
        <div class="skin">
            <img class="img-user" src="upload/<?php print $row->IMAGEM ?>" alt="imagem de perfil" />
        </div>
        <div>
            <label for="imagemUser" class="labelSendImage">
                Enviar imagem
            </label>
            <input id="imagemUser" class="inputSendImage" type="file" accept=".jpg, .jpeg, .png" name="imagemUser" value="<?php print $row->IMAGEM ?>" />
        </div>
    </div>
    <div class="item-form">
        <button class="btn" type="submit">
            Enviar
        </button>
    </div>

</form>