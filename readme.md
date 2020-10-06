# 2020_bbt_people_and_stall_management
百步梯人员管理系统及摆摊系统重构--2020

```bash
copy .env.example .env
composer update
php artisan key:generate
php artisan jwt:secret

# edit .env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE= # new database
DB_USERNAME=
DB_PASSWORD=

# migrate data
php artisan migrate --seed

# run server in localhost:8000
php artisan serve
```

每个学期需要在数据库`calendars`表中添加本学期开始时间



