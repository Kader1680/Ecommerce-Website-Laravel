<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<style>
.leftSide div section div{
    width: calc(100% / 3);
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
                <div>{{ $user }} <br> Customers </div>
                <div>66  <br>  review Sellers</div>
            </section>
            <section class=" mt-4">
                <div style="width: 100%; height:14rem">Products</div>
            </section>
        </div>
    </div>
</div>
