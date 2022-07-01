Create table tb_status(
	id int not null primary key auto_increment,
    status varchar(25) not null
);

insert into tb_status(status) values('pendente');
insert into tb_status(status) values('realizado');

select * from tb_status;

create table tb_tarefas(
	id int not null primary key auto_increment,
    tarefa text not null,
    data_cadastro datetime not null default current_timestamp,
    id_status int not null default  1,
    foreign key(id_status) references tb_status(id)
);

insert into tb_tarefas(tarefa) values("Estudar Php");

select * from tb_tarefas;
