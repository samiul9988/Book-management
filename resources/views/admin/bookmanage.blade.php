@extends('admin.layouts.master')
@section('content')
    <div class="row">

        <div class="col-12">
            <div class="card">

                <div class="card-header">

                    <h3 class="card-title"><a href="{{route('dashboard')}}"><button type="button" class="btn btn-primary btn-block" style="background-color:#ff9560de; border-color:#ff9560de;">ADD BOOK</button></h3>
                    </a>
                </div>
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
                                <td>
                                    <a href="{{ route('books.edit', $book->id) }}">
                                        <button type="button" class="btn btn-outline-info">Edit</button>
                                    </a>
                                    <a href="">
                                        <button type="button" class="btn btn-outline-primary">Add Page</button>
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
    <div class="row" bis_skin_checked="1"><div class="col-sm-12 col-md-5" bis_skin_checked="1"><div class="dataTables_info" id="example2_info" role="status" aria-live="polite" bis_skin_checked="1">Showing 1 to 7 of 7 entries</div></div><div class="col-sm-12 col-md-7" bis_skin_checked="1"><div class="dataTables_paginate paging_simple_numbers" id="example2_paginate" bis_skin_checked="1"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="example2_previous"><a href="#" aria-controls="example2" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li><li class="paginate_button page-item active"><a href="#" aria-controls="example2" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item next disabled" id="example2_next"><a href="#" aria-controls="example2" data-dt-idx="2" tabindex="0" class="page-link">Next</a></li></ul></div></div></div>
    <!-- /.row (main row) -->
@endsection
