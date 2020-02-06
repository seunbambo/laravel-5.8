<div class="form-group">
    <label for="name">Name</label>
<input class="form-control" type="text" name="name" value="{{ old('name') ?? $customer->name }}">
<small class="text-danger">{{ $errors->first('name') }}</small>
</div>

<div class="form-group">
    <label for="email">Email</label>
<input class="form-control" type="text" name="email" value="{{ old('email') ?? $customer->email }}">
<small class="text-danger">{{ $errors->first('email') }}</small>
</div>

<div class="form-group">
    <label for="active">Status</label>
    <select class="form-control" name="active" id="active">
        <option value="" disabled>Select customer status</option>

        @foreach ($customer->activeOption() as $activeOptionKey => $activeOptionValue)
            <option value="{{ $activeOptionKey }}" {{ $customer->active == $activeOptionValue ? 'selected' : '' }}>{{ $activeOptionValue }}</option>
        @endforeach
    </select>
</div>

<div class="form-group">
    <label for="company_id">Company</label>
    <select class="form-control" name="company_id" id="company_id">
        @foreach ($companies as $company)
            <option value="{{ $company->id }}">{{ $company->name }}</option>
        @endforeach
    </select>
</div>

@csrf