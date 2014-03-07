Лабораторная работа 2, вариант 16
=================================

Постановка задачи
-----------------

Реализовать веб-приложение с использованием следующих технологий: Yii, mysql или postgresql.

Тема приложения: Сайт отзывов о товарах (аналог irecommend.ru)

- управление контентом (списком товаров и категориями товаров - CRUD) в админке
- поиск товара по его описанию
- отзывы, рейтинг для каждого товара
- у каждого товара может быть несколько категорий, которые можно прикрепить в админке

Деплой
------

Лабораторная выполнена с использованием фреймворка [Yii](http://yiiframework.ru/doc/guide/ru/quickstart.installation) и базы данных [MySql](https://help.ubuntu.com/12.04/serverguide/mysql.html).

1. Выгрузить проект из репозитория:

  ```shell
  git clone https://github.com/akonit/lab2.git
  ```
2. Поместить выгруженную директорию lab2 в корневую папку веб-сервера, поднятого на компьютере (приложение тестировалось на Apache: веб-директория /var/www, само приложение размещено по пути /var/www/lab2).

3. Накатить базу данных: в директории lab2 выполнить следующую команду:

  ```shell
  mysql -u root -p < protected/data/schema.mysql.sql
  ```
4. Для доступа к главной странице приложения необходимо в браузере перейти по адресу `http://localhost/lab2/index.php`. Пользовательский доступ к приложению - demo/demo, админский - admin/admin.


Возможные проблемы запуска приложения и их решения
--------------------------------------------------

1. Ошибка подключения к базе данных после наката схемы: имеет смысл перезапустить веб-сервер, на котором размещено приложение.

