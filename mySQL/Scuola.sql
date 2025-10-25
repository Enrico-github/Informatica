create table studenti(
nome varchar(15),
cognome varchar(15),
materia varchar(15),
voto int
)

insert into studenti(Nome, Cognome, materia, voto) 
values
('Patrick','Pacurar','Matematica', 10),
('Matteo', 'Beccari','sistemi', 9),
('Bryan', 'Ezblauaui', 'Italiano',7),
('Enrico', 'Prearo', 'tpsit', 8),
('Patrick','Pacurar','informatica', 6),
('Matteo', 'Beccari','sistemi', 5),
('Bryan', 'Ezblauaui', 'Italiano',8),
('Enrico', 'Prearo', 'tpsit', 9),
('Patrick','Pacurar','informatica', 7),
('Matteo', 'Beccari','sistemi', 4),
('Bryan', 'Ezblauaui', 'Italiano',7),
('Enrico', 'Prearo', 'tpsit', 5),
('Patrick','Pacurar','Matematica', 4),
('Matteo', 'Beccari','sistemi', 5),
('Bryan', 'Ezblauaui', 'Italiano',5),
('Enrico', 'Prearo', 'tpsit', 7);

drop table studenti;

select Cognome,Nome,materia, avg(voto) 
/*alias*/
as mediaVoti 
from studenti 
group by Cognome,Nome,materia
/*prende chi ha una media > 6 in matematica*/
/*having lavora sulle funzioni di agregazione*/
having mediavoti > 6 and materia = 'Matematica';

select materia,voto 
from studenti 
where cognome = 'Pacurar' and nome = 'Patrick';



