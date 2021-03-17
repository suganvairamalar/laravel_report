<!DOCTYPE html>
<html lang="en">
    <head>
        <title>EXPORT/PDF DETAILS</title>

        <script type="text/javascript" src="{{URL::asset('js/jqueryv3.min.js')}}"></script> 
        <script type="text/javascript" src="{{URL::asset('js/bootstrapv3.min.js')}}"></script>
        <script src="{{URL::asset('js/slim.min.js')}}" 
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="{{URL::asset('js/jspdf.min.js')}}"></script>
        <script src="{{URL::asset('js/jspdf.plugin.autotable.min.js')}}"></script>
        <script src="{{URL::asset('js/tableHTMLExport.js')}}"></script>
        <link rel="stylesheet" href="{{URL::asset('css/bootstrapv3.min.css')}}" type="text/css"/>        
         <!-- CRUD JS -->
        <script type="text/javascript" src="{{URL::asset('js/forms/laravel_report.js')}}"></script>

        <style>
           body {
      font-size: 14pt;
      font-family: Cambria;
      padding : 10px;
      }
      #example {
      border: 1px solid black;
      }
      th {
      border: 1px solid black;
      padding: 5px;
      background-color:grey;
      color: white;
      }
      td {
      border: 1px solid black;
      padding: 5px;
      }
      input {
      font-size: 14pt;
      font-family: Cambria;
      }
      button{
      font-size: 14pt;
      font-family: Cambria;
      }
            
        </style>
    </head>

    <body>
        <div class="container">
            <div class="row">
            <div class="col-lg-12">
                        <div class="pull-left">
                             <H!>GENERATE EXCEL/PDF REPORT</H1>
                        </div>
                        <div class="pull-right">
                            <a href="{{route('home')}}" class="btn btn-info">BACK</a>
                        </div>
                    </div>
            </div>           
            @yield('content')
        </div>
    </body>
</html>