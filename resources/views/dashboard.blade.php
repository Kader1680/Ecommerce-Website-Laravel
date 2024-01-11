<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<style>
.leftSide div section div{
    width: calc(100% / 4);
    background-color: #d5d5d5;
    height: 7rem;
    border: 1px solid #e7e7e7;
    text-align:center;
    display: flex;
    align-items: center;
    justify-content: center;
    border-left: 2px solid rgb(79, 126, 255);
}
.leftSide .col-md-3{
    background-color: #d5d5d5;
}
.col-md-3 div{
    background-color: rgb(79, 126, 255);
    color: white
}
form, .delete{
    background-color: #eaeaea;
    width: 80%;
    margin: auto;
}
input{
    width: 100%;
}
</style>

<div class="">
    <div class="leftSide row  ">
        <div class="col-md-3">
            <div class="p-3 mt-4">Dashboard</div>
            <div class="p-3 mt-2 ">Admin Infomrmation</div>
            <div class="p-3 mt-2 ">Add Poroduct</div>
            <div class="p-3 mt-2 ">Delete Product</div>
            <div class="p-3 mt-2 ">Purchase</div>
        </div>
        <div class="col-md-8">
            <section class=" d-flex">
                <div>{{ $products }} <br>  Products </div>
                <div>{{ $user }} <br> Visiter </div>
                <div>{{ $visiter }} <br> Customers </div>
                <div>66  <br>  review Sellers</div>
            </section>
            <section class=" mt-4">
                <div style="width: 100%; height:14rem">Products</div>
            </section>
        </div>
    </div>

    <div class=" mt-3 d-md-flex align-content-center justify-content-center">
        <form class="row" action="" method="post">
            <h2 class=" text-center mt-5 mb-5">Add a New Product As Admin User</h2>
            <div class=" col-md-6">
                <label class="mb-3 p-2" for="">Products Name </label><br>
                <label class="mb-3 p-2"  for="">Products Decription </label><br>
                <label class="mb-3 p-2" for="">Products Price </label><br>
                <label class="mb-3 p-2" for="">Products Category </label><br>
                <label class="mb-3 p-2" for="">Products Quantity </label><br>

            </div>
            <div  class=" col-md-6">
                <input class="mb-3 p-2" type="text"><br>
                <input class="mb-3 p-2" type="text"><br>
                <input class="mb-3 p-2" min="5" type="text"><br>
                <input class="mb-3 p-2" type="text"><br>
                <input class="mb-3 p-2" type="text"><br>
                <button class="mb-3 p-2"  style="width:100%" type="submit" class=" bg-danger btn">Add</button>
            </div>

        </form>
    </div>



    <div class=" mt-4 delete d-md-flex align-content-center justify-content-center">



        <div class="row">
            <h2 class=" text-center mt-5 mb-5">Delete All Products As Admin User</h2>
            <form class="col-md-6" method="post">
                <button class=" btn bg-danger"> Delete All</button>
            </form>
            <form class="col-md-6" method="post">
                <button class=" btn bg-warning">Select & Delete Products</button>
            </form>
        </div>
    </div>
</div>
