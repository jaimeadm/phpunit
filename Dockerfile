FROM php:8.2-cli

RUN apt-get update \
    # install GraphicsMagick
	&& apt-get install -y \
		libgraphicsmagick1-dev graphicsmagick zlib1g-dev libicu-dev gcc g++ --no-install-recommends \
	&& pecl -vvv install gmagick-beta && docker-php-ext-enable gmagick \
    # pdo_mysql
    && docker-php-ext-install pdo_mysql \
    # redis
    && pecl install redis && docker-php-ext-enable redis \
	# intl
	&& docker-php-ext-configure intl && docker-php-ext-install intl \
    # cleanup
    && apt-get clean && rm -rf /var/lib/apt/lists/*

WORKDIR /app
EXPOSE 8081

# copy everything in the project into the container. This is what
# makes this image so fast!
COPY . /app

# start the dev server
CMD [ "./flow", "server:run", "--host", "0.0.0.0" ]