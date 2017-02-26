FROM phpdockerio/php7-fpm:latest

# Install selected extensions and other stuff
RUN apt-get update \
&& curl -sL https://deb.nodesource.com/setup_6.x | bash - \
&& apt-get -y --no-install-recommends install  php7.0-memcached php7.0-mysql php7.0-mbstring php7.0-xdebug git zip unzip nodejs \
&& apt-get clean; rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/* /usr/share/doc/*


WORKDIR "/var/www/portfolio"