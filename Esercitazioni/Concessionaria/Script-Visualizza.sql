select * from Moto;
select Marca, Modello from Moto;
select Marca, Modello from Moto where Cilindrata>125;
select Marca, Modello from Moto where Cilindrata between 125 and 1000;
select Marca, Modello from Moto where Cilindrata<125 or Cilindrata>1000;