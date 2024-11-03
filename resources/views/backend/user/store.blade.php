@include('backend.dashboard.component.breadcrumb', ['title' => $config['seo']['create']['title']])
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
@php
    $url = ($config['method'] == 'create') ? route('user.store') : route('user.update', $user->id);
@endphp
<form action="{{ $url }}" method="post" class="box">
    @csrf
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-lg-5">
                <div class="panel-head">
                    <div class="panel-title">Thông tin thành viên mới</div>
                    <div class="panel-description">
                        <p>-Nhập thông tin của thành viên</p>
                        <p>-Lưu ý: Những phần đánh dấu <span class="text-danger">*</span>
                        là bắt buộc</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="ibox">
                    <div class="ibox-content">
                        <div class="row mb15">
                            <div class="col-lg-6">
                                <div class="form-row">
                                    <label for="" class="control-label text-left">Email
                                    <span class="text-danger">*</span>
                                    </label>
                                    <input 
                                        type="text"
                                        name="email"
                                        value="{{ old('email', ($user->email) ?? '') }}"
                                        class="form-control"
                                        placeholder=""
                                        autocomplete="off"
                                    >
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-row">
                                    <label for="" class="control-label text-left">Họ tên
                                    <span class="text-danger">*</span>
                                    </label>
                                    <input 
                                        type="text"
                                        name="name"
                                        value="{{ old('name', ($user->name) ?? '') }}"
                                        class="form-control"
                                        placeholder=""
                                        autocomplete="off"
                                    >
                                </div>
                            </div>
                        </div>
                        @php
                            $userCatalogue = [
                                '[Chọn nhóm thành viên]',
                                'Quản trị viên',
                                'Cộng tác viên'
                            ];
                        @endphp
                        <div class="row mb15">
                            <div class="col-lg-6">
                                <div class="form-row">
                                    <label for="" class="control-label text-left">Nhóm thành viên
                                    <span class="text-danger">*</span></label>
                                    <select name="user_catalogue_id" class="form-control">
                                        @foreach($userCatalogue as $key => $item)
                                        <option {{ $key == old('user_catalogue_id', (isset
                                        ($user->user_catalogue_id)) ? 
                                        $user->user_catalogue_id : '') ? 'selected' : '' }} 
                                        value="{{ $key }}">{{ $item }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-row">
                                    <label for="" class="control-label text-left">SDT
                                    </label>
                                    <input 
                                        type="text"
                                        name="phone"
                                        value="{{ old('phone', ($user->phone) ?? '') }}"
                                        class="form-control"
                                        placeholder=""
                                        autocomplete="off"
                                    >
                                </div>
                            </div>
                        </div>
                        @if($config['method'] == 'create')
                        <div class="row mb15">
                            <div class="col-lg-6">
                                <div class="form-row">
                                    <label for="" class="control-label text-left">Mật khẩu
                                    <span class="text-danger">*</span>
                                    </label>
                                    <input 
                                        type="password"
                                        name="password"
                                        value=""
                                        class="form-control"
                                        placeholder=""
                                        autocomplete="off"
                                    >
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-row">
                                    <label for="" class="control-label text-left">Nhập lại mật khẩu
                                    <span class="text-danger">*</span>
                                    </label>
                                    <input 
                                        type="password"
                                        name="re_password"
                                        value=""
                                        class="form-control"
                                        placeholder=""
                                        autocomplete="off"
                                    >
                                </div>
                            </div>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        <div class="text-right mb15">
            <button class="btn btn-primary" type="submit" name="send" value="send">Lưu</button>
        </div>
    </div>
</form>