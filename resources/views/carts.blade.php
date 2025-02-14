@extends("layouts.master")

@section("content")
<div style="margin-top: 15rem" class="container mx-auto p-6 mt-20 row bg-white">

  {{-- @if (\Session::has('success'))
    <div class="success-msg">
        <ul>
            <li>{!! \Session::get('success') !!}</li>
        </ul>
    </div>
  @endif --}}



  <div  class=" col-8 border-bottom  ">
    @foreach ($carts as $cart)


    <div class=" rounded-lg shadow-md mt-2  p-4  d-flex  ">


          <img width="100"  src="{{ asset('assets/image/' . $cart->image) }}"  alt="{{ $cart->name }}" class="     object-cover mb-4">
          <div class=" ms-4">
            <h3 class="text-lg font-bold">{{ $cart->name }}</h3>
            <p style="width: 50%">Et mollitia excepturi dolorem est recusandae ut molestiae neque assumenda.</p>
          </div>
      

          <div  class="flex justify-between text">
            <form method="POST" action="{{ url('/items/' . $cart->id) }}">
              @csrf
              @method("DELETE")
              <button style="color: #09B83F" class="border-0 bg-transparent">
                Remove
              </button>
            </form>
    
            <form method="POST" action="{{ url('/items/' . $cart->id) }}">
              @csrf
              @method("DELETE")
              <button style="color: #09B83F" class="border-0 bg-transparent mt-2">
                Save from Later
              </button>
            </form>
          </div>

          
          <p  class="font-semibold"><span class=" fw-bolder fs-4" style="color: #09B83F">${{ $cart->price }}</span> </p> 
 

     



    </div>



    @endforeach
    <hr>
   </div>



  <div class="col-4 ">
    <?php
      $total = 0;
      foreach ($carts as $cart) {
        $total += $cart->price;
      }
    ?>*

    
    <h2 class="text-xl font-bold">Total: ${{ $total }}</h2>
    <div class="text-center fs-4 px-4 py-2 font" style="width:100%; background-color: 09B83F;">



       <form     action="{{ route("items") }}" method="POST">
         @csrf

          <input class=" text-black  text-decoration-none rounded bg-black" type="submit">

        </form>


    </div>
    

    <hr>
    <h3 class=" fw-bold">Promotion</h3>
    <div class=" border border-1 mt-4 mb-4 p-3">
      <span class=" fw-bold">ACCAGE0923 </span>is applied <br>
      Udemy coupon
    </div>

    <form action="" method="post" >
      <div class="row  ">
        <div class="mb-3 col-9">
        
          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          
        </div>
        <div class="text-center   font col-3"  >
          <button style="border: 2px solid #09B83F; background-color:#09B83F" class=" fs-5 px-4 py-2 text-white  outline-none">Apply</button>
        </div>
      </div>
     
      
    </form>
  </div>





</div>
@endsection

<script>
  document.querySelectorAll('form').forEach((form) => {
    form.addEventListener('submit', function(event) {
      event.preventDefault();
      const card = this.closest('.bg-white');
      card.classList.add('opacity-50', 'transition', 'duration-300');
      setTimeout(() => card.remove(), 300); // Remove item after animation
    });
  });
</script>
