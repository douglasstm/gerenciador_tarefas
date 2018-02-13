<?php

	function traduz_prioridade($priori){
		switch ($priori) {
			case 1:
				return 'Alta';
				break;

			case 2:
				return 'Mais ou menos';
				break;

			case 3:
				return 'Baixa';
				break;
			
			default:
				return 'Inderminada';
				break;
		}
	}

	function traduz_data_para_exibir($data){

		if ($data == '' OR $data == '0000-00-00') {
			return '';
		}

		$dados = explode("-", $data);

		$data_exibir = $dados['2']."/".$dados['1']."/".$dados['0'];

		return $data_exibir;
	}
?>