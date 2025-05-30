@extends('backend.app')

@section('title')
    {{ env('APP_NAME') }} || comment
@endsection

@section('content')
    <div id="app-content">
        <div class="app-content-area">
            <!-- Container fluid -->
            <div class="container-fluid">
                <div class="row">
                    <div class=" col-xl-9 col-md-12 col-sm-12 col-12 ">
                        <!-- Content -->
                        <div class="">
                            <!-- validation -->
                            <div class="row">
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <div id="validation" class="mb-4">
                                        <h2 class="h3 mb-1">comment</h2>
                                        <p>
                                            This form will allow you to create comment
                                        </p>
                                    </div>
                                    <!-- Card -->
                                    <div class="mb-10 card">
                                        <div class="tab-content p-4" id="pills-tabContent-validation">
                                            <!-- Validation Form -->
                                            <form class="row g-3 needs-validation" action="{{ route('v1.comment.store') }}"
                                                method="POST" enctype="multipart/form-data">
                                                @csrf
                                                <div class="col-md-12">
                                                    <label for="name" class="form-label">Name*</label>
                                                    <input type="text" class="form-control" id="name" name="name"
                                                        value="{{ old('name') }}" placeholder="name">
                                                    @error('name')
                                                        <div class="validation-error">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                                <div class="col-md-12">
                                                    <label for="title" class="form-label">Title*</label>
                                                    <input type="text" class="form-control" id="title" name="title"
                                                        value="{{ old('title') }}" placeholder="title">
                                                    @error('title')
                                                        <div class="validation-error">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                                <div class="col-md-12">
                                                    <label for="image" class="form-label">Image*</label>
                                                    <input type="file" class="form-control" id="image"
                                                        name="image" />
                                                    @error('image')
                                                        <div class="validation-error">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                                <div class="col-md-12">
                                                    <label for="content" class="form-label">Content*</label>
                                                    <textarea class="form-control" id="content" rows="5" name="content">{{ old('content') }}</textarea>
                                                    @error('content')
                                                        <div class="validation-error">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                                <div class="col-12">
                                                    <button class="btn btn-primary" type="submit">Submit</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!-- validation -->
                        </div>

                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-6 col-sm-12 col-12  d-none d-xl-block position-fixed end-0">
                        <!-- Sidebar nav fixed -->
                        <div class="sidebar-nav-fixed">
                            <span class="px-4 mb-2 d-block text-uppercase ls-md h3 fs-6">Contents</span>
                            <ul class="list-unstyled">
                                <li><a href="#validation">Comment Form</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
