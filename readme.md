# Laravel GraphQL API Server
This is the repository for the tutorial on How to build a GraphQL Server using Laravel.

Follow the series here => https://baffouraduboampong.me/how-to-build-a-graphql-server-using-laravel-part-1/

## Installation
NB: Make sure you have composer installed or you may downlaod composer at => https://getcomposer.org/download/

1. git clone
2. Open the console and cd into your project root directory
3. Create your database
4. Rename .env.example file to .env inside your project root
5. Update .env with your database information.
6. Run composer install or php composer.phar install
7. Run php artisan key:generate
8. Run php artisan migrate
9. Run php artisan db:seed to run seeders (Incase of an error run => composer dump-autoload)
10. Run php artisan serve

### You can now access your project at http://localhost:8000

**GraphQL Endpoint:** http://localhost:8000/graphql

**GraphQL Playground:** http://localhost:8000/graphql-playground  