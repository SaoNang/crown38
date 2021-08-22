@extends('Layouts.adminlte')
@section('title','Products')
@section('content')

    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Products</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="dashboard">Dashboard</a></li>
              <li class="breadcrumb-item active">Products</li>
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
                    <h3 class="card-title">Manage Contacts / <a type="button" class="btn btn-default" data-toggle="modal" data-target="#product-save">Addnew</a></h3>
                  </div>

                  <div class="card-body">
                    @csrf
                      <table id="example1" class="table table-bordered table-striped dataTable dtr-inline table-hover">
                        <thead>
                          <th>No</th>
                          <th>Image</th>
                          <th>Product Name</th>
                          <th>SKU</th>
                          <th>Price</th>
                          <th>QTY</th>
                          <th>Category</th>
                          <th>Store</th>
                          <th>Availability</th>
                          <th>Description</th>
                        </thead>
                        <tbody>
                          @foreach($product_list as $i=>$product)
                            <tr id="sid{{$product->id}}">
                              <td>{{$i+1}}</td>
                              <td style="cursor: pointer;" onclick="productEdit({{$product->id}})"><img src="{{$product->image}}" alt=""></td>
                              <td style="cursor: pointer;" onclick="productEdit({{$product->id}})">{{$product->name}}</td>
                              <td style="cursor: pointer;" onclick="productEdit({{$product->id}})">{{$product->sku}}</td>
                              <td style="cursor: pointer;" onclick="productEdit({{$product->id}})">{{$product->price}}</td>
                              <td style="cursor: pointer;" onclick="productEdit({{$product->id}})">{{$product->qty}}</td>
                              <td style="cursor: pointer;" onclick="productEdit({{$product->id}})">{{$product->category_id}}</td>
                              <td style="cursor: pointer;" onclick="productEdit({{$product->id}})">{{$product->store_id}}</td>
                              <td style="cursor: pointer;" onclick="productEdit({{$product->id}})">{{$product->availability}}</td>
                              <td style="cursor: pointer;" onclick="productEdit({{$product->id}})">{{$product->description}}</td>
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
      function productSave(){
        let name=$('#productName').val();
        let sku=$('#sku').val();
        let price=$('#price').val();
        let qty=$('#qty').val();
        let category_id=$('#category').val();
        let store_id=$('#selectStore').val();
        let availability=$('#availability').val();
        let description=$('#description').val();
        let image=$('#image').val();
        let _token=$('input[name=_token]').val();
        $.ajax({
          url:"{{route('create-product')}}",
          type:"PUT",
          data:{
            name:name,
            sku:sku,
            price:price,
            qty:qty,
            category_id:category_id,
            store_id:store_id,
            availability:availability,
            description:description,
            image:image,
            _token:_token
          },
          success:function(response){
            var table = document.getElementById("example1");
            var rowCount = $('#example1 tbody tr').length;
            var objCells = table.rows.item(rowCount).cells;
            var rowno = parseInt(objCells.item(0).innerHTML)+1;
            $('#example1 tbody').append("<tr id='sid"+response.id+"'>"+
              '<td>'+rowno+'</td>'+
              "<td style='cursor: pointer;' onclick='contactEdit("+response.id+")'>"+response.image+'</td>'+
              "<td style='cursor: pointer;' onclick='contactEdit("+response.id+")'>"+response.name+'</td>'+
              "<td style='cursor: pointer;' onclick='contactEdit("+response.id+")'>"+response.price+'</td>'+
              "<td style='cursor: pointer;' onclick='contactEdit("+response.id+")'>"+response.qty+'</td>'+
              "<td style='cursor: pointer;' onclick='contactEdit("+response.id+")'>"+response.sku+'</td>'+
              "<td style='cursor: pointer;' onclick='contactEdit("+response.id+")'>"+response.category_id+'</td>'+
              "<td style='cursor: pointer;' onclick='contactEdit("+response.id+")'>"+response.store_id+'</td>'+
              "<td style='cursor: pointer;' onclick='contactEdit("+response.id+")'>"+response.availability+'</td>'+
              "<td style='cursor: pointer;' onclick='contactEdit("+response.id+")'>"+response.description+'</td>'+
              '</tr>'
            );
            $('#product-save').modal('toggle');
            $('#productSaveForm')[0].reset();
          },
          error: function (request, status, error) {
            alert(request.responseText);
            var json = $.parseJSON(request.responseText);
            if(json.errors['image']!=null){$('.error-image').html("  "+json.errors['image']);}
            if(json.errors['name']!=null){$('.error-name').html("  "+json.errors['name']);}
            if(json.errors['price']!=null){$('.error-price').html("  "+json.errors['price']);}
            if(json.errors['qty']!=null){$('.error-qty').html("  "+json.errors['qty']);}
            if(json.errors['sku']!=null){$('.error-sku').html("  "+json.errors['sku']);}
            if(json.errors['category_id']!=null){$('.error-category_id').html("  "+json.errors['category_id']);}
            if(json.errors['store_id']!=null){$('.error-store_id').html("  "+json.errors['store_id']);}
            if(json.errors['availability']!=null){$('.error-availability').html("  "+json.errors['availability']);}
            if(json.errors['description']!=null){$('.error-description').html("  "+json.errors['description']);}
          }
        });
      }
      // function contactEdit(id){
      //   $.get('manage-contact/'+id, function(data){
      //     $("#id2").val(data.id);
      //     $("#accountName2").val(data.account_name);
      //     $("#emailOrPhone2").val(data.email_or_phone);
      //     $("#accPassword2").val(data.acc_password);
      //     $("#accId2").val(data.account_id);
      //     $("#accCreateDate2").val(data.acc_create_date);
      //     $('#modal-edit').modal('toggle');
      //   });        
      // }
      // function contactUpdate(){
      //   let id=$('#id2').val();
      //   let account_name=$('#accountName2').val();
      //   let email_or_phone=$('#emailOrPhone2').val();
      //   let acc_password=$('#accPassword2').val();
      //   let account_id=$('#accId2').val();
      //   let acc_create_date=$('#accCreateDate2').val();
      //   let _token=$('input[name=_token]').val();
      //   $.ajax({
      //     url:"{{route('contact-update')}}",
      //     type:"PUT",
      //     data:{
      //       id:id,
      //       acc_create_date:acc_create_date,
      //       account_name:account_name,
      //       email_or_phone:email_or_phone,
      //       acc_password:acc_password,
      //       account_id:account_id,
      //       _token:_token
      //     },
      //     success:function(response){
      //       $('#sid' + response.id + ' td:nth-child(2)').text(response.acc_create_date);
      //       $('#sid' + response.id + ' td:nth-child(3)').text(response.account_name);
      //       $('#sid' + response.id + ' td:nth-child(4)').text(response.email_or_phone);
      //       $('#sid' + response.id + ' td:nth-child(5)').text(response.acc_password);
      //       $('#sid' + response.id + ' td:nth-child(6)').text(response.account_id);
      //       $('#modal-edit').modal('toggle');
      //       $('#contactEditForm')[0].reset();
      //     },
      //     error: function (request, status, error) {
      //       var json = $.parseJSON(request.responseText);
      //       if(json.errors['acc_create_date']!=null){$('.error-acc_create_date').html("  "+json.errors['acc_create_date']);}
      //       if(json.errors['account_name']!=null){$('.error-account_name').html("  "+json.errors['account_name']);}
      //       if(json.errors['email_or_phone']!=null){$('.error-email_or_phone').html("  "+json.errors['email_or_phone']);}
      //       if(json.errors['acc_password']!=null){$('.error-acc_password').html("  "+json.errors['acc_password']);}
      //       if(json.errors['account_id']!=null){$('.error-account_id').html("  "+json.errors['account_id']);}
      //     }
      //   });
      // }
    </script>

    <!-- Product save -->
<div class="modal fade" id="product-save">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Add Product</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="productSaveForm" enctype="multipart/form-data">
          @csrf 
          <div class="row">
            <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
              <div class="form-group">
                <label for="productName">Product Name</label>
                <span class="text-danger error-name"></span>
                <input type="text" class="form-control" name="name" id="productName" placeholder="Product Name">
              </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
              <div class="form-group">
                <label for="sku">SKU</label><span class="text-danger error-sku"></span>
                <input type="text" class="form-control" name="sku" id="sku" placeholder="SKU">
              </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
              <div class="form-group">
                <label for="price">Price</label><span class="text-danger error-price"></span>
                <input type="text" min="1" class="form-control" name="price" id="price" placeholder="Price">
              </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
              <div class="form-group">
                <label for="qty">QTY</label><span class="text-danger error-qty"></span>
                <input type="text" min="1" class="form-control" name="qty" id="qty" placeholder="QTY">
              </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
              <div class="form-group">
                <label for="category">Category</label><span class="text-danger error-category_id"></span>
                <input type="text" class="form-control" name="category_id" id="category" placeholder="Category">
              </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
              <label for="selectStore">Add to Store</label><span class="text-danger error-store_id"></span>
              <select class="select2bs4 select2-hidden-accessible" multiple="" data-placeholder="Select Store" style="width: 100%;" data-select2-id="23" tabindex="-1" aria-hidden="true" name="store_id" id="selectStore">
                <option data-select2-id="46">Store1</option>
                <option data-select2-id="47">Store2</option>
              </select>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
              <div class="form-check form-check-inline" style="margin-bottom: 25px">
                <input class="form-check-input" id="availability" name="availability" value="Instock" type="checkbox" checked>
                <label class="form-check-label" for="availability">
                    Availability
                </label>
              </div>
            </div>
          </div> 
          <div class="row">
            <div class="col-6">
              <!-- textarea -->
              <div class="form-group">
                <label>Description</label><span class="text-danger error-description"></span> 
                <textarea class="form-control" name="description" id="description" rows="3" placeholder="Description ..."></textarea>
              </div>
            </div>
            <div class="col-6">
              <div class="form-group">
                <label for="product_image">Image</label><span class="text-danger error-image"></span>
                <div class="kv-avatar">
                    <div class="file-loading">
                        <input id="image" name="image" type="file">
                    </div>
                </div>
              </div>
              <!-- /.card -->
            </div>
          </div>
          <div class="modal-footer justify-content-between">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary" onclick="productSave()">Save</button>
          </div>
        </form>
      </div>
      
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal -->




 
@endsection