npm i -g uglify-js
cp fp.js dist/
uglifyjs dist/fp.js -m -o dist/fp.min.js --source-map url='dist/fp.min.js.map'

