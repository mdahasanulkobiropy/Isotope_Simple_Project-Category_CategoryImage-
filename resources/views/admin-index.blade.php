<x-app-layout>
    <div class="container">
        <div class="card">
            <div class="card-header">
                {{-- Title list start --}}

                <table class="table">
                    <p class="h4">Title:</p>
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($title as $title)
                            <tr>
                                <td>{{$title->title}}</td>
                                <td>
                                    <a class="btn btn-warning" href="{{route('edit.title', $title->id)}}">Edit</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="card-body">
                 {{-- category list start --}}
                 <table class="table">
                    <thead>
                        <div>
                            <h5 class="h3">Category List:</h5>
                        </div>
                        <tr>
                            <th>Category</th>
                            <th>Category Image</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($categories as $category)
                            <tr>
                                <td>{{ $category->id }}</td>
                                <td>{{ $category->name }}</td>
                                <td>
                                    <a class="btn btn-warning"
                                        href="{{route('edit.category', $category->id)}}">Edit</a>
                                    <form action="{{route('destroy.category', $category->id)}}" method="post">
                                        @csrf
                                        <button class="btn btn-danger">Delete</button>
                                    </form>

                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{-- category list end --}}
            </div>
            <div class="card-footer">
                <table class="table">
                    <thead>
                        <div>
                            <h5 class="h3">Category Image List:</h5>
                        </div>
                        <tr>
                            <th>Category Image Id</th>
                            <th>Category Name</th>
                            <th>Category Image</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($category_images as $category_image)
                            <tr>
                                <td>{{$category_image->id}}</td>
                                <td>{{$category_image->category->name }}</td>
                                <td><img src="{{asset('/uploads/category/image/' . $category_image->image)}}"
                                        width="120" height="120"></td>
                                <td>
                                    <a class="btn btn-warning"
                                        href="{{route('edit.category.image', $category_image->id)}}">Edit</a>
                                    <form action="{{route('destroy.category.image', $category_image->id)}}"
                                        method="post">
                                        @csrf
                                        <button class="btn btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
