<?php

    // UtilDAO (Classe de Utilidades): Essa Classe vai realizar a sessão do usuário.
    // Aqui sera controlado a liberação da parte interna da aplicação!

    // Para desenvolver a aplicação e realizar todos os testes necessário,
    // vamos SIMULAR um usuário logado até porque, não temos ainda o Banco de Dados!

    class UtilDAO{
        // 1ª Function: Iniciar a Sessão do Usuário dando a permissão!
        private static function IniciarSessao(){
            if(!isset($_SESSION)){
                session_start();
            }
        }

        // 2ª Function: Essa função vai levantar os dados e salvar para o acesso (Nome e Id do Usuário)!
        public static function CriarSessao($cod, $nome){
            self::IniciarSessao();

            $_SESSION['cod'] = $cod;
            $_SESSION['nome'] = $nome;
        }

        // 3ª Function: Vamos receber o nome do Usuário para ser utilizado na Aplicação!
        public static function NomeLogado(){
            self::IniciarSessao();

            return $_SESSION['nome'];
        }

        // 4ª Function: Vamos receber o ID do Usuário para ser utilizado na Aplicação!
        public static function UsuarioLogado(){
            // Esse return 1 SIMULA o ID do Usuário Logado, que no caso é o ID 1.
            // return 1;

            self::IniciarSessao();

            return $_SESSION['cod'];
        }

        // 5ª Function: Caso o Usuário saia da Aplicação, toda a Sessão é limpa(Destruida)!
        public static function Deslogar(){
            self::IniciarSessao();

            unset($_SESSION['cod']);
            unset($_SESSION['nome']);

            header('location: index.php');
            exit;
        }

        // 6ª Function: Essa function monitora se, existe dados do Usuário em Sessão, caso não, redirecione para a tela de Login!
        public static function VerificarLogado(){
            self::IniciarSessao();

            if(!isset($_SESSION['cod']) || $_SESSION['cod'] == ''){
                header('location: index.php');
                exit;
            }
        }
    }