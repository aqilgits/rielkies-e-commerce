<div>
    @foreach ($listCourier->result as $couriers)
        @foreach ($couriers->rates as $courier)
            <p>{{ $courier->rate_id }}</p>
            <img src="{{ $courier->courier_logo }}" alt="">
            <div class="row" style="border: solid 1px green;">
                @foreach ($courier->dropoff_point as $dropPointList)
                    <div class="col">
                        <p>{{ $dropPointList->point_id }}</p>
                        <p>{{ $dropPointList->point_name }}</p>
                    </div>
                @endforeach
            </div>
        @endforeach
    @endforeach
</div>
