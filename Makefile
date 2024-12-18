volume_1=wordpress-volume
volume_2=database-volume

RED="\033[0;31m"
GREEN="\033[0;32m"
MAGENTA="\033[0;35m"
PINK="\033[0;95m"
CYAN="\033[0;36m"
YELLOW="\033[0;33m"
NC="\033[0m"

all: create_volumes
	sudo docker compose -f srcs/docker-compose.yml up

create_volumes:
	@echo $(GREEN)"Creating volumes... 🗃️"$(NC)
	mkdir -p ~/volumes/$(volume_1)
	mkdir -p ~/volumes/$(volume_2)

clean:
	@echo $(RED)"Deleting Volumes... 🧹"$(NC)
	rm -rf ~/volumes