# Alfabank partners api client

# Demo / Usage

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