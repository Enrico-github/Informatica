create table Moto(
Marca varchar(15) not null,
Modello varchar(15) not null,
Cilindrata int check (Cilindrata <= 1000),
Targa varchar(7),
Potenza int,
PuntoVendita varchar(15) default 'Italia'	/*imposta Italia come PuntoVendita per ogni oggetto*/
);