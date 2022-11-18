Movie Quotes 
---
Movie Quotes application is a web platform where you can see quotes randomly. After clicking the movie title, program shows you all the quotes from that movie. Platform has adminpanel, you can run artisan command, create user by providing your information and log in. Then admin has an opportunity to Create, read, update and delete Movie and its quotes.

#
### Prerequisites

* PHP@7.2 and up
* MYSQL@8 and up*
* npm@6 and up*
* composer@2 and up*


#
### Tech Stack

* [Laravel@6.x](https://laravel.com/docs/6.x) - back-end framework
* [Spatie Translatable](https://github.com/spatie/laravel-translatable) - package for translation
* [TailwinUI] (https://tailwindui.com/) - for design

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

3\. after you have installed all the PHP dependencies, it's time to install Tailwindcss dependencies:
```sh
npm install
```

and also:
```sh
npm run dev
```
in order to build your Tailwindcss resources.

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
