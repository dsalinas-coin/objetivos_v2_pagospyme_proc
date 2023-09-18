#!/bin/bash

UID = $(shell id -u)
#UID = echo $USER

help: ## Ver los comandos disponibles
	@echo 'usage: make [target]'
	@echo
	@echo 'targets:'
	@egrep '^(.+)\:\ ##\ (.+)' ${MAKEFILE_LIST} | column -t -c 2 -s ':#'

start: ## Iniciar todos los Contendores
	docker network create legacy_network || true
	U_ID=${UID} docker compose up -d 

start-build: ## Iniciar con un Build todos los contenedores
	docker network create legacy_network || true
	U_ID=${UID} docker compose up -d --build

stop: ## Detener todos los Contenedores
	U_ID=${UID} docker compose stop

restart: ## Reiniciar todos los contenedores
	$(MAKE) stop && $(MAKE) start

docker-monitor: ## Ver Estado de los Contenedores
	dry

################################
# Comandos Contenedores Docker #
################################

run: ## Iniciar el Servidor Web de Symfony
	U_ID=${UID} docker exec -it --user ${UID} ${name} php bin/console server:run

clean-cache-dev: ## Borrar Cache en Dev
	U_ID=${UID} docker exec -it ${name} php bin/console cache:clear 

clean-cache-prod: ## Borrar Cache en Prod
	U_ID=${UID} docker exec -it ${name} php bin/console cache:clear --env=prod

route-list: ## Ver las Rutas
	U_ID=${UID} docker exec -it ${name} php bin/console debug:router

composer-install: ## Correr Composer para instalar las depencias en la Web de Operaciones
	U_ID=${UID} docker exec --user ${UID} ${name} composer install --no-interaction -vvv

composer-update: ## Actualizar las dependencias de Composer en la Web de Operaciones
	U_ID=${UID} docker exec --user ${UID} ${name} composer update --no-interaction

ssh-root: ## Ingresar al contenedor de la Web de Operaciones como Root
	docker container exec -u 0 -it ${name} bash

ssh: ## Ingresar al Contenedor como usuario local
	U_ID=${UID} docker exec -it --user ${UID} ${name} bash

chmod-cache: ## Ingresar al Contenedor como usuario local
	U_ID=${UID} docker exec -it ${name} chmod -R 777 var/cache -v

prod-log: ## Ingresar al Contenedor como usuario local
	U_ID=${UID} docker exec -it ${name} tail -f var/logs/prod.log

deploy-db: ## Ingresar al Contenedor como usuario local
	U_ID=${UID} docker exec -it --user ${UID} ${name} php -d memory_limit=-1 bin/console doctrine:schema:update --force

code-style: ## Runs php-cs to fix code styling following Symfony rules
	U_ID=${UID} docker exec --user ${UID} ${name} php-cs-fixer fix src --rules=@Symfony

