<!DOCTYPE html>
<html>
<head>
    <title>Laravel 8|7 Datatables Tutorial</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"/>
    <link href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css" rel="stylesheet">
</head>
<body>
    
<div class="container mt-5">
    <h2 class="mb-4">ECOVIEW</h2>
    <table class="table table-bordered yajra-datatable-eco">
        <thead>
            <tr>
                <th>No</th>
                <th>ID</th>
                <th>Account Name</th>
                <th>Requester Name</th>
                <th>Cabang</th>
                <th>Tanggal Pengajuan</th>
                <th>Status</th>
                <th>Attachment Requester</th>
            </tr>
        </thead>
        <tbody>
            {{-- @foreach ($applications as $apps)
            <tr>
                <td scope="row">{{$loop -> iteration}}</td>
                <td scope="row">{{$apps -> CustomerName}}</td>
                <td>{{$apps -> name}}</td>
                <td>{{$apps -> Address}}</td>
                <td>{{$apps -> City}}</td>
                <td>{{$apps -> PostalCode}}</td>
                <td>{{$apps -> Country}}</td>
                <td>
                    <a class="btn btn-success" href="{{$req-> link}}">Enter</a>
                </td>
              </tr>
            @endforeach --}}
        </tbody>
    </table>
</div>
 
</body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
<script type="text/javascript">
    $(function () {
      
      var table = $('.yajra-datatable-eco').DataTable({
          processing: true,
          serverSide: true,
          ajax: "{{ route('app_app.list') }}",
          columns: [
            {data: 'DT_RowIndex', name: 'DT_RowIndex'},
            {data: 'id', name: 'id'},
            {data: 'createdBy', name: 'createdBy'},
            {data: 'c_namaRequester', name: 'c_namaRequester'},
            {data: 'createdByName', name: 'createdByName'},
            {data: 'c_tanggalPengajuan', name: 'c_tanggalPengajuan'},
            {data: 'c_requestStatus', name: 'c_requestStatus'},
            {data: 'c_attachmentPengirim', name: 'c_attachmentPengirim'},
            //   {
            //       data: 'action', 
            //       name: 'action', 
            //       orderable: true, 
            //       searchable: true
            //   },
          ]
      });
      
    });
  </script>

</html>