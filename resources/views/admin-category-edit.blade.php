<x-app-layout>
    <div class="container mt-3">
        <div class="card">
            <div class="card-body mt-4">
                <div class="mt-2">
                    <p class="h4">Category Update:</p>
                </div>
                {{-- category store from start --}}
                <form action="{{route('update.category', $category->id)}}" method="post">
                    @csrf
                    <div class="mt-3">
                        <input type="text" value="{{$category->name}}" name="name" class="form-control">
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
        </div>
    </div>
</x-app-layout>
