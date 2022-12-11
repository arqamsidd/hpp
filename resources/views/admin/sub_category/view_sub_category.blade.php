@extends('admin.layouts.admin')
@section('content')

  <!-- BEGIN: Page Main-->
  <div id="main">
    <div class="row">
      <div class="content-wrapper-before gradient-45deg-indigo-purple"></div>

      <div class="col s12">
        <div class="container">
            <div class="section section-data-tables">

        <!-- Page Length Options -->
          <div class="row">
            <div class="col s12">
              <div class="card">
                <div class="card-content">
                @if(session()->get('success'))
                  <div class="card-alert card gradient-45deg-green-teal">
                    <div class="card-content white-text">
                      <p>
                        <i class="material-icons">check</i> SUCCESS : {{ session()->get('success') }} </p>
                    </div>
                    <button type="button" class="close white-text" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">×</span>
                    </button>
                  </div>
                @endif
                @if(session()->get('error'))
                  <div class="card-alert card gradient-45deg-red-pink">
                    <div class="card-content white-text">
                      <p>
                        <i class="material-icons">error</i> DANGER : {{ session()->get('error') }}</p>
                    </div>
                    <button type="button" class="close white-text" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">×</span>
                    </button>
                  </div>
                @endif

                  <h4 class="card-title">View Sub Categories</h4>
                  <div class="row">
                    <div class="col s12">
                      <table id="page-length-option" class="display Highlight">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Sub Category</th>
                            @if(empty($is_getSubcategoriesWithCategoryId))
                            <th scope="col">Category</th>
                            <th scope="col">Slug Link</th>
                            @endif
                            <th>Sort Order</th>
                            <th scope="col">Status</th>
                            <th scope="col" width="25%">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          @if($records)
                            @php $i="1"; @endphp

                              @foreach($records as $record)
                                <tr>
                                  <th scope="row">{{$i}}</th>
                                  <td><a href="{{ url('admin/subcategory').'/'.$record->id}}">{{$record->sub_cat_name}}</a></td>
                                  @if(empty($is_getSubcategoriesWithCategoryId))
                                  <td>{{$record->cat_name}}</td>
                                   <td>{{$record->slug}}</td>
                                  @endif
                                  <td>{{$record->sort_order }}</td>
                                  <td>{{!empty($record->status) && ($record->status == '1') ? 'Active' : 'Inactive' }}</td>
                                  <td>
                                    <a href="{{ url('admin/edit-sub-category', $record->id)}}" type="button" class="btn btn-primary rounded-pill" >Edit</a>&nbsp;&nbsp; 
                                    <a href="#" onClick="confirmation(<?php echo $record->id; ?>);" class="btn btn-danger rounded-pill" >Delete</a>
                                    <!-- <button type="button" class="btn btn-primary rounded-pill">Edit</button> &nbsp;&nbsp;  -->
                                    
                                  </td>
                                </tr>
                                @php $i++; @endphp
                                @endforeach
                            @endif
                        </tbody>
                        
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Page Length End Options -->
         </div><!-- START RIGHT SIDEBAR NAV -->
        </div>
      </div>
      <div class="content-overlay"></div>
    </div>
  </div>
@endsection
@section('script')
<script type="text/javascript">
  function confirmation(value){
         event.preventDefault();
            alertify.confirm("Are you Sure you Want to Delete?", function (e) {
          if (e) {
             window.location.href = "{{url('')}}/admin/delete-sub-category/"+value;
           }
          else{
           }
         });
      }
</script>
@endsection