# Alfabank partners API client

There is a simpliest alfabank partners api client. Allows to create leads, receive leads statuses, check company by INN, receive cities and regions dictionaries.

Partner area: [https://partner.alfabank.ru/](https://partner.alfabank.ru/)

API manual: [https://partner.alfabank.ru/files/download?code=api-manual](https://partner.alfabank.ru/files/download?code=api-manual)

API reference: [https://partner.alfabank.ru/public-api/documentation#/](https://partner.alfabank.ru/public-api/documentation#/)

# Demo / Usage examples

1 . Clone repository

```
git clone https://github.com/antonshell/alfabank-partners-api-client.git
```

2 . Install dependencies

```
cd alfabank-partners-api-client
composer install
```

3 . Set api key

```
nano demo/_bootstrap.php
```

```php
$apiKey = 'your-api-key';
```

4 .  Run examples

```php
php demo/checkByCityCode.php
php demo/checkByRegionCode.php
php demo/createLead.php
php demo/getDictionaryCities.php
php demo/getDictionaryRegions.php
php demo/getLeads.php
php demo/getLeadsById.php
```