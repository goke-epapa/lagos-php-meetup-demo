# Lagos PHP Meetup April 2016 - Horizontal Scaling Demo
Demo application for Lagos PHP Meetup presentation on "Horizontal Scaling of PHP Applications"

## Install HAProxy
### MAC
```
brew install haproxy
```
### Windows
- [See instructions here](http://zcourts.com/2012/09/29/install-haproxy-on-windows-cygwin-good-for-testing/#sthash.P960VQz3.dpbs)

### Debian Linux
```
sudo apt-get install haproxy
```

## Install Redis
### Windows
The Redis project does not officially support Windows. However, the Microsoft Open Tech group develops and maintains this Windows port targeting Win64.
Download the latest redis binary from [here](https://github.com/MSOpenTech/redis/releases)
### Debian Linux
```
sudo apt-get update
sudo apt-get upgrade
sudo apt-get install redis-server
```
### Mac
```
brew install redis
```

## Install [php5 redis extension](https://github.com/phpredis/phpredis)
### Mac OX
```
brew install php5x-redis --without-homebrew-php
```
or see [here](https://github.com/phpredis/phpredis#installation-on-osx)

x is minor php version
### Linux
```
sudo apt-get install php5-redis
```
### Windows
See [here](https://github.com/phpredis/phpredis/issues/213#issuecomment-11361242).

## Authors
Adegoke Obasa - [@goke_epapa](http://twitter.com/goke_epapa)
