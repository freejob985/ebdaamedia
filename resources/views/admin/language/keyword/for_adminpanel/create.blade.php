@extends('layouts.admin.master')

@section('content')

    <!-- Include Alert Blade -->
    @include('admin.alert.alert')

    <div class="row">
        <div class="col-xl-12 height-card box-margin">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">{{ __('content.for_admin_panel') }}</h4>
                    <ul class="nav nav-pills navtab-bg nav-justified">
                        <li class="nav-item">
                            <a href="#content1" data-toggle="tab" aria-expanded="true" class="nav-link active mb-3">
                                {{ __('content.content_group') }} 1
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#content2" data-toggle="tab" aria-expanded="false" class="nav-link mb-3">
                                {{ __('content.content_group') }} 2
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#content3" data-toggle="tab" aria-expanded="false" class="nav-link mb-3">
                                {{ __('content.content_group') }} 3
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#content4" data-toggle="tab" aria-expanded="false" class="nav-link mb-3">
                                {{ __('content.content_group') }} 4
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#content5" data-toggle="tab" aria-expanded="false" class="nav-link mb-3">
                                {{ __('content.content_group') }} 5
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#content6" data-toggle="tab" aria-expanded="false" class="nav-link mb-3">
                                {{ __('content.content_group') }} 6
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane  show active" id="content1">
                            @if (isset($content_one_group_keyword))
                                <form action="{{ route('content-one-group-keyword.update_content_one_group_keyword', $content_one_group_keyword->id) }}" method="POST">
                                    @method('PUT')
                                    @csrf
                                    <input id="language_id" name="language_id" type="hidden" value="{{ $id }}">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="dashboard">Dashboard <span class="text-red">*</span></label>
                                                <input type="text" name="dashboard" class="form-control" id="dashboard" value="{{ $content_one_group_keyword->dashboard }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="home">Home <span class="text-red">*</span></label>
                                                <input type="text" name="home" class="form-control" id="home" value="{{ $content_one_group_keyword->home }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="fixed_content">Fixed Content <span class="text-red">*</span></label>
                                                <input type="text" name="fixed_content" class="form-control" id="fixed_content" value="{{ $content_one_group_keyword->fixed_content }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="title">Title <span class="text-red">*</span></label>
                                                <input type="text" name="title" class="form-control" id="title" value="{{ $content_one_group_keyword->title }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="desc">Description <span class="text-red">*</span></label>
                                                <input type="text" name="desc" class="form-control" id="desc" value="{{ $content_one_group_keyword->desc }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="btn_name">Button Name <span class="text-red">*</span></label>
                                                <input type="text" name="btn_name" class="form-control" id="btn_name" value="{{ $content_one_group_keyword->btn_name }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="btn_link">Button Link <span class="text-red">*</span></label>
                                                <input type="text" name="btn_link" class="form-control" id="btn_link" value="{{ $content_one_group_keyword->btn_link }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="submit">Submit <span class="text-red">*</span></label>
                                                <input type="text" name="submit" class="form-control" id="submit" value="{{ $content_one_group_keyword->submit }}" required>
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="solutions">Solutions <span class="text-red">*</span></label>
                                                <input type="text" name="solutions" class="form-control" id="solutions" value="{{ $content_one_group_keyword->solutions }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="section_title_and_desc">Section Title/Description <span class="text-red">*</span></label>
                                                <input type="text" name="section_title_and_desc" class="form-control" id="section_title_and_desc" value="{{ $content_one_group_keyword->section_title_and_desc }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="top_title">Top Title <span class="text-red">*</span></label>
                                                <input type="text" name="top_title" class="form-control" id="top_title" value="{{ $content_one_group_keyword->top_title }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="add_solution">Add Solution <span class="text-red">*</span></label>
                                                <input type="text" name="add_solution" class="form-control" id="add_solution" value="{{ $content_one_group_keyword->add_solution }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="add_new">Add New <span class="text-red">*</span></label>
                                                <input type="text" name="add_new" class="form-control" id="add_new" value="{{ $content_one_group_keyword->add_new }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="icon">Icon <span class="text-red">*</span></label>
                                                <input type="text" name="icon" class="form-control" id="icon" value="{{ $content_one_group_keyword->icon }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="order">Order <span class="text-red">*</span></label>
                                                <input type="text" name="order" class="form-control" id="order" value="{{ $content_one_group_keyword->order }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="action">Action <span class="text-red">*</span></label>
                                                <input type="text" name="action" class="form-control" id="action" value="{{ $content_one_group_keyword->action }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="edit_solution">Edit Solution <span class="text-red">*</span></label>
                                                <input type="text" name="edit_solution" class="form-control" id="edit_solution" value="{{ $content_one_group_keyword->edit_solution }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="about">About <span class="text-red">*</span></label>
                                                <input type="text" name="about" class="form-control" id="about" value="{{ $content_one_group_keyword->about }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="video_link">Video Link <span class="text-red">*</span></label>
                                                <input type="text" name="video_link" class="form-control" id="video_link" value="{{ $content_one_group_keyword->video_link }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="image">Image <span class="text-red">*</span></label>
                                                <input type="text" name="image" class="form-control" id="image" value="{{ $content_one_group_keyword->image }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="size">size <span class="text-red">*</span></label>
                                                <input type="text" name="size" class="form-control" id="size" value="{{ $content_one_group_keyword->size }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="recommended_size">You do not have to use the recommended sizes. However, please use the recommended sizes for your site design to look its best. <span class="text-red">*</span></label>
                                                <input type="text" name="recommended_size" class="form-control" id="recommended_size" value="{{ $content_one_group_keyword->recommended_size }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="created_successfully">Created Successfully. <span class="text-red">*</span></label>
                                                <input type="text" name="created_successfully" class="form-control" id="created_successfully" value="{{ $content_one_group_keyword->created_successfully }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="updated_successfully">Updated Successfully. <span class="text-red">*</span></label>
                                                <input type="text" name="updated_successfully" class="form-control" id="updated_successfully" value="{{ $content_one_group_keyword->updated_successfully }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="deleted_successfully">Deleted Successfully. <span class="text-red">*</span></label>
                                                <input type="text" name="deleted_successfully" class="form-control" id="deleted_successfully" value="{{ $content_one_group_keyword->deleted_successfully }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="current_image">Current Image <span class="text-red">*</span></label>
                                                <input type="text" name="current_image" class="form-control" id="current_image" value="{{ $content_one_group_keyword->current_image }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="not_yet_created">Not yet created. <span class="text-red">*</span></label>
                                                <input type="text" name="not_yet_created" class="form-control" id="not_yet_created" value="{{ $content_one_group_keyword->not_yet_created }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="delete">Delete <span class="text-red">*</span></label>
                                                <input type="text" name="delete" class="form-control" id="delete" value="{{ $content_one_group_keyword->delete }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="close">Close <span class="text-red">*</span></label>
                                                <input type="text" name="close" class="form-control" id="close" value="{{ $content_one_group_keyword->close }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="you_wont_be_able_to_revert_this">You wont be able to revert this! <span class="text-red">*</span></label>
                                                <input type="text" name="you_wont_be_able_to_revert_this" class="form-control" id="you_wont_be_able_to_revert_this" value="{{ $content_one_group_keyword->you_wont_be_able_to_revert_this }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="cancel">Cancel <span class="text-red">*</span></label>
                                                <input type="text" name="cancel" class="form-control" id="cancel" value="{{ $content_one_group_keyword->cancel }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="yes_delete_it">Yes, delete it! <span class="text-red">*</span></label>
                                                <input type="text" name="yes_delete_it" class="form-control" id="yes_delete_it" value="{{ $content_one_group_keyword->yes_delete_it }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <button type="submit" class="btn btn-primary mr-2">{{ __('content.submit') }}</button>
                                        </div>
                                    </div>
                                </form>
                            @else
                                <form action="{{ route('content-one-group-keyword.store_content_one_group_keyword') }}" method="POST">
                                    @csrf
                                    <input id="language_id" name="language_id" type="hidden" value="{{ $id }}">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="dashboard">Dashboard <span class="text-red">*</span></label>
                                                <input type="text" name="dashboard" class="form-control" id="dashboard"  required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="home">Home <span class="text-red">*</span></label>
                                                <input type="text" name="home" class="form-control" id="home" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="fixed_content">Fixed Content <span class="text-red">*</span></label>
                                                <input type="text" name="fixed_content" class="form-control" id="fixed_content" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="title">Title <span class="text-red">*</span></label>
                                                <input type="text" name="title" class="form-control" id="title" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="desc">Description <span class="text-red">*</span></label>
                                                <input type="text" name="desc" class="form-control" id="desc" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="btn_name">Button Name <span class="text-red">*</span></label>
                                                <input type="text" name="btn_name" class="form-control" id="btn_name" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="btn_link">Button Link <span class="text-red">*</span></label>
                                                <input type="text" name="btn_link" class="form-control" id="btn_link" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="submit">Submit <span class="text-red">*</span></label>
                                                <input type="text" name="submit" class="form-control" id="submit" required>
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="solutions">Solutions <span class="text-red">*</span></label>
                                                <input type="text" name="solutions" class="form-control" id="solutions" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="section_title_and_desc">Section Title/Description <span class="text-red">*</span></label>
                                                <input type="text" name="section_title_and_desc" class="form-control" id="section_title_and_desc" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="top_title">Top Title <span class="text-red">*</span></label>
                                                <input type="text" name="top_title" class="form-control" id="top_title" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="add_solution">Add Solution <span class="text-red">*</span></label>
                                                <input type="text" name="add_solution" class="form-control" id="add_solution" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="add_new">Add New <span class="text-red">*</span></label>
                                                <input type="text" name="add_new" class="form-control" id="add_new" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="icon">Icon <span class="text-red">*</span></label>
                                                <input type="text" name="icon" class="form-control" id="icon" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="order">Order <span class="text-red">*</span></label>
                                                <input type="text" name="order" class="form-control" id="order" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="action">Action <span class="text-red">*</span></label>
                                                <input type="text" name="action" class="form-control" id="action" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="edit_solution">Edit Solution <span class="text-red">*</span></label>
                                                <input type="text" name="edit_solution" class="form-control" id="edit_solution" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="about">About <span class="text-red">*</span></label>
                                                <input type="text" name="about" class="form-control" id="about" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="video_link">Video Link <span class="text-red">*</span></label>
                                                <input type="text" name="video_link" class="form-control" id="video_link" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="image">Image <span class="text-red">*</span></label>
                                                <input type="text" name="image" class="form-control" id="image" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="size">size <span class="text-red">*</span></label>
                                                <input type="text" name="size" class="form-control" id="size" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="recommended_size">You do not have to use the recommended sizes. However, please use the recommended sizes for your site design to look its best. <span class="text-red">*</span></label>
                                                <input type="text" name="recommended_size" class="form-control" id="recommended_size" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="created_successfully">Created Successfully. <span class="text-red">*</span></label>
                                                <input type="text" name="created_successfully" class="form-control" id="created_successfully" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="updated_successfully">Updated Successfully. <span class="text-red">*</span></label>
                                                <input type="text" name="updated_successfully" class="form-control" id="updated_successfully" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="deleted_successfully">Deleted Successfully. <span class="text-red">*</span></label>
                                                <input type="text" name="deleted_successfully" class="form-control" id="deleted_successfully" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="current_image">Current Image <span class="text-red">*</span></label>
                                                <input type="text" name="current_image" class="form-control" id="current_image" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="not_yet_created">Not yet created. <span class="text-red">*</span></label>
                                                <input type="text" name="not_yet_created" class="form-control" id="not_yet_created" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="delete">Delete <span class="text-red">*</span></label>
                                                <input type="text" name="delete" class="form-control" id="delete" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="close">Close <span class="text-red">*</span></label>
                                                <input type="text" name="close" class="form-control" id="close" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="you_wont_be_able_to_revert_this">You wont be able to revert this! <span class="text-red">*</span></label>
                                                <input type="text" name="you_wont_be_able_to_revert_this" class="form-control" id="you_wont_be_able_to_revert_this" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="cancel">Cancel <span class="text-red">*</span></label>
                                                <input type="text" name="cancel" class="form-control" id="cancel" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="yes_delete_it">Yes, delete it! <span class="text-red">*</span></label>
                                                <input type="text" name="yes_delete_it" class="form-control" id="yes_delete_it"  required>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <button type="submit" class="btn btn-primary mr-2">{{ __('content.submit') }}</button>
                                        </div>
                                    </div>
                                </form>
                            @endif
                        </div>
                        <div class="tab-pane" id="content2">
                            @if (isset($content_two_group_keyword))
                                <form action="{{ route('content-two-group-keyword.update_content_two_group_keyword', $content_two_group_keyword->id) }}" method="POST">
                                    @method('PUT')
                                    @csrf
                                    <input id="language_id" name="language_id" type="hidden" value="{{ $id }}">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="add_about">Add About <span class="text-red">*</span></label>
                                                <input type="text" name="add_about" class="form-control" id="add_about" value="{{ $content_two_group_keyword->add_about }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="tab_name">Tab Name <span class="text-red">*</span></label>
                                                <input type="text" name="tab_name" class="form-control" id="tab_name" value="{{ $content_two_group_keyword->tab_name }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="edit_about">Edit About <span class="text-red">*</span></label>
                                                <input type="text" name="edit_about" class="form-control" id="edit_about" value="{{ $content_two_group_keyword->edit_about }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="work_process">Work Process <span class="text-red">*</span></label>
                                                <input type="text" name="work_process" class="form-control" id="work_process" value="{{ $content_two_group_keyword->work_process }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="add_work_process">Add Work Process <span class="text-red">*</span></label>
                                                <input type="text" name="add_work_process" class="form-control" id="add_work_process" value="{{ $content_two_group_keyword->add_work_process }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="edit_work_process">Edit Work Process <span class="text-red">*</span></label>
                                                <input type="text" name="edit_work_process" class="form-control" id="edit_work_process" value="{{ $content_two_group_keyword->edit_work_process }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="industries">Industries <span class="text-red">*</span></label>
                                                <input type="text" name="industries" class="form-control" id="industries" value="{{ $content_two_group_keyword->industries }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="add_industry">Add Industry <span class="text-red">*</span></label>
                                                <input type="text" name="add_industry" class="form-control" id="add_industry" value="{{ $content_two_group_keyword->add_industry }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="link">Link <span class="text-red">*</span></label>
                                                <input type="text" name="link" class="form-control" id="link" value="{{ $content_two_group_keyword->link }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="edit_industry">Edit Industry <span class="text-red">*</span></label>
                                                <input type="text" name="edit_industry" class="form-control" id="edit_industry" value="{{ $content_two_group_keyword->edit_industry }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="skills">Skills <span class="text-red">*</span></label>
                                                <input type="text" name="skills" class="form-control" id="skills" value="{{ $content_two_group_keyword->skills }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="add_skill">Add Skill <span class="text-red">*</span></label>
                                                <input type="text" name="add_skill" class="form-control" id="add_skill" value="{{ $content_two_group_keyword->add_skill }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="percent_rate">Percent Rate <span class="text-red">*</span></label>
                                                <input type="text" name="percent_rate" class="form-control" id="percent_rate" value="{{ $content_two_group_keyword->percent_rate }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="edit_skill">Edit Skill <span class="text-red">*</span></label>
                                                <input type="text" name="edit_skill" class="form-control" id="edit_skill" value="{{ $content_two_group_keyword->edit_skill }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="testimonials">Testimonials <span class="text-red">*</span></label>
                                                <input type="text" name="testimonials" class="form-control" id="testimonials" value="{{ $content_two_group_keyword->testimonials }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="name">Name <span class="text-red">*</span></label>
                                                <input type="text" name="name" class="form-control" id="name" value="{{ $content_two_group_keyword->name }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="job">Job <span class="text-red">*</span></label>
                                                <input type="text" name="job" class="form-control" id="job" value="{{ $content_two_group_keyword->job }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="star">Star <span class="text-red">*</span></label>
                                                <input type="text" name="star" class="form-control" id="star" value="{{ $content_two_group_keyword->star }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="select_your_option">Select Your Option <span class="text-red">*</span></label>
                                                <input type="text" name="select_your_option" class="form-control" id="select_your_option" value="{{ $content_two_group_keyword->select_your_option }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="enable">Enable <span class="text-red">*</span></label>
                                                <input type="text" name="enable" class="form-control" id="enable" value="{{ $content_two_group_keyword->enable }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="disable">Disable <span class="text-red">*</span></label>
                                                <input type="text" name="disable" class="form-control" id="disable" value="{{ $content_two_group_keyword->disable }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="edit_testimonial">Edit Testimonial <span class="text-red">*</span></label>
                                                <input type="text" name="edit_testimonial" class="form-control" id="edit_testimonial" value="{{ $content_two_group_keyword->edit_testimonial }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="counters">Counters <span class="text-red">*</span></label>
                                                <input type="text" name="counters" class="form-control" id="counters" value="{{ $content_two_group_keyword->counters }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="add_counter">Add Counter <span class="text-red">*</span></label>
                                                <input type="text" name="add_counter" class="form-control" id="add_counter" value="{{ $content_two_group_keyword->add_counter }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="timer">Timer <span class="text-red">*</span></label>
                                                <input type="text" name="timer" class="form-control" id="timer" value="{{ $content_two_group_keyword->timer }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="edit_counter">Edit Counter <span class="text-red">*</span></label>
                                                <input type="text" name="edit_counter" class="form-control" id="edit_counter" value="{{ $content_two_group_keyword->edit_counter }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="sponsors">Sponsors <span class="text-red">*</span></label>
                                                <input type="text" name="sponsors" class="form-control" id="sponsors" value="{{ $content_two_group_keyword->sponsors }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="add_sponsor">Add Sponsor <span class="text-red">*</span></label>
                                                <input type="text" name="add_sponsor" class="form-control" id="add_sponsor" value="{{ $content_two_group_keyword->add_sponsor }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="edit_sponsor">Edit Sponsor <span class="text-red">*</span></label>
                                                <input type="text" name="edit_sponsor" class="form-control" id="edit_sponsor" value="{{ $content_two_group_keyword->edit_sponsor }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="blogs">Blogs <span class="text-red">*</span></label>
                                                <input type="text" name="blogs" class="form-control" id="blogs" value="{{ $content_two_group_keyword->blogs }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="categories">Categories <span class="text-red">*</span></label>
                                                <input type="text" name="categories" class="form-control" id="categories" value="{{ $content_two_group_keyword->categories }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="add_category">Add Category <span class="text-red">*</span></label>
                                                <input type="text" name="add_category" class="form-control" id="add_category" value="{{ $content_two_group_keyword->add_category }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <button type="submit" class="btn btn-primary mr-2">{{ __('content.submit') }}</button>
                                        </div>
                                    </div>
                                </form>
                            @else
                                <form action="{{ route('content-two-group-keyword.store_content_two_group_keyword') }}" method="POST">
                                    @csrf
                                    <input id="language_id" name="language_id" type="hidden" value="{{ $id }}">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="add_about">Add About <span class="text-red">*</span></label>
                                                <input type="text" name="add_about" class="form-control" id="add_about" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="tab_name">Tab Name <span class="text-red">*</span></label>
                                                <input type="text" name="tab_name" class="form-control" id="tab_name" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="edit_about">Edit About <span class="text-red">*</span></label>
                                                <input type="text" name="edit_about" class="form-control" id="edit_about" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="work_process">Work Process <span class="text-red">*</span></label>
                                                <input type="text" name="work_process" class="form-control" id="work_process" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="add_work_process">Add Work Process <span class="text-red">*</span></label>
                                                <input type="text" name="add_work_process" class="form-control" id="add_work_process" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="edit_work_process">Edit Work Process <span class="text-red">*</span></label>
                                                <input type="text" name="edit_work_process" class="form-control" id="edit_work_process" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="industries">Industries <span class="text-red">*</span></label>
                                                <input type="text" name="industries" class="form-control" id="industries" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="add_industry">Add Industry <span class="text-red">*</span></label>
                                                <input type="text" name="add_industry" class="form-control" id="add_industry" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="link">Link <span class="text-red">*</span></label>
                                                <input type="text" name="link" class="form-control" id="link" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="edit_industry">Edit Industry <span class="text-red">*</span></label>
                                                <input type="text" name="edit_industry" class="form-control" id="edit_industry" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="skills">Skills <span class="text-red">*</span></label>
                                                <input type="text" name="skills" class="form-control" id="skills" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="add_skill">Add Skill <span class="text-red">*</span></label>
                                                <input type="text" name="add_skill" class="form-control" id="add_skill" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="percent_rate">Percent Rate <span class="text-red">*</span></label>
                                                <input type="text" name="percent_rate" class="form-control" id="percent_rate" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="edit_skill">Edit Skill <span class="text-red">*</span></label>
                                                <input type="text" name="edit_skill" class="form-control" id="edit_skill" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="testimonials">Testimonials <span class="text-red">*</span></label>
                                                <input type="text" name="testimonials" class="form-control" id="testimonials" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="name">Name <span class="text-red">*</span></label>
                                                <input type="text" name="name" class="form-control" id="name" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="job">Job <span class="text-red">*</span></label>
                                                <input type="text" name="job" class="form-control" id="job" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="star">Star <span class="text-red">*</span></label>
                                                <input type="text" name="star" class="form-control" id="star" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="select_your_option">Select Your Option <span class="text-red">*</span></label>
                                                <input type="text" name="select_your_option" class="form-control" id="select_your_option" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="enable">Enable <span class="text-red">*</span></label>
                                                <input type="text" name="enable" class="form-control" id="enable" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="disable">Disable <span class="text-red">*</span></label>
                                                <input type="text" name="disable" class="form-control" id="disable" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="edit_testimonial">Edit Testimonial <span class="text-red">*</span></label>
                                                <input type="text" name="edit_testimonial" class="form-control" id="edit_testimonial" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="counters">Counters <span class="text-red">*</span></label>
                                                <input type="text" name="counters" class="form-control" id="counters" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="add_counter">Add Counter <span class="text-red">*</span></label>
                                                <input type="text" name="add_counter" class="form-control" id="add_counter" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="timer">Timer <span class="text-red">*</span></label>
                                                <input type="text" name="timer" class="form-control" id="timer" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="edit_counter">Edit Counter <span class="text-red">*</span></label>
                                                <input type="text" name="edit_counter" class="form-control" id="edit_counter" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="sponsors">Sponsors <span class="text-red">*</span></label>
                                                <input type="text" name="sponsors" class="form-control" id="sponsors" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="add_sponsor">Add Sponsor <span class="text-red">*</span></label>
                                                <input type="text" name="add_sponsor" class="form-control" id="add_sponsor" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="edit_sponsor">Edit Sponsor <span class="text-red">*</span></label>
                                                <input type="text" name="edit_sponsor" class="form-control" id="edit_sponsor" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="blogs">Blogs <span class="text-red">*</span></label>
                                                <input type="text" name="blogs" class="form-control" id="blogs" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="categories">Categories <span class="text-red">*</span></label>
                                                <input type="text" name="categories" class="form-control" id="categories" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="add_category">Add Category <span class="text-red">*</span></label>
                                                <input type="text" name="add_category" class="form-control" id="add_category" required>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <button type="submit" class="btn btn-primary mr-2">{{ __('content.submit') }}</button>
                                        </div>
                                    </div>
                                </form>
                            @endif
                        </div>
                        <div class="tab-pane" id="content3">
                            @if (isset($content_three_group_keyword))
                                <form action="{{ route('content-three-group-keyword.update_content_three_group_keyword', $content_three_group_keyword->id) }}" method="POST">
                                    @method('PUT')
                                    @csrf
                                    <input id="language_id" name="language_id" type="hidden" value="{{ $id }}">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="edit_category">Edit Category <span class="text-red">*</span></label>
                                                <input type="text" name="edit_category" class="form-control" id="edit_category" value="{{ $content_three_group_keyword->edit_category }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="category_name">Category Name <span class="text-red">*</span></label>
                                                <input type="text" name="category_name" class="form-control" id="category_name" value="{{ $content_three_group_keyword->category_name }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="status">Status <span class="text-red">*</span></label>
                                                <input type="text" name="status" class="form-control" id="status" value="{{ $content_three_group_keyword->status }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="add_blog">Add Blog <span class="text-red">*</span></label>
                                                <input type="text" name="add_blog" class="form-control" id="add_blog" value="{{ $content_three_group_keyword->add_blog }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="edit_blog">Edit Blog <span class="text-red">*</span></label>
                                                <input type="text" name="edit_blog" class="form-control" id="edit_blog" value="{{ $content_three_group_keyword->edit_blog }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="short_desc">Short Description <span class="text-red">*</span></label>
                                                <input type="text" name="short_desc" class="form-control" id="short_desc" value="{{ $content_three_group_keyword->short_desc }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="tag">Tag <span class="text-red">*</span></label>
                                                <input type="text" name="tag" class="form-control" id="tag" value="{{ $content_three_group_keyword->tag }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="separate_with_commas">Separate with commas <span class="text-red">*</span></label>
                                                <input type="text" name="separate_with_commas" class="form-control" id="separate_with_commas" value="{{ $content_three_group_keyword->separate_with_commas }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="author">Author <span class="text-red">*</span></label>
                                                <input type="text" name="author" class="form-control" id="author" value="{{ $content_three_group_keyword->author }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="category">Category <span class="text-red">*</span></label>
                                                <input type="text" name="category" class="form-control" id="category" value="{{ $content_three_group_keyword->category }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="post_date">Post Date <span class="text-red">*</span></label>
                                                <input type="text" name="post_date" class="form-control" id="post_date" value="{{ $content_three_group_keyword->post_date }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="view">View <span class="text-red">*</span></label>
                                                <input type="text" name="view" class="form-control" id="view" value="{{ $content_three_group_keyword->view }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="works">Works <span class="text-red">*</span></label>
                                                <input type="text" name="works" class="form-control" id="works" value="{{ $content_three_group_keyword->works }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="add_work">Add Work <span class="text-red">*</span></label>
                                                <input type="text" name="add_work" class="form-control" id="add_work" value="{{ $content_three_group_keyword->add_work }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="results">Results <span class="text-red">*</span></label>
                                                <input type="text" name="results" class="form-control" id="results" value="{{ $content_three_group_keyword->results }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="optional_features">Optional Features <span class="text-red">*</span></label>
                                                <input type="text" name="optional_features" class="form-control" id="optional_features" value="{{ $content_three_group_keyword->optional_features }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="items">Items <span class="text-red">*</span></label>
                                                <input type="text" name="items" class="form-control" id="items" value="{{ $content_three_group_keyword->items }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="steps">Steps <span class="text-red">*</span></label>
                                                <input type="text" name="steps" class="form-control" id="steps" value="{{ $content_three_group_keyword->steps }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="edit_work">Edit Work <span class="text-red">*</span></label>
                                                <input type="text" name="edit_work" class="form-control" id="edit_work" value="{{ $content_three_group_keyword->edit_work }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="work_items">Work Items <span class="text-red">*</span></label>
                                                <input type="text" name="work_items" class="form-control" id="work_items" value="{{ $content_three_group_keyword->work_items }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="edit_work_item">Edit Work Item <span class="text-red">*</span></label>
                                                <input type="text" name="edit_work_item" class="form-control" id="edit_work_item" value="{{ $content_three_group_keyword->edit_work_item }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="work_steps">Work Steps <span class="text-red">*</span></label>
                                                <input type="text" name="work_steps" class="form-control" id="work_steps" value="{{ $content_three_group_keyword->work_steps }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="add_work_step">Add Work Step <span class="text-red">*</span></label>
                                                <input type="text" name="add_work_step" class="form-control" id="add_work_step" value="{{ $content_three_group_keyword->add_work_step }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="edit_work_step">Edit Work Step <span class="text-red">*</span></label>
                                                <input type="text" name="edit_work_step" class="form-control" id="edit_work_step" value="{{ $content_three_group_keyword->edit_work_step }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="company">Company <span class="text-red">*</span></label>
                                                <input type="text" name="company" class="form-control" id="company" value="{{ $content_three_group_keyword->company }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="about_company">About Company <span class="text-red">*</span></label>
                                                <input type="text" name="about_company" class="form-control" id="about_company" value="{{ $content_three_group_keyword->about_company }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="experience">Experience <span class="text-red">*</span></label>
                                                <input type="text" name="experience" class="form-control" id="experience" value="{{ $content_three_group_keyword->experience }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="experience_desc">Experience Description <span class="text-red">*</span></label>
                                                <input type="text" name="experience_desc" class="form-control" id="experience_desc" value="{{ $content_three_group_keyword->experience_desc }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="why_choose">Why Choose <span class="text-red">*</span></label>
                                                <input type="text" name="why_choose" class="form-control" id="why_choose" value="{{ $content_three_group_keyword->why_choose }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="add_why_choose">Add Why Choose <span class="text-red">*</span></label>
                                                <input type="text" name="add_why_choose" class="form-control" id="add_why_choose" value="{{ $content_three_group_keyword->add_why_choose }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="edit_why_choose">Edit Why Choose <span class="text-red">*</span></label>
                                                <input type="text" name="edit_why_choose" class="form-control" id="edit_why_choose" value="{{ $content_three_group_keyword->edit_why_choose }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="teams">Teams <span class="text-red">*</span></label>
                                                <input type="text" name="teams" class="form-control" id="teams" value="{{ $content_three_group_keyword->teams }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <button type="submit" class="btn btn-primary mr-2">{{ __('content.submit') }}</button>
                                        </div>
                                    </div>
                                </form>
                            @else
                                <form action="{{ route('content-three-group-keyword.store_content_three_group_keyword') }}" method="POST">
                                    @csrf
                                    <input id="language_id" name="language_id" type="hidden" value="{{ $id }}">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="edit_category">Edit Category <span class="text-red">*</span></label>
                                                <input type="text" name="edit_category" class="form-control" id="edit_category" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="category_name">Category Name <span class="text-red">*</span></label>
                                                <input type="text" name="category_name" class="form-control" id="category_name" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="status">Status <span class="text-red">*</span></label>
                                                <input type="text" name="status" class="form-control" id="status" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="add_blog">Add Blog <span class="text-red">*</span></label>
                                                <input type="text" name="add_blog" class="form-control" id="add_blog" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="edit_blog">Edit Blog <span class="text-red">*</span></label>
                                                <input type="text" name="edit_blog" class="form-control" id="edit_blog" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="short_desc">Short Description <span class="text-red">*</span></label>
                                                <input type="text" name="short_desc" class="form-control" id="short_desc" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="tag">Tag <span class="text-red">*</span></label>
                                                <input type="text" name="tag" class="form-control" id="tag" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="separate_with_commas">Separate with commas <span class="text-red">*</span></label>
                                                <input type="text" name="separate_with_commas" class="form-control" id="separate_with_commas" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="author">Author <span class="text-red">*</span></label>
                                                <input type="text" name="author" class="form-control" id="author" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="category">Category <span class="text-red">*</span></label>
                                                <input type="text" name="category" class="form-control" id="category" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="post_date">Post Date <span class="text-red">*</span></label>
                                                <input type="text" name="post_date" class="form-control" id="post_date" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="view">View <span class="text-red">*</span></label>
                                                <input type="text" name="view" class="form-control" id="view" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="works">Works <span class="text-red">*</span></label>
                                                <input type="text" name="works" class="form-control" id="works" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="add_work">Add Work <span class="text-red">*</span></label>
                                                <input type="text" name="add_work" class="form-control" id="add_work" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="results">Results <span class="text-red">*</span></label>
                                                <input type="text" name="results" class="form-control" id="results" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="optional_features">Optional Features <span class="text-red">*</span></label>
                                                <input type="text" name="optional_features" class="form-control" id="optional_features" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="items">Items <span class="text-red">*</span></label>
                                                <input type="text" name="items" class="form-control" id="items" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="steps">Steps <span class="text-red">*</span></label>
                                                <input type="text" name="steps" class="form-control" id="steps" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="edit_work">Edit Work <span class="text-red">*</span></label>
                                                <input type="text" name="edit_work" class="form-control" id="edit_work" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="work_items">Work Items <span class="text-red">*</span></label>
                                                <input type="text" name="work_items" class="form-control" id="work_items" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="edit_work_item">Edit Work Item <span class="text-red">*</span></label>
                                                <input type="text" name="edit_work_item" class="form-control" id="edit_work_item" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="work_steps">Work Steps <span class="text-red">*</span></label>
                                                <input type="text" name="work_steps" class="form-control" id="work_steps" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="add_work_step">Add Work Step <span class="text-red">*</span></label>
                                                <input type="text" name="add_work_step" class="form-control" id="add_work_step" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="edit_work_step">Edit Work Step <span class="text-red">*</span></label>
                                                <input type="text" name="edit_work_step" class="form-control" id="edit_work_step" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="company">Company <span class="text-red">*</span></label>
                                                <input type="text" name="company" class="form-control" id="company" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="about_company">About Company <span class="text-red">*</span></label>
                                                <input type="text" name="about_company" class="form-control" id="about_company" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="experience">Experience <span class="text-red">*</span></label>
                                                <input type="text" name="experience" class="form-control" id="experience" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="experience_desc">Experience Description <span class="text-red">*</span></label>
                                                <input type="text" name="experience_desc" class="form-control" id="experience_desc" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="why_choose">Why Choose <span class="text-red">*</span></label>
                                                <input type="text" name="why_choose" class="form-control" id="why_choose" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="add_why_choose">Add Why Choose <span class="text-red">*</span></label>
                                                <input type="text" name="add_why_choose" class="form-control" id="add_why_choose" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="edit_why_choose">Edit Why Choose <span class="text-red">*</span></label>
                                                <input type="text" name="edit_why_choose" class="form-control" id="edit_why_choose" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="teams">Teams <span class="text-red">*</span></label>
                                                <input type="text" name="teams" class="form-control" id="teams" required>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <button type="submit" class="btn btn-primary mr-2">{{ __('content.submit') }}</button>
                                        </div>
                                    </div>
                                </form>
                            @endif
                        </div>
                        <div class="tab-pane" id="content4">
                            @if (isset($content_four_group_keyword))
                                <form action="{{ route('content-four-group-keyword.update_content_four_group_keyword', $content_four_group_keyword->id) }}" method="POST">
                                    @method('PUT')
                                    @csrf
                                    <input id="language_id" name="language_id" type="hidden" value="{{ $id }}">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="add_team">Add Team <span class="text-red">*</span></label>
                                                <input type="text" name="add_team" class="form-control" id="add_team" value="{{ $content_four_group_keyword->add_team }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="edit_team">Edit Team <span class="text-red">*</span></label>
                                                <input type="text" name="edit_team" class="form-control" id="edit_team" value="{{ $content_four_group_keyword->edit_team }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="faqs">Faqs <span class="text-red">*</span></label>
                                                <input type="text" name="faqs" class="form-control" id="faqs" value="{{ $content_four_group_keyword->faqs }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="question">Question <span class="text-red">*</span></label>
                                                <input type="text" name="question" class="form-control" id="question" value="{{ $content_four_group_keyword->question }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="answer">Answer <span class="text-red">*</span></label>
                                                <input type="text" name="answer" class="form-control" id="answer" value="{{ $content_four_group_keyword->answer }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="add_faq">Add Faq <span class="text-red">*</span></label>
                                                <input type="text" name="add_faq" class="form-control" id="add_faq" value="{{ $content_four_group_keyword->add_faq }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="edit_faq">Edit Faq <span class="text-red">*</span></label>
                                                <input type="text" name="edit_faq" class="form-control" id="edit_faq" value="{{ $content_four_group_keyword->edit_faq }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="galleries">Galleries <span class="text-red">*</span></label>
                                                <input type="text" name="galleries" class="form-control" id="galleries" value="{{ $content_four_group_keyword->galleries }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="add_gallery">Add Gallery <span class="text-red">*</span></label>
                                                <input type="text" name="add_gallery" class="form-control" id="add_gallery" value="{{ $content_four_group_keyword->add_gallery }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="edit_gallery">Edit Gallery <span class="text-red">*</span></label>
                                                <input type="text" name="edit_gallery" class="form-control" id="edit_gallery" value="{{ $content_four_group_keyword->edit_gallery }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="pages">Pages <span class="text-red">*</span></label>
                                                <input type="text" name="pages" class="form-control" id="pages" value="{{ $content_four_group_keyword->pages }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="add_page">Add Page <span class="text-red">*</span></label>
                                                <input type="text" name="add_page" class="form-control" id="add_page" value="{{ $content_four_group_keyword->add_page }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="edit_page">Edit Page <span class="text-red">*</span></label>
                                                <input type="text" name="edit_page" class="form-control" id="edit_page" value="{{ $content_four_group_keyword->edit_page }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="display_footer_menu">Display Footer Menu <span class="text-red">*</span></label>
                                                <input type="text" name="display_footer_menu" class="form-control" id="display_footer_menu" value="{{ $content_four_group_keyword->display_footer_menu }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="other">Other <span class="text-red">*</span></label>
                                                <input type="text" name="other" class="form-control" id="other" value="{{ $content_four_group_keyword->other }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="yes">Yes <span class="text-red">*</span></label>
                                                <input type="text" name="yes" class="form-control" id="yes" value="{{ $content_four_group_keyword->yes }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="no">No <span class="text-red">*</span></label>
                                                <input type="text" name="no" class="form-control" id="no" value="{{ $content_four_group_keyword->no }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="copy_link">Copy Link <span class="text-red">*</span></label>
                                                <input type="text" name="copy_link" class="form-control" id="copy_link" value="{{ $content_four_group_keyword->copy_link }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="copied_text">Copied Text <span class="text-red">*</span></label>
                                                <input type="text" name="copied_text" class="form-control" id="copied_text" value="{{ $content_four_group_keyword->copied_text }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="map_iframe">Map Iframe (link in src) <span class="text-red">*</span></label>
                                                <input type="text" name="map_iframe" class="form-control" id="map_iframe" value="{{ $content_four_group_keyword->map_iframe }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="map_iframe_desc_placeholder">Please find your address on Google Map. And click the Share Button on the Left Side. You will see the Map Placement Area. In the Copy Html field in this section Copy and paste the link in the src from the code inside. <span class="text-red">*</span></label>
                                                <input type="text" name="map_iframe_desc_placeholder" class="form-control" id="map_iframe_desc_placeholder" value="{{ $content_four_group_keyword->map_iframe_desc_placeholder }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="contact">Contact <span class="text-red">*</span></label>
                                                <input type="text" name="contact" class="form-control" id="contact" value="{{ $content_four_group_keyword->contact }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="contact_info">Contact Info <span class="text-red">*</span></label>
                                                <input type="text" name="contact_info" class="form-control" id="contact_info" value="{{ $content_four_group_keyword->contact_info }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="add_contact">Add Contact <span class="text-red">*</span></label>
                                                <input type="text" name="add_contact" class="form-control" id="add_contact" value="{{ $content_four_group_keyword->add_contact }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="edit_contact">Edit Contact <span class="text-red">*</span></label>
                                                <input type="text" name="edit_contact" class="form-control" id="edit_contact" value="{{ $content_four_group_keyword->edit_contact }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="socials">Socials <span class="text-red">*</span></label>
                                                <input type="text" name="socials" class="form-control" id="socials" value="{{ $content_four_group_keyword->socials }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="add_social">Add Social <span class="text-red">*</span></label>
                                                <input type="text" name="add_social" class="form-control" id="add_social" value="{{ $content_four_group_keyword->add_social }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="edit_social">Edit Social <span class="text-red">*</span></label>
                                                <input type="text" name="edit_social" class="form-control" id="edit_social" value="{{ $content_four_group_keyword->edit_social }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="email">Email <span class="text-red">*</span></label>
                                                <input type="text" name="email" class="form-control" id="email" value="{{ $content_four_group_keyword->email }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="subject">Subject <span class="text-red">*</span></label>
                                                <input type="text" name="subject" class="form-control" id="subject" value="{{ $content_four_group_keyword->subject }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="message">Message <span class="text-red">*</span></label>
                                                <input type="text" name="message" class="form-control" id="message" value="{{ $content_four_group_keyword->message }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="read_status">Read Status <span class="text-red">*</span></label>
                                                <input type="text" name="read_status" class="form-control" id="read_status" value="{{ $content_four_group_keyword->read_status }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <button type="submit" class="btn btn-primary mr-2">{{ __('content.submit') }}</button>
                                        </div>
                                    </div>
                                </form>
                            @else
                                <form action="{{ route('content-four-group-keyword.store_content_four_group_keyword') }}" method="POST">
                                    @csrf
                                    <input id="language_id" name="language_id" type="hidden" value="{{ $id }}">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="add_team">Add Team <span class="text-red">*</span></label>
                                                <input type="text" name="add_team" class="form-control" id="add_team" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="edit_team">Edit Team <span class="text-red">*</span></label>
                                                <input type="text" name="edit_team" class="form-control" id="edit_team" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="faqs">Faqs <span class="text-red">*</span></label>
                                                <input type="text" name="faqs" class="form-control" id="faqs" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="question">Question <span class="text-red">*</span></label>
                                                <input type="text" name="question" class="form-control" id="question" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="answer">Answer <span class="text-red">*</span></label>
                                                <input type="text" name="answer" class="form-control" id="answer" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="add_faq">Add Faq <span class="text-red">*</span></label>
                                                <input type="text" name="add_faq" class="form-control" id="add_faq" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="edit_faq">Edit Faq <span class="text-red">*</span></label>
                                                <input type="text" name="edit_faq" class="form-control" id="edit_faq" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="galleries">Galleries <span class="text-red">*</span></label>
                                                <input type="text" name="galleries" class="form-control" id="galleries" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="add_gallery">Add Gallery <span class="text-red">*</span></label>
                                                <input type="text" name="add_gallery" class="form-control" id="add_gallery" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="edit_gallery">Edit Gallery <span class="text-red">*</span></label>
                                                <input type="text" name="edit_gallery" class="form-control" id="edit_gallery" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="pages">Pages <span class="text-red">*</span></label>
                                                <input type="text" name="pages" class="form-control" id="pages" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="add_page">Add Page <span class="text-red">*</span></label>
                                                <input type="text" name="add_page" class="form-control" id="add_page" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="edit_page">Edit Page <span class="text-red">*</span></label>
                                                <input type="text" name="edit_page" class="form-control" id="edit_page" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="display_footer_menu">Display Footer Menu <span class="text-red">*</span></label>
                                                <input type="text" name="display_footer_menu" class="form-control" id="display_footer_menu" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="other">Other <span class="text-red">*</span></label>
                                                <input type="text" name="other" class="form-control" id="other" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="yes">Yes <span class="text-red">*</span></label>
                                                <input type="text" name="yes" class="form-control" id="yes" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="no">No <span class="text-red">*</span></label>
                                                <input type="text" name="no" class="form-control" id="no" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="copy_link">Copy Link <span class="text-red">*</span></label>
                                                <input type="text" name="copy_link" class="form-control" id="copy_link" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="copied_text">Copied Text <span class="text-red">*</span></label>
                                                <input type="text" name="copied_text" class="form-control" id="copied_text" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="map_iframe">Map Iframe (link in src) <span class="text-red">*</span></label>
                                                <input type="text" name="map_iframe" class="form-control" id="map_iframe" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="map_iframe_desc_placeholder">Please find your address on Google Map. And click the Share Button on the Left Side. You will see the Map Placement Area. In the Copy Html field in this section Copy and paste the link in the src from the code inside. <span class="text-red">*</span></label>
                                                <input type="text" name="map_iframe_desc_placeholder" class="form-control" id="map_iframe_desc_placeholder" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="contact">Contact <span class="text-red">*</span></label>
                                                <input type="text" name="contact" class="form-control" id="contact" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="contact_info">Contact Info <span class="text-red">*</span></label>
                                                <input type="text" name="contact_info" class="form-control" id="contact_info" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="add_contact">Add Contact <span class="text-red">*</span></label>
                                                <input type="text" name="add_contact" class="form-control" id="add_contact" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="edit_contact">Edit Contact <span class="text-red">*</span></label>
                                                <input type="text" name="edit_contact" class="form-control" id="edit_contact" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="socials">Socials <span class="text-red">*</span></label>
                                                <input type="text" name="socials" class="form-control" id="socials" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="add_social">Add Social <span class="text-red">*</span></label>
                                                <input type="text" name="add_social" class="form-control" id="add_social" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="edit_social">Edit Social <span class="text-red">*</span></label>
                                                <input type="text" name="edit_social" class="form-control" id="edit_social" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="email">Email <span class="text-red">*</span></label>
                                                <input type="text" name="email" class="form-control" id="email" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="subject">Subject <span class="text-red">*</span></label>
                                                <input type="text" name="subject" class="form-control" id="subject" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="message">Message <span class="text-red">*</span></label>
                                                <input type="text" name="message" class="form-control" id="message" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="read_status">Read Status <span class="text-red">*</span></label>
                                                <input type="text" name="read_status" class="form-control" id="read_status" required>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <button type="submit" class="btn btn-primary mr-2">{{ __('content.submit') }}</button>
                                        </div>
                                    </div>
                                </form>
                            @endif
                        </div>
                        <div class="tab-pane" id="content5">
                            @if (isset($content_five_group_keyword))
                                <form action="{{ route('content-five-group-keyword.update_content_five_group_keyword', $content_five_group_keyword->id) }}" method="POST">
                                    @method('PUT')
                                    @csrf
                                    <input id="language_id" name="language_id" type="hidden" value="{{ $id }}">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="mark_all_as_read">Mark All As Read <span class="text-red">*</span></label>
                                                <input type="text" name="mark_all_as_read" class="form-control" id="mark_all_as_read" value="{{ $content_five_group_keyword->mark_all_as_read }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="mark">Mark <span class="text-red">*</span></label>
                                                <input type="text" name="mark" class="form-control" id="mark" value="{{ $content_five_group_keyword->mark }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="messages">Messages <span class="text-red">*</span></label>
                                                <input type="text" name="messages" class="form-control" id="messages" value="{{ $content_five_group_keyword->messages }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="site_info">Site Info <span class="text-red">*</span></label>
                                                <input type="text" name="site_info" class="form-control" id="site_info" value="{{ $content_five_group_keyword->site_info }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="copyright">Copyright <span class="text-red">*</span></label>
                                                <input type="text" name="copyright" class="form-control" id="copyright" value="{{ $content_five_group_keyword->copyright }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="address">Address <span class="text-red">*</span></label>
                                                <input type="text" name="address" class="form-control" id="address" value="{{ $content_five_group_keyword->address }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="address_map_link">Address Map Link <span class="text-red">*</span></label>
                                                <input type="text" name="address_map_link" class="form-control" id="address_map_link" value="{{ $content_five_group_keyword->address_map_link }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="phone">Phone <span class="text-red">*</span></label>
                                                <input type="text" name="phone" class="form-control" id="phone" value="{{ $content_five_group_keyword->phone }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="site_images">Site Images <span class="text-red">*</span></label>
                                                <input type="text" name="site_images" class="form-control" id="site_images" value="{{ $content_five_group_keyword->site_images }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="favicon">Favicon <span class="text-red">*</span></label>
                                                <input type="text" name="favicon" class="form-control" id="favicon" value="{{ $content_five_group_keyword->favicon }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="admin_logo">Admin Logo <span class="text-red">*</span></label>
                                                <input type="text" name="admin_logo" class="form-control" id="admin_logo" value="{{ $content_five_group_keyword->admin_logo }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="admin_small_logo_image">Admin Small Logo <span class="text-red">*</span></label>
                                                <input type="text" name="admin_small_logo_image" class="form-control" id="admin_small_logo_image" value="{{ $content_five_group_keyword->admin_small_logo_image }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="site_white_logo_image">Site White Logo <span class="text-red">*</span></label>
                                                <input type="text" name="site_white_logo_image" class="form-control" id="site_white_logo_image" value="{{ $content_five_group_keyword->site_white_logo_image }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="site_colored_logo_image">Site Colored Logo <span class="text-red">*</span></label>
                                                <input type="text" name="site_colored_logo_image" class="form-control" id="site_colored_logo_image" value="{{ $content_five_group_keyword->site_colored_logo_image }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="site_small_logo_image">Site Small Logo <span class="text-red">*</span></label>
                                                <input type="text" name="site_small_logo_image" class="form-control" id="site_small_logo_image" value="{{ $content_five_group_keyword->site_small_logo_image }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="site_footer_logo_image">Site Footer Logo <span class="text-red">*</span></label>
                                                <input type="text" name="site_footer_logo_image" class="form-control" id="site_footer_logo_image" value="{{ $content_five_group_keyword->site_footer_logo_image }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="google_analytic">Google Analytic <span class="text-red">*</span></label>
                                                <input type="text" name="google_analytic" class="form-control" id="google_analytic" value="{{ $content_five_group_keyword->google_analytic }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="breadcrumb">Breadcrumb <span class="text-red">*</span></label>
                                                <input type="text" name="breadcrumb" class="form-control" id="breadcrumb" value="{{ $content_five_group_keyword->breadcrumb }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="sections">Sections <span class="text-red">*</span></label>
                                                <input type="text" name="sections" class="form-control" id="sections" value="{{ $content_five_group_keyword->sections }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="seo">Seo <span class="text-red">*</span></label>
                                                <input type="text" name="seo" class="form-control" id="seo" value="{{ $content_five_group_keyword->seo }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="site_name">Site Name <span class="text-red">*</span></label>
                                                <input type="text" name="site_name" class="form-control" id="site_name" value="{{ $content_five_group_keyword->site_name }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="site_desc">Site Description <span class="text-red">*</span></label>
                                                <input type="text" name="site_desc" class="form-control" id="site_desc" value="{{ $content_five_group_keyword->site_desc }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="site_keywords">Site Keywords <span class="text-red">*</span></label>
                                                <input type="text" name="site_keywords" class="form-control" id="site_keywords" value="{{ $content_five_group_keyword->site_keywords }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="please_create_a_category">Please create a category. <span class="text-red">*</span></label>
                                                <input type="text" name="please_create_a_category" class="form-control" id="please_create_a_category" value="{{ $content_five_group_keyword->please_create_a_category }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="languages">Languages <span class="text-red">*</span></label>
                                                <input type="text" name="languages" class="form-control" id="languages" value="{{ $content_five_group_keyword->languages }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="add_language">Add Language <span class="text-red">*</span></label>
                                                <input type="text" name="add_language" class="form-control" id="add_language" value="{{ $content_five_group_keyword->add_language }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="edit_language">Edit Language <span class="text-red">*</span></label>
                                                <input type="text" name="edit_language" class="form-control" id="edit_language" value="{{ $content_five_group_keyword->edit_language }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="language_name">Language Name <span class="text-red">*</span></label>
                                                <input type="text" name="language_name" class="form-control" id="language_name" value="{{ $content_five_group_keyword->language_name }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="language_code">Language Code <span class="text-red">*</span></label>
                                                <input type="text" name="language_code" class="form-control" id="language_code" value="{{ $content_five_group_keyword->language_code }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="direction">Direction <span class="text-red">*</span></label>
                                                <input type="text" name="direction" class="form-control" id="direction" value="{{ $content_five_group_keyword->direction }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="keywords">Keywords <span class="text-red">*</span></label>
                                                <input type="text" name="keywords" class="form-control" id="keywords" value="{{ $content_five_group_keyword->keywords }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="for_admin_panel">For Admin Pane <span class="text-red">*</span></label>
                                                <input type="text" name="for_admin_panel" class="form-control" id="for_admin_panel" value="{{ $content_five_group_keyword->for_admin_panel }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <button type="submit" class="btn btn-primary mr-2">{{ __('content.submit') }}</button>
                                        </div>
                                    </div>
                                </form>
                            @else
                                <form action="{{ route('content-five-group-keyword.store_content_five_group_keyword') }}" method="POST">
                                    @csrf
                                    <input id="language_id" name="language_id" type="hidden" value="{{ $id }}">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="mark_all_as_read">Mark All As Read <span class="text-red">*</span></label>
                                                <input type="text" name="mark_all_as_read" class="form-control" id="mark_all_as_read" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="mark">Mark <span class="text-red">*</span></label>
                                                <input type="text" name="mark" class="form-control" id="mark" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="messages">Messages <span class="text-red">*</span></label>
                                                <input type="text" name="messages" class="form-control" id="messages" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="site_info">Site Info <span class="text-red">*</span></label>
                                                <input type="text" name="site_info" class="form-control" id="site_info" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="copyright">Copyright <span class="text-red">*</span></label>
                                                <input type="text" name="copyright" class="form-control" id="copyright" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="address">Address <span class="text-red">*</span></label>
                                                <input type="text" name="address" class="form-control" id="address" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="address_map_link">Address Map Link <span class="text-red">*</span></label>
                                                <input type="text" name="address_map_link" class="form-control" id="address_map_link" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="phone">Phone <span class="text-red">*</span></label>
                                                <input type="text" name="phone" class="form-control" id="phone" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="site_images">Site Images <span class="text-red">*</span></label>
                                                <input type="text" name="site_images" class="form-control" id="site_images" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="favicon">Favicon <span class="text-red">*</span></label>
                                                <input type="text" name="favicon" class="form-control" id="favicon" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="admin_logo">Admin Logo <span class="text-red">*</span></label>
                                                <input type="text" name="admin_logo" class="form-control" id="admin_logo" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="admin_small_logo_image">Admin Small Logo <span class="text-red">*</span></label>
                                                <input type="text" name="admin_small_logo_image" class="form-control" id="admin_small_logo_image" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="site_white_logo_image">Site White Logo <span class="text-red">*</span></label>
                                                <input type="text" name="site_white_logo_image" class="form-control" id="site_white_logo_image" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="site_colored_logo_image">Site Colored Logo <span class="text-red">*</span></label>
                                                <input type="text" name="site_colored_logo_image" class="form-control" id="site_colored_logo_image" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="site_small_logo_image">Site Small Logo <span class="text-red">*</span></label>
                                                <input type="text" name="site_small_logo_image" class="form-control" id="site_small_logo_image" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="site_footer_logo_image">Site Footer Logo <span class="text-red">*</span></label>
                                                <input type="text" name="site_footer_logo_image" class="form-control" id="site_footer_logo_image" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="google_analytic">Google Analytic <span class="text-red">*</span></label>
                                                <input type="text" name="google_analytic" class="form-control" id="google_analytic" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="breadcrumb">Breadcrumb <span class="text-red">*</span></label>
                                                <input type="text" name="breadcrumb" class="form-control" id="breadcrumb" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="sections">Sections <span class="text-red">*</span></label>
                                                <input type="text" name="sections" class="form-control" id="sections" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="seo">Seo <span class="text-red">*</span></label>
                                                <input type="text" name="seo" class="form-control" id="seo" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="site_name">Site Name <span class="text-red">*</span></label>
                                                <input type="text" name="site_name" class="form-control" id="site_name" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="site_desc">Site Description <span class="text-red">*</span></label>
                                                <input type="text" name="site_desc" class="form-control" id="site_desc" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="site_keywords">Site Keywords <span class="text-red">*</span></label>
                                                <input type="text" name="site_keywords" class="form-control" id="site_keywords" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="please_create_a_category">Please create a category. <span class="text-red">*</span></label>
                                                <input type="text" name="please_create_a_category" class="form-control" id="please_create_a_category" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="languages">Languages <span class="text-red">*</span></label>
                                                <input type="text" name="languages" class="form-control" id="languages" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="add_language">Add Language <span class="text-red">*</span></label>
                                                <input type="text" name="add_language" class="form-control" id="add_language" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="edit_language">Edit Language <span class="text-red">*</span></label>
                                                <input type="text" name="edit_language" class="form-control" id="edit_language" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="language_name">Language Name <span class="text-red">*</span></label>
                                                <input type="text" name="language_name" class="form-control" id="language_name" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="language_code">Language Code <span class="text-red">*</span></label>
                                                <input type="text" name="language_code" class="form-control" id="language_code" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="direction">Direction <span class="text-red">*</span></label>
                                                <input type="text" name="direction" class="form-control" id="direction" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="keywords">Keywords <span class="text-red">*</span></label>
                                                <input type="text" name="keywords" class="form-control" id="keywords" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="for_admin_panel">For Admin Pane <span class="text-red">*</span></label>
                                                <input type="text" name="for_admin_panel" class="form-control" id="for_admin_panel" required>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <button type="submit" class="btn btn-primary mr-2">{{ __('content.submit') }}</button>
                                        </div>
                                    </div>
                                </form>
                            @endif
                        </div>
                        <div class="tab-pane" id="content6">
                            @if (isset($content_six_group_keyword))
                                <form action="{{ route('content-six-group-keyword.update_content_six_group_keyword', $content_six_group_keyword->id) }}" method="POST">
                                    @method('PUT')
                                    @csrf
                                    <input id="language_id" name="language_id" type="hidden" value="{{ $id }}">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="for_frontend">For Frontend <span class="text-red">*</span></label>
                                                <input type="text" name="for_frontend" class="form-control" id="for_frontend" value="{{ $content_six_group_keyword->for_frontend }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="content_group">Content Group <span class="text-red">*</span></label>
                                                <input type="text" name="content_group" class="form-control" id="content_group" value="{{ $content_six_group_keyword->content_group }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="hide">Hide <span class="text-red">*</span></label>
                                                <input type="text" name="hide" class="form-control" id="hide" value="{{ $content_six_group_keyword->hide }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="show">Show <span class="text-red">*</span></label>
                                                <input type="text" name="show" class="form-control" id="show" value="{{ $content_six_group_keyword->show }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="display_dropdown">Display Dropdown? <span class="text-red">*</span></label>
                                                <input type="text" name="display_dropdown" class="form-control" id="display_dropdown" value="{{ $content_six_group_keyword->display_dropdown }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="default_site_language">Default Site Language <span class="text-red">*</span></label>
                                                <input type="text" name="default_site_language" class="form-control" id="default_site_language" value="{{ $content_six_group_keyword->default_site_language }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="please_try_again">Please try again! <span class="text-red">*</span></label>
                                                <input type="text" name="please_try_again" class="form-control" id="please_try_again" value="{{ $content_six_group_keyword->please_try_again }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="you_are_not_authorized">You are not authorized to delete this operation. <span class="text-red">*</span></label>
                                                <input type="text" name="you_are_not_authorized" class="form-control" id="you_are_not_authorized" value="{{ $content_six_group_keyword->you_are_not_authorized }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="comment">Comment <span class="text-red">*</span></label>
                                                <input type="text" name="comment" class="form-control" id="comment" value="{{ $content_six_group_keyword->comment }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="comments">Comments <span class="text-red">*</span></label>
                                                <input type="text" name="comments" class="form-control" id="comments" value="{{ $content_six_group_keyword->comments }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="approval_status">Approval Status <span class="text-red">*</span></label>
                                                <input type="text" name="approval_status" class="form-control" id="approval_status" value="{{ $content_six_group_keyword->approval_status }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="mark_all_as_approval">Mark All As Approval <span class="text-red">*</span></label>
                                                <input type="text" name="mark_all_as_approval" class="form-control" id="mark_all_as_approval" value="{{ $content_six_group_keyword->mark_all_as_approval }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="read">Read <span class="text-red">*</span></label>
                                                <input type="text" name="read" class="form-control" id="read" value="{{ $content_six_group_keyword->read }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="unread">Unread <span class="text-red">*</span></label>
                                                <input type="text" name="unread" class="form-control" id="unread" value="{{ $content_six_group_keyword->unread }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="profile">Profile <span class="text-red">*</span></label>
                                                <input type="text" name="profile" class="form-control" id="profile" value="{{ $content_six_group_keyword->profile }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="change_password">Change Password <span class="text-red">*</span></label>
                                                <input type="text" name="change_password" class="form-control" id="change_password" value="{{ $content_six_group_keyword->change_password }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="current_password">Current Password <span class="text-red">*</span></label>
                                                <input type="text" name="current_password" class="form-control" id="current_password" value="{{ $content_six_group_keyword->current_password }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="new_password">New Password <span class="text-red">*</span></label>
                                                <input type="text" name="new_password" class="form-control" id="new_password" value="{{ $content_six_group_keyword->new_password }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="confirm_password">Confirm Password <span class="text-red">*</span></label>
                                                <input type="text" name="confirm_password" class="form-control" id="confirm_password" value="{{ $content_six_group_keyword->confirm_password }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="pending_approval">Pending Approval <span class="text-red">*</span></label>
                                                <input type="text" name="pending_approval" class="form-control" id="pending_approval" value="{{ $content_six_group_keyword->pending_approval }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="approval">Approval <span class="text-red">*</span></label>
                                                <input type="text" name="approval" class="form-control" id="approval" value="{{ $content_six_group_keyword->approval }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="data_language">Data Language <span class="text-red">*</span></label>
                                                <input type="text" name="data_language" class="form-control" id="data_language" value="{{ $content_six_group_keyword->data_language }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="which_language">Which language do you want to create the data? <span class="text-red">*</span></label>
                                                <input type="text" name="which_language" class="form-control" id="which_language" value="{{ $content_six_group_keyword->which_language }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="reminding">Please note that all the entries you create will be based on your chosen language. <span class="text-red">*</span></label>
                                                <input type="text" name="reminding" class="form-control" id="reminding" value="{{ $content_six_group_keyword->reminding }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="notifications">Notifications <span class="text-red">*</span></label>
                                                <input type="text" name="notifications" class="form-control" id="notifications" value="{{ $content_six_group_keyword->notifications }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="logout">Logout <span class="text-red">*</span></label>
                                                <input type="text" name="logout" class="form-control" id="logout" value="{{ $content_six_group_keyword->logout }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="optimizer">Optimizer <span class="text-red">*</span></label>
                                                <input type="text" name="optimizer" class="form-control" id="optimizer" value="{{ $content_six_group_keyword->optimizer }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="settings">Settings <span class="text-red">*</span></label>
                                                <input type="text" name="settings" class="form-control" id="settings" value="{{ $content_six_group_keyword->settings }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="add_testimonial">Add Testimonial <span class="text-red">*</span></label>
                                                <input type="text" name="add_testimonial" class="form-control" id="add_testimonial" value="{{ $content_six_group_keyword->add_testimonial }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="add_work_item">Add Work Item <span class="text-red">*</span></label>
                                                <input type="text" name="add_work_item" class="form-control" id="add_work_item" value="{{ $content_six_group_keyword->add_work_item }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <button type="submit" class="btn btn-primary mr-2">{{ __('content.submit') }}</button>
                                        </div>
                                    </div>
                                </form>
                            @else
                                <form action="{{ route('content-six-group-keyword.store_content_six_group_keyword') }}" method="POST">
                                    @csrf
                                    <input id="language_id" name="language_id" type="hidden" value="{{ $id }}">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="for_frontend">For Frontend <span class="text-red">*</span></label>
                                                <input type="text" name="for_frontend" class="form-control" id="for_frontend" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="content_group">Content Group <span class="text-red">*</span></label>
                                                <input type="text" name="content_group" class="form-control" id="content_group" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="hide">Hide <span class="text-red">*</span></label>
                                                <input type="text" name="hide" class="form-control" id="hide" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="show">Show <span class="text-red">*</span></label>
                                                <input type="text" name="show" class="form-control" id="show" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="display_dropdown">Display Dropdown? <span class="text-red">*</span></label>
                                                <input type="text" name="display_dropdown" class="form-control" id="display_dropdown" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="default_site_language">Default Site Language <span class="text-red">*</span></label>
                                                <input type="text" name="default_site_language" class="form-control" id="default_site_language" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="please_try_again">Please try again! <span class="text-red">*</span></label>
                                                <input type="text" name="please_try_again" class="form-control" id="please_try_again" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="you_are_not_authorized">You are not authorized to delete this operation. <span class="text-red">*</span></label>
                                                <input type="text" name="you_are_not_authorized" class="form-control" id="you_are_not_authorized" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="comment">Comment <span class="text-red">*</span></label>
                                                <input type="text" name="comment" class="form-control" id="comment" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="comments">Comments <span class="text-red">*</span></label>
                                                <input type="text" name="comments" class="form-control" id="comments" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="approval_status">Approval Status <span class="text-red">*</span></label>
                                                <input type="text" name="approval_status" class="form-control" id="approval_status" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="mark_all_as_approval">Mark All As Approval <span class="text-red">*</span></label>
                                                <input type="text" name="mark_all_as_approval" class="form-control" id="mark_all_as_approval" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="read">Read <span class="text-red">*</span></label>
                                                <input type="text" name="read" class="form-control" id="read" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="unread">Unread <span class="text-red">*</span></label>
                                                <input type="text" name="unread" class="form-control" id="unread" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="profile">Profile <span class="text-red">*</span></label>
                                                <input type="text" name="profile" class="form-control" id="profile" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="change_password">Change Password <span class="text-red">*</span></label>
                                                <input type="text" name="change_password" class="form-control" id="change_password" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="current_password">Current Password <span class="text-red">*</span></label>
                                                <input type="text" name="current_password" class="form-control" id="current_password" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="new_password">New Password <span class="text-red">*</span></label>
                                                <input type="text" name="new_password" class="form-control" id="new_password" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="confirm_password">Confirm Password <span class="text-red">*</span></label>
                                                <input type="text" name="confirm_password" class="form-control" id="confirm_password" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="pending_approval">Pending Approval <span class="text-red">*</span></label>
                                                <input type="text" name="pending_approval" class="form-control" id="pending_approval" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="approval">Approval <span class="text-red">*</span></label>
                                                <input type="text" name="approval" class="form-control" id="approval" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="data_language">Data Language <span class="text-red">*</span></label>
                                                <input type="text" name="data_language" class="form-control" id="data_language" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="which_language">Which language do you want to create the data? <span class="text-red">*</span></label>
                                                <input type="text" name="which_language" class="form-control" id="which_language" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="reminding">Please note that all the entries you create will be based on your chosen language. <span class="text-red">*</span></label>
                                                <input type="text" name="reminding" class="form-control" id="reminding" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="notifications">Notifications <span class="text-red">*</span></label>
                                                <input type="text" name="notifications" class="form-control" id="notifications" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="logout">Logout <span class="text-red">*</span></label>
                                                <input type="text" name="logout" class="form-control" id="logout" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="optimizer">Optimizer <span class="text-red">*</span></label>
                                                <input type="text" name="optimizer" class="form-control" id="optimizer" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="settings">Settings <span class="text-red">*</span></label>
                                                <input type="text" name="settings" class="form-control" id="settings" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="add_testimonial">Add Testimonial <span class="text-red">*</span></label>
                                                <input type="text" name="add_testimonial" class="form-control" id="add_testimonial" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="add_work_item">Add Work Item <span class="text-red">*</span></label>
                                                <input type="text" name="add_work_item" class="form-control" id="add_work_item" required>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <button type="submit" class="btn btn-primary mr-2">{{ __('content.submit') }}</button>
                                        </div>
                                    </div>
                                </form>
                            @endif
                        </div>
                    </div>
                </div>
            </div> <!-- end card-->
        </div> <!-- end col -->
    </div>

@endsection