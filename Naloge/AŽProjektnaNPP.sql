/*
Created		14/05/2024
Modified		14/05/2024
Project		
Model		
Company		
Author		
Version		
Database		MS SQL 7 
*/






Drop table [sprememba] 
go
Drop table [napredek] 
go
Drop table [admin] 
go
Drop table [users] 
go










Create table [users] (
	[Id_user] Integer Identity(1,1) NOT NULL UNIQUE,
	[Username] Varchar(100) NULL,
	[Email] Varchar(100) NULL UNIQUE,
	[Age] Integer NULL,
	[teza] Integer NULL,
	[Password] Varchar(100) NULL,
	[image] Varchar(255) NULL,
Primary Key  ([Id_user])
) 
go

Create table [admin] (
	[id_admin] Integer Identity(1,1) NOT NULL UNIQUE,
	[user_adm] Varchar(100) NULL,
	[Password] Varchar(100) NULL,
Primary Key  ([id_admin])
) 
go

Create table [napredek] (
	[id_nap] Integer Identity(1,1) NOT NULL UNIQUE,
	[bench] Integer NULL,
	[squat] Integer NULL,
	[deadlift] Integer NULL,
	[Id_user] Integer NOT NULL,
Primary Key  ([id_nap],[Id_user])
) 
go

Create table [sprememba] (
	[id_izbrisa] Integer Identity(1,1) NOT NULL UNIQUE,
	[datum_izbrisa] Datetime NULL,
	[izbrisani] Varchar(100) NULL,
	[id_admin] Integer NOT NULL,
Primary Key  ([id_izbrisa])
) 
go


Alter table [napredek] add  foreign key([Id_user]) references [users] ([Id_user]) 
go
Alter table [sprememba] add  foreign key([id_admin]) references [admin] ([id_admin]) 
go


Set quoted_identifier on
go





Set quoted_identifier off
go



INSERT INTO users (Username, Email, Age, teza, Password, image)
VALUES
('JohnDoe', 'john.doe@example.com', 25, 70, 'password123', 'john_doe.jpg'),
('JaneSmith', 'jane.smith@example.com', 30, 65, 'securepass', 'jane_smith.jpg'),
('MikeJohnson', 'mike.johnson@example.com', 40, 80, 'mikespass', 'mike_johnson.jpg'),
('EmilyBrown', 'emily.brown@example.com', 35, 60, 'pass1234', 'emily_brown.jpg'),
('ChrisDavis', 'chris.davis@example.com', 28, 75, 'chrispass', 'chris_davis.jpg'),
('SarahWilson', 'sarah.wilson@example.com', 45, 68, 'password12345', 'sarah_wilson.jpg'),
('AlexClark', 'alex.clark@example.com', 33, 72, 'pass123', 'alex_clark.jpg'),
('LisaTaylor', 'lisa.taylor@example.com', 29, 67, 'lisa123', 'lisa_taylor.jpg'),
('KevinMartinez', 'kevin.martinez@example.com', 32, 78, 'kevinpass', 'kevin_martinez.jpg'),
('OliviaWhite', 'olivia.white@example.com', 27, 63, 'olivia123', 'olivia_white.jpg'),
('MichaelLee', 'michael.lee@example.com', 31, 75, 'michaelpass', 'michael_lee.jpg'),
('EmmaThomas', 'emma.thomas@example.com', 34, 69, 'thomaspw', 'emma_thomas.jpg'),
('DavidHarris', 'david.harris@example.com', 39, 73, 'david123', 'david_harris.jpg'),
('AnnaAnderson', 'anna.anderson@example.com', 26, 66, 'annapass', 'anna_anderson.jpg'),
('JamesWilson', 'james.wilson@example.com', 37, 79, 'jamespass', 'james_wilson.jpg'),
('JessicaLopez', 'jessica.lopez@example.com', 36, 71, 'jessicapw', 'jessica_lopez.jpg'),
('RyanGarcia', 'ryan.garcia@example.com', 38, 77, 'ryan123', 'ryan_garcia.jpg'),
('KimberlyKing', 'kimberly.king@example.com', 41, 74, 'kimpass', 'kimberly_king.jpg'),
('WilliamRivera', 'william.rivera@example.com', 42, 76, 'williampw', 'william_rivera.jpg'),
('MeganScott', 'megan.scott@example.com', 43, 68, 'megan123', 'megan_scott.jpg')

INSERT INTO admin (user_adm, Password)
VALUES
('admin1', 'adminpass1'),
('admin2', 'adminpass2'),
('admin3', 'adminpass3'),
('admin4', 'adminpass4'),
('admin5', 'adminpass5'),
('admin6', 'adminpass6'),
('admin7', 'adminpass7'),
('admin8', 'adminpass8'),
('admin9', 'adminpass9'),
('admin10', 'adminpass10'),

INSERT INTO napredek (bench, squat, deadlift, Id_user)
VALUES
(100, 150, 200, 1),
(110, 160, 210, 2),
(120, 170, 220, 3),
(130, 180, 230, 4),
(140, 190, 240, 5),
(150, 200, 250, 6),
(160, 210, 260, 7),
(170, 220, 270, 8),
(180, 230, 280, 9),
(190, 240, 290, 10),
(200, 250, 300, 11),
(210, 260, 310, 12),
(220, 270, 320, 13),
(230, 280, 330, 14),
(240, 290, 340, 15),
(250, 300, 350, 16),
(260, 310, 360, 17),
(270, 320, 370, 18),
(280, 330, 380, 19),
(290, 340, 390, 20)

INSERT INTO sprememba (datum_izbrisa, izbrisani, id_admin)
VALUES
('2024-05-01 10:00:00', 'JaneSmith', 1),
('2024-05-02 11:00:00', 'MikeJohnson', 2),
('2024-05-03 12:00:00', 'EmilyBrown', 3),
('2024-05-04 13:00:00', 'ChrisDavis', 4),
('2024-05-05 14:00:00', 'SarahWilson', 5),
('2024-05-06 15:00:00', 'AlexClark', 6),
('2024-05-07 16:00:00', 'LisaTaylor', 7),
('2024-05-08 17:00:00', 'KevinMartinez', 8),
('2024-05-09 18:00:00', 'OliviaWhite', 9),
('2024-05-10 19:00:00', 'MichaelLee', 10),
('2024-05-11 20:00:00', 'EmmaThomas', 11),
('2024-05-12 21:00:00', 'DavidHarris', 12),
('2024-05-13 22:00:00', 'AnnaAnderson', 13),
('2024-05-14 23:00:00', 'JamesWilson', 14),
('2024-05-15 00:00:00', 'JessicaLopez', 15),
('2024-05-16 01:00:00', 'RyanGarcia', 16),
('2024-05-17 02:00:00', 'KimberlyKing', 17),
('2024-05-18 03:00:00', 'WilliamRivera', 18),
('2024-05-19 04:00:00', 'MeganScott', 19),
('2024-05-20 05:00:00', 'JohnDoe', 20)




SELECT * FROM users 
WHERE Age > 30

SELECT * FROM napredek 
WHERE deadlift > 250

SELECT * FROM sprememba 
WHERE datum_izbrisa > '2024-05-10'

SELECT * FROM users 
WHERE Username LIKE '%James%';

SELECT * FROM users 
WHERE Age < 35 AND teza < 70

SELECT n.*, u.Username
FROM napredek n
JOIN users u ON n.Id_user = u.Id_user
WHERE n.deadlift BETWEEN 250 AND 300;

SELECT * FROM users 
WHERE Username LIKE '%ann%' 
AND Username LIKE '%Anna%'

SELECT * FROM admin 
WHERE Password LIKE '%pass%'
AND user_adm LIKE 'admin1%'
ORDER BY id_admin
   
SELECT * FROM napredek 
WHERE squat > 200  
AND bench BETWEEN 90 AND 145

SELECT * FROM sprememba 
WHERE izbrisani = 'MikeJohnson'
    
SELECT Username,teza Password FROM users 
WHERE teza >= 75
ORDER BY teza

SELECT bench FROM napredek 
WHERE bench > 150

SELECT Username, Age
FROM users un
WHERE u.Age BETWEEN 25 AND 35
AND u.Username LIKE 'J%'

SELECT id_adm FROM admin 
WHERE user_adm = 'admin1'

SELECT u.Username, n.bench
FROM users u
JOIN napredek n ON u.Id_user = n.Id_user
WHERE u.teza > 70
AND (u.Username LIKE '%son%' OR u.Username LIKE '%ria%')
ORDER BY bench 

SELECT s.datum_izbrisa FROM sprememba s J
ON admin a ON s.id_admin = a.id_admin 
WHERE a.user_adm = 'admin3'

SELECT Email FROM users 
WHERE Username LIKE '%Kim%' AND Age > 40

SELECT  s.*
FROM admin a 
JOIN sprememba s ON a.id_admin = s.id_admin
WHERE a.id_admin BETWEEN 3 AND 8

SELECT izbrisani
FROM sprememba
WHERE izbrisani LIKE 'J%'
ORDER BY izbrisani DESC

SELECT a.Password, s.izbrisani
FROM sprememba s
JOIN admin a ON s.id_admin = a.id_admin
WHERE a.Password LIKE '%pass%'
ORDER BY a.Password, s.izbrisani DESC

SELECT a.*, s.*
FROM admin a ON 
JOIN sprememba s ON a.id_admin = s.id_admin
WHERE s.izbrisani IN ('SarahWilson', 'AlexClark')
ORDER BY s.datum_izbrisa DESC, s.izbrisani, a.user_admin DESC

/*
SELECT nam omogoèa da lahko izberemo specifiène podatke glede na to kaj želimo najti npr teza da je pod 80
*/

DELETE FROM users WHERE Id_user = 1

DELETE FROM admin WHERE user_adm = 'admin1'

DELETE FROM napredek WHERE Id_user = 2 AND deadlift IS NOT NULL

DELETE FROM sprememba WHERE datum_izbrisa = '2024-05-01 10:00:00'

DELETE FROM napredek WHERE Id_user IN (SELECT Id_user FROM users WHERE Age < 30) AND squat IS NOT NULL

DELETE FROM napredek WHERE Id_user IN (SELECT Id_user FROM users WHERE Username LIKE 'J%') AND bench IS NOT NULL

DELETE FROM sprememba WHERE id_admin = 3

DELETE FROM sprememba WHERE izbrisani = 'AlexClark'

DELETE FROM napredek WHERE Id_user IN (SELECT Id_user FROM users WHERE teza < 70) AND deadlift IS NOT NULL

DELETE FROM napredek WHERE Id_user IN (SELECT Id_user FROM admin WHERE Password LIKE 'admin%') AND squat IS NOT NULL

/*
DELETE nam omogoèa, da zbrišemo vrstico podatkov glede na nek pogoj
*/

UPDATE users SET Age = 30 WHERE Username = 'JohnDoe'

UPDATE admin SET Password = 'newpassword' WHERE id_admin = 2

UPDATE users SET teza = 70 WHERE Username = 'JaneSmith'

UPDATE napredek SET bench = 130 WHERE Id_user = 3

UPDATE admin SET Password = 'newadminpass' WHERE user_adm = 'admin3'

UPDATE sprememba SET datum_izbrisa = '2024-06-01 10:00:00' WHERE izbrisani = 'SarahWilson'

UPDATE admin SET Password = 'newpassword' WHERE user_adm LIKE 'admin%'

UPDATE users SET Age = 25 WHERE Age < 25;

UPDATE napredek SET squat = 200 WHERE Id_user IN (SELECT Id_user FROM users WHERE teza > 80)

UPDATE admin SET Password = 'newpass' WHERE Password LIKE '%pass%'

/*
UPDATE nam omogoèa, da posodobimo specifièen podatek glede na nek pogoj
*/

