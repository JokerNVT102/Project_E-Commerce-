<div>
    <style>
    nav svg {
        height: 20px;
    }

    /* nav .hidden {
        display: block !important;
    } */
    </style>
    <div class="container" style="padding:30px 0;">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-6">
                                All Categories
                            </div>
                            <div class="col-md-6">
                                <a href="{{route('admin.addcategory')}}" class="btn btn-success pull-right">Add New</a>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        @if(Session::has('message'))
                        <div class="alert alert-success" role="alert">
                            <strong>Success </strong>{{Session::get('message')}}
                        </div>
                        @endif
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Category Name</th>
                                    <th scope="col">Slug</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($categories as $category)
                                <tr>
                                    <th>
                                        {{$category->id}}
                                    </th>
                                    <th>
                                        {{$category->name}}
                                    </th>
                                    <th>
                                        {{$category->slug}}
                                    </th>
                                    <th>
                                        <a href="{{route('admin.editcategory',['category_slug'=> $category->slug])}}">
                                            <i class="fa fa-edit fa-2x"></i>
                                        </a>
                                        <a href="#" wire:click.prevent="deleteCategory({{$category->id}})">
                                            <i class="fa fa-times fa-2x text-danger" style="margin-left: 10px;"></i>
                                        </a>
                                    </th>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{$categories->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>