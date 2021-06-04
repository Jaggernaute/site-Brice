CREATE TABLE user (
                      id int auto_increment NOT NULL,
                      fname varchar(50) NOT NULL,
                      name varchar(50) NOT NULL,
                      email varchar(50) NOT NULL,
                      password tinytext NOT NULL,

                      CONSTRAINT cc0_user PRIMARY KEY (id),
                      CONSTRAINT cc1_user UNIQUE (email)
);