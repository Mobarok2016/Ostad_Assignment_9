@extends('layout.app')

@section('content')
<div class="container mt-5">
    <h1 class="text-center">Contact Us</h1>
    <p class="text-center">Feel free to reach out to us with any questions or feedback!</p>

    <!-- Contact Form -->
    <form action="#" method="post">
        @csrf
        <!-- Name Field -->
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>

        <!-- Email Field -->
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>

        <!-- Message Field -->
        <div class="form-group">
            <label for="message">Message:</label>
            <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
        </div>

        <!-- Submit Button -->
        <button type="submit" class="btn btn-primary mt-5">Submit</button>
    </form>
</div>
@endsection