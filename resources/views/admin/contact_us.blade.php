@extends('admin.layouts.master')
@section('content')


<div
    class="table-responsive-md"
>
<div class="users-table table-wrapper">
              <table class="posts-table table-bordered">
              
        <thead class="table-light">
            
            <tr>
                <th style="background : green; color: white;  text-align: center;">ID</th>
                <th style="background : green; color: white;">Name</th>
                <th style="background : green; color: white;">Number</th>
                <th style="background : green; color: white;">Location</th>
                <th style="background : green; color: white;  text-align: center;">Message</th>
                <th style="background : green; color: white;  text-align: center;">Delete</th>
            </tr>
        </thead>
        <tbody class="table-group-divider" style="background : yellow;">
        @foreach($data as $item)
            <tr class="table-primary" style="background: yellow;">
                <td style="background: yellow;">{{ $item->id }}</td>
                <td style="background: yellow;">{{ $item->name }}</td>
                <td style="background: yellow; color: black;">{{ $item->number }}</td>
                <td style="background: yellow;">{{ $item->location }}</td>
                <td style="background: yellow; text-align: center; color: black;">{{ $item->message }}</td>
                <td style="background: yellow;">
                    <form action="{{ route('admin.deletepdt', $item->id) }}" method="POST" onsubmit="return confirm('ARE YOU SURE!!! YOU WANNA DELETE THIS RECORD');">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach

        </tbody>
    </table>
</div>



@endsection

