@extends('Layouts.adminlte')
@section('title','Contact Manager')
@section('content')

    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Contact Manager</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="dashboard">Dashboard</a></li>
              <li class="breadcrumb-item active">Contact Manager</li>
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
                    <h3 class="card-title">Manage Contacts / <a href="#" data-toggle="modal" data-target="#contact-save">Addnew</a></h3>
                  </div>

                  <div class="card-body">
                    @csrf
                      <table id="example1" class="table table-bordered table-striped dataTable dtr-inline table-hover">
                        <thead>
                          <th>No</th>
                          <th>Create Date</th>
                          <th>Account Name</th>
                          <th>Email/Phone</th>
                          <th>Password</th>
                          <th>FB/Mail ID</th>
                        </thead>
                        <tbody>
                          @foreach($get_contact as $i=>$contact)
                            <tr id="sid{{$contact->id}}">
                              <td>{{$i+1}}</td>
                              <td style="cursor: pointer;" onclick="contactEdit({{$contact->id}})">{{$contact->acc_create_date}}</td>
                              <td style="cursor: pointer;" onclick="contactEdit({{$contact->id}})">{{$contact->account_name}}</td>
                              <td style="cursor: pointer;" onclick="contactEdit({{$contact->id}})">{{$contact->email_or_phone}}</td>
                              <td style="cursor: pointer;" onclick="contactEdit({{$contact->id}})">{{$contact->acc_password}}</td>
                              <td style="cursor: pointer;" onclick="contactEdit({{$contact->id}})">{{$contact->account_id}}</td>
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



    <script>
      function contactSave(){
        let account_name=$('#accountName').val();
        let email_or_phone=$('#emailOrPhone').val();
        let acc_password=$('#accPassword').val();
        let account_id=$('#accId').val();
        let acc_create_date=$('#accCreateDate').val();
        let _token=$('input[name=_token]').val();
        $.ajax({
          url:"{{route('create-contact')}}",
          type:"PUT",
          data:{
            acc_create_date:acc_create_date,
            account_name:account_name,
            email_or_phone:email_or_phone,
            acc_password:acc_password,
            account_id:account_id,
            _token:_token
          },
          success:function(response){
            var table = document.getElementById("example1");
            var rowCount = $('#example1 tbody tr').length;
            var objCells = table.rows.item(rowCount).cells;
            var rowno = parseInt(objCells.item(0).innerHTML)+1;
            $('#example1 tbody').append("<tr id='sid"+response.id+"'>"+
              '<td>'+rowno+'</td>'+
              "<td style='cursor: pointer;' onclick='contactEdit("+response.id+")'>"+response.acc_create_date+'</td>'+
              "<td style='cursor: pointer;' onclick='contactEdit("+response.id+")'>"+response.account_name+'</td>'+
              "<td style='cursor: pointer;' onclick='contactEdit("+response.id+")'>"+response.email_or_phone+'</td>'+
              "<td style='cursor: pointer;' onclick='contactEdit("+response.id+")'>"+response.acc_password+'</td>'+
              "<td style='cursor: pointer;' onclick='contactEdit("+response.id+")'>"+response.account_id+'</td>'+
              '</tr>'
            );
            $('#contact-save').modal('toggle');
            $('#contactSaveForm')[0].reset();
          },
          error: function (request, status, error) {
            alert(request.responseText);
            var json = $.parseJSON(request.responseText);
            if(json.errors['acc_create_date']!=null){$('.error-acc_create_date').html("  "+json.errors['acc_create_date']);}
            if(json.errors['account_name']!=null){$('.error-account_name').html("  "+json.errors['account_name']);}
            if(json.errors['email_or_phone']!=null){$('.error-email_or_phone').html("  "+json.errors['email_or_phone']);}
            if(json.errors['acc_password']!=null){$('.error-acc_password').html("  "+json.errors['acc_password']);}
            if(json.errors['account_id']!=null){$('.error-account_id').html("  "+json.errors['account_id']);}
          }
        });
      }
      function contactEdit(id){
        $.get('manage-contact/'+id, function(data){
          $("#id2").val(data.id);
          $("#accountName2").val(data.account_name);
          $("#emailOrPhone2").val(data.email_or_phone);
          $("#accPassword2").val(data.acc_password);
          $("#accId2").val(data.account_id);
          $("#accCreateDate2").val(data.acc_create_date);
          $('#modal-edit').modal('toggle');
        });        
      }
      function contactUpdate(){
        let id=$('#id2').val();
        let account_name=$('#accountName2').val();
        let email_or_phone=$('#emailOrPhone2').val();
        let acc_password=$('#accPassword2').val();
        let account_id=$('#accId2').val();
        let acc_create_date=$('#accCreateDate2').val();
        let _token=$('input[name=_token]').val();
        $.ajax({
          url:"{{route('contact-update')}}",
          type:"PUT",
          data:{
            id:id,
            acc_create_date:acc_create_date,
            account_name:account_name,
            email_or_phone:email_or_phone,
            acc_password:acc_password,
            account_id:account_id,
            _token:_token
          },
          success:function(response){
            $('#sid' + response.id + ' td:nth-child(2)').text(response.acc_create_date);
            $('#sid' + response.id + ' td:nth-child(3)').text(response.account_name);
            $('#sid' + response.id + ' td:nth-child(4)').text(response.email_or_phone);
            $('#sid' + response.id + ' td:nth-child(5)').text(response.acc_password);
            $('#sid' + response.id + ' td:nth-child(6)').text(response.account_id);
            $('#modal-edit').modal('toggle');
            $('#contactEditForm')[0].reset();
          },
          error: function (request, status, error) {
            var json = $.parseJSON(request.responseText);
            if(json.errors['acc_create_date']!=null){$('.error-acc_create_date').html("  "+json.errors['acc_create_date']);}
            if(json.errors['account_name']!=null){$('.error-account_name').html("  "+json.errors['account_name']);}
            if(json.errors['email_or_phone']!=null){$('.error-email_or_phone').html("  "+json.errors['email_or_phone']);}
            if(json.errors['acc_password']!=null){$('.error-acc_password').html("  "+json.errors['acc_password']);}
            if(json.errors['account_id']!=null){$('.error-account_id').html("  "+json.errors['account_id']);}
          }
        });
      }
    </script>
    <!-- contact-save -->
    <div class="modal fade show" id="contact-save" style="display: none; padding-right: 17px;" aria-modal="true" role="dialog">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Add Contact</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
            </div>
            <form id="contactSaveForm">
              @csrf
              <div class="modal-body">
                  <div class="col-sm-12">
                    <div class="form-group">
                      <label for="accountName">Account Name</label>
                      <span class="text-danger error-user_name"></span>
                      <input type="text" class="form-control" name="account_name" id="accountName" placeholder="Account Name">
                    </div>
                  </div>
                  <div class="col-sm-12">
                    <div class="form-group">
                      <label for="emailOrPhone">Email/Phone</label><span class="text-danger error-email_or_phone"></span>
                      <input type="text" class="form-control" name="email_or_phone" id="emailOrPhone" placeholder="Email/Phone">
                    </div>
                  </div>
                  <div class="col-sm-12">
                    <div class="form-group">
                      <label for="accPassword">Account Password</label><span class="text-danger error-password"></span>
                      <input type="password" class="form-control" name="acc_password" id="accPassword" placeholder="Account Password">
                    </div>
                  </div>
                  <div class="col-sm-12">
                    <div class="form-group">
                      <label for="accId">Account ID</label><span class="text-danger error-fb_or_mail_id"></span>
                      <input type="text" class="form-control" name="account_id" id="accId" placeholder="Account ID">
                    </div>
                  </div>
                  <div class="col-sm-12">
                    <div class="form-group">
                      <label>Create Date</label>
                      <span class="text-danger error-create_date"></span>
                        <div class="input-group date" id="reservationdatetime" data-target-input="nearest">
                            <input type="text" class="form-control datetimepicker-input input-group-append" data-toggle="datetimepicker" id="accCreateDate" name="acc_create_date" data-target="#reservationdatetime"/>
                            <div class="input-group-append" data-target="#reservationdatetime" data-toggle="datetimepicker">
                                <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                            </div>
                        </div>
                    </div>
                    <!-- /.form group -->
                  </div>
                  <!-- Date and time -->
                
              </div>
              <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" onclick="contactSave()">Save</button>
              </div>
            </form>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /contact-save -->
    <!-- modal-edit -->
    <div class="modal fade show" id="modal-edit" style="display: none; padding-right: 17px;" aria-modal="true" role="dialog">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Contact Edit</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
            </div>
            <form id="contactEditForm">
              @csrf
              <div class="modal-body">              
                  <input type="hidden" id="id2" name="id2">
                  <div class="col-sm-12">
                    <div class="form-group">
                      <label for="accountName2">Account Name</label><span class="text-danger error-fname"></span>
                      <input type="text" class="form-control" name="account_name2" id="accountName2" placeholder="Account Name">
                    </div>
                  </div>
                  <div class="col-sm-12">
                    <div class="form-group">
                      <label for="emailOrPhone2">Email/Phone</label><span class="text-danger error-gname"></span>
                      <input type="text" class="form-control" name="email_or_phone2" id="emailOrPhone2" placeholder="Email/Phone">
                    </div>
                  </div>
                  <div class="col-sm-12">
                    <div class="form-group">
                      <label for="accPassword2">Username</label><span class="text-danger error-uname"></span>
                      <input type="password" class="form-control" name="acc_password" id="accPassword2" value="*****" placeholder="Account Password">
                    </div>
                  </div>
                  <div class="col-sm-12">
                    <div class="form-group">
                      <label for="accId2">Password</label>
                      <input type="text" class="form-control" name="account_id" id="accId2" placeholder="Password">
                    </div>
                  </div>
                  <!-- Date and time -->
                <div class="form-group">
                  <label>Create Date</label>
                    <div class="input-group date" id="reservationdatetime2" data-target-input="nearest">
                        <input type="text" class="form-control datetimepicker-input input-group-append" data-toggle="datetimepicker" id="accCreateDate2" name="acc_create_date" data-target="#reservationdatetime2"/>
                        <div class="input-group-append" data-target="#reservationdatetime2" data-toggle="datetimepicker">
                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                        </div>
                    </div>
                </div>
                <!-- /.form group -->
                
              </div>
              <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" onclick="contactUpdate()">Update</button>
              </div>
            </form>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- / modal-edit -->
  
  
@endsection