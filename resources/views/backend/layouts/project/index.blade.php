@extends('backend.app')

@section('title')
    {{ env('APP_NAME') }} || Projects
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
                                        <h2 class="h3 mb-1">Projects Section</h2>
                                        <p>
                                            The list of your projects
                                        </p>
                                    </div>
                                    <!-- Card -->
                                    <div class="mb-10 card">
                                        <!-- basic table -->
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Name</th>
                                                    <th scope="col">Skill</th>
                                                    <th scope="col">URL</th>
                                                    <th scope="col">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($projects as $project)
                                                    <tr>
                                                        <th scope="row">{{ $project->title ?? 'N/A' }}</th>
                                                        <td>{{ $project->skills ?? 'N/A' }}</td>
                                                        <td>{{ $project->url ?? 'N/A' }}</td>
                                                        <td><a href="{{ route('v1.project.edit', $project->id) }}"><button
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
                            <a href="{{route('v1.project.create')}}"><button type="button" class="btn btn-secondary-soft mb-2">Add New Project</button></a>
                            <span class="px-4 mb-2 d-block text-uppercase ls-md h3 fs-6">Contents</span>
                            <ul class="list-unstyled">
                                <li><a href="#validation">Projects</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
