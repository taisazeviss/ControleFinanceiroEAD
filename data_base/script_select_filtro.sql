-- para selecionar nome que tenha letra n

select nome_usuario, data_cadastro
from tb_usuario
where nome_usuario like '%n%';

-- para nomes com letra inicial C 'C%' . Se for final '%C'

select nome_usuario, data_cadastro
from tb_usuario
where nome_usuario like 'C%';

-- selecionar periodo
select nome_usuario, data_cadastro
from tb_usuario
where data_cadastro between '2020-02-01' and '2021-02-28';

-- pesquisar algo especifico ao id

select banco_conta, agencia_conta, saldo_conta
from tb_conta
where id_usuario = 2;


-- selecionando o tipo de movimento 1 entrada 2 saida
    select tipo_movimento,
              data_movimento,
              valor_movimento,
              nome_categoria,
              nome_empresa,
              nome_usuario,
              banco_conta
              from tb_movimento
              inner join tb_categoria
              on tb_categoria.id_categoria = tb_movimento.id_categoria
              inner join tb_empresa
              on tb_empresa.id_empresa = tb_movimento.id_empresa
              inner join tb_usuario
              on tb_usuario.id_usuario = tb_movimento.id_usuario
              inner join tb_conta
              on tb_conta.id_conta = tb_movimento.id_conta
              where tb_movimento.id_usuario = 2;
               -- para algum dado que não é nulo
               
               
                select tipo_movimento,
              data_movimento,
              valor_movimento,
              nome_categoria,
              nome_empresa,
              nome_usuario,
              banco_conta,
              obs_movimento
              from tb_movimento
              inner join tb_categoria
              on tb_categoria.id_categoria = tb_movimento.id_categoria
              inner join tb_empresa
              on tb_empresa.id_empresa = tb_movimento.id_empresa
              inner join tb_usuario
              on tb_usuario.id_usuario = tb_movimento.id_usuario
              inner join tb_conta
              on tb_conta.id_conta = tb_movimento.id_conta
              where tb_movimento.obs_movimento is not null;
              
              -- tirar a data do modo americano. data_format é um codigo nativo sql. o Y tem que ser 
              -- maiusculo de ANO, e onde tem as, vai assumir o titulo do campo data
              
               select tipo_movimento,
              date_format(data_movimento, "%d/%m/%Y") as data_movimento,
              valor_movimento,
              nome_categoria,
              nome_empresa,
              nome_usuario,
              banco_conta,
              obs_movimento
              
              from tb_movimento
              inner join tb_categoria
              on tb_categoria.id_categoria = tb_movimento.id_categoria
              inner join tb_empresa
              on tb_empresa.id_empresa = tb_movimento.id_empresa
              inner join tb_usuario
              on tb_usuario.id_usuario = tb_movimento.id_usuario
              inner join tb_conta
              on tb_conta.id_conta = tb_movimento.id_conta;
              
              -- somar.  O as assume o titulo senao aparece a formula no titulo
              
              select sum(valor_movimento) as total
              from tb_movimento
              where tipomovimento = 2
              and id_usuario = 1;
              
              -- selecionar o tipo do movimento onde for maior que 50
              
                   select tipo_movimento,
              data_movimento,
              valor_movimento,
              nome_categoria,
              nome_empresa,
              nome_usuario,
              banco_conta,
              obs_movimento
              
              from tb_movimento
              inner join tb_categoria
              on tb_categoria.id_categoria = tb_movimento.id_categoria
              inner join tb_empresa
              on tb_empresa.id_empresa = tb_movimento.id_empresa
              inner join tb_usuario
              on tb_usuario.id_usuario = tb_movimento.id_usuario
              inner join tb_conta
              on tb_conta.id_conta = tb_movimento.id_conta
              where tb_movimento.tipo_movimento = 2
              and tb_movimento.valor_movimento > 2