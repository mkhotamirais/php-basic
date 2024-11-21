<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP MVC</title>
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
    <h1>PHP MVC</h1>
    <h2>Projects</h2>
    <nav>
        <a href="mvc-wpu/public">mvc-wpu/public</a>
    </nav>
    <h2>DB migration and seeder</h2>
    <h4>mvc wpu (db_name: db_wpu_pdo)</h4>
    <pre>
create table mahasiswa (
    id int(11) auto_increment primary key,
    nama varchar(100),
    nrp char(9),
    email varchar(100),
    jurusan varchar(100)
);

insert into mahasiswa (nama, nrp, email, jurusan)
values 
    ("abdul", "123", "abdul@gmail.com", "si"),
    ("budi", "82743", "budi@gmail.com", "si"),
    ("citra", "8748", "citra@gmail.com", "ti"),
    ("dina", "238", "dina@gmail.com", "ti");
    </pre>
</body>

</html>