<?php
use App\Models\Model1;
use App\Http\Controllers\students;
$students=Model1::all();
?>
<link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<link rel="stylesheet"
href="http://cdn.datatables.net/1.10.2/css/jquery.dataTables.min.css"></style>
<script type="text/javascript"
src="http://cdn.datatables.net/1.10.2/js/jquery.dataTables.min.js"></script>
<script type="text/javascript"
src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="javascript/data.js"></script>
<h1><center>Students Table</center></h1>
<table id="myTable"  class="table table-striped table-bordered">
        <thead>
          <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Languages</th>
            <th>Gender</th>
            <th>Phone</th>
            <th>Description</th>
            <th>Country</th>
         </tr>
        </thead>
        <tbody>
        </tbody>
</table>
