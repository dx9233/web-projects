.PHONY: install build dev test clean

# Installing all dependencies
install:
	@echo "Installing JS dependencies..."
	pnpm install
	@echo "Installing PHP dependencies..."
	cd backend/laravel-app && composer install --no-interaction --prefer-dist
	@echo "Setting up Laravel..."
	cd backend/laravel-app && [ -f .env ] || cp .env.example .env
	cd backend/laravel-app && php artisan key:generate

# Assembling everything
build:
	@echo "Building Laravel..."
	cd backend/laravel-app && php artisan config:cache
	cd backend/laravel-app && php artisan route:cache
	@echo "Building JS projects..."
	pnpm run build

# Launch for development
dev:
	@echo "Starting all services..."
	pnpm run dev:all

# Tests
test:
	@echo "Running PHP tests..."
	cd backend/laravel-app && php artisan test
	@echo "Running JS tests..."
	pnpm run test:all

# Cleaning
clean:
	@echo "Cleaning caches..."
	cd backend/laravel-app && php artisan config:clear
	cd backend/laravel-app && php artisan cache:clear
	cd backend/laravel-app && php artisan route:clear
	@echo "Cleaning node_modules..."
	rm -rf node_modules
	rm -rf **/node_modules