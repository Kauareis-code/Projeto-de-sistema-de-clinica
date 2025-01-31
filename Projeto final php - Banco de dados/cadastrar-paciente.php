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
		
	/* Estilo para as opções de rádio na mesma linha com espaçamento */
	.mb-3 label {
		margin-right: 20px;
		/* Ajusta o espaçamento entre as opções de rádio */
	}
</style>

<h1>Cadastrar Paciente</h1><br>
<form action="?page=salvar-paciente" method="POST">
	<input type="hidden" name="acao" value="cadastrar">
	<div class="mb-3">
		<label>Nome</label>
		<input type="text" name="nome_paciente" class="form-control">
	</div>
	<div class="mb-3">
		<label>CPF</label>
		<input type="text" name="cpf_paciente" class="form-control">
	</div>
	<div class="mb-3">
		<label>E-mail</label>
		<input type="mail" name="email_paciente" class="form-control">
	</div>
	<div class="mb-3">
		<label>Fone</label>
		<input type="text" name="fone_paciente" class="form-control">
	</div>
	<div class="mb-3">
		<label>CEP</label>
		<input type="text" name="endereco_paciente" class="form-control">
	</div>
	<div class="mb-3">
		<label>Data de Nascimento</label>
		<input type="date" name="dt_nasc_paciente" class="form-control">
	</div><br>
	<div class="mb-3">
		<label>Qual e seu gênero?</label>
		<label><input type="radio" name="sexo_paciente" value="m"> Masculino</label>
		<label><input type="radio" name="sexo_paciente" value="f"> Feminino</label>
	</div><br>
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