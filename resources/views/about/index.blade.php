<x-layout>
    <main class="container mx-auto p-4">
        <a href="{{route('home')}}">Home</a>
        @if(isset($name))
            <h2 class="text-xl font-semibold mb-4">Welcome, {{ $name }}!</h2>
        @endif

        <section class="bg-white shadow-md rounded-lg p-6 mb-6">
            <h2 class="text-2xl font-bold mb-4">About Us</h2>
            <p class="mb-4">Welcome to our website. We are dedicated to providing the best service possible.</p>
            <p class="mb-4">Our team is composed of experienced professionals who are passionate about what they do.</p>
            <p class="mb-4">Feel free to browse our site and learn more about what we offer.</p>
        </section>
        <section class="bg-white shadow-md rounded-lg p-6">
            <h2 class="text-2xl font-bold mb-4">Our Mission</h2>
            <p class="mb-4">Our mission is to deliver high-quality products that bring value to our customers.</p>
            <p class="mb-4">We strive to innovate and continuously improve our services to meet the needs of our clients.</p>
        </section>
    </main>
</x-layout>
