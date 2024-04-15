create database appda

-- Tabela para cadastro 
create table cadastro
(
	id_cad int auto_increment,
	nome varchar(100) not null,
	email varchar(100) not null,
	senha varchar(100) not null,
	endereco varchar(100) not null,
	cpf varchar(11) not null,
	tipo enum('cliente', 'carreteiro') not null,
	primary key(id_cad)
)

--  tabela de login
create table login
(
	id_cadastro int,
	id_login int auto_increment,
	email varchar(100) not null,
	senha varchar(100) not null,
	primary key(id_login),
	foreign key(id_cadastro) references cadastro(id_cad)	
)

-- Tabela dos carreteiros
create table carreteiro
(
	id_cadastro int,
	id_carreteiro int,
	placa varchar(7) not null,
	preco_viagem float not null,
	descricao text not null,
	primary key(id_carreteiro),
	foreign key(id_cadastro) references cadastro(id_cad)
)

drop database appda	