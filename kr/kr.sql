// 1
CREATE TABLE T1(N int AUTO_INCREMENT, name varchar(50), type varchar(50), firm varchar(50), PRIMARY KEY(N));
// 2
INSERT INTO T1(name, type, firm) 
	VALUES("Access", "Реляционная", "Microsoft"), 
	("Foxpro", "Реляционная", "Microsoft"), 
	("Oracle7", "Реляционная", "Oracle"), 
	("Orion3", "ОО", "Orion"), 
	("Orion4", "ОО", "Orion"), 
	("Delphi", "ОО", "Microsoft"), 
	("Essbase1", "Многом", "Arbor"), 
	("Essbase2", "Многом", "Arbor"), 
	("Orion5", "Многом", "Orion"), 
	("Oracle8", "Многом", "Oracle");
//3
SELECT count(*) FROM T1 where not(name like "Oracle%");
//4
SELECT name from T1 where type=(SELECT type from T1 order by type asc limit 1);
//5
SELECT name from T1 where not(firm in (SELECT firm FROM T1 where type="ОО"));