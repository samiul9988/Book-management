@extends('admin/layouts/master')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-primary">
                    <div class="card-header">

                        <h3 class="card-title">Add book</h3>
                    </div>
                    <form method="POST" enctype="multipart/form-data"  action="{{ route('insertBooksForm') }}">
                        @csrf
                        <div class="card-body row">
                            <div class="form-group col-md-6">
                                <label for="exampleInputEmail1">Book name</label>
                                <input type="text" class="form-control" id="book_name" name="book_name" placeholder="Enter Book Name" value="">
                            </div>
                            <div class="form-group col-md-3">
                                <label for="exampleInputPassword1">Book Price</label>
                                <input type="text" class="form-control" onkeydown="validateAmount(event);" id="book_price" name="book_price" placeholder="Enter Book Price" value="">
                            </div>

                            <div class="form-group col-md-3">
                                <label for="exampleInputPassword1">Number of pages</label>
                                <input type="text" onkeydown="validateAmount(event);" class="form-control" id="page_count" name="page_count" placeholder="Enter Book page count" value="">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="exampleInputPassword1">Book publishers</label>
                                <input type="text" class="form-control" id="book_publishers" name="book_publishers" placeholder="Enter Publisher Name" value="">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="exampleInputPassword1">Book publish</label>
                                <select class="form-control" name="is_publish" id="is_publish">
                                    <option value="0">NO</option>
                                    <option value="1">YES</option>
                                </select>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="exampleInputFile">Book Image</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="book_icon" name="book_icon"  accept="image/*" value="">
                                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                    </div>
                                </div>
                                <label id="book_icon-error" class="error" for="book_icon"></label>
                            </div>
                            <div class="form-group col-md-3">
                                <label for="exampleInputFile"> Title Sound</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="title_sound" name="title_sound" accept="audio/*"  value="">
                                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                    </div>
                                </div>
                                <label id="title_sound-error" class="error" for="title_sound"></label>
                            </div>
                            <div class="form-group col-md-3">
                                <label for="exampleInputFile">Work sheet</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="worksheet" name="worksheet" accept="application/pdf"  value="">
                                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                    </div>
                                </div>
                                <label id="worksheet-error" class="error" for="worksheet"></label>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="exampleInputPassword1">Book Description</label>
                                <textarea class="form-control" name="description" placeholder="Enter Book Description" id="description"></textarea>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="exampleInputPassword1">Book Title</label>
                                <textarea id="book_title" value="" name="book_title" placeholder="Enter Book Name"></textarea>
                            </div>


                        </div>
                        <div class="card-footer">
                            <button type="submit" name="submit" value="submit" class="btn btn-primary">Submit</button>
                            <button type="submit" name="save_in_draft" value="save_in_draft" class="btn btn-primary">Save In Draft</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
