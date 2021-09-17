console.log("running script...")

// As with JSON, use the Fetch API & ES6
fetch('sample.md')
  .then(response => response.text())
  .then(data => {
  	// Do something with your data
  	console.log(data);
  });

// function readTextFile(file)
// {
//     var rawFile = new XMLHttpRequest();
//     rawFile.open("GET", file, false);
//     rawFile.onreadystatechange = function ()
//     {
//         if(rawFile.readyState === 4)
//         {
//             if(rawFile.status === 200 || rawFile.status == 0)
//             {
//                 var allText = rawFile.responseText;
//                 alert(allText);
//             }
//         }
//     }
//     rawFile.send(null);
// }
// console.log(readTextFile("sample.md"))

// function readFile(input) {
//     let file = input.files[0];
  
//     let reader = new FileReader();
  
//     reader.readAsText(file);
  
//     reader.onload = function() {
//       console.log(reader.result);
//     };
  
//     reader.onerror = function() {
//       console.log(reader.error);
//     };
  
//   }

var md = window.markdownit();
var result = md.render('# Some simple markdown here for an example.');
console.log(result)
document.getElementById("demo").innerHTML = result;


