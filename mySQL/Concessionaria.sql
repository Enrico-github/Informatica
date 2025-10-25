create table Moto(
Marca varchar(15) not null,
Modello varchar(15) not null,
Cilindrata int check (Cilindrata <= 1000),
Targa varchar(7),
Potenza int,
PuntoVendita varchar(15) default 'Italia'	/*imposta Italia come PuntoVendita per ogni oggetto*/
);

insert into Moto (Marca,Modello,Cilindrata,Targa,Potenza)
values('Yamaha', 'YZF-R125', 125, 'EZ43516', 15),
/*('Kawasaki', 'ZX-14', 1399, 'todo', 190)*/	/*errore nella Cilindrata*/
('Yamaha', 'YZF-R7', 700, 'todo', 70),
('Yamaha', 'YZF-R1', 1000, 'todo', 200);

drop table Moto;

select * from Moto;
select Marca, Modello from Moto;
select Marca, Modello from Moto where Cilindrata>125;
select Marca, Modello from Moto where Cilindrata between 125 and 1000;
select Marca, Modello from Moto where Cilindrata<125 or Cilindrata>1000;
