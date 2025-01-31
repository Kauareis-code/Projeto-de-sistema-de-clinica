<style>
     /* Estilos para os inputs */
	 .form-control {
            font-family: 'Comfortaa', sans-serif !important; /* Troca a fonte */
            font-size: 12px !important; /* Ajusta o tamanho da fonte */
            color: #58867e !important; /* Altera a cor do texto dentro das caixas de entrada */
        }

        /* Estilo para os rótulos */
        label {
            font-size: 14px !important; /* Ajusta o tamanho da fonte dos labels */
            color: #58867e !important; /* Altera a cor do texto dos labels */
        }

		h1{
			color: #58867e;
		}
</style>

<h1>Cadastrar Consulta</h1><br>
<form action="?page=salvar-consulta" method="POST">
	<input type="hidden" name="acao" value="cadastrar">
	<div class="mb-3">
		<label>Nome do Paciente</label>
		<select name="paciente_id_paciente" class="form-control">
			<option> - Escolha um Paciente - </option>
			<?php
				$sql_1 = "SELECT id_paciente, nome_paciente FROM paciente";

				$res_1 = $conn->query($sql_1);

				$qtd_1 = $res_1->num_rows;

				if($qtd_1 > 0){
					while($row_1 = $res_1->fetch_object()){
						print "<option value='".$row_1->id_paciente."'>".$row_1->nome_paciente."</option>";
					}
				}else{
					print "<option>Não há pacientes</option>";
				}
			?>
		</select>		
	</div>
	<div class="mb-3">
		<label>Nome do Médico</label>
		<select name="medico_id_medico" class="form-control">
			<option> - Escolha um Médico - </option>
			<?php
				$sql_2 = "SELECT id_medico, nome_medico FROM medico";

				$res_2 = $conn->query($sql_2);

				$qtd_2 = $res_2->num_rows;

				if($qtd_2 > 0){
					while($row_2 = $res_2->fetch_object()){
						print "<option value='".$row_2->id_medico."'>".$row_2->nome_medico."</option>";
					}
				}else{
					print "<option>Não há Médicos</option>";
				}
			?>
		</select>		
	</div>
	<div class="mb-3">
		<label>Data da Consulta</label>
		<input type="date" name="data_consulta" class="form-control">
	</div>
	<div class="mb-3">
		<label>Hora da Consulta</label>
		<input type="time" name="hora_consulta" class="form-control">
	</div>
	<div class="mb-3">
		<label>Descrição</label>
		<textarea name="descricao_consulta" class="form-control"></textarea>
	</div>
	<div class="mb-3">
    <button type="submit" class="btn btn-success" 
        style="background-color: #43726a !important; 
               color: white !important; 
               padding: 10px 10px !important; 
               font-size: 12px !important; 
               border: none !important; 
               border-radius: 20px !important; 
               cursor: pointer !important; 
               box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1) !important; 
               transition: background-color 0.3s ease, transform 0.2s ease !important;">
        Salvar
    </button>
</div>
</form>
