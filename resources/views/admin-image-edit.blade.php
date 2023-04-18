<x-app-layout>
    <div class="container mt-3">
        <div class="card">
            <div class="card-body mt-4">
                <div class="mt-2">
                    <p class="h4">Category Images Update:</p>
                </div>
                {{-- category store from start --}}
                <form action="{{ route('update.category.image', $category_image->id)}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="mt-3">
                        <select class="form-select" name="cat_id" aria-label="Default select example">
                            <option value="{{$category_image->cat_id}}" selected>{{$category_image->category->name}}</option>
                            @foreach ($categories as $category)
                                <option value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mt-3">
                        <label class="h5" for="image">Uploads Image:</label>
                        <input type="file" name="image" class="form-control">
                        <div class="mt-3">
                           <img src="{{asset('/uploads/category/image/' . $category_image->image)}}"width="120" height="120">
                        </div>
                    </div>
                    <div class="mt-3">
                        <button class="btn btn-info">Submit</button>
                    </div>
                </form>
                {{-- category store from end --}}
            </div>
        </div>
    </div>
</x-app-layout>
