Docker Wordpress Rest API Demo
===========================

Wordpress 4.7之后内置了rest api。

官方给出的访问地址`/wp-json/wp/v2`默认情况是404，需要在后台设置：

```
Settings -> Permalink -> Post name
```

之后才可以使用。

如果没开启的话，要使用queryString的形式`?rest_route=/wp/v2/posts`，
但它的问题是我们没法在它的基础上继续添加属于该api的queryString参数。
所以还是推荐开启。

本demo演示了如何自定义一个rest api，位于WordPress-5.3.2/my-rest.php，
需要把它require进系统（比如在wp-config.php中）

注意：`$request->get_param`可以同时从queryString和body中取param，body中会覆盖queryString中。

```
npm run up
```

当前登录wordpress的用户名和密码是：

```
freewind
123456
```

- http://localhost:20080/?rest_route=/wp/v2/posts
- http://localhost:20080/wp-json/v2/posts
- http://localhost:20080/wp-json/api/v1/hello?name=world

更多可用：https://developer.wordpress.org/rest-api/reference/

