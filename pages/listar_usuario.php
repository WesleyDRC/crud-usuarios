<h1> Listar Usuários </h1>

<?php
$sql_code = "SELECT * FROM USUARIOS";

$response = $mysqli->query($sql_code);

$quantity = $response->num_rows;

if ($quantity > 0) {
    print "<div class='content'> ";
    print "<table class='table'>";
    print "<tr class='title'>";
    print "<th> ID </th>";
    print "<th> NOME </th>";
    print "<th> TELEFONE </th>";
    print "<th> IMAGEM  </th>";
    print "<th> AÇÕES  </th>";
    print "</tr>";
    while ($row = $response->fetch_object()) {
        print "<tr class='item'>";
        print "<td>" . $row->ID . "</td>";
        print "<td>" . $row->NOME . "</td>";
        print "<td>" . $row->TELEFONE . "</td>";
        print "<td> <img class='img-user' src='upload/$row->IMAGEM' /> </td>";
        print "<td class='buttons'>
                <button onclick=\" location.href='?page=editar&id=".$row->ID."' \" class='btn sucess'> Editar </button>
                <button onclick=\" if(confirm('Tem certeza que deseja excluir?')) {location.href='?page=salvar&acao=excluir&id=".$row->ID."'} else {false} \" class='btn danger'> Excluir </button>

            </td>";
        print "</tr>";
    }
    print "</table>";
    print "</div>";
} else {
    print "<p class='warning'> Não foi encontrado resultados. </p>";
}
?>