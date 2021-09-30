# GraphQl Custom Config Module for Magento 2
This module allow to configure the GraphQL complexity and depth inside the Magento administration

## Requirements
* Magento Community Edition 2.4.3

## Installation
```
composer require caravelx/module-graphql-config
php bin/magento module:enable Caravel_GraphQlConfig
php bin/magento setup:upgrade
php bin/magento setup:di:compile
php bin/magento setup:static-content:deploy
```

## Support
If you have any issues with this extension, open an issue on [GitHub](https://github.com/caravelx/module-graphql-config/issues).
