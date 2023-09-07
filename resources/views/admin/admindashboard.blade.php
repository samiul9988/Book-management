@extends('admin.layouts.master')
@section('content')
    <div class="row">

        <div class="col-12">
            <div class="card">


                <div class="card-header">
                    <h3 class="card-title">Total books</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example2" class="table table-bordered table-hover">
                        <thead>
                        <tr>
                            <th>Sno</th>
                            <th>Image</th>
                            <th>Book name</th>
                            <th>Page count</th>
                            <th>Book price</th>
                            <th>Publish</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($books as $book)
                           <tr>
                               <td>{{$book->id}}</td>
                               <td><img src="{{ asset($book->book_icon) }}" alt="Book Image"></td>
                               <td>{{$book->book_name}}</td>
                               <td>{{$book->page_count}}</td>
                               <td>{{$book->book_price}}</td>
                               <td>{{$book->is_publish}}</td>
                               <td>{{$book->book_name}}</td>
                               <td><a href=""> <button type="button" class="btn btn-info">    <i class="bi bi-pencil"></i></button>
                                   </a>
                                   <a href=""><button type="button" class="btn btn-info"> <i class="fas fa-file"></i> </button>
                                   </a>
                               </td>
                           </tr>
                        @endforeach
                        </tbody>

                    </table>
                </div>
                <!-- /.card-body -->
            </div>
        </div>









    </div>
    <!-- /.row (main row) -->
@endsection
