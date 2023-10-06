@extends('theme.admin.default')

@section('admin_content')
<!-- ==================== Start Header ==================== -->
<section class="content-main">
    <div class="row">
        <div class="col-9">
            <div class="content-header">
                <h2 class="content-title">{{$project->name}}</h2>
                <div>
                    {{-- <button class="btn btn-light rounded font-sm mr-5 text-body hover-up">Save to draft</button> --}}
                    {{-- <button class="btn btn-md rounded font-sm hover-up">Publich</button> --}}
                </div>
            </div>
        </div>
        @if (is_null($project))
        @else
        {{-- <div class="alert alert-success alert-block">
            <strong>บันทึกเรียบร้อย</strong>
        </div> --}}
            @endif
                <form action="{{route('project_form_update',$project->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
            <div class="row">
                <div class="col-lg-6">
                    <div class="card mb-4">
                        <div class="card-header">
                            <h4>Basic</h4>
                        </div>
                        <div class="card-body">
                                <div class="mb-4">
                                    <label for="name" class="form-label">ชื่อ</label>
                                    <input type="text" required placeholder="Type here" class="form-control" name="name" id="name" value="{{$project->name}}"/>
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">รายละเอียด</label>
                                    <textarea placeholder="Type here" class="form-control" rows="4" name="description" id="description">{{$project->description}}</textarea>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-lg-12">
                                        <div class="mb-12">
                                            <label class="form-label">ขนาด</label>
                                            <div class="row gx-2">
                                                <input placeholder="ขนาดสระว่ายน้ำ" required type="text" class="form-control" name="size" id="size" value="{{$project->size}}"/>
                                            </div>
                                        </div>
                                    </div>

                                </div>   
                                
                                <div class="mb-4">
                                    <label for="name" class="form-label">ลูกค้า</label>
                                    <input type="text"  required ="Type here" class="form-control" name="customer_name" id="customer_name" value="{{$project->customer_name}}"/>
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">ที่อยู่</label>
                                    <textarea placeholder="Type here" class="form-control" rows="4" name="location" id="location"> {{$project->location}}</textarea>
                                </div>

                            
                        </div>
                    </div>
                    <!-- card end// -->
                </div>
                <div class="col-lg-3">
                    <div class="card mb-4">
                        <div class="card-header">
                            <h4>Images</h4>
                        </div>
                        <div class="card-body">
                            <div class="input-upload">
                                <img src="assets/imgs/theme/upload.svg" alt="" />
                                <input class="form-control" type="file" id="images"  name="images[]" multiple accept="image/png, image/gif, image/jpeg"/>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-4">
                        <div class="card-header">
                            <h4>รูปปก</h4>
                        </div>
                        <div class="card-body">
                            <div class="input-upload">
                                <img src="{{$project->cover}}" alt="" />
                                <input class="form-control" type="file" id="cover"   name="cover" accept="image/png, image/gif, image/jpeg"/>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-4">
                        <div class="card-header">
                            <h4>Tags</h4>
                        </div>
                        <div class="card-body">
                            <div class="form-check">
                               
                                    
                                <input class="form-check-input" type="checkbox" value="pool" name="tag_pool" @foreach (json_decode($project->tag) as $tag) @if($tag->tag=="pool") checked @endif  @endforeach>
                                <label class="form-check-label" for="flexCheckDefault">
                                 Pool Villa
                                </label>
                              
                              </div>
                              <div class="form-check">
                                
                                
                                <input class="form-check-input" type="checkbox" value="sauna" name="tag_sauna"  @foreach (json_decode($project->tag) as $tag) @if($tag->tag=="sauna") checked @endif  @endforeach                           <label class="form-check-label" for="flexCheckChecked">
                                    Sauna
                                </label>
                               
                              </div>
                              <div class="form-check">
                                
                                <input class="form-check-input" type="checkbox" value="steam" name="tag_steam" @foreach (json_decode($project->tag) as $tag) @if($tag->tag=="steam") checked @endif  @endforeach                           <label class="form-check-label" for="flexCheckChecked">
                                    Steam
                                </label>
                               
                              </div>
                              <div class="form-check">
                                
                                <input class="form-check-input" type="checkbox" value="onsen" name="tag_onsen" @foreach (json_decode($project->tag) as $tag) @if($tag->tag=="onsen") checked @endif  @endforeach                           <label class="form-check-label" for="flexCheckChecked">
                                    Onsen
                                </label>
                               
                              </div>
                              <div class="form-check">
                               
                                <input class="form-check-input" type="checkbox" value="hydrotherapy" name="tag_hydrotherapy" @foreach (json_decode($project->tag) as $tag) @if($tag->tag=="hydrotherapy") checked @endif  @endforeach>
                                <label class="form-check-label" for="flexCheckChecked">
                                    Hydrotherapy
                                </label>
                               
                              </div>
                        </div>
                    </div>
                </div>
                <div class="col-2 text-right">
                    <button type="submit" class="btn btn-md rounded font-sm hover-up">บันทึก</button>
                </div>
           
            </div>
        </form>
    </div>
</section>
@endsection