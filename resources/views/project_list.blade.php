
@extends('theme.admin.default')


@section('admin_content')
<style>
  #tableData_filter{
    position: absolute;
    top: 1.2rem;
    right: 1rem;
  }
</style>
<section class="content-main">
  <div class="content-header">
      <div>
          <h2 class="content-title card-title">Project List</h2>
          <!-- <p>Lorem ipsum dolor sit amet.</p> -->
      </div>
      <div>
          <!-- <a href="#" class="btn btn-light rounded font-md">Export</a> -->
          <!-- <a href="#" class="btn btn-light rounded font-md">Import</a> -->
          <a href="{{ route('project_form') }}" class="btn btn-primary btn-sm rounded"><i class="material-icons md-plus" style="font-size:1vw;"></i> Create new</a>
      </div>
  </div>
  <div class="card mb-4">
      <header class="card-header">
          <div class="row align-items-center">
            
          </div>
      </header>
      <!-- card-header end// -->
      <div class="card-body">
          <div class="table-responsive">
              <table class="table table-hover" id="tableData">
                  <thead>
                      <tr>
                          <th></th>
                          <th scope="col">Name</th>
                          <th scope="col">Customer Name</th>
                          <th scope="col">Location</th>
                          <th scope="col">Last modified date</th>
                          <th scope="col" class="text-end">Action</th>
                      </tr>
                  </thead>
                  <tbody>
                    @foreach($projects as $key => $project)
                      <tr>
                          <td>
                            <img src="{{ asset($project->cover) }}" class="img-sm img-thumbnail">
                          </td>
                          <td>{{$project->name}}</td>
                          <td>{{$project->customer_name}}</td>
                          <td>{{$project->location}}</td>
                          <td>{{$project->updated_at->format('d/m/Y H:i:s')}}</td>
                          <td class="text-end">
                            <a href="{{route('project_form_edit',$project->id)}}" class="btn btn-md rounded font-sm "><i class="icon material-icons md-edit mr-5" style="font-size:1rem;"></i>Edit</a>
                            <a class="btn btn-md rounded font-sm btn-info " style="background: #4cbfd6;" href="{{route('project_detail',$project->id)}}">Preview</a>
                            <a class="btn btn-md rounded font-sm btn-danger" style="background: #F30000;"  onclick="return confirmToDelete('form{{ $project->id }}');" href="#">Delete</a>
                            <form method="post" action="{{route('delproject',$project->id)}}" id="form{{ $project->id }}" style="display:inline-block;">
                              {{ method_field('DELETE') }}
                              @csrf
                            </form>
                            <!-- dropdown //end -->
                        </td>
                      </tr>
                    @endforeach
                  </tbody>
              </table>
          </div>
          <!-- table-responsive //end -->
      </div>
      <!-- card-body end// -->
  </div>
  <!-- card end// -->
  <div class="text-right pagination-area mt-30 mb-50">{{ $projects->links() }}</div>
</section>

@endsection

@section('admin_script')
<!-- <script src="{{ asset('/plugins/bs-custom-file-input/bs-custom-file-input.min.js') }}"></script> -->
<script type="text/javascript">

  function confirmToDelete(formis){
    deletealertbox(formis);
  };


</script>
 
@endsection