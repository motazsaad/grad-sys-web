@extends('layout')
@section('title', 'title')
@section('content')
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">تعديل طالب يدوياً</h3>
        </div>
        <div class="card-body">
            <form action="{{route('admin.student.update',['key' => request()->segment(5)])}}" method="POST">
                @csrf
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="exampleInputEmail1">الاسم</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror"
                               id="exampleInputEmail1" name="name" value="{{$student['name']}}">
                        @error('name')
                        <div class="alert alert-danger" style="margin-top: 10px">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group col-md-6">
                        <label for="exampleInputEmail1">الرقم الجامعي</label>
                        <input type="text" class="form-control @error('user_id') is-invalid  @enderror"
                               id="exampleInputEmail1" name="user_id" value="{{$student['user_id']}}">
                        @error('user_id')
                        <div class="alert alert-danger" style="margin-top: 10px">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="exampleInputEmail1">الإيميل</label>
                        <input type="email" class="form-control @error('email') is-invalid  @enderror"
                               id="exampleInputEmail1" name="email" value="{{$student['email']}}">
                        @error('email')
                        <div class="alert alert-danger" style="margin-top: 10px">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group col-md-6">
                        <label>التخصص</label>
                        <select class="form-control @error('department') is-invalid  @enderror" name="department">
                            <option value=""></option>
                            @foreach($departments as $department)
                                <option value="{{$department}}"
                                        @if($student['department'] == $department) selected @endif>{{$department}}</option>
                            @endforeach
                        </select>
                        @error('department')
                        <div class="alert alert-danger" style="margin-top: 10px">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="exampleInputEmail1">رقم الجوال</label>
                        <input type="text" class="form-control @error('mobile_number') is-invalid  @enderror"
                               id="exampleInputEmail1" name="mobile_number" value="{{$student['mobile_number']}}">
                        @error('mobile_number')
                        <div class="alert alert-danger" style="margin-top: 10px">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">تعديل</button>
            </form>
        </div>
    </div>
@endsection
