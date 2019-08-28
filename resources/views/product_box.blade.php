<div class="holder box">
    <div class="holder-photo">
        <img src="{{URL::asset('storage/'."$product->image_url")}}" alt="" class="photo">
    </div>
    <div class="inner">
        <span>FullShoppingCart</span>
        <h2>{{$product->name}}</h2>
        <div class="prices">R$ {{number_format($product->price,2,",",".")}}</div>
    </div>
</div>
