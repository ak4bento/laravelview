<div class="table-responsive">
    <table class="table table-bordered table-striped" width="200%" id="inventory-{{ date('Y-m-d') }}">
        <thead>
            <tr>
                <th>Name</th>
                <th>Type</th>
                <th>Category</th>
                <th>Company</th>
                <th>Date Of Entry</th>
                <th>Start Warranty</th>
                <th>End Warranty</th>
                <th>Image</th>
                <th>Url Image</th>
                <th>Qty</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($inventories as $inventory)
            <tr>
                <td>{{ $inventory->name }}</td>
                <td>{{ $inventory->type }}</td>
                <td>{{ $inventory->category }}</td>
                <td>{{ $inventory->company }}</td>
                <td class="tableexport-string">{{ $inventory->date_of_entry }}</td>
                <td class="tableexport-string">{{ $inventory->start_warranty }}</td>
                <td class="tableexport-string">{{ $inventory->end_warranty }}</td>
                <td class="tableexport-string"><img src="{{ asset('images/'.$inventory->image) }}" alt="" width="45px"></td>
                <td class="tableexport-string"><a href="{{ url('images/'.$inventory->image) }}">{{ url('images/'.$inventory->image) }}</a></td>
                <td>{{ $inventory->qty }}</td>
                <td>
                    {!! Form::open(['route' => ['inventories.destroy', $inventory->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('inventories.show', [$inventory->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('inventories.edit', [$inventory->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
