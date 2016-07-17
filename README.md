# Dockerized PHP Environment

> Nginx + PHP-FPM + MariaDB

## Requirements

* [Docker Engine](https://docs.docker.com/installation/)
* [Docker Compose](https://docs.docker.com/compose/)

```sh
curl -L https://github.com/docker/compose/releases/download/1.7.1/docker-compose-`uname -s`-`uname -m` > /usr/local/bin/docker-compose
chmod +x /usr/local/bin/docker-compose
```

## Running

Set up a Docker Machine and then run:

```sh
git clone https://github.com/knowlet/Docker-PHP.git
cd Docker-PHP
docker-compose up
```
