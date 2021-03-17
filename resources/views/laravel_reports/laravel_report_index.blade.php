@extends('layouts.laravel_report_app')
@section('content')
 <table class="table table-striped table-bordered" id="example">
            <thead class="thead-dark">
               <th scope="col" align="center">COLUMN1</th>
               <th scope="col" align="center">COLUMN2</th>
               <th scope="col" align="center">COLUMN3</th>
               <th scope="col" align="center">COLUMN4</th>
               <th scope="col" align="center">COLUMN5</th>
            </thead>
            <tbody>               
               <tr>
                  <div class="form-group">
                     <label class="control-label1 col-md-2 col-lg-2 col-xs-2 col-sm-2">NO OF CODE</label>
                     <div class="col-md-4 col-lg-4 col-xs-4 col-sm-4">
                        <input type="number" id="table-row-num" value="" placeholder="Enter Number(s) only">
                     </div>
                     <div class="col-md-4 col-lg-4 col-xs-4 col-sm-4">
                        <button id="btn_create" class="btn btn-success">Submit</button>
                        <button id="btn_refresh" class="btn btn-primary">Refresh</button>
                     </div>
                  </div>
               </tr>
               <tr>
                  <br>
                  <p>enter number and click submit button to generate reports.again want to generate report, you have to click refresh button and enter number and click submit button</p>
               </tr>
            </tbody>
         </table>
         <p class="lead">
           <!--  <button id="btn_json" class="btn btn-primary">TO JSON</button> -->
            <button id="btn_csv" class="btn btn-info">TO CSV</button>
            <button id="btn_pdf" class="btn btn-danger">TO PDF</button>
         </p>
@endsection