# fp

[![FOSSA Status](https://app.fossa.com/api/projects/git%2Bgithub.com%2FIoTcat%2Ffp.svg?type=shield)](https://app.fossa.com/projects/git%2Bgithub.com%2FIoTcat%2Ffp?ref=badge_shield)
![version](https://img.shields.io/npm/v/fp3)
![license](https://img.shields.io/npm/l/fp3)
![download](https://img.shields.io/npm/dt/fp3)
![size](https://badge-size.herokuapp.com/iotcat/fp/master/dist/fp.min.js?compression=gzip)

本项目是[fingerprintjs/fingerprintjs2](https://github.com/fingerprintjs/fingerprintjs2)的简化和改进版本.   

[English Version](./README.md)


## 什么是fp

fp为每一个用户代理(浏览器)生成一个唯一的识别码。fp的生成不依赖cookie，localStorage等浏览器本地存储，而是通过js获取的一系列用户设备的系统配置，硬件信息等生成。

## 快速开始

[点击查看你的fp](https://fp.yimian.xyz/demo.html)


## 如何使用

### 安装

使用npm: 

```bash
$ npm install fp3 --save
```

使用yarn:

```bash
$ yarn add fp3
```

在网页上直接引用：

```html
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/fp3/dist/fp.min.js"></script>
```

### 生成fp

使用如下方法生成fp: 
```html
<script type="text/javascript">
  ;(async function(){
    alert(await fp);
  })()
</script>
```

这将会生成一个6位的fp字符串如下： 
```bash
df3kd0
```

此字符串的**前两位**是通过设备硬件信息计算出的设备的fp，对于同一台设备不同浏览器计算出的值是一致的。但是此值有较大概率与其它设备对撞，无法确保唯一性。    

字符串**中间两位**和**最后两位**都是浏览器的fp。区别在于，**中间两位**更加稳定，不会轻易抖动变化，但仍有一定概率与其它设备对撞。**最后两位**则更加容易抖动，但其唯一性更好。    

在实际使用中，你可以使用`substr()`函数来提取fp中某个字段。方法如下: 
```js
  ;(async function(){
    var fp_device = (await fp).substr(0, 2);  //df in df3kd0
    var fp_browser = (await fp).substr(2, 2); //3k in df3kd0
    var fp_unique = (await fp).substr(4);     //d0 in df3kd0
  })()
````


## 进阶使用


### 获取fp使用的信息
```html
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/fp3/dist/fp.min.js"></script>
<script type="text/javascript">
  ;(async function(){
    console.log(await fp_details);
  })()
</script>
```

## CDN
 - jsdelivr: `https://cdn.jsdelivr.net/npm/fp3/dist/fp.min.js`
 - China: `https://cdn.yimian.xyz/fp/fp.min.js`

## 开源协议
[![FOSSA Status](https://app.fossa.io/api/projects/git%2Bgithub.com%2FIoTcat%2Ffp.svg?type=large)](https://app.fossa.io/projects/git%2Bgithub.com%2FIoTcat%2Ffp?ref=badge_large)
