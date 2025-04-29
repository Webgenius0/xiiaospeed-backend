@extends('backend.app')

@section('title')
    {{ env('APP_NAME') }} || Product
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
                                        <h2 class="h3 mb-1">Project</h2>
                                        <p>
                                            This form will allow you to change the project content
                                        </p>
                                    </div>
                                    <!-- Card -->
                                    <div class="mb-10 card">
                                        <div class="tab-content p-4" id="pills-tabContent-validation">
                                            <div class="row row-cols-1 row-cols-md-2 g-4 mb-4">
                                                <div class="col">
                                                    <div class="card position-relative">
                                                        <img src="{{ $project['image'] }}" class="card-img-top"
                                                            alt="...">
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Validation Form -->
                                            <form class="row g-3 needs-validation"
                                                action="{{ route('v1.project.update', $project->id) }}" method="POST"
                                                enctype="multipart/form-data">
                                                @csrf
                                                @method('PUT')
                                                <div class="col-md-12">
                                                    <label for="title" class="form-label">Title*</label>
                                                    <input type="text" class="form-control" id="title" name="title"
                                                        value="{{ $project['title'] }}" placeholder="title">
                                                    @error('title')
                                                        <div class="validation-error">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="start" class="form-label">Start*</label>
                                                    <input type="date" class="form-control" id="start" name="start"
                                                        value="{{ $project['start'] }}">
                                                    @error('start')
                                                        <div class="validation-error">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="end" class="form-label">End</label>
                                                    <input type="date" class="form-control" id="end" name="end"
                                                        value="{{ $project['end'] }}">
                                                    @error('end')
                                                        <div class="validation-error">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                                <div class="col-md-12">
                                                    <label for="url" class="form-label">URL</label>
                                                    <input type="text" class="form-control" id="url" name="url"
                                                        value="{{ $project['url'] }}" placeholder="url">
                                                    @error('url')
                                                        <div class="validation-error">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                                <div class="col-md-12">
                                                    <label for="image" class="form-label">Image*</label>
                                                    <input type="file" class="form-control" id="image" name="image"
                                                        value="{{ env('image') }}">
                                                    @error('image')
                                                        <div class="validation-error">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                                <div class="col-md-12">
                                                    <label for="skills" class="form-label">Skills*</label>
                                                    <input type="text" class="form-control" id="skills" name="skills"
                                                        value="{{ $project['skills'] }}" placeholder="skills">
                                                    @error('skills')
                                                        <div class="validation-error">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                                <div class="col-md-12">
                                                    <label for="description" class="form-label">Description*</label>
                                                    <textarea class="form-control" id="description" rows="5" name="description">{{ $project['description'] }}</textarea>
                                                    @error('description')
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
                                <li><a href="#validation">title</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
