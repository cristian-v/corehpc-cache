# Corehpc Cache Fun Module

    ``corehpc/cache``

- [Main Functionalities](#markdown-header-main-functionalities)
- [Installation](#markdown-header-installation)
- [Configuration](#markdown-header-configuration)
- [Specifications](#markdown-header-specifications)
- [Attributes](#markdown-header-attributes)


## Main Functionalities
This module is made as a joke because lots of the time without checking documentation Magento developer will not know the exact differences between cache:clear and cache:flush
To see this module in action just run this in the command line
```bash
php bin/magento cache:power
```

## Installation
\* = in production please DON'T USE IT

### Type 1: Zip file

- Unzip the zip file in `app/code/Corehpc`
- Enable the module by running `php bin/magento module:enable Corehpc_Cache`
- Apply database updates by running `php bin/magento setup:upgrade`\*
- Flush the cache by running `php bin/magento cache:flush`

### Type 2: Composer

- As it is a joke I did not bother to add it to any package manager 

## Configuration
- there is no configuration for this module

## Shout-out
[Mark Shust](https://x.com/MarkShust) - For the inspiration and the start of the joke



