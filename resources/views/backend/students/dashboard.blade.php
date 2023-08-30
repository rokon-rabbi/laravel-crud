<x-backend.layouts.master>
    <h1>Wlcome to dashboard</h1>
    <table class="w-100 table table-striped table-hover table-border border-1">
        <thead>
            <tr>
                <th colspan="7" class="text-center">
                    <h3>Student Table</h3>
                </th>
                <th class="text-right">
                    <a href="{{ route('students.add') }}" type="submit" class="btn btn-outline-secondary">Add Student</a>
                </th>
            </tr>
            <tr>
                <th>sl.</th>
                <th>ID</th>
                <th>Name</th>
                <th>Gender</th>
                <th>Address</th>
                <th>Phone</th>
                <th>Date of Birth</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @php
                $sl = 1;
            @endphp
            @foreach ($student_data as $data)
                <tr>
                    <td>{{ $sl++ }}</td>
                    <td>{{ $data->id }}</td>
                    <td>{{ $data->name }}</td>
                    <td>Male</td>
                    <td>{{ $data->address }}</td>
                    <td>{{ $data->phone }}</td>
                    <td>{{ $data->dob }}</td>
                    <td>
                        <a href="{{ route('students.show') }}" class="btn btn-outline-secondary">Show</a>
                        <a href="{{ route('students.edit', $data->id) }}" class="btn btn-outline-secondary">Edit</a>
                        <a href="{{ route('students.show') }}" class="btn btn-outline-secondary">Delete</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</x-backend.layouts.master>
