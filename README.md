Concert
========

The concert social website for database project.
Table.sql modifying history
* Initiated on 11/05/2014 
  * Basic frame of the database
* Modified on 11/09/2014 
  * Error correction, successfully run On MySQL
* Modified on 11/19/2014
  * User.uid and Art.aid modification, using username varchar(20) instead of id number int(10), related foreign key references also modified. Successfully run on MySQL.
* Modified on 11/24/2014
  * Deleted Art.afname and Art.alname and added Art.aname, using full name of the artist/band from the schema.
  * Added new table Hold, with association of Concert and Art with many to many relations.
  * Added SampleData.sql, put some sample data in.
  * Finished the [ER diagram](https://www.lucidchart.com/documents/edit/187a54c4-6238-45e4-8a26-9d68538fc38c).
