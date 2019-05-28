<aside class="latest">
    @foreach($subcategories as $subcategory => $category_list)
        <div class="category">
            <div class="icon"></div>
            <div class="heading"><h5 class="category-heading">{{$category_list->title}}</h5>
                <div class="child-task">
                        @foreach($category_list->task as $task)
                            <p><i class="fa fa-sticky-note-o"></i>  {{$task->title}}</p>
                        @endforeach
                </div>
            </div>
        </div>
    @endforeach
</aside>