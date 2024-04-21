<?php
if(Auth::guard('web')->check()) {
    $hanhdong = 'onclick=addNew()';
    $avatar = Auth::guard('web')->user()->avatar;
    if($avatar==''){
        $avatar = '/themes/frontend/biz9/images/user.png';
    }
}else{
    $hanhdong = 'onclick=dangnhap()';
    $avatar = '/themes/frontend/biz9/images/user.png';
}
?>
<section class="box box--composer">
    <div class="box__content">
    <div class="composer-wrap">
        <div class="avatar">
            <img src="{{ $avatar }}" alt="" class="img-fluid rounded-circle">
        </div>
        <h3 class="name">
            <p></p>
        </h3>
        <div class="input">
            <div class="form-group">
                <input id="mainComposer" {{$hanhdong}} type="text" class="form-control" placeholder="Chia sẻ..." spellcheck="false">
            </div>
        </div>
        <div class="tool">
        <a href="#" class="tool-btn"><i class="fal fa-image"></i></a>
        <a href="#" class="tool-btn btn-close"><i class="fal fa-times"></i></a>
        </div>
    </div>
    <div class="composer-mask"></div>
    </div>
</section>

<script>
    function addNew(){
        $("#postnewModal").modal('show');
    }
</script>