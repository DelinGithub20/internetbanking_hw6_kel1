@extends('app')

@section('content')

<main class="content container mx-auto">

    <div class="content-header">
        <h4 class="content-title ~mx-auto">Dashboard</h4>

    </div>

    <div class="content-body">
        <div class="row">
            <div class="col-lg-4 col-sm-6">
                <div class="card mb-4">
                    <div class="card-body d-flex align-items-center">
                        <div>
                            <div
                                class="w-12 h-12 bg-success me-4 rounded-3 d-flex align-items-center justify-content-center text-white">
                                <svg class="h-6 w-6 text-white" x-description="Heroicon name: outline/mail-open"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 19v-8.93a2 2 0 01.89-1.664l7-4.666a2 2 0 012.22 0l7 4.666A2 2 0 0121 10.07V19M3 19a2 2 0 002 2h14a2 2 0 002-2M3 19l6.75-4.5M21 19l-6.75-4.5M3 10l6.75 4.5M21 10l-6.75 4.5m0 0l-1.14.76a2 2 0 01-2.22 0l-1.14-.76">
                                    </path>
                                </svg>
                            </div>
                        </div>
                        <div>
                            <div class="mb-1">
                                <span class="text-secondary">Title Widget</span>
                            </div>
                            <span class="h3 mb-0 lh-1">5.816</span>
                        </div>
                    </div>
                    <div class="card-footer py-3">
                        <a href="" class="text-decoration-none">Learn More</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="content-header">
            <h5 class="content-title">Content table</h5>
            <div class="ms-auto">
                <button class="btn btn-default">Load More</button>
            </div>
        </div>
        <div class="card mb-4">
            <table class="table table-striped table-hover mb-0">
                <thead>
                    <tr>
                        <th width="1" scope="col">#</th>
                        <th scope="col">First</th>
                        <th scope="col">Last</th>
                        <th scope="col">Handle</th>
                        <th scope="col" width="1"></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                        <td class="text-nowrap">
                            <a class="btn btn-xs btn-primary" href="#" onclick="return false;">Edit</a>
                            <a class="btn btn-xs btn-danger" href="#" onclick="return false;">Delete</a>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                        <td class="text-nowrap">
                            <a class="btn btn-xs btn-primary" href="#" onclick="return false;">Edit</a>
                            <a class="btn btn-xs btn-danger" href="#" onclick="return false;">Delete</a>

             </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td colspan="2">Larry the Bird</td>
                        <td>@twitter</td>
                        <td class="text-nowrap">
                            <a class="btn btn-xs btn-primary" href="#" onclick="return false;">Edit</a>
                            <a class="btn btn-xs btn-danger" href="#" onclick="return false;">Delete</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</main>

@endsection
