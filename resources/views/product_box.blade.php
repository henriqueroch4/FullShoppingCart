<div class="holder box">
    <div class="holder-photo">
        <img src="{{URL::asset('storage/'."$product->image_url")}}" alt="" class="photo">
    </div>
    <div class="inner p-2">
        <h2 class="product-name f-13 mt-3">{{$product->name}}</h2>
        <div class="prices">R$ {{number_format($product->price,2,",",".")}}</div>
    </div>
</div>
