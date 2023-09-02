FROM	debian:buster

RUN		apt-get update && apt-get upgrade -y
RUN		apt-get install -y mariadb-server

COPY	conf/50-server.cnf /etc/mysql/mariadb.conf.d/50-server.cnf

COPY	tools/init.sh /tmp/init.sh
RUN		chmod +x /tmp/init.sh

EXPOSE	3306

ENTRYPOINT	["/tmp/init.sh"]