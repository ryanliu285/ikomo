var script = document.createElement('script');
var script2 = document.createElement('script');
script.src = 'https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.8.0/xlsx.js';
script2.src = 'https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.8.0/jszip.js';
script.type = 'text/javascript';
script2.type = 'text/javascript';
document.getElementsByTagName('head')[0].appendChild(script);
document.getElementsByTagName('head')[0].appendChild(script2);

// function ExcelToJSON(file) {
//
//   this.parseExcel = function(file) {
//     var reader = new FileReader();
//
//     reader.onload = function(e) {
//       var data = e.target.result();
//       var workbook = XLSX.read(data, {
//         type: 'binary'
//       });
//
//       workbook.SheetNames.forEach(function(sheetName) {
//         var XL_row_object = XLSX.utils.sheet_to_row_object_array(workbook.Sheets[sheetName]);
//         var json_object = JSON.stringify(XL_row_object);
//         console.log(json_object);
//         return json_object;
//       })
//
//     };
//
//     reader.onerror = function(ex) {
//       console.log(ex);
//     };
//
//     reader.readAsBinaryString(file);
//   };
// };
