<p align="center">
    <img src="https://chemex.celaraze.com/chemex-red.png" width="120" height="120"/>
</p>

<p align="center">
    <img src="https://img.shields.io/badge/Latest Release-3.0.0-orange" />
    <img src="https://img.shields.io/badge/PHP-7.3+-green" />
    <img src="https://img.shields.io/badge/MariaDB-10.2+-blueviolet" />
    <img src="https://img.shields.io/badge/License-GPL3.0-blue" />
</p>

<p align="center">
    <img src="https://travis-ci.com/Celaraze/Chemex.svg?branch=gesha" />
    <img src="https://app.fossa.com/api/projects/git%2Bgithub.com%2FCelaraze%2FChemex.svg?type=shield" />
</p>

<p align="center">
    <img src="https://app.fossa.com/api/projects/git%2Bgithub.com%2FCelaraze%2FChemex.svg?type=large" />
</p>

## 鸣谢

<p align="center">
    <img src="http://chemex-saas.celaraze.com/admin_uploads/images/ea3131e930c4709bb3664705bdf5b415.png"/>
</p>

没有它们就没有 咖啡壶（Chemex）：

`JetBrains` 提供优秀的IDE。

<a href="https://www.jetbrains.com/?from=Chemex" target="_blank">
<img src="https://oss.celaraze.com/chemex/jetbrains.svg" />
</a>

[Laravel](https://laravel.com/) ，优雅的 PHP Web 框架。

[Dcat Admin](https://dcatadmin.com) ，高颜值、高效率的后台开发框架。

`Dr. Peter Schlumbohm`，感谢发明了 Chemex 冲煮咖啡。

## 这些优秀的企业正在使用咖啡壶解决方案

<p>苏州通润驱动设备股份有限公司</p>

<p>昆山龙灯瑞迪制药有限公司</p>

<p>昆山华恒焊接股份有限公司</p>

<p>昆山鑫泰利精密组件股份有限公司</p>

<p>广州群主互联网有限公司</p>

<p>苏州春秋电子科技股份有限公司</p>

<p>江苏杰峰物流有限公司</p>

<p>常熟道达江海物流有限公司</p>

## 简介

咖啡壶（Chemex）是一个轻量的、现代设计风格的 ICT 资产管理系统。得益于 [Laravel](https://laravel.com/) 框架以及 [Dcat Admin](https://dcatadmin.com)
开发平台，使其具备了优雅、简洁的优秀体验。 咖啡壶（Chemex）
是完全免费且开源的，任何人都可以无限制的修改代码以及部署服务，这对于很多想要对ICT资产做信息化管理的中小型企业来说，是一个很好的选择：低廉的成本换回的是高效的管理方案，同时又有健康的生态提供支持。 。

## 特点

经典的 LNMP 环境即可运行。

使用先进的 Web 框架进行开发。

简洁优雅的使用体验。

### 版本

咖啡壶（Chemex）将会以咖啡豆品种作为 `major` 版本的命名，例如 `1.x` 版本称为 `肯亚（Kenya）`，旨在为 ICT 运维人员提供管理能力的同时，普及咖啡知识，静下心喝一杯属于当前版本的冲煮咖啡。

|major|版本名|发布|
|----|----|----|
|1.x|肯亚（Kenya）|✔|
|2.x|耶加雪菲（Yirgacheffe）|✔|
|3.x|瑰夏（Gesha）|最新滚动版本|

在 `3.x` 中，我们对整体进行了全面的重构解耦，因此该版本不可直接兼容从 `2.x` 升级，仅支持最新部署，升级策略后续会提供一个完善的解决方案。

## 环境要求

`git`，用于管理版本，部署和升级必要工具。

`composer`，用于安装 PHP 依赖，这是 PHP 的包管理工具。

`PHP 7.3 +`，暂时不要使用 PHP8，目前有一些小问题需要解决。

`MariaDB 10.2 +`，数据库引擎，理论上 `MySQL 5.6+` 兼容支持。

`ext-zip` 扩展，注意和 PHP 版本相同。

`ext-json` 扩展，注意和 PHP 版本相同。

`ext-fileinfo` 扩展，注意和 PHP 版本相同。

`ext-ldap` 扩展，注意和 PHP 版本相同。

`ext-bcmath` 扩展，注意和 PHP 版本相同。

## 部署

生产环境下为遵守安全策略，非常建议在服务器本地进行部署，暂时不提供相关线上初始化安装的功能。因此，虽然前期部署的步骤较多，但已经为大家自动化处理了很大部分的流程，只需要跟着下面的命令一步步执行，一般是不会有部署问题的。

1：为你的计算机安装 `git`，Windows 环境请安装 [Git for Windows](https://git-scm.com/download/win) ，Linux
环境一般都会自带，如果没有就执行 `yum install git` 或者 `apt install git` 命令来安装即可。

2：为你的计算机安装 `PHP` 环境，参考：[PHP官方](https://www.php.net/downloads) 。

3：为你的计算机安装 `mariaDB`。

4：为你的计算机安装 `composer` 包管理工具，没有此工具请安装 [Composer Install](https://getcomposer.org/download/) ，Ubuntu
环境下可以直接执行 `apt install composer` 完成安装。

4：创建一个数据库，命名任意，但记得之后填写配置时需要对应正确，并且数据库字符集为 `utf8-general-ci`。

5：在你想要的目录中，执行 `git clone https://gitee.com/celaraze/Chemex.git` 完成下载。

6：在项目根目录中，复制 `.env.example` 文件为一份新的，并重命名为 `.env`。

7：在 `.env` 中配置数据库信息。

8：在项目根目录中，执行 `composer config -g repo.packagist composer https://mirrors.aliyun.com/composer/`
，然后继续执行 `composer install -vvv` 来安装依赖。

8：进入项目根目录，执行 `php artisan chemex:install` 进行安装。

9：你可能使用的web服务器为 `nginx` 以及 `apache`，无论怎样，应用的起始路径在 `/public` 目录，请确保指向正确，同时程序的根目录权限应该调整为：拥有者和你的 Web
服务器运行用户一致，且根目录权限为 `755`。

10：修改web服务器的伪静态规则为：`try_files $uri $uri/ /index.php?$args;`。

11：此时可以通过访问 `http://your_domain` 来使用 咖啡壶。管理员账号密码为：`admin / admin`。

## 更新（通过Git Pull方式）

随时随地保持更新可以在项目根目录中执行 `sudo git reset --hard && git pull --force` 命令，将会同步分支的最新修改内容。

接着，执行 `composer update -vvv` 来更新底层依赖。

接着，执行 `php artisan chemex:update` 来进行升级。

## 开启更多功能

在左侧菜单的 `扩展` 中，可以启用增强功能，例如 `软件管理` 、`配件管理` 等等。

## 截图

![](https://oss.celaraze.com/chemex/screencapture-127-0-0-1-8000-auth-login-1607935370690.png)

![](https://oss.celaraze.com/chemex/screencapture-127-0-0-1-8000-1607935088660.png)

![](https://oss.celaraze.com/chemex/screencapture-127-0-0-1-8000-software-records-1-1607935148432.png)

![](https://oss.celaraze.com/chemex/screencapture-127-0-0-1-8000-software-records-1-1607935148432.png)

![](https://oss.celaraze.com/chemex/screencapture-127-0-0-1-8000-device-records-1607935130912.png)

## 咖啡壶没有满足我的需求，我想要咖啡壶成为我想要的样子

咖啡壶是开源的，程序本体及其衍生工具的源码都在你的手中，你可以自行修改成为你想要的样子。

`Fork` 本仓库，修改代码，成为你的。

## 开源协议

咖啡壶（Chemex）遵循 [GPL3.0](https://www.gnu.org/licenses/gpl-3.0.html) 开源协议。
