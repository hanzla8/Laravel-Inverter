@extends('admin.layouts.master')
@section('content')

<main class="main users chart-page" id="skip-target">
<marquee><h2 class="text-success" style="color: red;">Add Product In UserPage</h2></marquee>

    <div class="container p-5" style="padding : 100px; background : #6495ED;">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                @if(Session::has("data"))
                <div class="alert alert-sucess">
                    <marquee><p class="text-success">{{Session::get("data")}}</p></marquee>
                </div>
                @endif
                <div class="card">
                    <div class="card-header bg-dark text-light">
                        <h3 class="card-title">Add New Item</h3>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('admin.additem') }}" enctype="multipart/form-data">
                        
                        

                            @csrf

                            <!-- Title input -->
                            <div class="mb-3">
                                <label for="title" class="form-label">Name</label>
                                <input type="text" name="name" class="form-control" placeholder="Enter Book Title"
                                    required />
                            </div><br>

                            <!-- Description input -->
                            <div class="mb-3">
                                <label for="description" class="form-label">Description</label>
                                <input type="text" name="description" class="form-control"
                                    placeholder="Enter Book Description" required />
                            </div><br>

                            <!-- Price input -->
                            <div class="mb-3">
                                <label for="current_price" class="form-label">Price</label>
                                <input type="text" name="price" class="form-control" placeholder="Enter Current Price"
                                    required />
                            </div><br>

                            <!-- Image input -->
                            <div class="mb-3">
                                <label for="image" class="form-label">Image</label>
                                <input type="file" name="image" class="form-control" required />
                            </div><br>

                            <!-- Submit button -->
                            <div class="mb-3">
                                <button style="background: red;" type="submit" name="submit"
                                    class="btn btn-danger">Add Item</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

@endsection
