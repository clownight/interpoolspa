@extends('theme.admin.default')

@section('admin_content')
<!-- ==================== Start Header ==================== -->
<section class="content-main">
    <div class="row">
        <div class="col-9">
            <div class="content-header">
                <h2 class="content-title">Add New Project</h2>
                <div>
                    {{-- <button class="btn btn-light rounded font-sm mr-5 text-body hover-up">Save to draft</button> --}}
                    {{-- <button class="btn btn-md rounded font-sm hover-up">Publich</button> --}}
                </div>
            </div>
        </div>
        @if (is_null($house))
        @else
        <div class="alert alert-success alert-block">
            <strong>บันทึกเรียบร้อย</strong>
        </div>
            @endif
                        <form action="product_form" method="POST" enctype="multipart/form-data">
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
                                    <input type="text" placeholder="Type here" class="form-control" name="name" id="name" />
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">รายละเอียด</label>
                                    <textarea placeholder="Type here" class="form-control" rows="4" name="description" id="description"></textarea>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3">
                                        <div class="mb-4">
                                            <label class="form-label">พื้นที่ ตารางวา</label>
                                            <div class="row gx-2">
                                                <input placeholder="" type="text" class="form-control" name="area" id="area" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="mb-4">
                                            <label class="form-label">ห้องนอน</label>
                                            <div class="row gx-2">
                                                <input placeholder="" type="text" class="form-control" name="bed_room" id="bed_room" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="mb-4">
                                            <label class="form-label">ห้องน้ำ</label>
                                            <div class="row gx-2">
                                                <input placeholder="" type="text" class="form-control" name="bath_room" id="bath_room" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="mb-4">
                                            <label class="form-label">ห้องนั่งเล่น</label>
                                            <div class="row gx-2">
                                                <input placeholder="" type="text" class="form-control" name="living_room" id="living_room" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="mb-4">
                                            <label class="form-label">ห้องครัว</label>
                                            <div class="row gx-2">
                                                <input placeholder="" type="text" class="form-control" name="kitchen_room" id="kitchen_room" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="mb-4">
                                            <label class="form-label">สระว่ายน้ำ</label>
                                            <div class="row gx-2">
                                                <input placeholder="" type="text" class="form-control" name="pool_villa" id="pool_villa" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="mb-4">
                                            <label class="form-label">ที่จอดรถ</label>
                                            <div class="row gx-2">
                                                <input placeholder="" type="text" class="form-control" name="car_park" id="car_park" />
                                            </div>
                                        </div>
                                    </div>
                                </div>    
                                <div class="mb-4">
                                    <label class="form-label">ที่อยู่</label>
                                    <textarea placeholder="Type here" class="form-control" rows="4" name="location" id="location"></textarea>
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">ใกล้สถานที่</label>
                                    <textarea placeholder="Type here" class="form-control" rows="4" name="near_location" id="near_location"></textarea>
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
                                <input class="form-control" type="file" id="images" name="images[]" multiple accept="image/png, image/gif, image/jpeg"/>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-4">
                        <div class="card-header">
                            <h4>รูปปก</h4>
                        </div>
                        <div class="card-body">
                            <div class="input-upload">
                                <img src="assets/imgs/theme/upload.svg" alt="" />
                                <input class="form-control" type="file" id="cover" name="cover" accept="image/png, image/gif, image/jpeg"/>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-4">
                        <div class="card-header">
                            <h4>รูปพิมพ์เขียว</h4>
                        </div>
                        <div class="card-body">
                            <div class="input-upload">
                                <img src="assets/imgs/theme/upload.svg" alt="" />
                                <input class="form-control" type="file" id="blueprint" name="blueprint" accept="image/png, image/gif, image/jpeg"/>
                            </div>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-md rounded font-sm hover-up">บันทึก</button>
           
        </div>
 </form>
    </div>
</section>
@endsection