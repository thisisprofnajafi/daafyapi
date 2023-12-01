<!-- Fullname Field -->
<div class="col-sm-12">
    {!! Form::label('fullname', 'Fullname:') !!}
    <p>{{ $user->fullname }}</p>
</div>

<!-- Email Field -->
<div class="col-sm-12">
    {!! Form::label('email', 'Email:') !!}
    <p>{{ $user->email }}</p>
</div>

<!-- Birthdate Field -->
<div class="col-sm-12">
    {!! Form::label('birthdate', 'Birthdate:') !!}
    <p>{{ $user->birthdate }}</p>
</div>

<!-- Bio Field -->
<div class="col-sm-12">
    {!! Form::label('bio', 'Bio:') !!}
    <p>{{ $user->bio }}</p>
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $user->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $user->updated_at }}</p>
</div>

