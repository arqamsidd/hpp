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

                  

                  <h4 class="card-title"><?= !empty($heading) ? $heading : 'View All Custom Quotes';?></h4>
                  <div class="row">
                    <div class="col s12">
                      <form class="formValidate0" id="formValidate0" method="Post" action="{{ url('admin/view-custom-quotes-filter') }}" enctype="multipart/form-data">
                       @csrf
                        <div class="col s4">
                          <select class="error validate" name="form_type" required>
                            <option value="All" <?php if(!empty($form_type == 'All')): ?> selected <?php endif ?> >All</option>
                            <option value="Custom Quote" <?php if(!empty($form_type == 'Custom Quote')): ?> selected <?php endif ?> >Custom Quote</option>
                            <option value="Intant Quote" <?php if(!empty($form_type == 'Intant Quote')): ?> selected <?php endif ?> >Intant Quote</option>
                            <option value="SampleKit" <?php if(!empty($form_type == 'SampleKit')): ?> selected <?php endif ?> >Sample Kit</option>
                            <option value="Contact Us" <?php if(!empty($form_type == 'Contact Us')): ?> selected <?php endif ?> >Contact Us</option>
                            <option value="Popup" <?php if(!empty($form_type == 'Popup')): ?> selected <?php endif ?> >Popup Qoute</option>
                          </select>
                        </div>
                        <div class="col s2">
                          <button class="btn waves-effect waves-light" style="margin: 10px;" type="submit" name="action">Submit
                            <i class="material-icons right">send</i>
                          </button>
                        </div>
                      </form>

                      <table id="page-length-option" class="display Highlight">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Slug</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Phone</th>
                            <th scope="col">Description</th>
                            <th scope="col">Unit</th>
                            <th scope="col">Material</th>
                            <th scope="col">Length</th>
                            <th scope="col">Width</th>
                            <th scope="col">Depth</th>
                            <th scope="col">Quantity</th>
                            <th scope="col">Printing</th>
                            <th scope="col">Card Thickness</th>
                            <th scope="col">Extra Finishes</th>
                            <th scope="col">Coating Lamination</th>
                            <th scope="col">Artwork</th>
                            
                            
                          </tr>
                        </thead>
                        <tbody> 


                          @if($records)
                            @php $i="1"; @endphp

                              @foreach($records as $record)
                                <tr>
                                  <th scope="row">{{$i}}</th>
                                  <td>{{$record->page_url}}</td>
                                  <td>{{$record->name}}</td>
                                  <td>{{$record->email}}</td>
                                  <td>{{$record->phone}}</td>
                                  <td>{{!empty($record->description) ? $record->description : ''}}</td>
                                  <td>{{!empty($record->unit) ? $record->unit : ''}}</td>
                                  <td>{{!empty($record->material) ? $record->material : ''}}</td>
                                  <td>{{!empty($record->length) ? $record->length : ''}}</td>
                                  <td>{{!empty($record->width) ? $record->width : ''}}</td>
                                  <td>{{!empty($record->depth) ? $record->depth : ''}}</td>
                                  <td>{{!empty($record->quantity) ? $record->quantity : ''}}</td>
                                  <td>{{!empty($record->printing) ? $record->printing : ''}}</td>
                                  <td>{{!empty($record->card_thickness) ? $record->card_thickness : ''}}</td>
                                  <td>{{!empty($record->extra_finishes) ? $record->extra_finishes : ''}}</td>
                                  <td>{{!empty($record->coating_lamination) ? $record->coating_lamination : ''}}</td>
                                  <!--<td>{{!empty($record->image) ? $record->image : ''}}</td>-->
                                  
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
             window.location.href = "{{url('')}}/admin/delete-page/"+value;
           }
          else{
           }
         });
      }
</script>
@endsection