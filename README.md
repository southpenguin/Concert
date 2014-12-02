Concert
========

The concert social website for database project.
Table.sql modifying history
* 11/05/2014 
  * Initiation with the schema
  * Basic frame of the database
* 11/09/2014 
  * Error correction, successfully run On MySQL
* 11/19/2014
  * ~~```User.uid``` and ```Art.aid``` modification, using ```username varchar(20```) instead of ```id number int(10)```, related foreign key references also modified.~~ Successfully run on MySQL.
* 11/24/2014
  * Deleted ```Art.afname``` and ```Art.alname``` and added ```Art.aname```, using full name of the artist/band from the schema.
  * Added new table ```Hold```, with association of ```Concert``` and ```Art``` with many to many relations.
  * Added ```SampleData.sql```, put some sample data in.
  * Finished the [ER diagram](https://www.lucidchart.com/documents/edit/187a54c4-6238-45e4-8a26-9d68538fc38c).
  * Add ```datestamp``` to the related table into the schema, also write ```DROP TABLE IF EXISTS```, in order to modify schema tables in the future.
* 12/1/2014
  * Modify schema, add ```SubGenre``` table and add all uid as intergers.
  * Add ```AUTO_INCREMENT``` statements into the ```ID```s fields.
  * Several php files created, including [```connectDB```](https://github.com/southpenguin/Concert/blob/master/php/connectDB.php), [```index```](https://github.com/southpenguin/Concert/blob/master/php/index.php), [```login```](https://github.com/southpenguin/Concert/blob/master/php/login.php), [```SignUp```](https://github.com/southpenguin/Concert/blob/master/php/SignUp.php)
