
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
insert into art values(null,'linkinpark','12345678','Linkin Park','admin@linkinpark.com','www.linkinpark.com', CURRENT_TIMESTAMP);
insert into art values(null,'jblunt','12345678','James Blunt','jblant@gmail.com','www.jamesblunt.com', CURRENT_TIMESTAMP);
insert into art values(null,'lenka','12345678','Lenka','lenka@sina.com','www.lenkamusic.com', CURRENT_TIMESTAMP);
insert into art values(null,'eminem123','12345678','Eminem','eminem@eminem.com','www.eminem.com', CURRENT_TIMESTAMP);
insert into art values(null,'2hrose','12345678','Second Hand Roses','ershoumeigui@sina.com','http://site.douban.com/ershoumeigui/', CURRENT_TIMESTAMP);
insert into art values(null,'sum14','12345678','Sum41','sum41@myspace.com','www.sum41.com', CURRENT_TIMESTAMP);
insert into art values(null,'oasis1990','12345678','Oasis','oasis1990@gmail.com','www.oasis.com', CURRENT_TIMESTAMP);
insert into art values(null,'backdoor','12345678','Back Door','backdoor@gmail.com','www.facebbok.com/backdoor', CURRENT_TIMESTAMP);
insert into art values(null,'M5','12345678','Maroon5','maroon5@gmail.com','www.maroon5.com', CURRENT_TIMESTAMP);

-- Location
insert into location values('0001','Barkley Center',620,'Atlantic Avenue',NULL,'Brooklyn','NY','11217');
insert into location values('0002','The Way Station',683,'Washington Ave',NULL,'Brooklyn','NY','11238');
insert into location values('0003','Barbès',376,'9th St',NULL,'Brooklyn','NY','11215');
insert into location values('0004','Fat Cat',75,'Christopher St',NULL,'New York','NY','10014');
insert into location values('0005','Bar Nine',807,'9th Ave',NULL,'New York','NY','10019');
insert into location values('0006','Paddy Reillys',519,'2nd Ave',NULL,'New York','NY','10016');
insert into location values('0007','Terraza 7',4019,'Gleane St',NULL,'Queens','NY','11373');
insert into location values('0008','Blue Whale Bar',123,'Astronaut E S Onizuka St',NULL,'Los Angeles','CA','90012');

-- Concert
insert into concert values(null,'SumSum','2013-10-01 21:00:00',99,2,300,null);
insert into concert values(null,'new seccond hand', '2013-11-11 18:00:00', 20, 7, 150, null);
insert into concert values(null,'piece green', '2013-12-12 14:00:00', 65, 6, 500, null);
insert into concert values(null,'live in newyork', '2013-12-19 15:00:00', 120, 1, 15000, null);
insert into concert values(null,'newyear 90003', '2013-12-31 21:00:00', 80, 4, 200, null);
insert into concert values(null,'brait music', '2014-03-21 19:15:00', 40, 5, 150, null);
insert into concert values(null,'music aint junk', '2014-05-01 23:00:00', 25, 7, 160, null);
insert into concert values(null,'open the door', '2014-07-11 20:30:00', 15, 6, 200, null);
insert into concert values(null,'not alone', '2014-11-11 11:11:11', 11, 2, 200, null);
insert into concert values(null,'newyear 90003 2014', '2014-12-31 18:00:00', 60, 1, 5000, null);
insert into concert values(null,'so what', '2015-01-30 21:00:00', 40, 4, 250, null);
insert into concert values(null,'old metal back', '2015-03-30 15:00:00', 120, 1, 12000, null);
insert into concert values(null,'love braint music?', '2015-04-15 18:00:00', 90, 5, 300, null);
insert into concert values(null,'just one last dance', '2015-08-31 17:45:00', 88, 8, 500, null);

-- Hold
insert into Hold values(6,1);
insert into Hold values(5,2);
insert into Hold values(7,3);
insert into Hold values(1,4);
insert into Hold values(5,4);
insert into Hold values(3,5);
insert into Hold values(2,6);
insert into Hold values(4,7);
insert into Hold values(8,8);
insert into Hold values(5,9);
insert into Hold values(3,10);
insert into Hold values(4,11);
insert into Hold values(6,11);
insert into Hold values(2,12);
insert into Hold values(6,12);
insert into Hold values(5,12);
insert into Hold values(2,13);
insert into Hold values(7,13);
insert into Hold values(3,14);

-- Genre
insert into Genre values(1,'pop');
insert into Genre values(2,'rock');
insert into Genre values(3,'rap');
insert into Genre values(4,'funk');
insert into Genre values(5,'punk');

-- Likes
insert into Likes values(1,1);
insert into Likes values(1,5);
insert into Likes values(5,2);
insert into Likes values(5,5);
insert into Likes values(7,1);
insert into Likes values(7,3);
insert into Likes values(7,4);
insert into Likes values(8,1);
insert into Likes values(3,5);
insert into Likes values(2,2);
insert into Likes values(2,3);
insert into Likes values(4,1);
insert into Likes values(4,5);
insert into Likes values(6,1);
insert into Likes values(6,3);

-- Have
insert into Have values(5,2);
insert into Have values(8,2);
insert into Have values(8,3);
insert into Have values(4,1);
insert into Have values(4,3);
insert into Have values(2,1);
insert into Have values(3,1);
insert into Have values(1,2);
insert into Have values(1,1);
insert into Have values(7,1);
insert into Have values(7,2);
insert into Have values(6,2);
insert into Have values(6,5);

-- Follow
insert into follow values('1', '9', '2014-12-05 03:07:14');
insert into follow values('2', '9', '2014-12-05 03:07:14');
insert into follow values('3', '9', '2014-12-05 03:07:50');
insert into follow values('4', '9', '2014-12-05 03:07:50');
insert into follow values('5', '9', '2014-12-05 03:07:50');
insert into follow values('7', '9', '2014-12-05 03:07:50');
insert into follow values('9', '6', '2014-12-05 03:08:10');
insert into follow values('9', '1', '2014-12-05 03:08:10');
insert into follow values('9', '3', '2014-12-05 03:08:11');
insert into follow values('9', '8', '2014-12-05 03:08:11');

-- Fans
insert into Fans values(9,5,'2014-01-01 15:37:29');
insert into Fans values(9,8,'2014-01-01 15:38:29');
insert into Fans values(9,4,'2014-01-01 15:39:29');
insert into Fans values(9,2,'2014-10-01 15:39:29');
insert into Fans values(9,3,'2014-10-02 15:39:29');
insert into Fans values(1,1,'2014-11-02 15:39:29');
insert into Fans values(1,7,'2014-11-08 15:39:29');
insert into Fans values(2,6,'2014-11-08 15:39:29');
insert into Fans values(9,1,'2014-12-05 04:37:13');

-- Lists
insert into Lists values(6001,10005,NULL);
insert into Lists values(6002, 10008,NULL);

-- Like


-- Attend
insert into Attend values(1, 1, 5, null, null);
insert into Attend values(5, 1, null, null, null);
insert into Attend values(7,10, 4, 'perfect', '2014-04-04 19:31:31');
insert into Attend values(8,8, 4, 'This is the best perform I have ever attend', '2014-05-05 18:41:55');
insert into Attend values(3,7,null,null,NULL);
insert into Attend values(2,4, null, 'not bad', '2014-06-14 18:53:21');
insert into Attend values(4, 10,5, 'guess what! I met my old friend there!amazing!', '2014-01-06 09:22:42');
insert into Attend values(6,1, null, null, null);
insert into Attend values(6, 7, 5, 'contact me to have fun', '2014-05-05 21:21:34');