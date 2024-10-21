<div class="table-responsive">
    <table class="table table-striped table-bordered table-hover dataTables-example">
        <thead>
            <tr>
                {{-- <th><input type="checkbox" value="" id="checkAll" class="input-checkbox"></th> --}}
                <th scope="col" style="width: 10px;">
                    <div class="form-check">
                        <input class="form-check-input fs-15" type="checkbox" id="checkAll"
                            value="option">
                    </div>
                </th>
                <th>ID</th>
                <th>Avatar</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                {{-- <th>Address</th> --}}
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
                <tr>
                    <td scope="row">
                        <div class="form-check">
                            <input class="form-check-input fs-15" type="checkbox" name="checkAll"
                                value="option1">
                        </div>
                    </td>
                    <td>{{ $item->id }}</td>
                    <td>
                        @php
                            $url = $item->image;
                            if (!\Str::contains($url, 'http')) {
                                $url = \Storage::url($url);
                            }
                        @endphp
                        <img src="{{ $url }}" alt="" width="100px">
                    </td>

                    <td>{{ $item->name }}</td>
                    <td>{{ $item->email }}</td>
                    <td>{{ $item->phone }}</td>
                    {{-- <td>{{ $item->address }}</td> --}}
                    {{-- <td>
                        <input type="checkbox" class="js-switch" checked />
                    </td> --}}
                    <td>{!! $item->status
                        ? '<span class="badge bg-primary">Enabled</span>'
                        : '<span class="badge bg-danger">Disabled </span>' !!}</td>

                    <td>
                        <a href="{{ route('admin.users.show', $item->id) }}"
                            class="btn btn-info "><i class="fa fa-info-circle"></i></a>
                        <a href="{{ route('admin.users.edit', $item->id) }}"
                            class="btn btn-success"><i class="fa fa-edit"></i></a>
                        <a href="">
                            <form action="{{ route('admin.users.destroy', $item) }}"
                                method="post">
                                @csrf
                                @method('DELETE')
                                <button onclick="return confirm('Chắc chắn không?')" type="submit"
                                    class="btn btn-danger"><i class="fa fa-trash"></i></button>
                            </form>
                        </a>
                        {{-- @can('admin.user.role')
                <a href="{{ route('admin.user.role', $item->id) }}" class="btn btn-warning btn-xs">Role</a>
            @endcan --}}
                    </td>
                    </td>
                </tr>
            @endforeach

        </tbody>

        <tfoot>
            <tr>
                <th></th>
                <th>ID</th>
                <th>Avatar</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Address</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </tfoot>
    </table>
</div>
