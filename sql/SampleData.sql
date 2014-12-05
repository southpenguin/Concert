
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
insert into Art values(NULL,'linkinpark','12345678','Linkin Park','admin@linkinpark.com','www.linkinpark.com', current_timestamp, NULL);
insert into Art values(NULL,'jblunt','12345678','James Blunt','jblant@gmail.com','www.jamesblunt.com', current_timestamp, NULL);
insert into Art values(NULL,'lenka','12345678','Lenka','lenka@sina.com','www.lenkamusic.com', current_timestamp, NULL);
insert into Art values(NULL,'eminem123','12345678','Eminem','eminem@eminem.com','www.eminem.com', current_timestamp, NULL);
insert into Art values(NULL,'2hrose','12345678','Second Hand Roses','ershoumeigui@sina.com','http://site.douban.com/ershoumeigui/', current_timestamp, NULL);
insert into Art values(NULL,'sum14','12345678','Sum41','sum41@myspace.com','www.sum41.com', current_timestamp, NULL);
insert into Art values(NULL,'oasis1990','12345678','Oasis','oasis1990@gmail.com','www.oasis.com', current_timestamp, NULL);
insert into Art values(NULL,'backdoor','12345678','Back Door','backdoor@gmail.com','www.facebbok.com/backdoor', current_timestamp, NULL);
insert into Art values(NULL,'M5','12345678','Maroon5','maroon5@gmail.com','www.maroon', current_timestamp, NULL);

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
