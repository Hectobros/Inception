HOME=/home/nschmitt

all:
	sudo mkdir -p ${HOME}/data/DB
	sudo mkdir -p ${HOME}/data/WordPress
	(cd src/; sudo docker-compose build)

up:	
	(cd src/; sudo docker-compose up)

dns:
	@sudo sed -i "s/localhost/nschmitt.42.fr/g" /etc/hosts

down:
	(cd src/; sudo docker-compose down)

clean:
	sudo docker volume rm src_DB
	sudo docker volume rm src_WordPress
	sudo docker system prune -a

fclean: clean
	sudo rm -rf ${HOME}/data/DB
	sudo rm -rf ${HOME}/data/WordPress

absolute:
	sudo docker stop $(sudo docker ps -qa); sudo docker rm$(sudo docker ps -qa); sudo docker rmi -f $(sudo docker images -qa); sudo docker volume rm $(sudo docker ps -qa); sudo docker network rm $(sudo docker network ls -q) 2>/dev/null


re: fclean all

.PHONY: ALL, clean, fclean , re, dns
