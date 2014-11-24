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
