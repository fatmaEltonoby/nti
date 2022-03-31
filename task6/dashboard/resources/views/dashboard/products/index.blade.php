@extends('dashboard.layouts.app')
@section('title','All products')
@section('content')

<div class="col-12">
  @if (session('sucess'))
  <div class="alert alert-success text-center">
      {{ session('sucess') }}
  </div>
@endif
</div>
<div class="col-12">
    <table id="datatable" class="table table-bordered table-striped">
    
        <thead>
        <tr>
          <th>Id</th>
          <th>name_en</th>
          {{-- <th>name_ar</th> --}}
          <th>code</th>
          <th>price</th>
          <th>quantity</th>
          <th>staus</th>
          <th>creation date</th>
          <th>operations</th>
          
        </tr>
        </thead>
        <tbody>
            @foreach ($products as  $product )
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$product->name_en}} </td>
                {{-- <td>{{$product->name_ar}}</td> --}}
                <td>{{$product->code}}</td>
                <td>  {{ number_format ($product->price)}} EGP</td>
                <td @class([
                  'text-danger'=>$product->quantity == 0,
                  'text-warning'=> $product->quantity >0 && $product->quantity <= 5 ,
                  'text-success'=>$product->quantity >5 
                  
                  ])>
                  {{$product->quantity}}</td>
                <td 
               >
                  <form action="{{route('dashboard.products.toggle.status' , [ 'id'=> $product->id])}}" method="post">
                    @csrf
                    @method('PATCH')
                    <button  @class([ 
                      'btn',
                      'btn-sm',
                      'rounded',
                     'btn-outline-danger'=>  $product->status ,
                     'btn-outline-success'=> !$product->status ]) 
                     name="status"
                     value="{{ $product->status}}">
                      {{$product->status == 1 ? 'Not active' :'Active'}}
                    </button>
                  </form>

                </td>
                <td>{{$product->created_at}}</td>
                <td>
                    <a  class="btn btn-outline-primary btn-sm rounded" href="{{route('dashboard.products.edit',['id'=>$product->id])}}"> Edit</a>
                    <form action="{{route('dashboard.products.destroy',['id'=>$product->id])}}" method="post" class="d-inline">
                      @csrf
                      @method('DELETE')
                      <button class="btn btn-outline-danger btn-sm rounded">Delete</button>
                      
                    </form>
                    
                </td>
              </tr>
            @endforeach
       
        </tbody>
      </table>


@section('css')
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('assets/plugins/fontawesome-free/css/all.min.css')}}">
    <!-- DataTables -->
    <link rel="stylesheet" href="{{asset('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="../../dist/css/adminlte.min.css')}}">
@endsection

</div>

@endsection


@section('js')
    <script src="{{asset('assets/plugins/jquery/jquery.min.js')}}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <!-- DataTables  & Plugins -->
    <script src="{{asset('assets/plugins/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{asset('assets/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{asset('assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
    <script src="{{asset('assets/plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
    <script src="{{asset('assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
    <script src="{{asset('assets/plugins/jszip/jszip.min.js')}}"></script>
    <script src="{{asset('assets/plugins/pdfmake/pdfmake.min.js')}}"></script>
    <script src="{{asset('assets/plugins/pdfmake/vfs_fonts.js')}}"></script>
    <script src="{{asset('assets/plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
    <script src="{{asset('assets/plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
    <script src="{{asset('assets/plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>
    <!-- AdminLTE App -->
    <script src="../../dist/js/adminlte.min.js')}}"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../../dist/js/demo.js')}}"></script>
    <!-- Page specific script -->
<script>
    $(function () {
      $("#datatable").DataTable({
        "responsive": true, "lengthChange": false, "autoWidth": false,
        "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
      }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
      
      
    });
  </script>
@endsection
    
