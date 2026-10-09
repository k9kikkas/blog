install git/vscode/php if needed
- `winget install git.git -i --force`
- `winget install vscode`
- `winget install php.php.8.5`
git clone/git pull

bun install powershell -c "irm bun.sh/install.ps1|iex"
composer installer on website
`winget install jetbrains.datagrip`

php.ini enxtensions
extensions needed:
- curl
- fileinfo
- mbstring
- openssl
- pdo_sqlite

`composer install`
`bun install`

create .env file from .env.example by copying and renaming
`cp .env.example .env`

`php artisan key:generate`
`php artisan migrate`
run laravel `composer run dev`

laravel/php extensions
emmet

php artisan migrate:fresh (does only tables)
php artisan migrate:fresh --seed (adds posts too)