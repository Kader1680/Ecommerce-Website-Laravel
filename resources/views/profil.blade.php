@extends("layouts.master")
@section("content")

<style>
    /* General Reset and Styling */
    body {
        margin: 0;
        padding: 0;
        font-family: 'Arial', sans-serif;
        background-color: #f3f4f6;
    }

    .container {
        max-width: 1200px;
        margin: auto;
        padding: 2rem;
    }

    /* Sidebar Styles */
    .sidebar {
        background-color: #06b671;
        padding: 2rem;
        border-radius: 15px;
        color: white;
    }

    .sidebar img {
        display: block;
        margin: 0 auto;
        border-radius: 50%;
    }

    .sidebar ul {
        list-style-type: none;
        padding: 0;
    }

    .sidebar a {
        display: block;
        margin: 15px 0;
        padding: 10px 0;
        font-size: 1.1rem;
        color: white;
        text-align: center;
        text-decoration: none;
        transition: background 0.3s;
    }

    .sidebar a:hover {
        background-color: #ffffff33;
        border-radius: 10px;
    }

    /* Profile Info Styles */
    .profile {
        background-color: white;
        padding: 2rem;
        border-radius: 15px;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
    }

    .profile-header {
        display: flex;
        align-items: center;
        justify-content: space-between;
        margin-bottom: 2rem;
    }

    .profile-header img {
        border-radius: 50%;
    }

    .profile-header h2 {
        margin: 0;
        color: #06b671;
    }

    .info-box {
        display: flex;
        justify-content: space-between;
        margin-bottom: 1.5rem;
    }

    .info-box div {
        flex: 1;
        margin-right: 10px;
    }

    .info-box input {
        width: 100%;
        padding: 10px;
        border: 1px solid #06b671;
        border-radius: 10px;
        margin-top: 5px;
        font-size: 1rem;
    }

    .info-box input[type="date"] {
        background-color: #f9f9f9;
    }

    /* Gender Section */
    .gender {
        display: flex;
        justify-content: space-around;
        margin-top: 1rem;
    }

    .gender input {
        display: none;
    }

    .gender label {
        padding: 10px 20px;
        border: 2px solid #06b671;
        border-radius: 20px;
        cursor: pointer;
        color: #06b671;
        transition: all 0.3s ease;
    }

    .gender input:checked + label {
        background-color: #06b671;
        color: white;
    }

    @media (max-width: 768px) {
        .profile-header {
            flex-direction: column;
            text-align: center;
            gap: 1rem;
        }

        .info-box {
            flex-direction: column;
        }
    }
</style>

<div class="container" style="margin-top: 19rem">
    <div class="row">
        <!-- Sidebar Section -->
        <div class="col-md-3 sidebar">

          
            <div class="text-center">
              
                <img  width="100" height="100" 
                  
                     src="{{ asset('storage/' .  $imageProfile) }}"
                     src="https://cdn-icons-png.flaticon.com/512/149/149071.png" 
                     alt="User Avatar">
            </div>
            <ul>
                <li><a href="/profil/edit-image"><i class="fa-solid fa-image"></i> Update Image Profil  </a></li>
                <li><a href="#">My Wallet</a></li>
                <li><a href="#">My Rewards</a></li>
                <li><a href="#">My Orders</a></li>
                <li><a href="#">Personal Info</a></li>
                <li><a href="#">Payment Methods</a></li>
                <li><a href="#">Contact Preferences</a></li>
                <li><a href="#">Logout</a></li>
            </ul>
        </div>

        <!-- Profile Info Section -->
       





        {{-- <div class="col-md-9">
            <div class="profile">
                <div class="profile-header">
                   
                    <div>
                        <h2>Your Profile</h2>
                        <p>Update your personal details and contact preferences here.</p>
                    </div>
                </div>

                <div class="info-box">
                    <div>
                        <label for="name">Full Name</label>
                        <input type="text" id="name" value="{{ $userAuth->name }}" disabled>
                    </div>
                    <div>
                        <label for="email">Email</label>
                        <input type="email" id="email" value="{{ $userAuth->email }}" disabled>
                    </div>
                </div>

                <div class="info-box">
                    <div>
                        <label for="phone">Phone Number</label>
                        <input type="tel" id="phone" name="phone" value="{{ $userAuth->phone }}">
                    </div>
                    <div>
                        <label for="dateofbirth">Date of Birth</label>
                        <input type="date" id="dateofbirth" name="dateofbirth">
                    </div>
                </div>

                <div>
                    <h4>Select Your Gender</h4>
                    <div class="gender">
                        <input type="radio" id="male" name="gender" checked>
                        <label for="male">Male</label>

                        <input type="radio" id="female" name="gender">
                        <label for="female">Female</label>
                    </div>
                </div>
            </div>
        </div> --}}




    </div>
</div>

<script>
    const phoneInputField = document.querySelector("#phone");
    const phoneInput = window.intlTelInput(phoneInputField, {
        utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
    });
</script>
@endsection
