
    @extends("layouts.master")

    @section("content")




    <div style="margin-top: 8rem" class="container">
           <div class="row">

                @foreach ($allcategorie as $list)

                <div class="col-md-3">
                    <div class="square-service-block">
                    <a href="/categories/{{ $list->id }}">
                        <img width="100%" height="180rem" src="{{ url($list->imageCat) }}" alt="">
                        <h2 class="ssb-title">{{ $list->nameCat }}</h2>
                    </a>
                    </div>
                </div>
                @endforeach

           </div>
    </div>





    @endsection







{{--
    <div class="col-md-3">
        <div class="square-service-block">
           <a href="#">
             <div class="ssb-icon"><i class="fa fa-camera" aria-hidden="true"></i></div>
             <h2 class="ssb-title">Photography</h2>
           </a>
        </div>
      </div>

      <div class="col-md-3">
        <div class="square-service-block">
           <a href="#">
             <div class="ssb-icon"><i class="fa fa-font" aria-hidden="true"></i></div>
             <h2 class="ssb-title">Fonts</h2>
           </a>
        </div>
      </div>

      <div class="col-md-3">
        <div class="square-service-block">
           <a href="#">
             <div class="ssb-icon"><i class="fa fa-cubes" aria-hidden="true"></i></div>
             <h2 class="ssb-title">Mockups</h2>
           </a>
        </div>
      </div>

      <div class="col-md-3">
        <div class="square-service-block">
           <a href="#">
             <div class="ssb-icon"><i class="fa fa-eyedropper" aria-hidden="true"></i></div>
             <h2 class="ssb-title">Colours</h2>
           </a>
        </div>
      </div>

      <div class="col-md-3">
        <div class="square-service-block">
           <a href="#">
             <div class="ssb-icon"><i class="fa fa-youtube" aria-hidden="true"></i> </div>
             <h2 class="ssb-title">Video</h2>
           </a>
        </div>
      </div>

      <div class="col-md-3">
        <div class="square-service-block">
           <a href="#">
             <div class="ssb-icon"><i class="fa fa-volume-up" aria-hidden="true"></i> </div>
             <h2 class="ssb-title">Audio</h2>
           </a>
        </div>
      </div>

   </div> --}}
