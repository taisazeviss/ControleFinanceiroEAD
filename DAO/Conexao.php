<?php
    //Self comando que reaproveita comandos da mesma classe
    //PDO Classe imbutida propria do PHP para interagir com todos os SGBDs (Softwares de gerenciamento de SQL)

    // Configurações do site
    define('HOST', '127.0.0.1'); //IP
    define('USER', 'root'); //usuario
    define('PASS', null); //Senha, quando instalou sql, ja veio sem senha
    define('DB', 'db_financeiro_ead'); //Banco, a pasta do banco de dados
    /**
     * Conexao.class TIPO [Conexão]
     * Descricao: Estabelece conexões com o banco usando SingleTon
     * @copyright (c) year, WMBarros
     */

    class Conexao {
        /** @var PDO */
        private static $Connect;

        //Função estática não cria objeto na memoria, funciona de forma direta
        //Quando uma estrutura de função é padrão, não sofre alterações, podemos utilizar a função estatica
        private static function Conectar() {
            try {

                //Verifica se a conexão não existe
                if (self::$Connect == null):  //self:ele mesmo, recurso dessa propria classe. :: significa que o recurso que vai chamar é static

                    $dsn = 'mysql:host=' . HOST . ';dbname=' . DB;
                    self::$Connect = new PDO($dsn, USER, PASS, null);
                endif;
            } catch (PDOException $e) {
                echo $e->getMessage();
            }
        
            //Seta os atributos para que seja retornado as excessões do banco
            //esse comando deixa habilitado para que os erros do bd sejam exibidos aqui no php
            self::$Connect->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        
            return  self::$Connect;
            //depois ele retorna na linha 44. é o retorno do retorno. retorna para sair fora da função
        }

        public static function retornarConexao() {
            return  self::Conectar();
        }
    }
?>