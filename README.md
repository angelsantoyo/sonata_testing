sonata
======

A Symfony project created on October 12, 2016, 10:18 am.

## Installation

```
$ composer install

$ php app/console doctrine:schema:create
```

Update acl controls

```
php app/console sonata:admin:setup-acl
```

Create admin user

```
php app/console fos:user:create --super-admin
```
