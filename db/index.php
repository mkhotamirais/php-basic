<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP DB</title>
    <style>
        nav {
            display: flex;
            flex-direction: column;
            align-items: start;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            margin-bottom: 90vh;
        }
    </style>
</head>

<body>
    <h1>PHP DB</h1>
    <h2>Projects</h2>
    <nav>
        <a href="krossing-pdo">krossing-pdo</a>
        <a href="wpu-mysqli">wpu-mysqli</a>
        <a href="muba-mysqli">muba-mysqli</a>
    </nav>

    <h2>Data types</h2>
    <p>
        INT(11) -123243423 -23243434; BIGINT 2335444232334345; FLOAT -343542.233435; DOUBLE; VARCHAR(30) "ahmad abduls siti"; VARCHAR(255); TEXT; DATE 2023-05-14; DATETIME 2023-05-14 17:10:00; If there is a range -10 to 10; SIGNED mean -10 to 10; UNSIGNED mean 0 to 10
    </p>

    <h2>Mysql Db Command Commands</h2>

    <pre>
> mysql -u root -p
> show databases;
> create database db_name;
> use db_name;
> show tables;
> create table table_name (
    id int(11) not null auto_increment primary key,
    name varchar(100) not null,
);
<a href="#create-table-wpu">create-table-wpu</a>
<a href="#create-table-krossing">create-table-krossing</a>
> show tables;
> describe table_name;
> insert into table_name (name) values ('ahmad'); or
> insert into table_name values ('', 'ahmad'); or
<a href="#insert-data-krossing">insert-data-krossing</a>
> select * from table_name;
> select * from table_name where name = 'ahmad';
<a href="#select-data-krossing">select-data-krossing</a>
> update table_name set name = 'abdul' where id = 1;
> delete from table_name where id = 1;
> drop table table_name;
> show tables;
> drop database db_name;
> show databases;
    </pre>

    <pre id="create-table-wpu">
CREATE TABLE FROM WPU
create table mahasiswa (
    id int not null auto_increment primary key,
    nama varchar(100),
    nrp char(9),
    email varchar(100),
    jurusan varchar(100),
    gambar varchar(100)
);
    </pre>
    <pre id="create-table-krossing">
CREATE TABLE FROM KROSSING
CREATE TABLE users (
    id INT(11) NOT NULL AUTO_INCREMENT,
    username VARCHAR(30) NOT NULL,
    pwd VARCHAR(255) NOT NULL,
    email VARCHAR(100) NOT NULL,
    created_at DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
    updated_at DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,

    PRIMARY KEY (id)
);

CREATE TABLE comments (
    id INT(11) NOT NULL AUTO_INCREMENT,
    comment_text TEXT NOT NULL,
    users_id INT(11),
    created_at DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,

    PRIMARY KEY (id),
    FOREIGN KEY (users_id) REFERENCES users (id) ON DELETE SET NULL
);
    </pre>
    <pre id="insert-data-krossing">
INSERT DATA KROSSING
// insert single data
INSERT INTO users (username, pwd, email) VALUES ("ahmad", "ahmad", "ahmad@gmail.com");
// insert many data
INSERT INTO users (username, pwd, email) 
VALUES 
    ("abdul", "abdul", "abdul@gmail.com"),
    ("budi", "budi", "budi@gmail.com"),
    ("citra", "citra", "citra@gmail.com"),
    ("dina", "dina", "dina@gmail.com");
INSERT INTO comments (comment_text, users_id) 
VALUES
    ("ini adalah komentar ahmad 1", 1),
    ("ini adalah komentar ahmad 2", 1),
    ("ini adalah komentar abdul 1", 2),
    ("ini adalah komentar abdul 2", 2);
</pre>

    <pre id="select-data-krossing">
SELECT DATA FROM KROSSING WITH JOIN
SELECT * FROM users WHERE id >=3;
SELECT * FROM users INNER JOIN comments ON users.id = comments.users_id;
SELECT users.email, comments.comment_text FROM users INNER JOIN comments ON users.id = comments.users_id;
try with LEFT JOIN, RIGHT JOIN;
LEFT JOIN (semua data users ditampilkan, user yang tidak ada comment ditulis dengan null)
LEFT JOIN (semua data comment ditampilkan, comment yang tidak ada user ditulis dengan null)
</pre>

</body>

</html>