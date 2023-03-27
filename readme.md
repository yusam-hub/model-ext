#### yusam-hub/model-ext

    "php": "^7.4|^8.0|^8.1|^8.2"

#### tests

    sh phpinit

#### setup

    "repositories": {
        ...
        "yusam-hub/php-compatibility": {
            "type": "git",
            "url": "https://github.com/yusam-hub/php-compatibility.git"
        },
        "yusam-hub/model-ext": {
            "type": "git",
            "url": "https://github.com/yusam-hub/model-ext.git"
        }
        ...
    },
    "require": {
        ...
        "yusam-hub/php-compatibility": "dev-master",
        "yusam-hub/model-ext": "dev-master"
        ...
    }