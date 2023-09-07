@extends('admin.layouts.master')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-primary">
                    <div class="card-header">

                        <h3 class="card-title">Edit book</h3>
                    </div>
                    <form method="POST" id="edit-book1" name="edit-book1" enctype="multipart/form-data"  action='http://waglz.aeologic.in/updateBooks'>
                        <input type="hidden" name="_token" value="EOWth2ouMWoI4R0v1lPBvJdfKdzAkgnqDku5gKOs">


                        <div class="card-body row">

                            <div class="form-group col-md-6">
                                <label for="exampleInputEmail1">Book name</label>
                                <input type="text" class="form-control" id="book_name" value="" name="book_name" placeholder="Enter Book Name">
                            </div>

                            <div class="form-group col-md-3">
                                <label for="exampleInputPassword1">Book Price</label>
                                <input type="text" class="form-control" onkeydown="validateAmount(event);" id="book_price" value="" name="book_price" placeholder="Enter Book Name">


                            </div>

                            <div class="form-group col-md-3">
                                <label for="exampleInputPassword1">Number of pages</label>
                                <input type="text" class="form-control" onkeydown="validateAmount(event);" id="page_count" name="page_count" value="" placeholder="Enter Book page count">

                            </div>

                            <div class="form-group col-md-3">
                                <label for="exampleInputPassword1">Book publishers</label>
                                <input type="text" class="form-control" id="book_publishers" name="book_publishers" value=" " placeholder="Enter Publisher Name">

                            </div>

                            <div class="form-group col-md-3">
                                <label for="exampleInputPassword1">Book publish</label>
                                <select class="form-control" name="is_publish" id="is_publish">
                                    <option value="0" >NO</option>
                                    <option value="1"  selected

                                    >YES</option>
                                </select>
                            </div>
                            <div class="form-group col-md-2">
                                <img src="http://waglz.aeologic.in/assets/icon-book/2022121020547757Cover1_Draft2.jpg" width="60px"; height="70px";>
                            </div>

                            <div class="form-group col-md-4">
                                <label for="exampleInputFile">Book Image</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="book_icon" name="book_icon" accept="image/*">
                                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                    </div>
                                </div>
                                <label id="book_icon-error" class="error" for="book_icon"></label>

                            </div>

                            <div class="form-group col-md-3">
                                <label for="exampleInputFile">Work sheet</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="worksheet" name="worksheet"  accept="application/pdf">
                                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>

                                    </div>
                                </div>
                                <a href="http://waglz.aeologic.in/assets/book-worksheet/sample.pdf" target="_blank">Privious Worksheet link</a>


                                <input type="hidden" class="form-control" id="id" value="1" name="id" placeholder="Enter Book Name">

                            </div>
                            <div class="form-group col-md-3">
                                <label for="exampleInputPassword1">Status</label>
                                <select class="form-control" name="status" id="status">
                                    <option value="2" >Deactive</option>
                                    <option value="1"  selected

                                    >Active</option>
                                </select>

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
                                <label for="exampleInputFile"> Title Sound</label>

                                <audio controls>
                                    <source src="http://waglz.aeologic.in/assets/icon-audio/Uh_huh.mp3" type="audio/ogg">
                                    <source src="http://waglz.aeologic.in/assets/icon-audio/Uh_huh.mp3" type="audio/mpeg">
                                    Your browser does not support the audio element.
                                </audio>
                            </div>





                            <div class="form-group col-md-6">
                                <label for="exampleInputPassword1">Book Description</label>
                                <textarea class="form-control" name="description" placeholder="Enter Book Description" id="description">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#039;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</textarea>
                            </div>



                            <div class="form-group col-md-6">
                                <label for="exampleInputPassword1">Book Title</label>
                                <textarea  id="book_title" value="" name="book_title" placeholder="Enter Book Name">&lt;p&gt;&lt;br&gt;&lt;/p&gt;</textarea>

                            </div>



                        </div>
                        <div class="card-footer">
                            <a href="http://waglz.aeologic.in/dashboard"> <button type="button" class="btn btn-info">Back</button></a>
                            <button type="submit" name="save_in_draft" value="save_in_draft" class="btn btn-primary">Save In Draft</button>

                            <button type="submit" name="submit" value="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
@endsection
