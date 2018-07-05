FROM nginx:1.15-alpine

RUN addgroup -g 3000 -S app
RUN adduser -u 3000 -S -D -G app app

ADD nginx.conf /etc/nginx/nginx.conf
