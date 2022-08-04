
# Laravel API ( Laravel 9 )

## How to use ?

1. clone this repository
2. cd on the repository folder
3. open terminal | composer install
4. configure Database on .env file
5. open terminal | php artisan migrate:fresh --seed
6. open terminal | php artisan serve
7. open POSTMAN or [ Thunder Client - VSCode Extension ] to test API Endpoints


## API Endpoints

1. GET: /api/users/ - List all users
2. GET: /api/users/{id} - List a single user based on id
3. POST: /api/users/create - Store a user data
4. PATH: /api/users/{id} - Update users data based on id
5. DELETE: /api/users/{id} - Delete a users based on id