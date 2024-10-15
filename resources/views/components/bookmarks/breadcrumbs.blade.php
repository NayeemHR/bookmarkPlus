<ul>
    <li>
        Home
    </li>
    @foreach ($segments = request()->segments() as $index =>  $segment)
    <li>
        {{isset($model) && $index === count($segments) - 1 ? $model->title : title_case( $segment)}}
    </li>
    @endforeach


</ul>