@extends('layouts.admin')
@section('title', 'Server')
@section('page1', 'Server')
@section('page2', 'Server List')

@section('content')
    @if ($message = Session::get('success'))
        <div class="alert alert-success alert-dismissible text-white" role="alert">
            <span class="text-sm">{{ $message }}</span>
            <button type="button" class="btn-close text-lg py-3 opacity-10" data-bs-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
    @if ($message = Session::get('error'))
        <div class="alert alert-danger alert-dismissible text-white" role="alert">
            <span class="text-sm">{{ $message }}</span>
            <button type="button" class="btn-close text-lg py-3 opacity-10" data-bs-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="table">
                            <div class="row">
                                <div class="col-6 align-items-center">
                                    <h2 class="mb-0">Server List</h2>
                                </div>
                                <div class="col-6 text-end align-items-center">
                                    <a class="btn bg-gradient-success mb-0" href="/server/create"><i class="material-icons text-sm">add</i>&nbsp;&nbsp;Add Server</a>
                                </div>
                            </div>
                            <br>
                            <div class="table-responsive">
                                <table class="table align-items-center mb-0">
                                    <thead>
                                        <tr>
                                            <th class="text-uppercase text-secondary text-lg font-weight-bolder ps-2">No.</th>
                                            <th class="text-uppercase text-secondary text-lg font-weight-bolder ps-2">Server IP </th>
                                            <th class="text-uppercase text-secondary text-lg font-weight-bolder ps-2">Username</th>
                                            <!-- <th class="text-uppercase text-secondary text-lg font-weight-bolder ps-2">Password</th> -->
                                            <th colspan="2" class="text-uppercase text-secondary text-lg font-weight-bolder ps-2">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($server as $servers)
                                        <tr>
                                            <td><p class="text-md font-weight-normal mb-0">{{ $server->firstItem()+$loop->index }}</p></th>
                                            <td><p class="text-md font-weight-normal mb-0">{{ $servers->server_ip}}</p></td>
                                            <td><p class="text-md font-weight-normal mb-0">{{ $servers->username }}</p></td>
                                            <!-- <td><p class="text-md font-weight-normal mb-0">{{ $servers->password }}</p></td> -->
                                            <td class="align-middle text-center">
                                                <div class="d-flex align-items-center">
                                                    <a href="server/{{$servers->id}}/show" class="m-1 btn bg-gradient-info"><i class="material-icons text-sm me-2">visibility</i>View</a>
                                                    <a href="server/{{$servers->id}}/edit" class="m-1 btn bg-gradient-warning"><i class="material-icons text-sm me-2">edit</i>Edit</a>
                                                    <a href="server/{{$servers->id}}/delete" class="m-1 btn bg-gradient-danger" onclick="return confirm('Apa yakin ingin menghapus data ini?')"><i class="material-icons text-sm me-2">delete</i>Delete</a>
                                                </div>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            {{ $server->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
