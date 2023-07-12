<!DOCTYPE html>
<html>
<head>
    <title>Form</title>
    <link href="{{ asset('css/home.css') }}" rel="stylesheet">
</head>
<body>
    <div class="my-form">
        <form action="{{ route('price.form') }}" method="POST">
            @csrf
            <input type="text" name="ena" placeholder="ENA" required class="form-input">
            <button type="submit" class="form-button">Submit</button>
        </form>
    </div>
</body>
</html>
