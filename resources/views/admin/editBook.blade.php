@extends('admin/layouts/master')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-primary">
                    <div class="card-header">

                        <h3 class="card-title">Add book</h3>
                    </div>
                    <form method="POST" enctype="multipart/form-data"  action="{{ route('books.update', $book->id) }}">
                        @csrf
                        @method('PATCH')
                        <div class="card-body row">
                            <div class="form-group col-md-6">
                                <label for="exampleInputEmail1">Book name</label>
                                <input type="text" class="form-control" id="book_name" name="book_name" placeholder="Enter Book Name" value="{{ $book->book_name }}">
                                <span>{{$errors->first('book_name')}}</span>
                            </div>
                            <div class="form-group col-md-3">
                                <label for="exampleInputPassword1">Book Price</label>
                                <input type="text" class="form-control" onkeydown="validateAmount(event);" id="book_price" name="book_price" placeholder="Enter Book Price" value="{{ $book->book_price }}">
                                <span>{{$errors->first('book_price')}}</span>
                            </div>

                            <div class="form-group col-md-3">
                                <label for="exampleInputPassword1">Number of pages</label>
                                <input type="text" onkeydown="validateAmount(event);" class="form-control" id="page_count" name="page_count" placeholder="Enter Book page count" value="{{ $book->page_count }}">
                                <span>{{$errors->first('page_count')}}</span>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="exampleInputPassword1">Book publishers</label>
                                <input type="text" class="form-control" id="book_publishers" name="book_publisher" placeholder="Enter Publisher Name" value="{{ $book->book_publisher }}">
                                <span>{{$errors->first('book_publisher')}}</span>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="exampleInputPassword1">Book publish</label>
                                <select class="form-control" value="{{ $book->is_publish }}" name="is_publish" id="is_publish">
                                    <option value="0">NO</option>
                                    <option value="1">YES</option>
                                </select>
                                <span>{{$errors->first('is_publish')}}</span>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="exampleInputFile">Book Image</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="book_icon" name="book_icon"  accept="image/*" value="{{ $book->book_icon }}">
                                        <span>{{$errors->first('book_icon')}}</span>
                                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                    </div>
                                </div>
                                <label id="book_icon-error" class="error" for="book_icon"></label>
                            </div>
                            <div class="form-group col-md-3">
                                <label for="exampleInputFile"> Title Sound</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="title_sound" name="title_sound" accept="audio/*"  value="{{ $book->title_sound }}">
                                        <span>{{$errors->first('title_sound')}}</span>
                                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                    </div>
                                </div>
                                <label id="title_sound-error" class="error" for="title_sound"></label>
                            </div>
                            <div class="form-group col-md-3">
                                <label for="exampleInputFile">Work sheet</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="worksheet" name="worksheet" accept="application/pdf"  value="{{ $book->worksheet }}">
                                        <span>{{$errors->first('worksheet')}}</span>
                                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                    </div>
                                </div>
                                <label id="worksheet-error" class="error" for="worksheet"></label>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="exampleInputPassword1">Book Description</label>
                                <textarea class="form-control" name="description" placeholder="Enter Book Description" id="description">{{ $book->description }}</textarea>
                                <span>{{$errors->first('description')}}</span>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="exampleInputPassword1">Book Title</label>
                                <textarea id="book_title" name="book_title" placeholder="Enter Book Name">{{ $book->book_title }}</textarea>
                                <span>{{$errors->first('book_title')}}</span>
                            </div>


                        </div>
                        <div class="card-footer">
                            <button type="submit" name="submit" value="0" class="btn btn-primary">Submit</button>
                            <button type="submit" name="submit" value="1" class="btn btn-primary">Save In Draft</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

