<{{$element ?? 'a'}} @isset($type) type="{{$type}}" @endisset @isset($route) href="{{$route}}" @endisset class="btn btn-theme">
    <span>{{$title}}</span>
</{{$element ?? 'a'}}>