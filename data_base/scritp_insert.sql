-- COMANDO PARA INSERIR
-- Isert into nome_da_tabela(colunas) values (valores)

insert into tb_usuario
 (nome_usuario,email_usuario,senha_usuario,data_cadastro)
values
('Tais','tais@outlook.com','senha123','2021-02-21');

insert into tb_categoria
(nome_categoria, id_usuario)
values
('alimentação',1);

insert into tb_categoria
(nome_categoria, id_usuario)
values
('higiene', 2);

insert into tb_empresa
(nome_empresa, telefone, endereço_empresa, id_usuario)
values
('Casas Bahia', '43985888888','rua da selva', 2);

insert into tb_conta
(banco_conta, agencia_conta, numero_conta, saldo_conta, id_usuario)
values
('222222', '153131', '66989562', 122.54,2);

-- no saldo da conta é decimal então não precisa aspas, os outros são varchar e precisa.
insert into tb_movimento
(tipo_movimento, data_movimento, valor_movimento, obs_movimento, id_empresa, id_conta, id_categoria, id_usuario)
values
(1, '2021-01-10',45,null,1,1,2,1);

INSERT INTO tb_usuario
(nome_usuario, email_usuario, senha_usuario, data_cadastro)
VALUES
('Ana Maria', 'ana_maria@hotmail.com', 'ana321', '2024-11-12');

INSERT INTO tb_usuario
(nome_usuario, email_usuario, senha_usuario, data_cadastro)
VALUES
('Paulo Roberto', 'paulo.roberto@gmail.com', 'plo213', '2024-11-12');

INSERT INTO tb_usuario
(nome_usuario, email_usuario, senha_usuario, data_cadastro)
VALUES
('Alisson Rocha', 'alissinho@hotmail.com', 'alissu321', '2024-11-01');

INSERT INTO tb_usuario
(nome_usuario, email_usuario, senha_usuario, data_cadastro)
VALUES
('João Neves', 'johnsnow@hotmail.com', 'snow456', '2024-11-02');

INSERT INTO tb_usuario
(nome_usuario, email_usuario, senha_usuario, data_cadastro)
VALUES
('Harry Potter', 'hpotter@hotmail.com', 'potter3110', '2024-11-03');

INSERT INTO tb_usuario
(nome_usuario, email_usuario, senha_usuario, data_cadastro)
VALUES
('Marcos Katchau', 'relampago@hotmail.com', 'katchau000', '2024-11-04');

INSERT INTO tb_usuario
(nome_usuario, email_usuario, senha_usuario, data_cadastro)
VALUES
('Fiorentina Santos', 'filo@hotmail.com', 'fiosantos987', '2024-11-05');

INSERT INTO tb_categoria
(nome_categoria, id_usuario)
VALUES
('Faculdade', 1);

INSERT INTO tb_categoria
(nome_categoria, id_usuario)
VALUES
('Trabalho CLT', 1);

INSERT INTO tb_categoria
(nome_categoria, id_usuario)
VALUES
('Trabalho CLT', 2);

INSERT INTO tb_categoria
(nome_categoria, id_usuario)
VALUES
('Internet', 2);

INSERT INTO tb_categoria
(nome_categoria, id_usuario)
VALUES
('Alimentação', 7);

INSERT INTO tb_categoria
(nome_categoria, id_usuario)
VALUES
('Farmácia', 7);

INSERT INTO tb_categoria
(nome_categoria, id_usuario)
VALUES
('Roupas', 7);

INSERT INTO tb_categoria
(nome_categoria, id_usuario)
VALUES
('Vendas', 7);

INSERT INTO tb_categoria
(nome_categoria, id_usuario)
VALUES
('Alimentação', 4);

INSERT INTO tb_categoria
(nome_categoria, id_usuario)
VALUES
('Farmácia', 4);

INSERT INTO tb_categoria
(nome_categoria, id_usuario)
VALUES
('Roupas', 4);

INSERT INTO tb_categoria
(nome_categoria, id_usuario)
VALUES
('Vendas', 4);

INSERT INTO tb_categoria
(nome_categoria, id_usuario)
VALUES
('Alimentação', 5);

INSERT INTO tb_categoria
(nome_categoria, id_usuario)
VALUES
('Farmácia', 5);

INSERT INTO tb_categoria
(nome_categoria, id_usuario)
VALUES
('Roupas', 5);

INSERT INTO tb_categoria
(nome_categoria, id_usuario)
VALUES
('Vendas', 5);

INSERT INTO tb_categoria
(nome_categoria, id_usuario)
VALUES
('Alimentação', 6);

INSERT INTO tb_categoria
(nome_categoria, id_usuario)
VALUES
('Farmácia', 6);

INSERT INTO tb_categoria
(nome_categoria, id_usuario)
VALUES
('Roupas', 6);

INSERT INTO tb_categoria
(nome_categoria, id_usuario)
VALUES
('Vendas', 6);

INSERT INTO tb_categoria
(nome_categoria, id_usuario)
VALUES
('Alimentação', 7);

INSERT INTO tb_categoria
(nome_categoria, id_usuario)
VALUES
('Farmácia', 7);

INSERT INTO tb_categoria
(nome_categoria, id_usuario)
VALUES
('Roupas', 7);

INSERT INTO tb_categoria
(nome_categoria, id_usuario)
VALUES
('Vendas', 7);

INSERT INTO tb_empresa
(nome_empresa, telefone_empresa, endereco_empresa, id_usuario)
VALUES
('OLX', '5532320101', 'Rua Serra Formosa', 3);

INSERT INTO tb_empresa
(nome_empresa, telefone_empresa, endereco_empresa, id_usuario)
VALUES
('Web Motors', '5534562301', 'Rua São Paulo', 3);

INSERT INTO tb_empresa
(nome_empresa, telefone_empresa, endereco_empresa, id_usuario)
VALUES
('Burger King', '5530304040', 'Av. Higienópolis', 3);

INSERT INTO tb_empresa
(nome_empresa, telefone_empresa, endereco_empresa, id_usuario)
VALUES
('Riachuelo', '553989-7788', 'Rod. Celso Garcia', 3);

INSERT INTO tb_empresa
(nome_empresa, telefone_empresa, endereco_empresa, id_usuario)
VALUES
('OLX', '5532320101', 'Rua Serra Formosa', 4);

INSERT INTO tb_empresa
(nome_empresa, telefone_empresa, endereco_empresa, id_usuario)
VALUES
('Mercado Livre', '5531310000', 'São Paulo Capital', 4);

INSERT INTO tb_empresa
(nome_empresa, telefone_empresa, endereco_empresa, id_usuario)
VALUES
('Mc Donalds', '553213-4411', 'Av. Tiradentes', 4);

INSERT INTO tb_empresa
(nome_empresa, telefone_empresa, endereco_empresa, id_usuario)
VALUES
('Farmácia Vale Verde', '5532322121', 'Av. JK', 4);

INSERT INTO tb_empresa
(nome_empresa, telefone_empresa, endereco_empresa, id_usuario)
VALUES
('Venda Pessoal', '5530001111' , 'Londres', 5);

INSERT INTO tb_empresa
(nome_empresa, telefone_empresa, endereco_empresa, id_usuario)
VALUES
('Sabor Caseiro', '5533334444', 'Av. Arthur Thomas', 5);

INSERT INTO tb_empresa
(nome_empresa, telefone_empresa, endereco_empresa, id_usuario)
VALUES
('C&A', '5538794321', 'Rod. Celso Garcia', 5);

INSERT INTO tb_empresa
(nome_empresa, telefone_empresa, endereco_empresa, id_usuario)
VALUES
('OLX', '5532320101', 'Rua Serra Formosa', 6);

INSERT INTO tb_empresa
(nome_empresa, telefone_empresa, endereco_empresa, id_usuario)
VALUES
('Big Dog Lanches', '5533472727', 'Rua Esperança', 6);

INSERT INTO tb_empresa
(nome_empresa, telefone_empresa, endereco_empresa, id_usuario)
VALUES
('Drogamais', '5531318888', 'Av. Tiradentes', 1);

INSERT INTO tb_empresa
(nome_empresa, telefone_empresa, endereco_empresa, id_usuario)
VALUES
('Filó Makes', '5530302020', 'Cinco Conjuntos, Rua 12', 1);

INSERT INTO tb_empresa
(nome_empresa, telefone_empresa, endereco_empresa, id_usuario)
VALUES
('Max Atacadista', '5530101515', 'Av.Tiradentes', 1);

INSERT INTO tb_empresa
(nome_empresa, telefone_empresa, endereco_empresa, id_usuario)
VALUES
('ZUA', '5533775757', 'Rod. Celso Garcia', 1);

INSERT INTO tb_conta
(banco_conta, agencia_conta, numero_conta, saldo_conta, id_usuario)
VALUES
('Santander', '1111', '12345', 2500.00, 3);

INSERT INTO tb_conta
(banco_conta, agencia_conta, numero_conta, saldo_conta, id_usuario)
VALUES
('Banco do Brasil', '2222', '23456', 0, 3);

INSERT INTO tb_conta
(banco_conta, agencia_conta, numero_conta, saldo_conta, id_usuario)
VALUES
('Banco do Brasil', '2222', '891011', 1200.32 , 4);

INSERT INTO tb_conta
(banco_conta, agencia_conta, numero_conta, saldo_conta, id_usuario)
VALUES
('Sicredi', '2424', '81234', 7000.00, 4);

INSERT INTO tb_conta
(banco_conta, agencia_conta, numero_conta, saldo_conta, id_usuario)
VALUES
('Gringotes', '0011', '91234', 325500.00, 5);

INSERT INTO tb_conta
(banco_conta, agencia_conta, numero_conta, saldo_conta, id_usuario)
VALUES
('NuBank', '0212', '9900', 3712.30, 5);

INSERT INTO tb_conta
(banco_conta, agencia_conta, numero_conta, saldo_conta, id_usuario)
VALUES
('NuBank', '0212', '100102', 8700.00, 6);

INSERT INTO tb_conta
(banco_conta, agencia_conta, numero_conta, saldo_conta, id_usuario)
VALUES
('Santander', '1111', '10089', 0, 6);

INSERT INTO tb_conta
(banco_conta, agencia_conta, numero_conta, saldo_conta, id_usuario)
VALUES
('NuBank', '0212', '11321', 9809.00, 7);

INSERT INTO tb_conta
(banco_conta, agencia_conta, numero_conta, saldo_conta, id_usuario)
VALUES
('Itaú', '0418', '11626', 1200.00, 1);

INSERT INTO tb_movimento
(tipo_movimento, data_movimento, valor_movimento, obs_movimento, id_categoria, id_empresa, id_conta, id_usuario)
VALUES
(1, '2024-11-19', 1600, null, 20, 11, 6, 5);

INSERT INTO tb_movimento
(tipo_movimento, data_movimento, valor_movimento, obs_movimento, id_categoria, id_empresa, id_conta, id_usuario)
VALUES
(1, '2024-11-19', 1600, null, 17, 11, 5, 5);

INSERT INTO tb_movimento
(tipo_movimento, data_movimento, valor_movimento, obs_movimento, id_categoria, id_empresa, id_conta, id_usuario)
VALUES
(2, '2024-11-19', 100, 'Comida', 17, 10, 6, 5);