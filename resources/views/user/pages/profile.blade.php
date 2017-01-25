@extends('user.includes.default')
@section('content')
    <!-- Form horizontal -->
    <div class="panel panel-flat">

        <div class="panel-body">
            @include('errors.note')
            <form class="form-horizontal" role="form" method="POST" action="{{url('user/profile')}}">
                {{csrf_field()}}
                <div class="form-group">
                    <label class="control-label col-lg-2">Email</label>
                    <div class="col-lg-10">
                        <input name="email" type="email" class="form-control" value="{{$user->email or old('email')}}" disabled>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-lg-2">Họ tên</label>
                    <div class="col-lg-10">
                        <input name="name" type="text" class="form-control" value="{{$user->name or old('name')}}">
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-lg-2">Điện thoại</label>
                    <div class="col-lg-10">
                        <input name="phone" type="tel" class="form-control" value="{{$user->phone or old('phone')}}">
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-lg-2">Địa chỉ</label>
                    <div class="col-lg-10">
                        <input name="address" type="text" class="form-control" value="{{$user->address or old('address')}}">
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-lg-2">Tỉnh / thành phố</label>
                    <div class="col-lg-10">
                        <select class="select" name="city">
                            <option value="HO_CHI_MINH">Hồ Chí Minh</option>
                            <option value="AN_GIANG">An Giang</option>
                            <option value="BA_RIA_VUNG_TAU">Bà Rịa-Vũng Tàu</option>
                            <option value="BAC_LIEU">Bạc Liêu</option>
                            <option value="BAC_KAN">Bắc Kạn</option>
                            <option value="BAC_GIANG">Bắc Giang</option>
                            <option value="BAC_NINH">Bắc Ninh</option>
                            <option value="BEN_TRE">Bến Tre</option>
                            <option value="BINH_DUONG">Bình Dương</option>
                            <option value="BINH_DINH">Bình Định</option>
                            <option value="BINH_PHUOC">Bình Phước</option>
                            <option value="BINH_THUAN">Bình Thuận</option>
                            <option value="CA_MAU">Cà Mau</option>
                            <option value="CAO_BANG">Cao Bằng</option>
                            <option value="CAN_THO">Cần Thơ</option>
                            <option value="DA_NANG">Đà Nẵng</option>
                            <option value="DAK_LAK">Đắk Lắk</option>
                            <option value="DAK_NONG">Đắk Nông</option>
                            <option value="DIEN_BIEN">Điện Biên</option>
                            <option value="DONG_NAI">Đồng Nai</option>
                            <option value="DONG_THAP">Đồng Tháp</option>
                            <option value="GIA_LAI">Gia Lai</option>
                            <option value="HA_GIANG">Hà Giang</option>
                            <option value="HA_NAM">Hà Nam</option>
                            <option value="HA_NOI">Hà Nội</option>
                            <option value="HA_TAY">Hà Tây</option>
                            <option value="HA_TINH">Hà Tĩnh</option>
                            <option value="HAI_DUONG">Hải Dương</option>
                            <option value="HAI_PHONG">Hải Phòng</option>
                            <option value="HOA_BINH">Hòa Bình</option>
                            <option value="HAU_GIANG">Hậu Giang</option>
                            <option value="HUNG_YEN">Hưng Yên</option>
                            <option value="KHANH_HOA">Khánh Hòa</option>
                            <option value="KIEN_GIANG">Kiên Giang</option>
                            <option value="KON_TUM">Kon Tum</option>
                            <option value="LAI_CHAU">Lai Châu</option>
                            <option value="LAO_CAI">Lào Cai</option>
                            <option value="LANG_SON">Lạng Sơn</option>
                            <option value="LAM_DONG">Lâm Đồng</option>
                            <option value="LONG_AN">Long An</option>
                            <option value="NAM_DINH">Nam Định</option>
                            <option value="NGHE_AN">Nghệ An</option>
                            <option value="NINH_BINH">Ninh Bình</option>
                            <option value="NINH_THUAN">Ninh Thuận</option>
                            <option value="PHU_THO">Phú Thọ</option>
                            <option value="PHU_YEN">Phú Yên</option>
                            <option value="QUANG_BINH">Quảng Bình</option>
                            <option value="QUANG_NAM">Quảng Nam</option>
                            <option value="QUANG_NGAI">Quảng Ngãi</option>
                            <option value="QUANG_NINH">Quảng Ninh</option>
                            <option value="QUANG_TRI">Quảng Trị</option>
                            <option value="SOC_TRANG">Sóc Trăng</option>
                            <option value="SON_LA">Sơn La</option>
                            <option value="TAY_NINH">Tây Ninh</option>
                            <option value="THAI_BINH">Thái Bình</option>
                            <option value="THAI_NGUYEN">Thái Nguyên</option>
                            <option value="THANH_HOA">Thanh Hóa</option>
                            <option value="THUA_THIEN_HUE">Thừa Thiên Huế</option>
                            <option value="TIEN_GIANG">Tiền Giang</option>
                            <option value="TRA_VINH">Trà Vinh</option>
                            <option value="TUYEN_QUANG">Tuyên Quang</option>
                            <option value="VINH_LONG">Vĩnh Long</option>
                            <option value="VINH_PHUC">Vĩnh Phúc</option>
                            <option value="YEN_BAI">Yên Bái</option>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-lg-2">Quốc gia</label>
                    <div class="col-lg-10">
                        <select class="select" name="nation">
                            <option value="VIETNAM">Việt Nam</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-lg-2">Ngày tham gia</label>
                    <div class="col-lg-10">
                        {{$user->created_at}}
                    </div>
                </div>

                <div class="text-center">
                    <button type="submit" class="btn btn-primary bg-blue">Cập nhật <i class="fa fa-arrow-right" aria-hidden="true"></i></button>
                </div>
            </form>
        </div>
    </div>
    <script>
        $('select[name=city]').val('{{$user->city}}');
        $('select[name=nation]').val('{{$user->nation}}');
    </script>
    <!-- /form horizontal -->
@endsection