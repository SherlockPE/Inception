FROM alpine:3.20.5

RUN apk update\
    && apk add\
    nginx\
    openssl\
    envsubst

COPY ./conf/nginx.conf /etc/nginx/http.d/inception.conf
COPY ./tools/script.sh /script.sh

RUN ["chmod", "+x", "/script.sh"]

EXPOSE 443

CMD [ "/script.sh" ]