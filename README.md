Concert
========

The concert social website for database project.
* 12/4/2014
  * [```Head.php```](https://github.com/southpenguin/Concert/blob/master/php/includes/Head.php) added to encapsulate the top part of php code in ever page, of reading the user-related information into php variables, including [```connectDB.php```](https://github.com/southpenguin/Concert/blob/master/php/includes/connectDB.php). This also means everytime the user change the page, or refresh the page, database will be updated to get the newest conditions of the current user. Put the following code on very top of every page to call the file:  
 ```
 <?php include 'includes/Head.php';?>
 ``` 
  * [```Navigation.php```](https://github.com/southpenguin/Concert/blob/master/php/includes/Navigation.php) added to further abstruct the navigation bar are of every page. After ```Head.php```, clarify ```<title>``` tag and ```<link>``` css tag ( usually 2 or 3 lines), then use the following code to call the file:
 ```
 <?php include 'includes/Navigation.php';?>
 ``` 
  * [```profile.php```](https://github.com/southpenguin/Concert/blob/master/php/profile.php) got the initial design. [```update.php```](https://github.com/southpenguin/Concert/blob/master/php/update.php) page is added for user to change their information, as well as function of profile picture upload. The related functional file is [```includes/ProfileUpdate.php```](https://github.com/southpenguin/Concert/blob/master/php/includes/ProfileUpdate.php). When user uploading a picture, picture will be uploaded to ```Concert/Pictures/Users/``` directory, and change its name to user's username and store the format as ```username.filetype```, and value will be write into ```User.ulink``` attribute, to further call this profile picture.
  * All php page files are updated because of the new encapsulation structure (```Head.php``` and ```Navigation.php```). [```artists.php```](https://github.com/southpenguin/Concert/blob/master/php/artists.php) has new content update, new  [```CSS/artists.css```](https://github.com/southpenguin/Concert/tree/master/php/css) file, modified from ```connection.css```. [```entry.php```](https://github.com/southpenguin/Concert/blob/master/php/entry.php) updated because of the [```update.php```](https://github.com/southpenguin/Concert/blob/master/php/update.php) file. So when user are signing up, the very front page they only need to input username and password, then it will redirect to the ```update.php``` to let the user update their information.
  * Several sample artists pictures are used. All in ```/Pictures/Art/``` directory.
  * Database is moved to the AWS(Amazon Web Service), using there RDS service, so that both contributors can share the same database, better to build and debug the files and data.
* 12/3/2014
  * [```Schema.sql```](https://github.com/southpenguin/Concert/blob/master/sql/Schema.sql)update: ```ulink varchar(200)```, ```ubio varchar(500)``` are added into ```User``` table, ```alink varchar(200)```, ```abio varchar(500)``` are added into ```Art``` table, ```clink varchar(200)``` is added into ```Concert```table, to store the picture links and bio paragrahs. [```SampleData.sql```](https://github.com/southpenguin/Concert/blob/master/sql/SampleData.sql) update for those attributes.
  * Several php files update: [```connection.php```](https://github.com/southpenguin/Concert/blob/master/php/connection.php), [```profile.php```](https://github.com/southpenguin/Concert/blob/master/php/profile.php), [```includes/SignUp.php```](https://github.com/southpenguin/Concert/blob/master/php/includes/SignUp.php), [```includes/Login.php```](https://github.com/southpenguin/Concert/blob/master/php/includes/Login.php), [```CSS/profile.css```](https://github.com/southpenguin/Concert/blob/master/php/css/profile.css).
  * Several files added: [```includes/Follow.php```](https://github.com/southpenguin/Concert/blob/master/php/includes/Follow.php), [```CSS/connection.css```](https://github.com/southpenguin/Concert/blob/master/php/css/connection.css).
  * Pictures directory is added, in case to get a better view. A snapshot for connection page: (sort the followees and followers by ```Follow.foltime```.)![alt tag](https://raw.githubusercontent.com/southpenguin/Concert/master/php/Pictures/Screenshot%202014-12-04%2004.47.09.png?token=AC0jiXgNQdRcSJJolpNWclqyODwztZJCks5UiWkMwA%3D%3D) 
* 12/2/2014
  * All php files update, including [```index.php```](https://github.com/southpenguin/Concert/blob/master/php/index.php), [```entry.php```](https://github.com/southpenguin/Concert/blob/master/php/entry.php)(the old ```login.php```), [```includes/SignUp.php```](https://github.com/southpenguin/Concert/blob/master/php/includes/SignUp.php), [```includes/Login.php```](https://github.com/southpenguin/Concert/blob/master/php/includes/Login.php)(new file, only function in log in, not real page).
  * New php page files added, including [```artists.php```](https://github.com/southpenguin/Concert/blob/master/php/artists.php), [```concerts.php```](https://github.com/southpenguin/Concert/blob/master/php/concerts.php), [```connection.php```](https://github.com/southpenguin/Concert/blob/master/php/connection.php), [```profile.php```](https://github.com/southpenguin/Concert/blob/master/php/profile.php). All files need further update.
  * CSS files added, including [```CSS/style.css```](https://github.com/southpenguin/Concert/blob/master/php/css/style.css), [```CSS/profile.css```](https://github.com/southpenguin/Concert/blob/master/php/css/profile.css).
  * [```includes```](https://github.com/southpenguin/Concert/tree/master/php/includes) folder stores the functional php files. They are not real webpages containing any information, but rather functions in log in or sign up, etc.
  *  [```Schema.sql ```](https://github.com/southpenguin/Concert/blob/master/sql/Schema.sql) updated, added ```lastlogin datetime``` in ```User``` table, in order to further calculate the ```User.uscore```. Deleted ```aregtime datetime``` from ```Art``` table.
* 12/1/2014
  * Modify schema, add ```SubGenre``` table and add all uid as intergers.
  * Add ```AUTO_INCREMENT``` statements into the ```ID```s fields.
  * Several php files created, including ~~[```connectDB```](https://github.com/southpenguin/Concert/blob/master/php/connectDB.php)~~, [```index```](https://github.com/southpenguin/Concert/blob/master/php/index.php), ~~[```login```](https://github.com/southpenguin/Concert/blob/master/php/login.php)~~, ~~[```SignUp```](https://github.com/southpenguin/Concert/blob/master/php/SignUp.php)~~. 
* 11/24/2014
  * Deleted ```Art.afname``` and ```Art.alname``` and added ```Art.aname```, using full name of the artist/band from the schema.
  * Added new table ```Hold```, with association of ```Concert``` and ```Art``` with many to many relations.
  * Added ```SampleData.sql```, put some sample data in.
  * Finished the [ER diagram](https://www.lucidchart.com/documents/edit/187a54c4-6238-45e4-8a26-9d68538fc38c).
  * Add ```datestamp``` to the related table into the schema, also write ```DROP TABLE IF EXISTS```, in order to modify schema tables in the future.
* 11/19/2014
  * ~~```User.uid``` and ```Art.aid``` modification, using ```username varchar(20```) instead of ```id number int(10)```, related foreign key references also modified.~~ Successfully run on MySQL.
* 11/09/2014 
  * Error correction, successfully run On MySQL
* 11/05/2014 
  * Initiation with the schema
  * Basic frame of the database
