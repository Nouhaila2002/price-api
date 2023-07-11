<form action="{{ route('process.form') }}" method="POST">
    
    @csrf
    <!-- Add form fields here -->
    <input type="text" name="name" placeholder="Your Name" required>
    <input type="email" name="email" placeholder="Your Email" required>
    <!-- Add more fields if needed -->

    <button type="submit">Submit</button>
</form>
