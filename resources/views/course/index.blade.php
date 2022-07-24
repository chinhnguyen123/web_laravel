<a href="{{route('courses.create')}}">
    Them
</a>

<table border="1px" width="100%">
    <tr>
        <th>#</th>
        <th>Name</th>
        <th>Create At</th>
        <th>Edit</th>
        <th>Delete</th>
    </tr>
    @foreach($data as $each)
        <tr>
            <td>
                {{$each->id}}
            </td>
            <td>
                {{$each->name}}
            </td>
            <td>
{{--                {{$each->created_at->format('Y-d-m')}}--}}
                {{$each->year_created_at}}
            </td>

            <td>

                <a href="{{route('courses.edit', $each)}}">
                        Edit
                </a>
            </td>

            <td>
                <form action="{{route('courses.destroy', ['course'=>$each->id])}}" method="post">
                    @csrf
                    @method('DELETE')
                        <button>Delete</button>
                </form>
            </td>
        </tr>
    @endforeach
</table>
