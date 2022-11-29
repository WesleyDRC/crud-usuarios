<?php
switch ($_REQUEST["acao"]) {
    case "cadastrar":
        $nome = $_POST['name'];
        $telefone = $_POST['telefone'];

        $msg = false;
        if (isset($_FILES['imagemUser'])) {
            $extension = strtolower(substr($_FILES['imagemUser']['name'], -4));
            $newNameImage = md5(time()).$extension;
            $directory = "upload/";

            move_uploaded_file($_FILES['imagemUser']['tmp_name'], $directory.$newNameImage);

            $sql_code = "INSERT INTO USUARIOS (ID, NOME, TELEFONE, IMAGEM, DATAATUAL) VALUES (NULL, '$nome', '$telefone', '$newNameImage', NOW()) ";

            if ($mysqli->query($sql_code)) {;
                $msg = "Arquivo enviado com sucesso";
            } else {
                $msg = "Falha ao enviar o arquivo";
            }
        }

        if ($msg != false) {
            print "<script> alert('$msg'); </script>";
            print "<script> location.href='?page=listar'; </script>";
        }

        break;
    case "editar":

        $nome = $_POST['name'];
        $telefone = $_POST['telefone'];

        $msg = false;
        if (isset($_FILES['imagemUser'])) {
            $extension = strtolower(substr($_FILES['imagemUser']['name'], -4));
            $newNameImage = md5(time()).$extension;
            $directory = "upload/";

            move_uploaded_file($_FILES['imagemUser']['tmp_name'], $directory.$newNameImage);

            $sql_code = "UPDATE USUARIOS SET NOME='$nome', TELEFONE='$telefone', IMAGEM='$newNameImage' WHERE id=".$_REQUEST["id"];

            if ($mysqli->query($sql_code)) {;
                $msg = "Editado com sucesso";
            } else {
                $msg = "Falha ao editar";
            }

            if ($msg != false) {
                print "<script> alert('$msg'); </script>";
                print "<script> location.href='?page=listar'; </script>";
            }
        }

        break;
    case "excluir":

        $sql_code = "DELETE FROM USUARIOS WHERE id=".$_REQUEST["id"];

        if ($mysqli->query($sql_code)) {;
            $msg = "Excluido com sucesso!";
        } else {
            $msg = "Falha ao excluir!";
        }

        if ($msg != false) {
            print "<script> alert('$msg'); </script>";
            print "<script> location.href='?page=listar'; </script>";
        }

        break;
}
