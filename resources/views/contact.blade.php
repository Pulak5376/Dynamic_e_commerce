@extends('layout.master')
@section('title', 'Contact')
@section('content')
<section class="section">
    <h2>Contact Us</h2>
    <form action="#" method="POST">
        <input type="text" name="name" placeholder="Your Name" required>
        <input type="email" name="email" placeholder="Your Email" required>
        <textarea name="message" placeholder="Your Message" required></textarea>
        <button type="submit">Send Message</button>
    </form>
</section>
@endsection
