# Traineasy 
<!-- [![CI](https://github.com/Anaanse/anaanse-api/actions/workflows/laravel.yml/badge.svg)](https://github.com/Anaanse/anaanse-api/actions/workflows/laravel.yml)
 -->

## Set-up process
<br>

### Clone the repo
```
gh repo clone Emezak-LTD/traineasy
```
or

```
git clone git@github.com:Emezak-LTD/traineasy
```
<br>

### Install dependencies
```
composer install
```
<br>

### Create .env file
```
cp .env.example .env
```
<br>

### Generate application key
```
php artisan key:generate
```
<br>

### Edit .env 

<br>

### Migrate the database
```
php artisan migrate
```
<br>

<!-- ### Create Storage link
```
php artisan storage:link
```
<br> -->

<!-- ### Create a cron job
```
* * * * * cd /path-to-the-project && php artisan schedule:run >> /dev/null 2>&1
```
<br> -->

### Launch application
```
php artisan serve
```

