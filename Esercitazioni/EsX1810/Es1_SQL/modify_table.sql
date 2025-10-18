alter table autori
change cf codice_fiscale char(16),
add indirizzo varchar(40),
add CAP char(5),
modify cognome varchar(40) not null,
modify nome varchar(40) not null;