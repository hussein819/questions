@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('create new questionnaire') }}</div>

                    <div class="card-body">
                       <form method="post" action="/laravel/questions/public/questionnaires">
                           @csrf

                           <div class="form-group">
                               <label for="title">title</label>
                               <input  name="title" type="text" class="form-control" id="title" aria-describedby="titleHelp" placeholder="Enter title">
                               <small id="titleHelp" class="form-text text-muted">give your questionnaire a title that attracts attention.</small>
                               @error('title')
                               <small class="text-danger">{{$message}}</small>
                               @enderror
                           </div>

                           <div class="form-group">
                               <label for="purpose">purpose</label>
                               <input  name="purpose" type="text" class="form-control" id="purpose" aria-describedby="purposeHelp" placeholder="Enter purpose">
                               <small id="purposeHelp" class="form-text text-muted">given a purpose well increase responses.</small>
                               @error('purpose')
                               <small class="text-danger">{{$message}}</small>
                               @enderror
                           </div>
                           <button type="submit" class="btn btn-dark">create question</button>
                       </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
