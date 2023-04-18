<x-app-layout>
    <div class="container mt-3">
        <div class="card">
            <div class="card-body mt-4">
                <div class="mt-2">
                    <p class="h4">Title Update:</p>
                </div>
                {{-- category store from start --}}
                <form action="{{route('update.title', $title->id)}}" method="post">
                    @csrf
                    <div class="mt-3">
                        <input type="text" value="{{$title->title}}" name="title" class="form-control">
                    </div>
                    <div class="mt-3">
                        <button class="btn btn-info">Update</button>
                    </div>
                </form>
                {{-- category store from end --}}
            </div>
        </div>
    </div>
</x-app-layout>
