@extends("layouts.master")
@section("content")

<style>
    .bio{
        border: 1px solid;
        padding: 8px;
        border-radius: 5px;
    }

    

// workaround
.intl-tel-input {
  display: table-cell;
}
.intl-tel-input .selected-flag {
  z-index: 4;
}
.intl-tel-input .country-list {
  z-index: 5;
}
.input-group .intl-tel-input .form-control {
  border-top-left-radius: 4px;
  border-top-right-radius: 0;
  border-bottom-left-radius: 4px;
  border-bottom-right-radius: 0;
}

[type="date"] {
  background: #fff
    url(https://cdn1.iconfinder.com/data/icons/cc_mono_icon_set/blacks/16x16/calendar_2.png)
    97% 50% no-repeat;
}
[type="date"]::-webkit-inner-spin-button {
  display: none;
}
[type="date"]::-webkit-calendar-picker-indicator {
  opacity: 0;
}


label {
  display: block;
}
input {
  border: 1px solid #c4c4c4;
  border-radius: 5px;
  background-color: #fff;
  padding: 3px 5px;
  box-shadow: inset 0 3px 6px rgba(0, 0, 0, 0.1);
  width: 190px;
}

.gender {
  display: flex;
  flex-direction: row;
 
}
label{
  user-select: none;
}
input[type="radio"] {
  display: none;
}

input[type="radio"] + label {
  z-index: 10;
  margin: 0 10px 10px 0;
  position: relative;
  color: #ced4da;
  text-shadow: 0 1px 0 rgba(255, 255, 255, 0.1);
  font-weight: bold;
  background-color: #ffffff;
  border: 2px solid #ced4da;
  cursor: pointer;
  transition: all 200ms ease;
}

input[type="radio"]:checked + label {
  color: #495057;
  background-color: #ced4da;
}

input[type="radio"] + label {
  padding: 5px 20px;
  border-radius: 10px;
}

</style>
<div class="container" style="margin-top: 12rem">
    <div class="row">


        <div class="col-sm-12 col-md-3 bg-danger pt-4 pb-4">
            <div class=" text-center" >
                <img width="100" height="100" src="https://cdn-icons-png.flaticon.com/512/149/149071.png" alt="">
            </div>
            <div>
                <ul class="list-unstyled list-group">
                    <li class="list-group-item mt-3"><a href="">My Wallet</a></li>
                    <li class="list-group-item mt-3"><a href="">My Rewards</a></li>
                    <li class="list-group-item mt-3"><a href="">My Orders</a></li>
                    <li class="list-group-item mt-3"><a href="">Personel Info</a></li>
                    <li class="list-group-item mt-3"><a href="">Payement Methods</a></li>
                    <li class="list-group-item mt-3"><a href="">Contact Prefernces</a></li>
                    <li class="list-group-item mt-3"><a href="">Logout</a></li>
                </ul>
            </div>
        </div>
        <div class="col-sm-12 col-md-1" ></div>
        <div class="col-sm-12 col-md-8 ">
            <div class=" d-flex justify-content-between align-items-center">
                <img class=" rounded-circle" width="100" height="100" src="https://w7.pngwing.com/pngs/621/196/png-transparent-e-commerce-logo-logo-e-commerce-electronic-business-ecommerce-angle-text-service.png" alt="">
                <div>
                    <h2>Personal Information</h2>
                    <p>In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual</p>
                </div>
            </div>

            <div class=" mt-4 bg-gray-400">
                <div class="bio">Full Name : {{ $userAuth->name }}</div>
                <div class="bio">Email : {{ $userAuth->email }}</div>
                <div class="bio">Phone : {{ $userAuth->phone }}</div>
                <div class=" d-flex align-items-center justify-content-between">
                      <form class="phone">
                        <label class=" fs-5"  for="dateofbirth">Phone Number</label>
                        <input class=" fs-4" id="phone" type="tel" name="phone" />
                      </form>

                      <div>
                        <label class=" fs-5" for="dateofbirth">Date Of Birth</label>
                        <input class=" fs-4" type="date" name="dateofbirth" id="dateofbirth">
                      </div>
                </div>
                <br>
                <div>
                    <h4 >Select Your Gender</h4>

                    <div class="gender">
                        <input type='radio' id='male' checked='checked' name='radio'>
                        <label for='male'>Male</label>
                        <input type='radio' id='female' name='radio'>
                        <label for='female'>Female</label>
                    </div>
                </div>

           
            
            </div>
        </div>
       
    </div>



</div>


<script>
    const phoneInputField = document.querySelector("#phone");
    const phoneInput = window.intlTelInput(phoneInputField, {
      utilsScript:
        "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
    });
</script>
@endsection
