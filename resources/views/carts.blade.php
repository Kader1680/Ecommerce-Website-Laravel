
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
}


</style>
@extends("layouts.master")

@section("content")
<div class="container">



    <table class="table table-xs">
      <tr>
        <th></th>
        <th>Description</th>
        <th class="text-right">Qauntity</th>
        <th class="text-right">Price</th>
        <th class="text-right">Total</th>
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
      </tr>
       @endforeach

      <tr class="total-row info">
        <td class="text-right" colspan="4">Total</td>
        <td class="text-right">18.00 $</td>
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
