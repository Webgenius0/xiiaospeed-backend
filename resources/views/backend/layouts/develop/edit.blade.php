@extends('backend.app')

@section('title')
    {{ env('APP_NAME') }} || Develop
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
                                        <h2 class="h3 mb-1">Develop Section Content</h2>
                                        <p>
                                            This form will allow you to change the section content
                                        </p>
                                    </div>
                                    <!-- Card -->
                                    <div class="mb-10 card">
                                        <!-- Tab content -->
                                        <div class="tab-content p-4" id="pills-tabContent-validation">
                                            <div class="row row-cols-1 row-cols-md-2 g-4 mb-4">
                                                <div class="col">
                                                    <div class="card position-relative">
                                                        <img src="{{ $data['image'] }}" class="card-img-top" alt="...">
                                                        <form method="POST"
                                                            action="{{ route('v1.section.delete.image', $data['id']) }}">
                                                            @csrf()
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-danger-soft mb-2"
                                                                style="position: absolute; top: 10px; right: 10px;">
                                                                Delete
                                                            </button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Validation Form -->
                                            <form class="row g-3 needs-validation" action="{{ route('v1.develop.store') }}"
                                                method="POST" enctype="multipart/form-data">
                                                @csrf
                                                <div class="col-md-12">
                                                    <label for="title" class="form-label">Title</label>
                                                    <input type="text" class="form-control" id="title" name="title"
                                                        value="{{ $data['title'] }}" placeholder="title">
                                                    @error('title')
                                                        <div class="validation-error">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>

                                                <div class="col-md-12">
                                                    <label for="sub_title" class="form-label">Sub Title</label>
                                                    <input type="text" class="form-control" id="sub_title"
                                                        name="sub_title" value="{{ $data['sub_title'] }}"
                                                        placeholder="sub title">
                                                    @error('sub_title')
                                                        <div class="validation-error">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                                <div class="col-md-12">
                                                    <label for="image" class="form-label">Image</label>
                                                    <input type="file" class="form-control" id="image" name="image"
                                                        value="{{ env('image') }}">
                                                    @error('image')
                                                        <div class="validation-error">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                                <div class="col-md-12">
                                                    <label for="description" class="form-label">Description</label>
                                                    <textarea class="form-control" id="description" rows="5" placeholder="your content..." name="description">{{ $data['description'] }}</textarea>
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
                                <li><a href="#validation">Develop</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
