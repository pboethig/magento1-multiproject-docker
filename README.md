# Magento1-multiproject-docker

Based on meanbee/docker magento this is a magento 1 multiproject dev environment.
Feel free to use and extend

# Prerequisits
- linux / ubuntu 16.04
- docker installed
- docker-composer installed


# Features
- PHP5.6 / 7.0
- Mysql 5.6
- Redis
- Redis Frontend
- Cron machine
- Cli machine
- XDEBUG

# Additional Magento Modules
- Aoe_TemplateHints - Perfect way to display template information
- EcomDev_LayoutCompiler - Compiles all layout xmls to one for performance
- EcomDev_PHPUnit - Unittest Framework to test magento library
- FireGento_Debug - Show modules and dependecies in adminbackend
- Steverobbins_Redismanager - Configure and Flush Rediscache

# Usage

## Start containers

See [docker-compose.yml](docker-compose.yml) for a sample configuration.

### Install composer dependencies
- change to your container:
- `docker exec -it <container> /bin/bash`
- change to your projectroot (src/project1) and hit
- `n98-magerun.phar`

## Database
`docker exec -it <mysql container>` /bin/bash`
`mysql -h db -uroot -ptoor`


## Xdebug

Xdebug is installed and enabled on all the images by default. To configure it for remote debugging, start
the container with the following environment variable set (replacing the `{}` placeholders with appropriate values):

    XDEBUG_CONFIG="remote_host={IP_ADDRESS} idekey={IDEKEY}"

- see docker-compose.yml for sample configuration

# Command Line Tools

The `cli` images have a number of useful Magento tools pre-installed:

- [composer](https://getcomposer.org/) - Install and manage PHP package dependencies
- [magerun](https://github.com/netz98/n98-magerun) - Run command line commands in Magento


- change to your container:
- `docker exec -it <container> /bin/bash`
- change to your projectroot (src/project1) and hit
- `n98-magerun.phar`

# PHPUnit
### You can use preinstalled Ecomdev_PHP_Unit

### Create a tesdatabase "magento_test"
- `docker exec -it <mysql container> /bin/bash`
- `mysql -h db -uroot -ptoor`
- `create database magento_test`
- `exit`
- `exit`

- change to your container:
- `docker exec -it <container> /bin/bash`
- change to your projectroot (src/project1) and hit
- `phpunit`


### Reach magento frontend
- http://127.0.0.1:8080/src/project1

### Reach redis cache management frontend
- http://127.0.0.1:8081



