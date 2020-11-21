## 一、背景

从https://github.com/78778443/xssplatform 那里衍生，做了一个docker，一键建XSS平台

## 二、下载源码

git clone https://github.com/Akira-09/xssplatform.git

## 三、运行

在根目录下docker-compose up -d就能开起来啦

端口设置为80，直接访问http://[IP]/install/step1.php就能下一步安装

#### 注：

1. 安装目录还有一些class目录要写权限不然写不进去
2. 数据库地址要写本机IP地址，127.0.0.1不行
3. ./app里面有sql文件，可以数据库管理工具连进去数据库上安装
