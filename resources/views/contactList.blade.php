
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
          {{-- <a href="{{ route('project_form') }}" class="btn btn-primary btn-sm rounded"><i class="material-icons md-plus" style="font-size:1vw;"></i> Create new</a> --}}
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
                          <th scope="col">ชื่อ</th>
                          <th scope="col">เบอร์โทรศัพท์</th>
                          <th scope="col">อีเมล</th>
                          <th scope="col">ข้อความ</th>
                          <th scope="col">Last modified date</th>
                      </tr>
                  </thead>
                  <tbody>
                    @foreach($contacts as $key => $contact)
                      <tr>

                          <td>{{$contact->name}}</td>
                          <td>{{$contact->phonenumber}}</td>
                          <td>{{$contact->email}}</td>
                          <td>{{$contact->message}}</td>
                          <td>{{$contact->updated_at->format('d/m/Y H:i:s')}}</td>
         
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
  <div class="text-right pagination-area mt-30 mb-50">{{ $contacts->links() }}</div>
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