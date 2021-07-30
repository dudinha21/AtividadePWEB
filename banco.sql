create database atividadePweb;

create table formcadastro (nome VARCHAR(200), login VARCHAR(20), email VARCHAR(50), senha VARCHAR(50),
PRIMARY KEY (login, senha));

create table formlogin (login_usuario VARCHAR(200), senha_usuario VARCHAR(50), 
PRIMARY KEY(login_usuario, senha_usuario),
FOREIGN KEY (login_usuario, senha_usuario)
REFERENCES formcadastro (login, senha) 
ON UPDATE CASCADE); 




