$(document).ready(function(){
	$("#btn_create").on("click", function (event){
            event.preventDefault();
                  var data = $("#table-row-num").val();
                  if(data!=0){
                    $("#table-row-num").prop('disabled', true);
                    $("#btn_create").prop('disabled', true);
                    $("#btn_csv").prop('disabled', false);
                    $("#btn_pdf").prop('disabled', false);
                  var maxCol = 5;
                  var maxRow = Math.ceil(data / maxCol);
                  var table = $("#example tbody");
                  var ctr = 0;
                  var a = 0;
                  var text = "";
                  var charset = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
                  //Math.random().toString(36).substr(2, 5);
                  for (var row = 0; row < maxRow; row++) {
                      table.append('<tr></tr>');
                      var appendRow = $('#example tr:last');
                      a = a + 1;
                      
                      for (var i = a; i <= data; i++) {
                        text = Math.random().toString(36).substr(2, 10);
                          if (i % maxCol != 0) {
                              appendRow.append('<td>' + text + '</td>');
                              //ctr++;
                          }
                          if (i%maxCol == 0)
                          {
                              appendRow.append('<td>' + text + '</td>');
                              a = i;
                              break;
                          }
                          
                          if (i == data) {
                              a = i;
                              break;                        
                          }
                      }
         
                  }
                  }
                  else{
                    alert("enter number and click submit to generate");
                    $("#table-row-num").prop('disabled', false);
                    $("#btn_create").prop('disabled', false);
                    $("#btn_csv").prop('disabled', true);
                    $("#btn_pdf").prop('disabled', true);
                    $("#table-row-num").focus();
                    return;
         
                  } 
        });
         
        $("#btn_refresh").on("click", function (event){
        event.preventDefault();            
            location.reload(true);
            $("#table-row-num").focus();
            return;
        });

         $('#json').on('click',function(event){
         event.preventDefault();
         var data = $("#table-row-num").val();
          if(data!=0){
          $("#example").tableHTMLExport({
          	type:'json',
          	filename:'sample.json'
          });
          }else{
          	alert("enter number and click submit to generate");
                    $("#table-row-num").focus();
                    $("#btn_create").prop('disabled', true);
                    return;
          }
         });

         $('#btn_csv').on('click',function(event){
          event.preventDefault();
          var data = $("#table-row-num").val();
          if(data!=0){
          $("#example").tableHTMLExport(
          	{type:'csv',
          	filename:'excel_report.csv'
          });
           }
           else{
          	alert("enter number and click submit to generate");
                    $("#table-row-num").focus();
                    return;
          }
         });

         $('#btn_pdf').on('click',function(event){
          event.preventDefault();
          var data = $("#table-row-num").val();
          if(data!=0){
          $("#example").tableHTMLExport({
          	type:'pdf',
          	filename:'pdf_report.pdf'
          });
          }	
          else{
          	alert("enter number and click submit to generate");
                    $("#table-row-num").focus();
                    return;
          }
         });
});