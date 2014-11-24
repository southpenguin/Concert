
// return all the users names following the list XXXXX
SELECT ufname, ulname 
FROM Lists,User
WHERE Lists.luid = User.uid
	AND listid = 'XXXXX';
