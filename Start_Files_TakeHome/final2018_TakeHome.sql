DROP TABLE IF EXISTS login2018

CREATE TABLE login2018 (username VARCHAR(8) NOT NULL,
					password VARCHAR(60),
					permission BOOLEAN,
					PRIMARY KEY(username)
					);

					
INSERT INTO login2018 VALUES ('asmith', '$2y$10$MDMyNzAxODM5MzM5NmJkNe8AqVwknfGtizRULVyz.x8pBhSjGjla6', true);
INSERT INTO login2018 VALUES ('tfield', '$2y$10$MDMyNzAxODM5MzM5NmJkNe8AqVwknfGtizRULVyz.x8pBhSjGjla6', false);
