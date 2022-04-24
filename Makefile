HOME=/home/nschmitt

all:
	sudo mkdir -p ${HOME}/data/DB
	sudo mkdir -p ${HOME}/data/WordPress
	(cd src/; sudo docker-compose build)
	(cd src/; sudo docker-compose up)

dns:
	@sudo sed -i "s/localhost/nschmitt.42.fr/g" /etc/hosts

clean:
	(cd src/; sudo docker-compose down)
	sudo docker volume prune
	sudo docker system prune -a

fclean: clean
	sudo rm -rf ${HOME}/data/DB
	sudo rm -rf ${HOME}/data/WordPress

re: fclean all

.PHONY: ALL, clean, fclean , re, dns