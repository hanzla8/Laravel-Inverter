@extends('admin.layouts.master')
@section('content')


<div class="users-table table-wrapper">
              <table class="posts-table table-bordered">
                <thead>
                  <tr class="users-table-info">
                    <th>Product Name</th>
                    <th>Description</th>
                    <th>product Image</th>
                    <th>product Price</th>
                    <th>Delete</th>
                  </tr>
                </thead>

                <!-- Quotes Details -->
                <tbody>
                
                @foreach ($data as $data)
                  <tr>
                  
                    <td>{{$data->name}}</td>
                    <td>{{$data->description}}</td>
                    <td>
                    <img src="productimg/{{ $data->image }}" height="150px" width="150px" alt="cover image">
                    </td>
                    <td>{{$data->price}}</td>

                    <td>
                      <span class="p-relative">
                          <button class="dropdown-btn transparent-btn" type="button"
                              title="More info">
                              <div class="sr-only">More info</div>
                              <i data-feather="more-horizontal" aria-hidden="true"></i>
                          </button>
                          <ul class="users-item-dropdown dropdown">
                              <li><a onclick="return confirm('ARE YOU SURE!!! YOU WANNA DELETE THIS BOOK');"
                                      href="{{ url('delete_item', $data->id) }}">Delete</a></li>
                          </ul>
                      </span>
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

<marquee><h2 class="text-success" style="color: red;">See the Items In which You Add in Database</h2></marquee>





@endsection