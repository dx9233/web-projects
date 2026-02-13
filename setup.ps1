# Installing dependencies for WEB-PROJECTS
Write-Host "Starting WEB-PROJECTS setup..." -ForegroundColor Cyan

# 1. Checking PNPM
if (-not (Get-Command pnpm -ErrorAction SilentlyContinue)) {
  Write-Host "Installing PNPM..." -ForegroundColor Yellow
  npm install -g pnpm
}

# 2. Installing JS dependencies
Write-Host "Installing JS dependencies..." -ForegroundColor Yellow
pnpm install

# 3. Installing PHP dependencies
Write-Host "Installing PHP dependencies..." -ForegroundColor Yellow
Set-Location -Path "backend/laravel-app"
if (Test-Path "composer.phar") {
  php composer.phar install --no-interaction --prefer-dist --quiet
}
else {
  composer install --no-interaction --prefer-dist --quiet
}

# 4. Setting up Laravel
Write-Host "Setting up Laravel..." -ForegroundColor Yellow
if (-not (Test-Path ".env")) {
  Copy-Item ".env.example" ".env"
  php artisan key:generate --quiet
}

# 5. Database migrations
Write-Host "Running database migrations..." -ForegroundColor Yellow
php artisan migrate --force --quiet

# 6. Building JS projects
Write-Host "Building JS projects..." -ForegroundColor Yellow
Set-Location -Path "../.."
pnpm run build:js

Write-Host "Setup completed successfully!" -ForegroundColor Green
Write-Host ""
Write-Host "Available commands:" -ForegroundColor Cyan
Write-Host "  pnpm run dev:all    - Start all services"
Write-Host "  pnpm run build:all  - Build everything"
Write-Host "  pnpm run test:all   - Run all tests"
Write-Host ""