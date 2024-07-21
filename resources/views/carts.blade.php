
<style>
@media (max-width: 414px) {
  .table-xs tr,
  .table-xs td,
  .table-xs tbody,
  .table-xs thead,
  .table-xs tfoot,
  .table-xs th {
    display: table;
    width: 100%;
    border-collapse: separate;
  }
  .table-xs > tbody tr:first-child {
    position: absolute;
    top: -9999px;
    left: -9999px;
  }
  .table-xs td[title]:before {
    content: attr(title) ": ";
  }
  .table-xs td:before {
    white-space: nowrap;
    width: 50%;
    display: table-cell;
    text-align: left;
    font-weight: bold;
  }
  .table-xs .item-row td:first-child,
  .table-xs .item-row td:nth-child(2) {
    border: 0 none;
  }
  .table-xs .item-row td:first-child {
    border: 0 none;
  }
  .table-xs .item-row td:last-child {
    background: #eee;
    border-bottom: 2px solid #a2a2a2;
    font-weight: bold;
  }
  .table-xs .item-row img {
    margin-bottom: 1em;
  }
  .table-xs .total-row td {
    display: table-cell;
    width: 1%;
    border-top: 0 none;
    border-bottom: 3px double #a2a2a2;
    font-weight: bold;
    font-size: 1.5em;
  }
  .table-xs .total-row td:first-child {
    width: 99%;
  }

  
  .success-msg {
    margin: 10px 0;
    padding: 10px;
    border-radius: 3px 3px 3px 3px;
    color: white;
    background-color: #06b671de;
    }
  


}


</style>
@extends("layouts.master")

@section("content")
<div style="margin-top: 10rem" class="container">

  @if (\Session::has('success'))
    <div class="alert alert-success">
        <ul>
            <li>{!! \Session::get('success') !!}</li>
        </ul>
    </div>
  @endif

    <table class="table table-xs">
      <tr>
        <th></th>
        <th>Description</th>
        <th class="text-right">Qauntity</th>
        <th class="text-right">Price</th>
        <th class="text-right">Operation</th>
      </tr>

      @foreach ($carts as $cart)
    <p></p>

    <tr class="item-row">
        <td> <img width="100" src="{{ url("$cart->image") }}"></td>
        <td>
          <p> <strong>{{ $cart->name }}</strong></p>
          <p>Amet et esse do nostrud id irure cupidatat labore nulla irure laboris</p>
        </td>
        <td class="text-right" title="Amount">{{ $cart->quantity }}</td>
        <td class="text-right" title="Price">{{ $cart->price }}</td>

        <td class="text-right" title="Price">
              <form  method="POST" action="{{ url('/items/' . $cart->id) }}">
                @csrf
                @method("DELETE")
                <button style="background-color: #fd3c3c" class="rounded-3 border-0 p-1 delete text-white" type="submit">
                  remove
                </button>
              </form>         
        </td>


        <td class="text-right" title="Price"><button style="background-color: #06b671de" class=" rounded-3 border-0 p-1 text-white">confirm</button></td>
      </tr>
       @endforeach

      <tr class="total-row info">
        <td class="text-right" colspan="4">Total</td>
        <?php
            $total = 0;
            for ($i=0; $i <8 ; $i++) {

                $total += $cart->price;
            }
        ?>
        <td class="text-right">{{ $total }}</td>
      </tr>
    </table>
  </div>
@endsection






<script>
$('a.remove').click(function(){
  event.preventDefault();
  $( this ).parent().parent().parent().hide( 400 );

})

// Just for testing, show all items
  $('a.btn.continue').click(function(){
    $('li.items').show(400);
  })

</script>
