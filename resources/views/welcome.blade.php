<!DOCTYPE html>
<html>
    <head>
        <title>Form Fill</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="mainstyle" href="Css/style.css">
    </head>
    <body>
        <div class="main-div">
          <h1>Form Fill</h1>
        </div>
        <div class="Container">
            <form action="{{route('users.create')}}" method="post">
                @csrf
                <div class="mb-3 col-md-4">
                    <label for="name" class="form-label">Name</label>
                    <input 
                        type="text" 
                        class="form-control @error('name') is-invalid @enderror small-input" 
                        id="name" 
                        name="name" 
                        value="{{ old('name') }}">
                    @error('name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3 col-md-4">
                    <label for="email" class="form-label">Email</label>
                    <input 
                        type="email" 
                        class="form-control @error('email') is-invalid @enderror small-input" 
                        id="email" 
                        name="email" 
                        value="{{ old('email') }}">
                    @error('email')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3 col-md-4">
                    <label for="phone" class="form-label">Phone</label>
                    <input 
                        type="text" 
                        class="form-control @error('phone') is-invalid @enderror small-input" 
                        id="phone" 
                        name="phone" 
                        value="{{ old('phone') }}">
                    @error('phone')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3 col-md-4">
                    <label for="address" class="form-label">Address</label>
                    <input 
                        type="text" 
                        class="form-control @error('address') is-invalid @enderror small-input" 
                        id="address" 
                        name="address" 
                        value="{{ old('address') }}">
                    @error('address')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                <button onclick="window.location.href='{{ route('users.index') }}'" class="btn btn-primary">Display</button>
            </form>
        </div>
    </body>
</html>