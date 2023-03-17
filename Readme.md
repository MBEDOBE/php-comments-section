# How to use this code

- create a db named 'commentsdb'

- run this sql script to create the table in 'commentsdb'
       create TABLE comments (
        cid int(11) not null auto increment PRIMARY KEY,
        uid varchar(128) not null,
        date datetime not null,
        message text not null
       );

       ## enjoy!