<x-backend.layouts.master>

    {{-- {{ dd($studentData) }} --}}
    <form action="{{ route('students.update', $studentData->id) }}" class="row g-3 w-75 mt-2 mx-auto p-5" method="post"
        style="background-color: #f1f1f1">
        @CSRF
        @method('PATCH')
        <div class="col-md-12 mb-3">
            <label for="studentName" class="form-label">Name</label>
            <input type="text" class="form-control" id="studentName" name="studentName"
                value="{{ $studentData->name }}">
        </div>
        <div class="col-12 mb-3">
            <label for="studentAddress" class="form-label">Address</label>
            <input type="text" class="form-control" id="studentAddress" name="studentAddress"
                value="{{ $studentData->address }}">
        </div>

        <div class="col-md-6 mb-3">
            <label for="studentPhone" class="form-label">Phone</label>
            <input type="text" class="form-control" id="studentPhone" name="studentPhone"
                value="{{ $studentData->phone }}">
        </div>
        <div class="col-md-6 mb-3">
            <label for="dob" class="form-label">Date of Birth</label>
            <input type="date" class="form-control" id="dob" name="dob" value="{{ $studentData->dob }}">
        </div>
        <div class="col-md-4 mb-3">
            <label for="studentGender" class="form-label">Gender</label>
        </div>
        <div class="col-md-4 mb-3">
            <input class="form-check-input" type="radio" name="studentGender" id="studentGender">
            <label class="form-check-label" for="maleStudentGenderLabel" value="Male">
                Male
            </label>
        </div>
        <div class="col-md-4 mb-3">
            <input class="form-check-input" type="radio" name="studentGender" id="studentGender">
            <label class="form-check-label" for="femaleStudentGenderLabel" value="Female">
                Female
            </label>
        </div>

        <div class="col-12">
            <button type="submit" class="btn btn-outline-secondary">Update</button>
        </div>
    </form>
</x-backend.layouts.master>
