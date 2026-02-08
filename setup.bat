@echo off
echo ========================================
echo WEB-PROJECTS Full Setup
echo ========================================

echo 1. Installing PNPM globally if needed...
npm install -g pnpm

echo 2. Installing JS dependencies...
pnpm install

echo 3. Installing PHP dependencies...
cd backend\laravel-app
IF EXIST composer.phar (
    php composer.phar install --no-interaction --prefer-dist
) ELSE (
    composer install --no-interaction --prefer-dist
)

echo 4. Setting up environment...
IF NOT EXIST .env (
    copy .env.example .env
    php artisan key:generate
)

echo 5. Setting up database...
php artisan migrate --force

echo 6. Building JS projects...
cd ..\..
pnpm run build:js

echo ========================================
echo Setup completed successfully!
echo ========================================
echo
echo Available commands:
echo - pnpm run dev:all    (start all services)
echo - pnpm run build:all  (build everything)
echo - pnpm run test:all   (run all tests)
echo
pause