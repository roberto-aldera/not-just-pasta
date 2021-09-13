console.log("running script...")
var md = window.markdownit();
var result = md.render('# Some simple markdown here for an example.');
console.log(result)
document.getElementById("demo").innerHTML = result;


