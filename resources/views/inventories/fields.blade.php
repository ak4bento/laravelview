<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Type Field -->
<div class="form-group col-sm-6">
    {!! Form::label('type', 'Type:') !!}
    {!! Form::text('type', null, ['class' => 'form-control']) !!}
</div>

<!-- Category Field -->
<div class="form-group col-sm-6">
    {!! Form::label('category', 'Category:') !!}
    {!! Form::text('category', null, ['class' => 'form-control']) !!}
</div>

<!-- Company Field -->
<div class="form-group col-sm-6">
    {!! Form::label('company', 'Company:') !!}
    {!! Form::text('company', null, ['class' => 'form-control']) !!}
</div>

<!-- Date Of Entry Field -->
<div class="form-group col-sm-6">
    {!! Form::label('date_of_entry', 'Date Of Entry:') !!}
    {!! Form::date('date_of_entry', null, ['class' => 'form-control','id'=>'date_of_entry']) !!}
</div>

@section('scripts')
    <script type="text/javascript">
        // $('#date_of_entry').datetimepicker({
        //     format: 'YYYY-MM-DD HH:mm:ss',
        //     useCurrent: false
        // })
    </script>
@endsection

<!-- Warranty Field -->
<div class="form-group col-sm-6">
    {!! Form::label('start_warranty', 'Start Warranty:') !!}
    {!! Form::date('start_warranty', null, ['class' => 'form-control','id'=>'start_warranty']) !!}
</div>

<!-- Warranty Field -->
<div class="form-group col-sm-6">
    {!! Form::label('end_warranty', 'End Warranty:') !!}
    {!! Form::date('end_warranty', null, ['class' => 'form-control','id'=>'end_warranty']) !!}
</div>

@section('scripts')
    <script type="text/javascript">
        // $('#warranty').datetimepicker({
        //     format: 'YYYY-MM-DD HH:mm:ss',
        //     useCurrent: false
        // })
    </script>
@endsection

<!-- Image Field -->
<div class="form-group col-sm-6">
    {!! Form::label('image', 'Image:') !!}
    {!! Form::file('image', null, ['class' => 'form-control']) !!}
</div>

<!-- Qty Field -->
<div class="form-group col-sm-6">
    {!! Form::label('qty', 'Qty:') !!}
    {!! Form::number('qty', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('inventories.index') }}" class="btn btn-default">Cancel</a>
</div>
