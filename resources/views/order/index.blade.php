@extends('main')

@section('title', '| Homepage')

@section('content')
    <section>
                
                <div class="row">
                        <div class="col-md-6 col-md-offset-3">
                                {!! Form::open(array('files'=>true))  !!}

                                        {{ Form::label('name', "Name:") }}
                                        {{ Form::text('name', null, ['class' => 'form-control']) }}
                                        
                                        {{ Form::label('phone', "Phone Number:") }}
                                        {{ Form::text('phone', null, ['class' => 'form-control']) }}
                                        
                                        {{ Form::label('address', "Address:") }}
                                        {{ Form::text('address', null, ['class' => 'form-control']) }}
                                        
                                        {{ Form::label('food_id',"Food")}}
                                        <select class="form-control" name="food_id">
					@foreach($food as $food)
						<option value='{{ $food->id }}'>{{ $food->food_name }}</option>
					@endforeach

                                        </select>
                                            
                                        {{ Form::label('quantity', "Quantity:") }}
                                        {{ Form::text('quantity', null, ['class' => 'form-control']) }}
                                                                               

                                        {{ Form::submit('ORDER', ['class' => 'btn btn-primary btn-block form-spacing-top']) }}

                                {!! Form::close() !!}
                        </div>
                </div>
                
            </section>
@stop