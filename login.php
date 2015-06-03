<?php
require_once 'funcoes.php';

if(isset($_POST['username'])&&isset($_POST['password'])) {
	echo "PASSOU IF ISSET ";
    $username = $_POST['username'];
    $password = $_POST['password'];
	//Definir Array com Tabelas Diferentes
    $tipos = array('user','athlete');
    if(!empty($username)&&!empty($password)) {
	echo "PASSOU IF EMPTY ";
        //$password_hash = md5($password); 
		//Password Encriptada
        $encontrou = false;
        $x = 0;
        $ligacao = ligar_base_dados();
        while($x < 2) {
			echo " A FAZER WHILE ";
            $query = "SELECT * FROM $tipos[$x] WHERE user = '$username' AND pass = '$password' AND active ='1'";
            if($query_run = mysql_query($query, $ligacao)) {
			
			$registo = mysql_fetch_array($query);
			
			echo " QUERYRUN ";
                if(mysql_num_rows($query_run) > 0) {
				echo " NUMROWS ";
                    $encontrou = true;
                    $_SESSION['username'] = $username;
                    $_SESSION['tipo'] = $tipos[$x];
					//$_SESSION['jogador'] = $registo["id_player"];
                    $_SESSION['password']= $password;
                    header("Location: $tipos[$x]/principal.php");
                    break;
                }
            }
            //Combinação Errada
            if($x == 2 && !$encontrou) {
                unset($_POST['username']);
                unset($_POST['password']);
                $_SESSION['aviso'] = 1;
                header("Location: seniores.php");
            }
            $x++;
        }
        //Se está vazio
    } else {
        $_SESSION['aviso'] = 0;
        header("Location: entrar.php");
    }
}


?>