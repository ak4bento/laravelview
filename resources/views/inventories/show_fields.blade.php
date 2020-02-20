<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', 'Name:') !!}
    <p>{{ $inventory->name }}</p>
</div>

<!-- Type Field -->
<div class="form-group">
    {!! Form::label('type', 'Type:') !!}
    <p>{{ $inventory->type }}</p>
</div>

<!-- Category Field -->
<div class="form-group">
    {!! Form::label('category', 'Category:') !!}
    <p>{{ $inventory->category }}</p>
</div>

<!-- Company Field -->
<div class="form-group">
    {!! Form::label('company', 'Company:') !!}
    <p>{{ $inventory->company }}</p>
</div>

<!-- Date Of Entry Field -->
<div class="form-group">
    {!! Form::label('date_of_entry', 'Date Of Entry:') !!}
    <p>{{ $inventory->date_of_entry }}</p>
</div>

<!-- Warranty Field -->
<div class="form-group">
    {!! Form::label('start_warranty', 'Start Warranty:') !!}
    <p>{{ $inventory->start_warranty }}</p>
</div>

<!-- Warranty Field -->
<div class="form-group">
    {!! Form::label('end_warranty', 'End Warranty:') !!}
    <p>{{ $inventory->end_warranty }}</p>
</div>

<!-- Image Field -->
<div class="form-group">
    {!! Form::label('image', 'Image:') !!}
    <br>
    <img src="{{ asset('images/'.$inventory->image) }}" width="200" height="200">
</div>

<!-- Qty Field -->
<div class="form-group">
    {!! Form::label('qty', 'Qty:') !!}
    <p>{{ $inventory->qty }}</p>
</div>

