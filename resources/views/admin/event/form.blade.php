@extends('layouts.layoutAD')

@section('title')
Quản lý Sự kiện
@endsection

@section('noidung')
<link rel="stylesheet" href="/css/event.css">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css" rel="stylesheet">

<div class="container-fluid page-body-wrapper">
    <!-- partial:../../partials/_sidebar.html -->
    @include('layouts.menuAD')
    <!-- partial -->
    <div class="main-panel">
        <div class="content-wrapper">
            <form id="myForm" class="forms-sample" method="POST" enctype="multipart/form-data" action="{{ isset($event) ? route('admin.updateEvent', $event->id) : route('admin.addEvent') }}">
                @csrf
                @method(isset($event) ? 'PUT' : 'POST')
                <div class="row">
                    <div class="col-lg-6 m-auto grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">{{ isset($event) ? 'Cập nhật' : 'Thêm' }} sự kiện</h4>
                                <p class="card-description">
                                    Điền thông tin cho sự kiện
                                </p>
                                <div class="form-group">
                                    <label for="event_name">Tên sự kiện</label>
                                    <input type="text" name="event_name" class="form-control" id="event_name" placeholder="Tên sự kiện" value="{{ $event->event_name ?? old('event_name') }}" required>
                                    @error('event_name')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="start_date">Ngày và thời gian bắt đầu</label>
                                    <input type="datetime-local" name="start_date" class="form-control" id="start_date" placeholder="Thời gian bắt đầu" value="{{ $event->start_date ?? old('start_date') }}" required>
                                    @error('start_date')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="end_date">Ngày và thời gian kết thúc</label>
                                    <input type="datetime-local" name="end_date" class="form-control" id="end_date" placeholder="Thời gian kết thúc" value="{{ $event->end_date ?? old('end_date') }}" required>
                                    @error('end_date')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="priority">Mức độ ưu tiên</label>
                                    <select name="priority" id="priority">
                                        <option value="1" {{ ($event->priority ?? old('priority')) == '1' ? 'selected' : '' }}>Thấp</option>
                                        <option value="2" {{ ($event->priority ?? old('priority')) == '2' ? 'selected' : '' }}>Trung bình</option>
                                        <option value="3" {{ ($event->priority ?? old('priority')) == '3' ? 'selected' : '' }}>Cao</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="describe">Chi tiết sự kiện</label>
                                    <textarea name="describe" class="form-control" id="describe" placeholder="Chi tiết sự kiện" rows="8" required>{{ $event->describe ?? old('describe') }}</textarea>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6  stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Các trường sự kiện</h4>
                                @php 
                                if (isset($event)) {
                                    $attributes = $event->attributes;
                                    $json_attributes = json_decode($attributes, true);
                                };
                                @endphp
                                <div class="form-group" >
                                    <label>Ảnh đầu trang sự kiện</label>
                                    <div class="input-group col-xs-12">
                                        <input type="file" class="file-input filesHeader[]" id="fileInput" name="filesHeaders[]" multiple><br><br>
                                    </div>
                                    <div id="imagePreview">
                                        @php
                                        if (isset($json_attributes['imageHeader'])) {
                                            $imageHeaderValues = $json_attributes['imageHeader'];
                                            foreach ($imageHeaderValues as $img) {
                                                echo '<div class="form_log_1"><img width="30px" height="30px" src="'. $img .'">
                                                
                                                <!-- <input type="hidden"   value="'. $img .'"> -->
                                                <button type="button" onclick="removeUploadedFile(this)">X</button></div>';
                                            }
                                        } 
                                        @endphp
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label>Ảnh cuối trang sự kiện</label>
                                    <div class="input-group col-xs-12">
                                        <input type="file" class="file-input filesFooter[]" id="fileInput" name="filesFooters[]" multiple ><br><br>
                                    </div>
                                    <div id="imagePreview">
                                    @php
                                        if (isset($json_attributes['imageFooter'])) {
                                            $imageFooterValues = $json_attributes['imageFooter'];
                                            foreach ($imageFooterValues as $img) {
                                                echo '<div class="form_log_1"><img width="30px" height="30px" src="'. $img .'">
                                                
                                                <!-- <input type="hidden" class="filesFooter" name="filesFooter_old[]" value="'. $img .'"> -->
                                                <button type="button" onclick="removeUploadedFile(this)">X</button></div>';
                                            }
                                        } 
                                        @endphp
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="">Ảnh slide trang trái sự kiện</label>
                                    <div class="input-group col-xs-12">
                                        <input type="file" class="file-input filesLeft[]" id="fileInput" name="filesLefts[]" multiple><br><br>
                                    </div>
                                    <div id="imagePreview">
                                    @php
                                        if (isset($json_attributes['imageLeft'])) {
                                            $imageLeftValues = $json_attributes['imageLeft'];
                                            foreach ($imageLeftValues as $img) {
                                                echo '<div class="form_log_1"><img width="30px" height="30px" src="'. $img .'">
                                                
                                                <!-- <input type="hidden" class="filesLeft" name="filesLeft_old[]" value="'. $img .'"> -->
                                                <button type="button" onclick="removeUploadedFile(this)">X</button></div>';
                                            }
                                        } 
                                        @endphp
                                    </div>
                                </div>
                        
                                <div class="form-group">
                                    <label for="">Ảnh slide trang phải sự kiện</label>
                                    <div class="input-group col-xs-12">
                                        <input type="file" class="file-input filesRight[]" id="fileInput" name="filesRights[]" multiple ><br><br>
                                    </div>
                                    <div id="imagePreview">
                                    @php
                                        if (isset($json_attributes['imageRight'])) {
                                            $imageRightValues = $json_attributes['imageRight'];
                                            foreach ($imageRightValues as $img) {
                                                echo '<div class="form_log_1"><img width="30px" height="30px" src="'. $img .'">
                                                
                                                <!-- <input type="file" class="filesRight[]" name="filesRight_old[]" value="'. $img .'"> -->
                                                <button type="button" onclick="removeUploadedFile(this)">X</button></div>';
                                            }
                                        } 
                                        @endphp
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="colorPicker">Chọn màu chủ đạo cho sự kiện</label> <br>
                                    <input type="color" id="colorPicker" name="selectedColor" value="{{ isset($json_attributes['colorEvent']) ? $json_attributes['colorEvent'] : '#ff0000' }}">
                                    <script>
                                        $("#colorPicker").spectrum();
                                    </script>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 grid-margin stretch-card mt-4" style="display: flex; justify-content: center; align-items: center;">
                        <button type="submit" form="myForm" class="btn btn-primary mr-2">{{ isset($event) ? 'Cập nhật' : 'Thêm' }} sự kiện</button>
                        <a href="{{ route('admin.event') }}" class="btn btn-secondary "> Trở về</a>
                    </div>
                </div>
            </form>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->
       <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
                <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Nhóm CFF © 2023 <a href="#" target="_blank">VietNam</a>. Tất cả quyền được bảo lưu.</span>
                <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"><i class="mdi mdi-heart text-danger"></i></span>
            </div>
        </footer>
        <!-- partial -->
    </div>
    <!-- main-panel ends -->
</div>

<script>
    var selectedFiles = [];
    var fileInputs = document.querySelectorAll('.file-input');

    fileInputs.forEach(function(input) {
        // var cat = undefined;
        input.addEventListener('change', function(event) {
            var files = event.target.files;
                console.log(files);
            var name_tag = event.target.name;
            var imagePreview = input.parentElement.nextElementSibling;
            var formGroup = input.parentElement.parentElement;
            console.log(name_tag);
            for (var i = 0; i < files.length; i++) {
                var file = files[i];

                if (!selectedFiles.includes(file)) {
                    selectedFiles.push(file);

                    var name_img = file.name;
                    var uploadedFile = document.createElement('div');
                    uploadedFile.className = 'form_log_1';
                    uploadedFile.innerHTML = `
                        <img width="30px" height="30px" src="${URL.createObjectURL(file)}">
                        <p>${file.name}</p>
                        <input type="hidden" name="${name_tag}" value="${file.name}">
                        <button type="button" onclick="removeUploadedFile(this)">X</button>
                    `;
                   
                    document.getElementById('imagePreview').appendChild(uploadedFile);
                    imagePreview.appendChild(uploadedFile);
                }
            }
            var input2 = input.cloneNode(true);;
                    input2.style = "display:none;";
                    input2.name = input.classList[1];
                    input.parentElement.appendChild(input2);
      
        });
    });


    function removeUploadedFile(button) {
        var parentDiv = button.parentNode;
        parentDiv.remove();

        var hiddenInput = parentDiv.querySelector('input[type="hidden"]');
        var fileName = hiddenInput.value;

        var index = selectedFiles.indexOf(fileName);
        if (index !== -1) {
            selectedFiles.splice(index, 1);
        }
    }
</script>

<script>
    function generateSlug() {
        var nameInput = document.getElementById('name');
        var slugInput = document.getElementById('slug');

        let name = nameInput.value;
        let slug = name.toLowerCase();
        //Đổi ký tự có dấu thành không dấu
        slug = slug.replace(/á|à|ả|ạ|ã|ă|ắ|ằ|ẳ|ẵ|ặ|â|ấ|ầ|ẩ|ẫ|ậ/gi, 'a');
        slug = slug.replace(/é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ/gi, 'e');
        slug = slug.replace(/i|í|ì|ỉ|ĩ|ị/gi, 'i');
        slug = slug.replace(/ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ/gi, 'o');
        slug = slug.replace(/ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự/gi, 'u');
        slug = slug.replace(/ý|ỳ|ỷ|ỹ|ỵ/gi, 'y');
        slug = slug.replace(/đ/gi, 'd');
        //Xóa các ký tự đặt biệt
        slug = slug.replace(/\`|\~|\!|\@|\#|\||\$|\%|\^|\&|\*|\(|\)|\+|\=|\,|\.|\/|\?|\>|\<|\'|\"|\:|\;|_/gi, '');
        //Đổi khoảng trắng thành ký tự gạch ngang
        slug = slug.replace(/ /gi, "-");
        //Đổi nhiều ký tự gạch ngang liên tiếp thành 1 ký tự gạch ngang
        //Phòng trường hợp người nhập vào quá nhiều ký tự trắng
        slug = slug.replace(/\-\-\-\-\-/gi, '-');
        slug = slug.replace(/\-\-\-\-/gi, '-');
        slug = slug.replace(/\-\-\-/gi, '-');
        slug = slug.replace(/\-\-/gi, '-');
        //Xóa các ký tự gạch ngang ở đầu và cuối
        slug = '@' + slug + '@';
        slug = slug.replace(/\@\-|\-\@|\@/gi, '');

        slugInput.value = slug;
    }
</script>
@endsection