<?php

//    $Entity = new \App\Models\PreOrder;
    $Entity = new \App\Models\Brand;
    $table = $Entity->getTable();
    $Columns = \Illuminate\Support\Facades\DB::getSchemaBuilder()->getColumnListing($table);

    $datas = $Entity->get();

?>

<table class="table card-table table-vcenter text-nowrap">
    <thead>
    <tr>
        @foreach($Columns as $column)
            <th>{{ $column }}</th>
        @endforeach
    </tr>
    </thead>
    <tbody>

    @foreach($datas as $data)

        <tr>
            @foreach($Columns as $column)
                <th>{{ $data[$column] }}</th>
            @endforeach
        </tr>

    @endforeach

    </tbody>
</table>