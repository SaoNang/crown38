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
        <div class="row">

          <!-- table -->
          <div class="col-md-12">
            <div class="card card-primary card-outline">
                <div class="card-header">
                  <h3 class="card-title">User Permission / <a href="#" data-toggle="modal" data-target="#modal-save">Addnew</a></h3>
                </div>

                <div class="card-body">
                  @csrf
                    <table id="example1" class="table table-bordered table-striped dataTable dtr-inline table-hover">
                      <thead>
                        <th>No</th>
                        <th>Family Name</th>
                        <th>Given Name</th>
                        <th>Username</th>
                        <th>Member of</th>
                      </thead>
                      <tbody>
                        @foreach($users as $i=>$user)
                          <tr id="sid{{$user->id}}">
                            <td>{{$i+1}}</td>
                            <td style="cursor: pointer;" onclick="useredit({{$user->id}})">{{$user->fname}}</td>
                            <td style="cursor: pointer;" onclick="useredit({{$user->id}})">{{$user->gname}}</td>
                            <td style="cursor: pointer;" onclick="useredit({{$user->id}})">{{$user->uname}}</td>
                            <td style="cursor: pointer;" onclick="useredit({{$user->id}})">{{$user->ugroup}}</td>
                          </tr>
                        @endforeach
                        
                      </tbody>
                    </table>
                    
                </div>

            </div>
          </div>
          <!-- /table -->
        


        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
    <script>
      function usersave(){
        let fname=$('#fname').val();
        let gname=$('#gname').val();
        let uname=$('#uname').val();
        let upass=$('#upass').val();
        let member=$('#member').val();
        let _token=$('input[name=_token]').val();
        $.ajax({
          url:"{{route('createuser')}}",
          type:"PUT",
          data:{
            fname:fname,
            gname:gname,
            uname:uname,
            upass:upass,
            member:member,
            _token:_token
          },
          success:function(response){
            var table = document.getElementById("example1");
            var rowCount = $('#example1 tbody tr').length;
            var objCells = table.rows.item(rowCount).cells;
            var rowno = parseInt(objCells.item(0).innerHTML)+1;
            $('#example1 tbody').append("<tr id='sid"+response.id+"'>"+
              '<td>'+rowno+'</td>'+
              "<td style='cursor: pointer;' onclick='useredit("+response.id+")'>"+response.fname+'</td>'+
              "<td style='cursor: pointer;' onclick='useredit("+response.id+")'>"+response.gname+'</td>'+
              "<td style='cursor: pointer;' onclick='useredit("+response.id+")'>"+response.uname+'</td>'+
              "<td style='cursor: pointer;' onclick='useredit("+response.id+")'>"+response.member+'</td>'+
              '</tr>'
            );
            $('#modal-save').modal('toggle');
            $('#userSaveForm')[0].reset();
          },
          error: function (request, status, error) {
            alert(request.responseText);
            var json = $.parseJSON(request.responseText);
            if(json.errors['fname']!=null){$('.error-fname').html("  "+json.errors['fname']);}
            if(json.errors['gname']!=null){$('.error-gname').html("  "+json.errors['gname']);}
            if(json.errors['uname']!=null){$('.error-uname').html("  "+json.errors['uname']);}
            if(json.errors['upass']!=null){$('.error-upass').html("  "+json.errors['upass']);}
          }
        });
      }
      function useredit(id){
        $.get('userpermission/'+id, function(data){
          $("#id2").val(data.id);
          $("#fname2").val(data.fname);
          $("#gname2").val(data.gname);
          $("#fname2").val(data.fname);
          $("#uname2").val(data.uname);
          $("#member2").val(data.gid);
          $('#modal-edit').modal('toggle');
        });        
      }
      function userupdate(){
        let id=$('#id2').val();
        let fname=$('#fname2').val();
        let gname=$('#gname2').val();
        let uname=$('#uname2').val();
        let upass=$('#upass2').val();
        let member=$('#member2').val();
        let _token=$('input[name=_token]').val();
        $.ajax({
          url:"{{route('userpermissionupdate')}}",
          type:"PUT",
          data:{
            id:id,
            fname:fname,
            gname:gname,
            uname:uname,
            upass:upass,
            member:member,
            _token:_token
          },
          success:function(response){
            $('#sid' + response.id + ' td:nth-child(2)').text(response.fname);
            $('#sid' + response.id + ' td:nth-child(3)').text(response.gname);
            $('#sid' + response.id + ' td:nth-child(4)').text(response.uname);
            $('#sid' + response.id + ' td:nth-child(5)').text(response.member);
            $('#modal-edit').modal('toggle');
            $('#usereditform')[0].reset();
          },
          error: function (request, status, error) {
            var json = $.parseJSON(request.responseText);
            if(json.errors['fname']!=null){$('.error-fname').html("  "+json.errors['fname']);}
            if(json.errors['gname']!=null){$('.error-gname').html("  "+json.errors['gname']);}
            if(json.errors['uname']!=null){$('.error-uname').html("  "+json.errors['uname']);}
          }
        });
      }
    </script>
    <!-- modal-save -->
    <div class="modal fade show" id="modal-save" style="display: none; padding-right: 17px;" aria-modal="true" role="dialog">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Add New User</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
            </div>
            <form id="userSaveForm">
              @csrf
              <div class="modal-body">
                  <div class="col-sm-12">
                    <div class="form-group">
                      <label for="fname">Family Name</label><span class="text-danger error-fname"></span>
                      <input type="text" class="form-control" name="fname" id="fname" placeholder="Family Name">
                    </div>
                  </div>
                  <div class="col-sm-12">
                    <div class="form-group">
                      <label for="gname">Given Name</label><span class="text-danger error-gname"></span>
                      <input type="text" class="form-control" name="gname" id="gname" placeholder="Given Name">
                    </div>
                  </div>
                  <div class="col-sm-12">
                    <div class="form-group">
                      <label for="uname">Username</label><span class="text-danger error-uname"></span>
                      <input type="text" class="form-control" name="uname" id="uname" placeholder="Username">
                    </div>
                  </div>
                  <div class="col-sm-12">
                    <div class="form-group">
                      <label for="upass">Password</label><span class="text-danger error-upass"></span>
                      <input type="password" class="form-control" name="upass" id="upass" placeholder="Password">
                    </div>
                  </div>
                  <div class="col-sm-12">
                    <div class="form-group">
                      <label for="member">Member of</label>
                      <select class="form-control" name="member" id="member">
                        @foreach($usergroups as $usergroup)
                          <option value="{{$usergroup->id}}">{{$usergroup->ugroup}}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>
                
              </div>
              <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" onclick="usersave()">Save</button>
              </div>
            </form>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /modal-save -->
    <!-- modal-edit -->
    <div class="modal fade show" id="modal-edit" style="display: none; padding-right: 17px;" aria-modal="true" role="dialog">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">User Edit</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
            </div>
            <form id="userEditForm">
              @csrf
              <div class="modal-body">              
                  <input type="hidden" id="id2" name="id2">
                  <div class="col-sm-12">
                    <div class="form-group">
                      <label for="fname">Family Name</label><span class="text-danger error-fname"></span>
                      <input type="text" class="form-control" name="fname" id="fname2" placeholder="Family Name">
                    </div>
                  </div>
                  <div class="col-sm-12">
                    <div class="form-group">
                      <label for="gname">Given Name</label><span class="text-danger error-gname"></span>
                      <input type="text" class="form-control" name="gname" id="gname2" placeholder="Given Name">
                    </div>
                  </div>
                  <div class="col-sm-12">
                    <div class="form-group">
                      <label for="uname">Username</label><span class="text-danger error-uname"></span>
                      <input type="text" class="form-control" name="uname" id="uname2" placeholder="Username">
                    </div>
                  </div>
                  <div class="col-sm-12">
                    <div class="form-group">
                      <label for="upass">Password</label>
                      <input type="password" class="form-control" name="upass" id="upass2" value="*****" placeholder="Password">
                    </div>
                  </div>
                  <div class="col-sm-12">
                    <div class="form-group">
                      <label for="member">Member of</label>
                      <select class="form-control" name="member" id="member2">
                        @foreach($usergroups as $usergroup)
                          <option value="{{$usergroup->id}}">{{$usergroup->ugroup}}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>
                
              </div>
              <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" onclick="userupdate()">Update</button>
              </div>
            </form>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- / modal-edit -->


@endsection