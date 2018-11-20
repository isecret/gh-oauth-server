<h1 align="center"> Github OAuth Server </h1>

<p align="center">Github OAuth 解决跨域的 PHP 实现</p>


## 安装

```shell
$ git clone https://github.com/isecret/gh-oauth-server.git
$ composer install
```

## 使用
Nginx 入口应为 `/public` 目录，以下仅供参考：
```nginx
server
{
    listen 80;
    listen 443 ssl http2;
    server_name gh-oauth.openapi.link;
    index index.php index.html index.htm default.php default.htm default.html;
    root /www/wwwroot/gh-oauth.openapi.link/public;
    .
    .
    .
    location / {
        if ($request_method = OPTIONS ) {
            add_header Access-Control-Allow-Origin "*";
            add_header Access-Control-Allow-Methods "POST, GET, PUT, OPTIONS, DELETE";
            add_header Access-Control-Max-Age "3600";
            add_header Access-Control-Allow-Headers "Origin, X-Requested-With, Content-Type, Accept, Authorization, FOO";
            add_header Content-Length 0;
            add_header Content-Type text/plain;
            return 200;
        }
    }
    .
    .
    .
}
```
