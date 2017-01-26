# LBForm
This is a form element pre-written with adminlte library of acacha.

# How to install

### Step 1: install

```php
composer require libressltd/lbform
```

### Step 2: add service provider

In config/app.php, add following line to provider

```php
LIBRESSLtd\LBForm\LBFormServiceProvider::class,
```

### Step 3: Publish 

```php
php artisan vendor:publish --tag=lbform
```

### Step 4: Using:

```php
@include("layouts.elements.table", [
    'url' => '/ajax/user',
    'columns' => [
        ['data' => 'name', 'title' => 'Name'],
        ['data' => 'email', 'title' => 'Email'],
        ['data' => 'account_balance', 'title' => 'Balance', "defaultContent" => 0],
        ['data' => 'created_at', 'title' => 'Created at'],
        ['data' => 'transaction_button', 'title' => 'Transaction'],
        ['data' => 'transaction_button', 'title' => 'Transaction', 'hasFilter' => false],
    ]
])
```
