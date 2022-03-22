<div align="center">

![Magento 2 Product Discount Label](https://i.imgur.com/d8QEHRb.png)
# Magento 2 Product Discount Label

</div>

<div align="center">

[![Packagist Version](https://img.shields.io/github/v/tag/MagePsycho/magento2-product-discount-label?logo=packagist&sort=semver&label=packagist&style=for-the-badge)](https://packagist.org/packages/magepsycho/magento2-discountlabel)
[![Packagist Downloads](https://img.shields.io/packagist/dt/magepsycho/magento2-discountlabel.svg?logo=composer&style=for-the-badge)](https://packagist.org/packages/magepsycho/magento2-discountlabel/stats)
![Supported Magento Versions](https://img.shields.io/badge/magento-%202.3_|_2.4-brightgreen.svg?logo=magento&longCache=true&style=for-the-badge)
![License](https://img.shields.io/badge/license-MIT-green?color=%23234&style=for-the-badge)

</div>

## Overview
[Magento 2 Product Discount Label](https://www.magepsycho.com/magento2-product-discount-label.html) allows displaying custom discount labels with calculated savings on catalog and cart pages.

Showing custom labels with calculated discount *(ex: `SAVE X%`, `-X%`, .etc.)* draws the attention of the users and motivates purchasing behavior.  
In other words, this extension helps to promote products and get higher conversion rates.

This is an absolute "must-have" for every store - especially stores which offer deals and discounts.

## Key Features
* Enable/disable the extension as per store
* Option to set the custom label with a dynamic discount placeholder on the catalog/product page
* Option to set the custom label with a dynamic discount placeholder on the cart page

## Feature Highlights

### Set Discount Label
With this extension, the store admin can set different discount labels for both catalog & cart pages.

Some examples:
* SAVE `{{discount_percent}}`%
* -`{{discount_percent}}`%
* etc.

*`{{discount_percent}}` will be replaced by discount percent value.*

![M2 Product Discount Label - Admin Settings](https://www.magepsycho.com/media/catalog/product/2/0/20-m2-discount-label-admin-label-settings_1.png)

![M2 Product Discount Label - Product Page](https://www.magepsycho.com/media/catalog/product/5/0/50-m2-discount-label-storefront-samples.png)

## Installation
1. Download the extension .zip file and extract the files.
1. Copy the extension files from src/ folder to the `{your-magento2-root-dir}/app/code/MagePsycho/DiscountLabel` *(create non-existing folders manually)*
1. Run the following series of commands from the SSH console of your server:
```
php bin/magento module:enable MagePsycho_DiscountLabel --clear-static-content
php bin/magento setup:upgrade
```
1. Flush the store cache
```
php bin/magento cache:flush
```
1. Deploy static content - *in Production mode only*
```
rm -rf pub/static/* var/view_preprocessed/*
php bin/magento setup:static-content:deploy
```
1. Go to Admin > CATALOG > Discount Label > Manage Settings

## Live Demo:

* [Backend Demo](http://m2default.mage-expo.com/savvy-shoulder-tote.html)
* [Frontend Demo](http://m2default.mage-expo.com/admin_m2demo/?module=discountlabel)

## Changelog

**Version 1.0.0 (2022-02-02)**

* Initial Release.

## Authors
- Raj KB [![Twitter Follow](https://img.shields.io/twitter/follow/rajkbnp.svg?style=social)](https://twitter.com/rajkbnp)

## Contributors

![Contributors](https://contrib.rocks/image?repo=magepsycho/magento2-product-discount-label)

## To Contribute
Any contribution to the development of `Magento 2 Product Discount Label` is highly welcome.  
The best possibility to provide any code is to open a [pull request on GitHub](https://github.com/MagePsycho/magento2-product-discount-label/pulls).

## Need Support?
If you encounter any problems or bugs, please create an issue on [GitHub](https://github.com/MagePsycho/magento2-product-discount-label/issues).

Please [visit our store](https://www.magepsycho.com/extensions/magento-2.html) for more FREE / paid extensions OR [contact us](https://magepsycho.com/contact) for customization / development services.
