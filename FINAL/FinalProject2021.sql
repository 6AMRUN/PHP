--  Alexies Farinas
--  Mahima Pandey
--  CIT 252 – 1001 Spring 2021
--  Due: May 12, 2021
--  FINAL PROJECT

--  CREATE DATABASE
    CREATE DATABASE AFClub;

--  USE STATEMENT TO SLECT THE DATABASE
    USE AFClub;

--  CREATE TABLE
    CREATE TABLE memberInfo(memberID INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
                             FirstName CHAR(50) NOT NULL,
                             LastName CHAR(50) NOT NULL,
                             Address CHAR(50) NOT NULL,
                             Email CHAR(30) NOT NULL
                            );

--  INSERT DATA 
--  memberID, FirstName, LastName, Address, Email
    INSERT INTO memberInfo VALUES
    (1, 'Esther', 'Flores', '3076  Hoffman Avenue', 'E.Flores@gmail.com'),
    (2, 'Leigh', 'Harrison', '4917  Saint Marys Avenue', 'Leigh23Harrison@yahoo.com'),
    (3, 'Angela', 'Lowman', '3172  Cost Avenue', 'AngelLowman@gamil.com'),
    (4, 'Jose', 'Obrien', '4226  Marigold Lane', 'J.M.Obrien@gmail.com'),
    (5, 'Catherine', 'Holman', '1302  Vine Street', 'Holman.C@yahoo.com'),
    (6, 'Willie', 'Knox', '1204  Maple Avenue', 'WillKnox@icloud.com'),
    (7, 'Paul', 'Yi', '4280  Hillcrest Avenue', 'Yi42Paul@gmail.com'),
    (8, 'Rey', 'Myers', '3243  Lindale Avenue', 'ReyMMyers@icloud.com'),
    (9, 'Edward', 'Fields', '4558  Penn Street', 'Fields.E@yahoo.com'),
    (10, 'Jenna', 'Gilbert', '989  Sheila Lane', 'JenGil@yahoo.com');