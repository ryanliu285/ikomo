var script = document.createElement('script');
var script2 = document.createElement('script');
script.src = 'https://cdnjs.cloudflare.com/ajax/libs/xls/0.7.4-a/xls.js';
script.type = 'text/javascript';
document.getElementsByTagName('head')[0].appendChild(script);

function ExcelToJSON(file) {
  // Get The File From The Input
   var oFile = file;
   var sFilename = file.name;
   // Create A File Reader HTML5
   var reader = new FileReader();

   // Ready The Event For When A File Gets Selected
   reader.onload = function(e) {
       var data = e.target.result;
       var cfb = XLS.CFB.read(data, {type: 'binary'});
       var wb = XLS.parse_xlscfb(cfb);
       // Loop Over Each Sheet
       wb.SheetNames.forEach(function(sheetName) {
           // Obtain The Current Row As CSV
           var sCSV = XLS.utils.make_csv(wb.Sheets[sheetName]);
           var oJS = XLS.utils.sheet_to_row_object_array(wb.Sheets[sheetName]);

           $("#my_file_output").html(sCSV);
           console.log(oJS)
       });
   };

   // Tell JS To Start Reading The File.. You could delay this if desired
   reader.readAsBinaryString(oFile);
};
