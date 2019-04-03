<?php
  class Utils
  {
    public static function insert($arr){
			$certo = true;
			$nome_tabela = $arr['nome_tabela'];
			$query = "INSERT INTO `$nome_tabela` VALUES (null";
			foreach ($arr as $key => $value) {
				$chave = $key;
				$valor = $value;
				if($chave == 'acao' || $chave == 'nome_tabela'){
					continue;
				}
				if($value == ''){
					$certo = false;
					break;
				}
				$query.=",?";
				$parametros[] = $value;
			}

			$query.=")";
			if($certo == true){
			$sql = MySql::conectar()->prepare($query);
			$sql->execute($parametros);			
			}
			return $certo;
    }
    
    public static function uploadFile($file){
      $formatoArquivo = explode('.',$file['name']);
      $imagemNome = uniqid().'.'.$formatoArquivo[count($formatoArquivo) - 1];
      if(move_uploaded_file($file['tmp_name'], BASE_DIR_PAINEL.'/uploads/'.$imagemNome)){
        return $imagemNome;
      }else{
        return false;
      }
		}

		public static function deletar($tabela,$id=false){
			if($id == false){
				$sql = MySql::conectar()->prepare("DELETE FROM `$tabela`");
			}else{
				$sql = MySql::conectar()->prepare("DELETE FROM `$tabela` WHERE id = $id");
			}
			$sql->execute();
		}

		public static function redirect($url){
			echo '<script>location.href="'.$url.'"</script>';
			die();
		}

  }

  

?>