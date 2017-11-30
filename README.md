# Gallywix DTOs
This repo contains the data transfer objects used by Gallywix to handle Brazilian electronic invoices (NF-e)

If your application talks with a Gallywix service then you can use this code carry data in your application (also to create requests).

# Installation
Edit your composer.json:
```
"require": {
    "evino/gallywix-dto": "dev-master"
},
"repositories": [
    {
        "type": "vcs",
        "url": "git@gitlab.evino.io:finances/gallywix-dto"
    }
]
```
Run:
```
composer update
```

# Running Tests
```
composer test
```