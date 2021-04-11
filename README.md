git clone 
cd myntra-app
composer install
npm install
npm run dev
cp .env.example .env
setup DB in .env file
php artisan migrate
php artisan storage:link
php artisan serve