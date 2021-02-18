@extends('layouts.app')
@section('content')
<form action="{{route('sendemail')}}" enctype="multipart/form-data" method="POST">
    <h1>We Will Contact You</h1><span class="lnr lnr-heart"></span>
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                            </ul>
                        </div>
                    @endif
        <div class="form-group">
                <label class="control-label">Full Name</label>
                <div>
                {{ csrf_field() }}
                    @csrf
                    <input type="text" class="form-control input-lg" name="name" value="">

                </div>
        </div>
        <div class="form-group">
                <label class="control-label">E-Mail Address</label>
                <div>
                    <input type="email" class="form-control input-lg" name="email" value="">
                </div>
        </div>
        <div class="form-group">
                <label class="control-label">Mobile No.</label>
                <div>
                <input type="text" class="form-control input-lg" name="mobile" data-format="+1 (ddd) ddd-dddd">
                </div>
        </div>
        <div class="form-group">
                <label class="control-label">Message</label>
                <div>
                    <textarea type="email" class="form-control input-lg" name="message" value=""></textarea>
                </div>
        </div>
        <div class="form-group">
            <label for="resume" >Resume</label>
            <input type="file" class="form-control" name="document" />
            <label class="text-danger mt-1" >(*File type- pdf,docx,doc*)</label>
            </div>
        <div class="form-group">
                <div>
                    <button type="submit" value="submit" name="submit" class="btn btn-success">
                        Submit
                    </button>
                </div>
        </div>
    </form>
@endsection
