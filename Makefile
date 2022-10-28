# Start the docker-compose stack
start:
	docker-compose up -d

# Stop the docker-compose stack
stop:
	docker-compose down

# Up (equivalent to start)
up:
	docker-compose up -d

# Down (equivalent to stop)
down:
	docker-compose down

# Restart the docker-compose stack
restart:
	docker-compose restart

# Build the docker-compose stack
build:
	docker-compose build

# Backup all the database with a timestamp
backup:
	docker exec db_stack /usr/bin/mysqldump --databases local -uroot --password=root > ./backup/databases-$(shell date +%Y%m%d-%H%M%S).sql

# Enter the web container
web:
	docker exec -it web_stack sh

# Enter the php container
php:
	docker exec -it php_stack sh

# Enter the db container
db:
	docker exec -it db_stack sh

#  Enter the phpmyadmin container
phpmyadmin:
	docker exec -it phpmyadmin_stack sh

# Nginx reload
nginx-reload:
	docker exec web_stack nginx -s reload