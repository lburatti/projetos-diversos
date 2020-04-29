create database api_rest_laravel;

use api_rest_laravel;

describe clientes;
describe pasteis;
describe pedidos;

select * from clientes;
select * from pasteis;
select * from pedidos;

drop table pedidos;

alter table pedidos add foreign key (id_cliente) references clientes(id);

alter table pedidos modify id_cliente bigint;
alter table pedidos modify id_pastel bigint;