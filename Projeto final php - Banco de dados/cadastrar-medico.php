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



<h1>Cadastrar Médico</h1><br>
<form action="?page=salvar-medico" method="POST">
    <input type="hidden" name="acao" value="cadastrar">
    <div class="mb-3">
        <label>Nome</label>
        <input type="text" name="nome_medico" class="form-control">
    </div>
    <div class="mb-3">
        <label>CRM</label>
        <input type="text" name="crm_medico" class="form-control">
    </div>
    <div class="mb-3">
        <label>Especialidade</label>
        <input type="text" name="especialidade_medico" class="form-control">
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
			Enviar
		</button>
	</div>
</form>
