<?php 

    // Caso exista na URL uma chave com o nome ret e um valor numérico esteja atribuido, esse validação,
    // vai identificar e apresentar a mensagem de acordo com o número!
    if(isset($_GET['ret'])){
        $ret = $_GET['ret'];
    }

    if(isset($ret)){
        switch($ret){
            case 1:
                echo '<div class="alert alert-success">Ação realizada com SUCESSO!</div>';
            break;

            case 0:
                echo '<div class="alert alert-warning">Preencher todos os campos OBRIGATÓRIOS!</div>';
            break;

            case -1:
                echo '<div class="alert alert-danger">Houve uma FALHA! Tente novamente mais tarde...</div>';
            break;

            case -2:
                echo '<div class="alert alert-danger">A SENHA deve conter entre 6 e 8 caracteres!</div>';
            break;

            case -3:
                echo '<div class="alert alert-danger">As SENHAS devem ser iguais!</div>';
            break;

            case -4:
                echo '<div class="alert alert-danger">Esse item não pode ser excluso, pois esta em uso!</div>';
            break;

            case -5:
                echo '<div class="alert alert-danger">Já existe um cadastro com este E-mail!</div>';
            break;

            case -6:
                echo '<div class="alert alert-danger">Cadastro inexistente. Nenhum Usuário foi encontrado!</div>';
            break;        
        }
    }