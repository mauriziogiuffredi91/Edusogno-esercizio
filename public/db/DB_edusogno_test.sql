CREATE TABLE [edu_test] eventi(
  id INT PRIMARY KEY,
  nome_evento VARCHAR (100),
  descrizione_evento TEXT,
  Data DATE,
  ora TIME,
);
CREATE TABLE [edu_test] utenti(
  id INT PRIMARY KEY,
  nome VARCHAR (30),
  cognome VARCHAR (70),
  email VARCHAR (90)
);