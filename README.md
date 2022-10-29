# BasicFullStackBoilerplate

A basic full stack boilerplate for a quick startup!

Please leave a star if you like it! :blush:

## Requirements

- `make`
- `docker`
- `docker-compose`
- `64-bit OS`

## Usage

The website can be accessed by using port `80`.

PHPMyAdmin is hosted on port `8080` and you auto login with the user `platform`.

## Commands

All the commands can be set in the `Makefile`

### Start the docker-compose stack

- `make start`
- `make up`

### Stop the docker-compose stack

- `make stop`
- `make down`

### Restart the docker-compose stack

- `make restart`

### Build the docker-compose stack

- `make build`

### Backup the database with

- `make backup`

### Enter the cli of the web container

- `make web`

### Enter the cli of the php container

- `make php`

### Enter the cli of the db container

- `make db`

### Enter the cli of the phpmyadmin container

- `make phpmyadmin`

### Reload the nginx configuration

- `make nginx-reload`
