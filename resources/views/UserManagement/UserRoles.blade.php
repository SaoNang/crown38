@extends('Layouts.adminlte')
@section('title','User Permission')
@section('content')

    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">User Permission</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="dashboard">Dashboard</a></li>
              <li class="breadcrumb-item active">User Permission</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">User Permission</h3>
          </div>
          <div class="card-body">
            <!-- Minimal style -->
            <div class="row">
              <div class="col-2">
                User
              </div>
              <div class="col-sm-4">
                <div class="icheck-primary">
                  <input type="checkbox"id="primary1" />
                  <label for="primary1">Select All</label>
                </div>
              </div>
              <div class="col-sm-6">
                <form action="user-roles" method="GET">
                  <div class="icheck-primary">
                    <input type="checkbox"id="primary2" checked/>
                    <label for="primary2">View User</label>
                  </div>
                  <div class="icheck-primary">
                    <input type="checkbox"id="primary3" />
                    <label for="primary3">Create User</label>
                  </div>
                  <div class="icheck-primary">
                    <input type="checkbox"id="primary4" />
                    <label for="primary4">Edit User</label>
                  </div>
                  <div class="icheck-primary">
                    <input type="checkbox"id="primary5" />
                    <label for="primary5">Delete User</label>
                  </div>

                  <button type="submit">Save</button>
                </form>
              </div>
            </div>
          </div>
        </div>
        <!-- /.card -->
     </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->

@endsection