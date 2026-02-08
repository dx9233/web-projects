@echo off
echo Fixing UserFactory...

cd backend\laravel-app

echo Replacing fake() with \$this->faker...
powershell -Command "(Get-Content 'database/factories/UserFactory.php') -replace 'fake\(\)->', '\$this->faker->' | Set-Content 'database/factories/UserFactory.php'"
powershell -Command "(Get-Content 'database/factories/UserFactory.php') -replace 'fake\(\)\.', '\$this->faker\.' | Set-Content 'database/factories/UserFactory.php'"

echo ✅ Factory fixed!
pause