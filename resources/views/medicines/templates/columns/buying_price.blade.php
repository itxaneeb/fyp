@if($row->buying_price)
    <p class="cur-margin"> {{getCurrencySymbol() . " " . $row->buying_price}}
@else
    {{__('messages.common.n/a')}}
@endif
