# Nebbiolo DTOs

[![CircleCI](https://circleci.com/gh/Evino/nebbiolo-dto/tree/master.svg?style=svg)](https://circleci.com/gh/Evino/nebbiolo-dto/tree/master)

This repo contains the data transfer objects used by Nebbiolo to handle Brazilian electronic invoices (NF-e)

If your application talks with a Nebbiolo service then you can use this code carry data in your application (also to create requests).

# Installation
Edit your composer.json:
```
"require": {
    "evino/nebbiolo-dto": "dev-master"
},
"repositories": [
    {
        "type": "vcs",
        "url": "git@github.com:Evino/nebbiolo-dto.git"
    }
]
```
Run:
```
composer install
```

# Running Tests
```
composer test
```
