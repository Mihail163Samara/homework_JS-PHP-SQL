
-- create
CREATE TABLE groupmates (
  id INTEGER PRIMARY KEY AUTO_INCREMENT,
  name TEXT NOT NULL,
  age INTEGER NOT NULL,
  address CHAR(200) NOT NULL
);

-- insert
INSERT INTO groupmates(name, age, address) VALUES ('Clark','18', 'Moskow,st.Lenina,34/2');
INSERT INTO groupmates(name, age, address) VALUES ('Dave', '33', 'Sankt-Petersburg,st.Nevskay.201/45');
INSERT INTO groupmates(name, age, address) VALUES ('Ava', '30', 'Moskow,st.Nikolaevsk,67/164');
INSERT INTO groupmates(name, age, address) VALUES ('Oleg', '37','Penza, st.Volodarsky,49');
INSERT INTO groupmates(name, age, address) VALUES ('Ann', '42', 'Tula, st.Oboronnaya,24/3');
INSERT INTO groupmates(name, age, address) VALUES ('Sophie','13', 'Moskow,Sofiyskaya naber., 22/44');
INSERT INTO groupmates(name, age, address) VALUES ('Den','27','Shkolny lane, 4, Smolyaninovo urban-type settlement, Shkotovsky Municipal District, Primorsky Krai');
INSERT INTO groupmates(name, age, address) VALUES ('Kate','82', 'Lazo Street, 7, Tavrichanka village, Nadezhdinsky district, Primorsky Krai');
INSERT INTO groupmates(name, age, address) VALUES ('Oleg', '37','103 Mira Avenue, Krasnoyarsk');
INSERT INTO groupmates(name, age, address) VALUES ('Ann', '42', '115/3 Abaya Street, Pavlodar');
INSERT INTO groupmates(name, age, address) VALUES ('Dima','57', 'Komsomolskaya street, 10, Volgograd');
INSERT INTO groupmates(name, age, address) VALUES ('Denis','17','Nikolay Nikonov Street, 6, Yekaterinburg, Sverdlovsk region');
INSERT INTO groupmates(name, age, address) VALUES ('Ksusha','98', 'Moskovskoe shosse, 272, Samara');
-- fetch 
SELECT name as ИМЯ  
FROM groupmates 
WHERE age  BETWEEN 18 AND 30 AND address LIKE '%Moskow%'
ORDER BY name;
