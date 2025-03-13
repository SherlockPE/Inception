volume_1=wordpress-volume
volume_2=mariadb-volume

RED="\033[0;31m"
GREEN="\033[0;32m"
MAGENTA="\033[0;35m"
PINK="\033[0;95m"
CYAN="\033[0;36m"
YELLOW="\033[0;33m"
NC="\033[0m"

all: create_volumes
	docker compose -f srcs/docker-compose.yml up --build -d
	docker compose -f srcs/docker-compose.yml start
	@echo ${GREEN}"All services are running ✅" $(NC)
	@echo -n "You can access the website at the following addresses: "
	@echo ${YELLOW} https://localhost:443 ${NC} and ${YELLOW} https://flopez-r.42.fr ${NC}

up-%:
	docker compose -f srcs/docker-compose.yml up $* -d

down:
	docker compose -f srcs/docker-compose.yml down

stop:
	docker compose -f srcs/docker-compose.yml stop

build-%:
	docker compose -f srcs/docker-compose.yml build $* 

restart:
	docker compose -f srcs/docker-compose.yml restart

logs:
	docker compose -f srcs/docker-compose.yml logs

# Clean all images and networks
kill: down 
	sudo rm -rf /home/$(USER)/data
	docker volume rm $$(docker volume ls -q)
	docker rmi $$(docker images -aq)

create_volumes:
	echo $(GREEN)"Creating volumes... 🗃️"$(NC)
	mkdir -p /home/${USER}/data/$(volume_1)
	mkdir -p /home/${USER}/data/$(volume_2)

clean:
	@echo $(RED)"Deleting Volumes... 🧹"$(NC)
	docker compose -f srcs/docker-compose.yml down
	sudo rm -rf ~/$(USER)/data

re: kill all

.PHONY: all down stop restart create_volumes clean re

# .SILENT: create_volumes