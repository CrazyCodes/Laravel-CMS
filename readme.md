# About Laravel-CMS
Laravel-CMS是使用Laravel&Laravel-Admin的一款CMS系统，系统没有前端页面。

# Use Laravel-CMS
## Step 1 
将laravel-cms拉回到本地
```
git clone https://github.com/CrazyCodes/Laravel-CMS.git
```
## Step 2
安装所需的扩展包
```
composer install
```
## Step 3
进行数据迁移
```
php artisan migrate
```
## Step 4
进行数据填充
```
php artisan db:seed
```
## Step 5
直接访问 yoursite.com/admin 即可开始使用！
# License
The Laravel-CMS is open-source software licensed under the MIT license.
