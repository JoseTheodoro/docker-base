## Docker base from projects PHP

Base Docker from projects PHP.  Contains three base containers with applications Nginx, PHP and Mysql


## Structure

**.docker** - folder contains configuration files 

**code** - folder that will encapsulate your project folder. e.g. ( folder app contains laravel project )

**docker-compose.yml** - containers configuration

## Example

    docker-base/code # - composer create-project --prefer-dist laravel/laravel app

    docker-base/ # - docker-compose up --build

That's all!
