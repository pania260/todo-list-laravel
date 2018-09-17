@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">contact</div>

                    <div class="panel-body">
                        <div class="panel-body">
                            <form class="form-horizontal" method="POST" action="{{ route('contact') }}">
                                {{ csrf_field() }}

                                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                    <label for="name" class="col-md-4 control-label">Name</label>

                                    <div class="col-md-6">
                                        <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                        @if ($errors->has('name'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                    <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                                    <div class="col-md-6">
                                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                        @if ($errors->has('email'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('people') ? ' has-error' : '' }}">
                                    <label for="people" class="col-md-4 control-label">people</label>

                                    <div class="col-md-6">
                                        <input id="people" type="people" class="form-control" name="people" required>

                                        @if ($errors->has('people'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('people') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>
                                {{ csrf_field() }}

                                <div class="form-group{{ $errors->has('massage') ? ' has-error' : '' }}">
                                    <label for="name" class="col-md-4 control-label">massage</label>

                                    <div class="col-md-6">
                                        <input id="massage" type="text" class="form-control" name="massage" value="{{ old('massage') }}" required autofocus>

                                        @if ($errors->has('massage'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('massage') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>



                                <div class="form-group">
                                    <div class="col-md-6 col-md-offset-4">
                                        <button type="submit" class="btn btn-primary">
                                            contact
                                        </button>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
