# fp
Let fp work with Cookie, cross-domain, make it stable and reliable!


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

### Get fp
```html
<script type="text/javascript" src="./fp.min.js"></script>
<script type="text/javascript">
  fp(function(myFp, key, acc, detail, createdTime, timeUsed, detailObj){
      console.log('My fp: ' + myFp);
      console.log('fp key: ' + key);
      console.log('Accuracy: ' + acc);
      console.log('fp Details: ' + detail);
      console.log('fp Created Time: ' + createdTime);
      console.log('Time Usage to calculate: ' + timeUsed);
      console.log(detailObj);
  });
</script>
```

### Recover fp from key (cross-domain purpose)
```html
<script type="text/javascript" src="./fp.min.js"></script>
<script type="text/javascript">
  fp(/*fp key*/'eyJfZnAiOiI1YjI4Y2U5ZCIsIl9mcF9yZWZfIjoiZVZiSmJVVjlWNGFzS0JZOE10THRZQmJVTkVkSkk5WUpJZElnYlJJUVpWY0lhZGJKZVFZNWI5TkVMRmJKWlZJZ09KZTlkMEwxWkZVZExOVUZJVWJOWkpJNVpvWkZhOVpVY0ZjSklCY0pZeEl4Y0pNQmJKYlJkeFlCYkJZQlk0YlViQlpoSUJaRllGWUZiY0xaY1JZQllRVHRRTlpsUmxkSlFkSUZiOVlZUUJRNVZGUUZRaFRWV0ZlTmRJWVZRVlpKYjVUQVprUmhOUmRFTkJNSmJvWmhaNVpKWmhaTmFvY0phTWN3VEpaSlpSVTlJWkxOWk1jeGJGY0JiRmExTEpUeFk1TE5MSlFsSVZPUU5ZTyIsIl9mcF9MYXN0Q2hhbmdlVGltZSI6IjE1NjE1MTkxNzYifQ==', function(myFp, key, acc, detail, createdTime, timeUsed, detailObj){
      console.log('My fp: ' + myFp);
      console.log('fp key: ' + key);
      console.log('Accuracy: ' + acc);
      console.log('fp Details: ' + detail);
      console.log('fp Created Time: ' + createdTime);
      console.log('Time Usage to calculate: ' + timeUsed);
      console.log(detailObj);
  });
</script>
```

### Reset fp
```html
<script type="text/javascript" src="./fp.min.js"></script>
<script type="text/javascript">
  fp('reset', function(myFp, key, acc, detail, createdTime, timeUsed, detailObj){
      console.log('My fp: ' + myFp);
      console.log('fp key: ' + key);
      console.log('Accuracy: ' + acc);
      console.log('fp Details: ' + detail);
      console.log('fp Created Time: ' + createdTime);
      console.log('Time Usage to calculate: ' + timeUsed);
      console.log(detailObj);
  });
</script>
```

## CDN
 - China: `https://cdn.yimian.xyz/fp/fp.min.js`

## Background
This project is developed from https://github.com/Valve/fingerprintjs2   

