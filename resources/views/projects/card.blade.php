    <div class="card" style="height: 200px">
        <h3 class="text-xl font-normal py-4 -ml-5 mb-3 border-l-4 border-blue pl-4">
            <a href="{{$project->path()}}" class="text-black no-underline">{{str_limit($project->title,20)}}</a>
        </h3>
        <div class="text-grey">{{str_limit($project->description, 100)}}</div>
    </div>
