# Тестовое задание AmoPoint

## 1. Laravel проект

Команда для получения и сохранения шуток:
```bash
php artisan joke:fetch
```
Запускается каждые 5 минут через планировщик Laravel (настроен в `app/Console/Kernel.php`).

API роут:
```
GET /api/jokes
```
Возвращает все сохранённые шутки в формате JSON.

Стек: Laravel 13, MySQL, HTTP Client.

## 2. JS скрипт для динамических полей

Файл `script.js` – при изменении значения в `<select name="type_val">` показывает только те поля (input/button), в имени которых есть выбранное значение. Реализовано на чистом JavaScript без зависимостей.

## Запуск проекта

```bash
composer install
cp .env.example .env
php artisan key:generate
# настройте БД в .env
php artisan migrate
php artisan serve
```