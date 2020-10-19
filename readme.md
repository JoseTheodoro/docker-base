## Docker base from projects PHP

Base Docker from projects PHP.  Contains three base containers with applications Nginx, PHP and Mysql


## Structure

**.docker** - folder contains configuration files 

**src** - folder that will encapsulate your project folder.

**docker-compose.yml** - containers configuration

## Example

    docker-base/code # - composer create-project --prefer-dist laravel/laravel app

    docker-base/ # - docker-compose up --build

That's all!
