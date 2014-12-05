
-- User
insert into user values(null,'aaa','123456','Peter','Allen','P.Allen@gmail.com','New York','6461234567', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP, 0, "default.jpg", null);
insert into user values(null,'tomlee','654321','Tom','Lee','tomlee@yahoo.com','New York','7181234567', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP, 0, "default.jpg", null);
insert into user values(null,'lovemusic','lovemusic','Alice','Julia','lovemusic@gmail.com','Brooklyn','7185455678', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP, 0, "default.jpg", null);
insert into user values(null,'user','1234567','Aaron','Joe','joe123@aol.com','Queens','718378265', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP, 0, "default.jpg", null);
insert into user values(null,'alex123','7654321','Alexander','Thomas','alextom@nyu.edu','New York','7185639825', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP, 0, "default.jpg", null);
insert into user values(null,'westcoast','wcoast','Allen','James','westcoast@gmail.com','Los Angeles','3267548264', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP, 0, "default.jpg", null);
insert into user values(null,'catcat','catcat','Catty','Petty','cptty@gmail.com','Los Angeles','3267149478', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP, 0, "default.jpg", null);
insert into user values(null,'dogdog','doggy123','Dom','Kevin','domkevin@gmail.com','Boston','6738261749', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP, 0, "default.jpg", null);

-- Arts
USE project;
insert into Art values(NULL,'linkinpark','12345678','Linkin Park','admin@linkinpark.com','www.linkinpark.com', defaul.png, NULL);
insert into Art values(NULL,'jblunt','12345678','James Blunt','jblant@gmail.com','www.jamesblunt.com', defaul.png, NULL);
insert into Art values(NULL,'lenka','12345678','Lenka','lenka@sina.com','www.lenkamusic.com', defaul.png, NULL);
insert into Art values(NULL,'eminem123','12345678','Eminem','eminem@eminem.com','www.eminem.com', defaul.png, NULL);
insert into Art values(NULL,'2hrose','12345678','Second Hand Roses','ershoumeigui@sina.com','http://site.douban.com/ershoumeigui/', defaul.png, NULL);
insert into Art values(NULL,'sum14','12345678','Sum41','sum41@myspace.com','www.sum41.com', defaul.png, NULL);
insert into Art values(NULL,'oasis1990','12345678','Oasis','oasis1990@gmail.com','www.oasis.com', defaul.png, NULL);
insert into Art values(NULL,'backdoor','12345678','Back Door','backdoor@gmail.com','www.facebbok.com/backdoor', defaul.png, NULL);
insert into Art values(NULL,'M5','12345678','Maroon5','maroon5@gmail.com','www.maroon', defaul.png, NULL);

-- Fans
USE project;
insert into Fans values(9,5,'2014-01-01 15:37:29');
insert into Fans values(9,8,'2014-01-01 15:38:29');
insert into Fans values(9,4,'2014-01-01 15:39:29');
insert into Fans values(9,2,'2014-10-01 15:39:29');
insert into Fans values(9,3,'2014-10-02 15:39:29');
insert into Fans values(1,1,'2014-11-02 15:39:29');
insert into Fans values(1,7,'2014-11-08 15:39:29');
insert into Fans values(2,6,'2014-11-08 15:39:29');

-- Location
use project;
insert into Location values(NULL,'Barkley Center',620,'Atlantic Avenue',NULL,'Brooklyn','NY','11217');
insert into Location values(NULL,'The Way Station',683,'Washington Ave',NULL,'Brooklyn','NY','11238');
insert into Location values(NULL,'Barbès',376,'9th St',NULL,'Brooklyn','NY','11215');
insert into Location values(NULL,'Fat Cat',75,'Christopher St',NULL,'New York','NY','10014');
insert into Location values(NULL,'Bar Nine',807,'9th Ave',NULL,'New York','NY','10019');
insert into Location values(NULL,'Paddy Reillys',519,'2nd Ave',NULL,'New York','NY','10016');
insert into Location values(NULL,'Terraza 7',4019,'Gleane St',NULL,'Queens','NY','11373');
insert into Location values(NULL,'Blue Whale Bar',123,'Astronaut E S Onizuka St',NULL,'Los Angeles','CA','90012');

-- Concert
use project;
insert into Concert values(NULL,'SumSum','2013-10-01 21:00:00',99,2,300, 100, null);
insert into Concert values(NULL,'new seccond hand', '2013-11-11 18:00:00', 20, 7, 150, 0, null);
insert into Concert values(NULL,'piece green', '2013-12-12 14:00:00', 65, 6, 500, 21, null);
insert into Concert values(NULL,'live in newyork', '2013-12-19 15:00:00', 120, 1, 15000, 121, null);
insert into Concert values(NULL,'newyear 90003', '2013-12-31 21:00:00', 80, 4, 200, 134, null);
insert into Concert values(NULL,'brait music', '2014-03-21 19:15:00', 40, 5, 150, 12, null);
insert into Concert values(NULL,'music aint junk', '2014-05-01 23:00:00', 25, 7, 160, 12, null);
insert into Concert values(NULL,'open the door', '2014-07-11 20:30:00', 15, 6, 200, 32, null);
insert into Concert values(NULL,'not alone', '2014-11-11 11:11:11', 11, 2, 200, 111, null);
insert into Concert values(NULL,'newyear 90003 2014', '2014-12-31 18:00:00', 60, 1, 5000, 3001, null);
insert into Concert values(NULL,'so what', '2015-01-30 21:00:00', 40, 4, 250, 250, null);
insert into Concert values(NULL,'old metal back', '2015-03-30 15:00:00', 120, 1, 12000, 10293, null);
insert into Concert values(NULL,'love braint music?', '2015-04-15 18:00:00', 90, 5, 300, 300, null);
insert into Concert values(NULL,'just one last dance', '2015-08-31 17:45:00', 88, 8, 500, 500, null);

-- Genre
USE project;
insert into Genre values(null,'pop');
insert into Genre values(null,'rock');
insert into Genre values(null,'rap');
insert into Genre values(null,'funk');
insert into Genre values(null,'punk');

-- SubGenre
USE project;
INSERT INTO SubGenre VALUES(NULL, 1, 'Traditional Pop');
INSERT INTO SubGenre VALUES(NULL, 1, 'American Pop');
INSERT INTO SubGenre VALUES(NULL, 1, 'Dance Pop');
INSERT INTO SubGenre VALUES(NULL, 1, 'Electropop');
INSERT INTO SubGenre VALUES(NULL, 1, 'Traditional Pop');
INSERT INTO SubGenre VALUES(NULL, 2, 'Hard Rock');
INSERT INTO SubGenre VALUES(NULL, 2, 'Country Rock');
INSERT INTO SubGenre VALUES(NULL, 2, 'Death Rock');
INSERT INTO SubGenre VALUES(NULL, 3, 'Jazz Rap');
INSERT INTO SubGenre VALUES(NULL, 3, 'Pop Rap');
INSERT INTO SubGenre VALUES(NULL, 3, 'Hip Hop');
INSERT INTO SubGenre VALUES(NULL, 4, 'Deep Funk');
INSERT INTO SubGenre VALUES(NULL, 4, 'Metal Funk');
INSERT INTO SubGenre VALUES(NULL, 5, 'Hardcore Punk');
INSERT INTO SubGenre VALUES(NULL, 5, 'Garage Punk');
INSERT INTO SubGenre VALUES(NULL, 5, 'Pop Punk');
