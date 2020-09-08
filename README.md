# fp

[![FOSSA Status](https://app.fossa.com/api/projects/git%2Bgithub.com%2FIoTcat%2Ffp.svg?type=shield)](https://app.fossa.com/projects/git%2Bgithub.com%2FIoTcat%2Ffp?ref=badge_shield)
![version](https://img.shields.io/npm/v/fp3)
![license](https://img.shields.io/npm/l/fp3)
![download](https://img.shields.io/npm/dt/fp3)
![size](https://badge-size.herokuapp.com/iotcat/fp/master/dist/fp.min.js?compression=gzip)

The simplified usage of [fingerprintjs/fingerprintjs2](https://github.com/fingerprintjs/fingerprintjs2).   

[简体中文](./zh.md)


## What is fp?
fp is a concise web front-end solution to generate an unique 'fingerprint' for each visitor basing on visitor's device and browser. fp is the simplified usage of [fingerprintjs/fingerprintjs2](https://github.com/fingerprintjs/fingerprintjs2). Without complex configuration, fp can provide an optimized fingerprint for user-agents in form of 6 letters hash in a short time.


## Quick start

[Click here to see how it works!](https://fp.yimian.xyz/demo.html)


## How to use fp?

### Install

npm:  
```bash
$ npm install fp3 --save
```

yarn:  
```bash
$ yarn add fp3
```

Cite in HTML: 
```html
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/fp3/dist/fp.min.js"></script>
```

### Generate fp
This is a demo to generate fp:  
```html
<script type="text/javascript">
  ;(async function(){
    alert(await fp);
  })()
</script>
```

This will generate a six-letter hash like this (For difficult client this hash is unique):
```bash
df3kd0
```
The first two letters `df` indicates the fingerprint of the device, such as the PC, phone etc. Ideally, these two letter will not vary while you switch the browser on the same device.

The middle two letters `3k` and the last two letters `d0` are the fingerprint of the browser. The different is that, the last one could vary with the change of timezone, plugin etc., while the middle one is more stable and will not vary under these stuation. However, the middle part is more likely to be "not unique" when you have a great amount of clients. 

In practice, you can use `substr()` to decompose fp into each part.
```js
  ;(async function(){
    var fp_device = (await fp).substr(0, 2);  //df in df3kd0
    var fp_browser = (await fp).substr(2, 2); //3k in df3kd0
    var fp_unique = (await fp).substr(4);     //d0 in df3kd0
  })()
````


## Advanced Usage


### Get fp details
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

## License
[![FOSSA Status](https://app.fossa.io/api/projects/git%2Bgithub.com%2FIoTcat%2Ffp.svg?type=large)](https://app.fossa.io/projects/git%2Bgithub.com%2FIoTcat%2Ffp?ref=badge_large)
