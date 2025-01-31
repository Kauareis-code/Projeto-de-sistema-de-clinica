<h1 class="titulo-pagina">Listar Paciente</h1>
<?php
$sql = "SELECT * FROM paciente";

$res = $conn->query($sql);

$qtd = $res->num_rows;

if ($qtd > 0) {
    $contador = 1; // Inicializa o contador

    print "<p class='mensagem-resultado encontrados'>Encontrou <b>$qtd</b> resultado(s)</p>";
    print "<table class='table table-bordered table-striped table-hover'>";
    print "<tr>";
    print "<th>Nº</th>";
    print "<th>Nome</th>";
    print "<th>CPF</th>";
    print "<th>E-mail</th>";
    print "<th>Fone</th>";
    print "<th>CEP</th>";
    print "<th>Data de Nasc.</th>";
    print "<th>Sexo</th>";
    print "<th>Ações</th>";
    print "</tr>";
    while ($row = $res->fetch_object()) {
        $sexo = ($row->sexo_paciente == "m") ? "Masculino" : "Feminino";

        print "<tr>";
        print "<td>" . $contador++ . "</td>"; // Incrementa o número
        print "<td>" . $row->nome_paciente . "</td>";
        print "<td>" . $row->cpf_paciente . "</td>";
        print "<td>" . $row->email_paciente . "</td>";
        print "<td>" . $row->fone_paciente . "</td>";
        print "<td>" . $row->endereco_paciente . "</td>";
        print "<td>" . $row->dt_nasc_paciente . "</td>";
        print "<td>" . $sexo . "</td>";
        print "<td>
                    <button class='btn btn-success' onclick=\"location.href='?page=editar-paciente&id_paciente=" . $row->id_paciente . "';\">Editar</button>
                    <button class='btn btn-danger' onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=salvar-paciente&acao=excluir&id_paciente=" . $row->id_paciente . "';}else{false;}\">Excluir</button>
               </td>";
        print "</tr>";
    }
    print "</table>";
} else {
    print "<p class='mensagem-resultado nao-encontrados'>Não encontrou resultado</p>";
}
?>
