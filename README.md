# SIG Inventory System

A 2014 OJT project: a PHP/MySQL web app for tracking office computers and monitors across floors (add/edit entries, CSV upload, search, print).

Stack: PHP (legacy `mysql_*` API, needs PHP 5.6), MySQL, Bootstrap 3, jQuery.

## Run
1. Import `sig_inventory.sql` into MySQL.
2. Serve the folder with PHP 5.6 (with `php_mysql.dll` enabled), e.g. `php -S localhost:8057 -t .`
3. Sign in with `admin` / `admin`.
