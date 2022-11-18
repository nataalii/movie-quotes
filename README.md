---
Movie Quotes  application is a web platform where you can see quotes randomly. After clicking the movie title, program shows you all the quotes from that movie. Platform has adminpanel, you can run artisan command, create user by providing your information and log in. Then admin has an opportunity to Create, read, update and delete Movie and its quotes.

#
### Prerequisites

* <img src="readme/assets/php.svg" width="35" style="position: relative; top: 4px" /> *PHP@7.2 and up*
* <img src="readme/assets/mysql.png" width="35" style="position: relative; top: 4px" /> *MYSQL@8 and up*
* <img src="readme/assets/npm.png" width="35" style="position: relative; top: 4px" /> *npm@6 and up*
* <img src="readme/assets/composer.png" width="35" style="position: relative; top: 6px" /> *composer@2 and up*


#
### Tech Stack

* <img src="readme/assets/laravel.png" height="18" style="position: relative; top: 4px" /> [Laravel@6.x](https://laravel.com/docs/6.x) - back-end framework
* <img src="readme/assets/nova.png"  height="17" style="position: relative; top: 4px" /> [Laravel Nova](https://nova.laravel.com/) - flexible Admin Panel as espace "Super Admin"
* <img src="readme/assets/mix.png" height="18" style="position: relative; top: 4px" /> [Laravel Mix](https://laravel-mix.com/) - is a webpack wrapper which makes an ease for a developer to start working on JS files and compile them with such simplicity...
* <img src="readme/assets/jwt.png" height="18" style="position: relative; top: 4px" /> [JWT Auth](https://jwt-auth.readthedocs.io/en/develop/) - Authentication system for mobile users
* <img src="readme/assets/spatie.png" height="19" style="position: relative; top: 4px" /> [Spatie Translatable](https://github.com/spatie/laravel-translatable) - package for translation

#
### Installation
1\. First of all you need to clone Movie Quotes repository from github:
```sh
git clone https://github.com/RedberryInternship/natalia-movie-quotes.git
```

2\. Next step requires you to run *composer install* in order to install all the dependencies.
```sh
composer install
```

3\. after you have installed all the PHP dependencies, it's time to install all the JS dependencies:
```sh
npm install
```

and also:
```sh
npm run dev
```
in order to build your JS/SaaS resources.

4\. Now we need to set our env file. Go to the root of your project
And now you should provide **.env** file all the necessary environment variables:

#
**MYSQL:**
>DB_CONNECTION=mysql

>DB_HOST=127.0.0.1

>DB_PORT=3306

>DB_DATABASE=movies

>DB_USERNAME=root

>DB_PASSWORD=nanana

after setting up **.env** file, execute:
```sh
php artisan config:cache
```
in order to cache environment variables.

4\. Now execute in the root of you project following:
```sh
  php artisan key:generate
```
Which generates auth key.

##### Now, you should be good to go!


#
### Migration
if you've completed getting started section, then migrating database if fairly simple process, just execute:
```sh
php artisan migrate  --seed
```

```

#
### Development

You can run Laravel's built-in development server by executing:

```sh
  php artisan serve
```

when working on tailwindcss you may run:

```sh
  npm run dev
```

to create a user, use artisan command:
```
  php artisan user:create
```

### drawsql link:

https://drawsql.app/teams/natas-tea/diagrams/movies
