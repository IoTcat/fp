# fp
Let fp work with Cookie, make it stable and reliable!


## What is fp?
fp is a concise web front-end solution to generate an unique 'fingerprint' for each visitor basing on visitor's device and browser.


## Quick start

[Click here to see how it works!](https://fp.yimian.xyz/demo.html)


## How to use fp?
To use fp, you must include the fp.js or fp.min.js first.  
A simple example:
```html
<script type="text/javascript" src="./fp.min.js"></script>
<script type="text/javascript">
  fp(function(myFp){
      alert(myFp);
  });
</script>
```

## Advanced Usage
```html
<script type="text/javascript" src="./fp.min.js"></script>
<script type="text/javascript">
  fp(function(myFp, acc, detail, createdTime, timeUsed){
      alert('My fp: ' + myFp);
      alert('Accuracy: ' + acc);
      alert('fp Details: ' + detail);
      alert('fp Created Time: ' + createdTime);
      alert('Time Usage to calculate: ' + timeUsed);
  });
</script>
```

## CDN
 - China: `https://cdn.yimian.xyz/fp/fp.min.js`

## Background
This project is developed from https://github.com/mestarshine/fingerprint2js

