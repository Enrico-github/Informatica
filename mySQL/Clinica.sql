create database if not exists enrico_prearo_clinica;

use enrico_prearo_clinica;

create table pazienti (

Id_paziente int primary key auto_increment,

cognome varchar(30) not null,

nome varchar(30) not null,

data_nascita date,

provincia VARCHAR(50),

codice_Asl varchar(20)

);


create table visite (

Id_visita int primary key auto_increment,

data_visita date not null,

peso decimal(5,2),

altezza decimal (5,2),

pressione_min int,

pressione_max int,

glicemia decimal(5,2),

Id_paziente int,

foreign key(Id_paziente) references pazienti (Id_paziente)

);



insert into pazienti(cognome, nome, data_nascita, provincia, codice_Asl)

values ('Bianchi', 'Luca', '1985-04-10', 'Milano', 'ASL-MI01'),

('Rossi', 'Marco', '1990-07-23', 'Napoli', NULL),

('Verdi', 'Anna', '1978-12-01', 'Roma', 'ASL-RM05'),

('Neri', 'Giulia', '2000-02-14', 'Milano', 'ASL-MI03'),

('Esposito', 'Francesco', '1983-09-19', 'Napoli', 'ASL-NA07'),

('Conti', 'Marta', '1995-05-30', 'Roma', NULL);


insert into visite(data_visita, peso, altezza, pressione_min, pressione_max, glicemia, id_paziente)

values ('2024-03-15', 70, 175, 80, 120, 95, 1),

('2024-06-10', 75, 175, 85, 125, 100, 2),

('2020-05-22', 92, 180, 95, 145, 112, 3),

('2020-11-03', 88, 178, 90, 135, 108, 4),

('2020-08-12', 89, 178, 85, 140, 115, 5),

('2025-01-09', 59, 160, 100, 150, 99, 1),

('2025-02-02', 65, 165, 85, 118, 100, 2),

('2025-09-05', 62, 165, 70, 110, 98, 4),

('2025-03-15', 58, 170, 95, 145, 85, 6);



select * from pazienti;

select * from visite;


drop table pazienti;

drop table visite;


select * 

from pazienti p

join visite v -- Unire due o più tabelle per visualizzare i dati di tabelle diverse

on p.Id_paziente = v.Id_paziente;


select p.cognome,p.nome,v.data_visita

from pazienti p

join visite v

on p.Id_paziente = v.Id_paziente;


select *

from visite v

join pazienti p

on p.Id_paziente = v.Id_paziente;


select p.cognome, p.nome, v.pressione_min, v.pressione_max

from pazienti p

join visite v

on p.Id_paziente = v.Id_paziente;


select p.cognome, p.nome, v.pressione_min, v.pressione_max

from pazienti p

join visite v

on p.Id_paziente = v.Id_paziente

where v.pressione_min > 80;


select avg(v.pressione_min)

from pazienti p

join visite v

on p.Id_paziente = v.Id_paziente

where p.nome = "Luca" and p.cognome = "Bianchi";


-- Inner join, left join, right join


select nome, cognome

from pazienti p

inner join visite v on p.Id_paziente = v.Id_paziente;



select nome,cognome

from pazienti p

left join visite v

on p.Id_paziente = v.Id_paziente






