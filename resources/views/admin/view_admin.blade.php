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

                  <h4 class="card-title">View Admins</h4>
                  <div class="row">
                    <div class="col s12">
                      <table id="page-length-option" class="display Highlight">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Status</th>
                            <th scope="col">Role</th>
                            <th scope="col" width="25%">Action</th>
                          </tr>
                        </thead>
                        <tbody> 


                          @if($records)
                            @php $i="1"; @endphp

                              @foreach($records as $record)
                                <tr>
                                  <th scope="row">{{$i}}</th>
                                  <td>{{$record->name}}</td>
                                  <td>{{$record->email}}</td>
                                  <td>{{!empty($record->status) ? 'Active' : 'Inactive' }}</td>
                                  <td>{{($record->role == 1) ? 'Super Admin' : (($record->role == 2) ? 'Admin' : (($record->role == 3) ? 'Data Entry Operator' : 'N/A')) }}</td>
                                  @if($record->role != 1)
                                    <td>
                                      <a href="{{ url('admin/edit-admin', $record->id)}}" type="button" class="btn btn-primary rounded-pill" >Edit</a>&nbsp;&nbsp; 
                                      <a href="#" onClick="confirmation(<?php echo $record->id; ?>);" class="btn btn-danger rounded-pill" >Delete</a>
                                      
                                    </td>
                                  @else 
                                    <td>
                                      
                                    </td>
                                  @endif
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
             window.location.href = "{{url('')}}/admin/delete-admin/"+value;
           }
          else{
           }
         });
      }
</script>
@endsection