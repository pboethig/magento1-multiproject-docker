# magento1-multiproject-docker

Based on meanbee/docker magento this is a magento 1 multiproject dev environment.
Feel free to use and extend

- [`7.0-apache` (*7.0/apache/Dockerfile*)](https://github.com/meanbee/docker-magento/blob/master/7.0/apache/Dockerfile)
- [`7.0-cli` (*7.0/cli/Dockerfile*)](https://github.com/meanbee/docker-magento/blob/master/7.0/cli/Dockerfile)
- [`7.0-fpm` (*7.0/fpm/Dockerfile*)](https://github.com/meanbee/docker-magento/blob/master/7.0/fpm/Dockerfile)
- [`5.6-apache` (*5.6/apache/Dockerfile*)](https://github.com/meanbee/docker-magento/blob/master/5.6/apache/Dockerfile)
- [`5.6-cli` (*5.6/cli/Dockerfile*)](https://github.com/meanbee/docker-magento/blob/master/5.6/cli/Dockerfile)
- [`5.6-fpm` (*5.6/fpm/Dockerfile*)](https://github.com/meanbee/docker-magento/blob/master/5.6/fpm/Dockerfile)
# Usage

##Start containers

See [docker-compose.yml](docker-compose.yml) for a sample configuration.

###Install composer dependencies
- change to your container:
- `docker exec -it <container> /bin/bash`
- change to your projectroot (src/project1) and hit
- `n98-magerun.phar`

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
- change to your container: docker exec -it <container> /bin/bash
- change to your projectroot (src/project1) and hit phpunit



All of the installed tools run in the working directory of the container, so don't forget to set it using the `working_dir` service configuration option in `docker-compose.yml` or the `--workdir` parameter to `docker run`.

Some of the commands use additional environment variables for configuration:

