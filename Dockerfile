FROM scratch
ADD alpine-minirootfs-3.12.1-x86_64.tar.gz /
COPY strona.php /app/strona.php
LABEL maintainer="PwChO <konrad.mazur1@pollub.edu.pl>"
LABEL description="Zadanie2."
ENV PHPVERSION=7
RUN apk add --update apache2
RUN rm -rf /var/cache/apk/
RUN rm -rf /var/www/localhost/htdocs/index.html
RUN cat /app/strona.php > /var/www/localhost/htdocs/index.php
VOLUME /var/www/localhost/htdocs/
WORKDIR /var/www/localhost/htdocs/
EXPOSE 80/tcp
CMD ["/bin/sh"]
ENTRYPOINT ["httpd"]
CMD ["-D", "FOREGROUND"]
