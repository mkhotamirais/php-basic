<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Less11</title>
</head>

<body>
    <h1>Less11</h1>
    <h3>types</h3>
    <ul>
        <li>INT(11) -123243423 -23243434</li>
        <li>BIGINT 2335444232334345</li>
        <li>FLOAT -343542.233435</li>
        <li>DOUBLE</li>
        <li>VARCHAR(30) "ahmad abduls siti"</li>
        <li>VARCHAR(255)</li>
        <li>TEXT</li>
        <li>DATE 2023-05-14</li>
        <li>DATETIME 2023-05-14 17:10:00</li>
    </ul>
    <h3>Signed and Unsigned</h3>
    <ul>
        <li>If there is a range -10 to 10</li>
        <li>SIGNED mean -10 to 10</li>
        <li>UNSIGNED mean 0 to 10</li>
    </ul>

    <h3>Query Create Table</h3>
    <pre>
        CREATE TABLE users (
            id INT(11) NOT NULL AUTO_INCREMENT,
            username VARCHAR(30) NOT NULL,
            pwd VARCHAR(255) NOT NULL,
            email VARCHAR(100) NOT NULL,
            created_at DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
            updated_at DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,

            PRIMARY KEY (id)
        )

        CREATE TABLE comments (
            id INT(11) NOT NULL AUTO_INCREMENT,
            comment_text TEXT NOT NULL,
            users_id INT(11),
            created_at DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,

            PRIMARY KEY (id),
            FOREIGN KEY (users_id) REFERENCES users (id) ON DELETE SET NULL
        )
    </pre>
    <h3>Inserting data</h3>
    <pre>
        <!-- insert one -->
        INSERT INTO users (username, pwd, email) VALUES ("ahmad", "ahmad", "ahmad@gmail.com");
        <!-- insert many -->
        INSERT INTO users (username, pwd, email) 
        VALUES 
            ("abdul", "abdul", "abdul@gmail.com"),
            ("budi", "budi123", "budi@gmail.com"),
            ("citra", "citra321", "citra@gmail.com"),
            ("dina", "dina456", "dina@gmail.com");
    </pre>

    <h3>Updating data and delete</h3>
    <pre>
        UPDATE users SET username = "ayu", email = "ayu@gmail.com", pwd = "ayu" WHERE username = "budi";
        DELETE FROM users WHERE id = 5;
    </pre>

    <h3>Select data</h3>
    <pre>
        SELECT * FROM users WHERE id >=3;
        SELECT * FROM users INNER JOIN comments ON users.id = comments.users_id;
        SELECT users.email, comments.comment_text FROM users INNER JOIN comments ON users.id = comments.users_id;
        try with LEFT JOIN, RIGHT JOIN;
        LEFT JOIN (semua data users ditampilkan, user yang tidak ada comment ditulis dengan null)
        LEFT JOIN (semua data comment ditampilkan, comment yang tidak ada user ditulis dengan null)
    </pre>
</body>

</html>