CREATE DATABASE wordpress;
CREATE USER 'romaurel'@'%' IDENTIFIED BY 'minad1234';
GRANT ALL PRIVILEGES ON wordpress.* TO 'romaurel'@'%';
FLUSH PRIVILEGES;

ALTER USER 'root'@'localhost' IDENTIFIED BY 'minad1234';