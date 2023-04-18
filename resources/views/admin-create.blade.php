<x-app-layout>
    <div class="container mt-3">
        <div class="card">
            <div class="card-header">
                {{-- category store from start --}}
                <form action="{{route('store.category')}}" method="post">
                    @csrf
                    <div class="mt-3">
                        <label class="h5" for="name">Category Name:</label>
                        <input type="text" name="name" class="form-control">
                    </div>
                    <div class="mt-3">
                        @error('name')
                            <div class="error text-warning">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mt-3">
                        <button class="btn btn-info">Submit</button>
                    </div>
                </form>
                {{-- category store from end --}}
            </div>

            <div class="card-body mt-4">
                <div class="mt-2">
                    <p class="h4">Category Images Upload:</p>
                </div>
                {{-- category store from start --}}
                <form action="{{route('store.category.image')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="mt-3">
                        <select class="form-select" name="cat_id" aria-label="Default select example">
                            <option selected>--Select Category Name--</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mt-3">
                        <label class="h5" for="image">Uploads Image:</label>
                        <input type="file" name="image" class="form-control">
                    </div>
                    <div class="mt-3 ">
                        @error('image')
                            <div class="error text-warning">{{ $message }}</div>
                        @enderror
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
