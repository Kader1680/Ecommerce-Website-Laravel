<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">



<style>
body{
    background: linear-gradient(45deg, hsl(185, 26%, 72%), hsl(224, 66%, 82%));
    font-family: 'Lato', sans-serif;
}
.leftSide{
    display: grid;
    grid-template-columns: 30% 70%;

}
.leftSide div section div{
    width: calc(100% / 3);
    background-color: #ffffff;
    height: 11rem;
    border: 1px solid #e7e7e7;
    text-align:center;
    display: flex;
    align-items: center;
    justify-content: center;
    border-left: 2px solid rgb(79, 126, 255);
}
h2{
    color:rgb(79, 126, 255);
}
.leftSide .left{
    background-color: #ffffff;
    width: 95%;
    padding:10px
}
.leftSide div div{
    background-color: rgb(79, 126, 255);
    color: black
}
form{
    background-color: #ffffff;

}
input{
    width: 100%;
    border:2px solid rgb(79, 126, 255);
}
a, a:hover{
    color:white;
    text-decoration:none;

}
table {
  border: 1px solid #ccc;
  border-collapse: collapse;
  margin: 0;
  padding: 0;
  width: 100%;
  table-layout: fixed;
}

table caption {
  font-size: 1.5em;
  margin: .5em 0 .75em;
}

table tr {
  background-color: #ffffff;
  border: 1px solid #ddd;
  padding: .35em;
}

table th,
table td {
  padding: .625em;
  text-align: center;
}

table th {
  color:rgb(79, 126, 255);
  font-size: .85em;
  letter-spacing: .1em;
  text-transform: uppercase;
  padding: 20px 0px;
}
button{
    background-color: rgb(34, 227, 82);
    border:0;
    color:white;
    font-weight:bolder;
}
@media screen and (max-width: 600px) {
  table {
    border: 0;
  }

  table caption {
    font-size: 1.3em;
  }

  table thead {
    border: none;
    clip: rect(0 0 0 0);
    height: 1px;
    margin: -1px;
    overflow: hidden;
    padding: 0;
    position: absolute;
    width: 1px;
  }

  table tr {
    border-bottom: 3px solid #ddd;
    display: block;
    margin-bottom: .625em;
  }

  table td {
    border-bottom: 1px solid #ddd;
    display: block;
    font-size: .8em;
    text-align: right;
  }

  table td::before {
    content: attr(data-label);
    float: left;
    font-weight: bold;
    text-transform: uppercase;
  }

  table td:last-child {
    border-bottom: 0;
  }


}


</style>

<div class="">

    <div class="leftSide ">
        <div class="left">
            <div class="p-3 mt-4"><a href="">Dashboard</a></div>
            <div class="p-3 mt-2 "><a href="/">Back To Home Page</a></div>
            <div class="p-3 mt-2 "><a href="#add">Add Poroduct</a></div>
            <div class="p-3 mt-2 "><a href="#delete">Delete Product</a></div>
            <div class="p-3 mt-2 "><a href="">All Products</a></div>
            <div class="p-3 mt-2 "><a href="">All Informations Users</a></div>
        </div>
        <div class=" ">
            <section >
                <div style="width: 100%; height:14rem">
                    <h2>Welcome To Admin Dashboared</h2>
                </div>
            </section>
            <section class="mt-4 d-flex">
                <div><h3 style="font-size: 35px">{{ $productscout }} </h3><p class="  fw-bolder m-2 mt-1">Products</p> </div>
                <div><h3>{{ $userCount }}</h3> <p class="  fw-bolder m-2 mt-1">Visiter</p> </div>
                <div><h3>66</h3> <p class="  fw-bolder m-2 mt-1">review Sellers</p>  </div>
            </section>
        </div>
    </div>
    <h2 class=" text-center mt-5 mb-5">Add a New Product As Admin User</h2>

    <div  class="d-md-flex align-content-center justify-content-center mt-3 ">
        <form style="width: 100%" class="row p-4 " action="" method="post">
            <div id="add" class="col-sm-12 col-md-6">
                <label class="mb-3 p-2" for="">Products Name </label><br>
                <label class="mb-3 p-2"  for="">Products Decription </label><br>
                <label class="mb-3 p-2" for="">Products Price </label><br>
                <label class="mb-3 p-2" for="">Products Category </label><br>
                <label class="mb-3 p-2" for="">Products Quantity </label><br>

            </div>
            <div  class="col-sm-12 col-md-6">
                <input class="mb-3 p-2 rounded-3" type="text"><br>
                <input class="mb-3 p-2 rounded-3" type="text"><br>
                <input class="mb-3 p-2  rounded-3" min="5" type="text"><br>
                <input class="mb-3 p-2  rounded-3" type="text"><br>
                <input class="mb-3 p-2  rounded-3" type="text"><br>
                <button class="mb-3 p-2  rounded-3"  style="width:100%" type="submit" class="btn">Add New Product</button>
            </div>

        </form>
    </div>




    <h2 class=" text-center mt-5 mb-5">All Product</h2>

    <div style="width: 100%" class=" mt-4 mb-4  d-md-flex align-content-center justify-content-center">


        <table>
            <thead>

              <tr>
                <th scope="col">Products</th>
                <th scope="col">Descriptions</th>
                <th scope="col">Price</th>
                <th scope="col">Quantity</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
              <tr>
                    <td data-label="Account">{{ $product->name }}</td>
                    <td data-label="Account">{{ $product->description }}</td>
                    <td data-label="Account">{{ $product->price }} $</td>
                    <td data-label="Account">{{ $product->quantity }}</td>
              </tr>
              @endforeach

            </tbody>
          </table>
    </div>


    <h2 class=" text-center">All Users & Clients</h2>

    <div style="width: 100%" class=" mt-4 mb-4  d-md-flex align-content-center justify-content-center">
        <table>
            <thead>
              <tr>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Phone</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($user as $us)
              <tr>
                    <td data-label="Account">{{ $us->name }}</td>
                    <td data-label="Account">{{ $us->email }}</td>
                    <td data-label="Account">{{ $us->phone }}</td>
              </tr>
              @endforeach

            </tbody>
          </table>
    </div>
</div>
