/*
* When a user signing up, create a new tuple in User talbe, and insert the following information into the table
* timestamp is the time when the user signed up
*/
INSERT INTO User
VALUES('username','password','Firstname','Lastname','Email@Address','City','10digitNo.', current_timestamp);

/*
* When an artist signing up, create a new tuple in Art talbe, and insert the following information into the table
* timestamp is the time when the artist signed up
*/
INSERT INTO Art
VALUES('artusername','password','artistname','Email@Address','artistlink', current_timestamp);

/*
* When a user following someother user
* followeeid is the user who is being followed
* followerid is the user who is following
* timestamp is the time when the follower started to follow ther followee
*/
INSERT INTO Follow
VALUES('followeeid','followerid', current_timestamp);

/*
* When a user follow an artist, a new tuple will be created in the Fans table
*/
INSERT INTO Fans
VALUES('userid','artid', current_timestamp);

/*
* When an artist creates a concert, a new tuple will be created in teh Concert table and the following information will be added
* 123 is the concertid, 50.00 is the price, 456 is the location id is a foreign key
* 500 is the total capacity of the concert, 100 is the current availability of the concert
* when creating, the avaialability should be set equal to capacity
*/
INSERT INTO Concert
VALUES(123/*concertid*/, 'concertName', current_timestamp/*future time*/, 50.00/*price*/, 456/*locationid*/, 500, 100);

/*
* When a user is going to attend a concert, a new tuple will be created in Attend table
* 123 is the concertid
* set the rate and review to be null
* timestamp recorded the time when insertion happened
*/
INSERT INTO Attend
VALUES('userid',123/*concertid*/, null, null, current_timestamp);

/*
* When a user is rating a concert
* 9 is the rating of the concert
* 'review' is the user's review of the concert, and maximum is 500 characters
*/
UPDATE Attend
SET rate = 9, review = 'review'
WHERE auid = uid 
	AND acid =cid;

/*
* Display all genre types that the user with a uid XXXXX likes
*/
SELECT ggenre
FROM Likes, Genre
WHERE Likes.lgenre = Genre.gid
	AND Likes.luid = 'XXXXX';

/*
* Display all concert is going to be held in the user's city
*/
SELECT cname
FROM Concert, Location, User
WHERE User.ucity = Location.city
	AND Concert.location = Location.lid
	AND Concert.holdtime > current_timestamp
	AND User.uid = 'XXXXXX';


-- return all the users names following the list XXXXX
SELECT ufname, ulname 
FROM Lists,User
WHERE Lists.luid = User.uid
	AND listid = 'XXXXX';


-- return all concert names that user with a uid XXXXX created in lists
SELECT cname
FROM User, Lists, Content, Concert 
WHERE Content.ccid = Concert.cid 
	AND Lists.listid = Content.clistid 
	AND Lists.luid = User.uid
	AND uid= 'XXXXX';
	
	
-- return all the concert that user with a uid XXXXX has been attended
SELECT cname
FROM User, Attend, Concert
WHERE User.uid = Attend.auid 
	AND Attend.acid = Concert.cid
	AND uid = 'XXXXX';


-- return all artists names with the genre type XXXXX
SELECT aname
FROM Genre, Have, Art
WHERE Genre.gid = Have.hgenre 
	AND Have.haid = Art.aid
	AND ggenre = 'XXXXX';


-- return all artists name that have the same genre type that the user with a uid='XXXXXX' likes
SELECT aname
FROM User, Likes, Have, Art
WHERE User.uid = Likes.luid
	AND Likes.lgenre = Have.hgenre
	AND Have.haid = Art.aid
	AND User.uid = 'XXXXX';


-- return all the artists name that the user whith a uid XXXXX is following lists that having concerts	
SELECT aname
FROM Art, Lists, Content, Hold
WHERE Lists.listid = Content.clistid
	AND Content.ccid =  Hold.hcid
	AND Hold.haid = Art.aid
	AND Lists.luid = 'XXXXX';
