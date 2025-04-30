@extends('backend.app')

@section('title')
    {{ env('APP_NAME') }} || Comment
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
                                        <h2 class="h3 mb-1">Comment Section</h2>
                                        <p>
                                            The list of your comments
                                        </p>
                                    </div>
                                    <!-- Card -->
                                    <div class="mb-10 card">
                                        <!-- basic table -->
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Image</th>
                                                    <th scope="col">Name</th>
                                                    <th scope="col">Title</th>
                                                    <th scope="col">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($comments as $comment)
                                                    <tr>
                                                        <td ><img src="{{$comment->image}}" alt="Image" class="avatar-md avatar rounded-circle"></td>
                                                        <th scope="row">{{ $comment->name ?? 'N/A' }}</th>
                                                        <td>{{ $comment->title ?? 'N/A' }}</td>
                                                        <td><a href="{{ route('v1.project.edit', $comment->id) }}"><button
                                                                    type="button"
                                                                    class="btn btn-outline-dark mb-2">View</button></a></td>
                                                    </tr>
                                                @endforeach

                                            </tbody>
                                        </table>
                                        <!-- basic table -->
                                    </div>

                                </div>
                            </div>
                            <!-- validation -->
                        </div>

                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-6 col-sm-12 col-12  d-none d-xl-block position-fixed end-0">
                        <!-- Sidebar nav fixed -->
                        <div class="sidebar-nav-fixed">
                            <a href="{{route('v1.comment.create')}}"><button type="button" class="btn btn-secondary-soft mb-2">Add New Project</button></a>
                            <span class="px-4 mb-2 d-block text-uppercase ls-md h3 fs-6">Contents</span>
                            <ul class="list-unstyled">
                                <li><a href="#validation">comment</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
