@extends('admin.layouts.master')
@section('content')

<div class="users-table table-wrapper">
              <table class="posts-table table-bordered">
                <thead>
                  <tr class="users-table-info">
                    <th>Client Avatar</th>
                    <th>Client Name</th>
                    <th>Client Number</th>
                    <th>Client Email</th>
                    <th>Delete</th>
                  </tr>
                </thead>

                <!-- Quotes Details -->
                <tbody>
                
                @foreach($appointments as $appointment)
                  <tr>
                  <td>
                      <div class="pages-table-img text-center">
                        <picture><source srcset="{{asset('admin/assets/img/avatar/avatar-face-04.webp')}}" type="image/webp"><img src="./img/avatar/avatar-face-04.png" alt="User Name"></picture>
                      </div>
                    </td>
                    <td>{{$appointment->name}}</td>
                    <td>{{$appointment->tel}}</td>
                    <td>{{$appointment->email}}</td>

                    <!-- Delete Button -->
                    <td>
                      <form action="{{ route('admin.appointments.destroy', $appointment->id) }}" method="POST">
                          @csrf
                          @method('DELETE')
                          <button type="submit" class="btn btn-Dark badge-pending">Delete</button>
                      </form>
                  </td>
                  
                  </tr>
                @endforeach
                @if(Session::has("success"))
                      <div class="alert alert-success">
                          <marquee><h4 class="text-success">{{Session::get("success")}}</h4></marquee>
                      </div>
                  @endif
                </tbody>
              </table>
            </div>

    <marquee><h2 class="text-success" style="color: red;">HomePage Quotes</h2></marquee>


@endsection