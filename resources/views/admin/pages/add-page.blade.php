@extends('admin/layouts/master')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <a href="http://waglz.aeologic.in/manageBook">   <h5> <i class="nav-icon fas fa-arrow-left right"></i> Back</h5></a>

                    <h1>Page Add Form</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">


                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Add page</h3>
                        </div>
                        <form method="POST"  id="add-page1" name="add-page1" enctype="multipart/form-data" action="{{ route('bookpages.store') }}" >
                           @csrf
                            <div class="card-body row">
                                <div class="form-group col-md-6">
                                    <label for="exampleInputEmail1">Book name</label>
                                    <select class="form-control" name="book_name" id="book_name">
                                        <option value="1">Playing With Vowels - First Sounds</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="exampleInputPassword1">Header</label>
                                    <input type="text" class="form-control" id="title" name="title" placeholder="Enter Page Title" value="">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="exampleInputFile"> Page title Sound - 1</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="page_title_sound" name="page_title_sound" accept="audio/*"  value="">
                                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                        </div>
                                    </div>
                                    <label id="page_title_sound-error" class="error" for="page_title_sound"></label>
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="exampleInputFile"> Page title Sound -2 </label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="page_title_sound_2" name="page_title_sound_2" accept="audio/*"  value="">
                                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                        </div>
                                    </div>
                                    <label id="page_title_sound-error" class="error" for="page_title_sound_2"></label>
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="exampleInputFile"> Page title Sound - 3</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="page_title_sound_3" name="page_title_sound_3" accept="audio/*"  value="">
                                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                        </div>
                                    </div>
                                    <label id="page_title_sound-error" class="error" for="page_title_sound_3"></label>
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="exampleInputPassword1">Footer - 1</label>
                                    <textarea class="ckeditor" height="100px" id="page_label" placeholder="Enter the Description" name="page_label" height="100px">
                                        <font face="Filson Pro"><span style="font-size: 22px;"><i>Footer-1</i></span></font>
                                        </textarea>
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="exampleInputFile"> Footer Sound - 1</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="page_label_sound_1" name="page_label_sound_1" accept="audio/*"  value="">
                                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                        </div>
                                    </div>
                                    <label id="page_label_sound_1-error" class="error" for="page_label_sound_1"></label>
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="exampleInputPassword1">Footer - 2</label>
                                    <textarea class="ckeditor" height="100px" id="page_label_2" placeholder="Enter the Description" name="page_label_2" height="100px">
                                        <font face="Filson Pro"><span style="font-size: 22px;"><i>Footer-1</i></span></font>
                                        </textarea>                                                                            </div>
                                <div class="form-group col-md-3">
                                    <label for="exampleInputFile"> Footer Sound - 2</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="page_label_sound_2" name="page_label_sound_2" accept="audio/*"  value="">
                                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                        </div>
                                    </div>
                                    <label id="page_label_sound_2-error" class="error" for="page_label_sound_2"></label>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="exampleInputPassword1">Page Number</label>
                                    <input type="text" class="form-control" onkeydown="validateAmount(event);" id="page_number" name="page_number" placeholder="Enter book page number" value="">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="exampleInputPassword1">page background</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="bg_image"  name="bg_image"  accept="image/*" />
                                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                        </div>
                                    </div>
                                    <label id="bg_image-error" class="error" for="bg_image"></label>
                                </div>
                                <!-- Left top section start-->
                                <div class="form-group col-md-6">
                                    <label for="exampleInputPassword1">Left top text</label>
                                    <input type="text" class="form-control" id="lt_text" name="lt_text"  value="" placeholder="Enter letf top text">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="exampleInputPassword1">Right top text</label>
                                    <input type="text" class="form-control" id="rt_text" name="rt_text" value="" placeholder="Enter right top text">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="exampleInputPassword1">Left top icon</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="lt_icon" name ="lt_icon" accept="image/*">
                                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                        </div>
                                    </div>
                                    <label id="lt_icon-error" class="error" for="lt_icon"></label>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="exampleInputPassword1">Right top icon</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="rt_icon" name="rt_icon"   accept="image/*">
                                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                        </div>
                                    </div>
                                    <label id="rt_icon-error" class="error" for="rt_icon"></label>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="exampleInputPassword1">Left top sound</label>
                                    <select id="lt_sound" name="lt_sound" class="form-control">
                                        <option value=''>Please select sound</option>
                                        <option value='Uh_oh.mp3'  >Uh-oh</option>
                                        <option value='Uh_huh.mp3' >Uh-huh</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="exampleInputPassword1">Right top sound</label>
                                    <select id="rt_sound" name="rt_sound" class="form-control">
                                        <option value=''>Please select sound</option>
                                        <option value='Uh_oh.mp3'  >Uh-oh</option>
                                        <option value='Uh_huh.mp3' >Uh-huh</option>
                                    </select>

                                </div>
                                <div class="form-group col-md-6">
                                    <label for="exampleInputPassword1">Left bottom text</label>
                                    <input type="text" class="form-control" id="lb_text" name="lb_text" value="" placeholder="Enter left bottom text">

                                </div>

                                <div class="form-group col-md-6">
                                    <label for="exampleInputPassword1">Right bottom text</label>
                                    <input type="text" class="form-control" id="rb_text" name="rb_text" value="" placeholder="Enter right bottom text">

                                </div>


                                <div class="form-group col-md-6">
                                    <label for="exampleInputPassword1">Left bottom icon</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="lb_icon" name="lb_icon" value="" accept="image/*" >
                                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                        </div>

                                    </div>
                                    <label id="lb_icon-error" class="error" for="lb_icon"></label>



                                </div>
                                <div class="form-group col-md-6">
                                    <label for="exampleInputPassword1">Right bottom icon</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="rb_icon" name="rb_icon"  value="" accept="image/*">
                                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                        </div>

                                    </div>
                                    <label id="rb_icon-error" class="error" for="rb_icon"></label>


                                </div>

                                <div class="form-group col-md-6">
                                    <label for="exampleInputPassword1">Left bottom sound</label>
                                    <select id="lb_sound" name="lb_sound" class="form-control">
                                        <option value=''>Please select sound</option>
                                        <option value='Uh_oh.mp3'  >Uh-oh</option>
                                        <option value='Uh_huh.mp3' >Uh-huh</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="exampleInputPassword1">Right bottom sound</label>
                                    <select id="rb_sound" name="rb_sound" class="form-control">
                                        <option value=''>Please select sound</option>
                                        <option value='Uh_oh.mp3'  >Uh-oh</option>
                                        <option value='Uh_huh.mp3' >Uh-huh</option>
                                    </select>

                                </div>

                                <div class="form-group col-md-6">
                                </div>


                                <div class="col-md-9">
                                    <div class="">
                                        <label> Content </label>
                                        <textarea class="ckeditor" height="100px" id="page_content" placeholder="Enter the Description" name="page_content" height="100px">

                                            </textarea>
                                        <span class="text-danger"></span>

                                    </div>
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="exampleInputPassword1">Page Title</label>
                                    <textarea id="page_title" value="" name="page_title" placeholder="Enter Book Name">



                                               </textarea>

                                </div>

                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" name="submit" value="submit" class="btn btn-primary">Submit</button>
                                <button type="submit" name="save_in_draft" value="save_in_draft" class="btn btn-primary">Save In Draft</button>                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
