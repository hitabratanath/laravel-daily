<x-layout>
    <main class="container mx-auto p-4">
        <section class="bg-white shadow-md rounded-lg p-6 mb-6">
            <h2 class="text-2xl font-bold mb-4">Hello, Visitor!</h2>
            <p class="mb-4">We are delighted to have you here. Explore our website to learn more about us and what we offer.</p>
            <p class="mb-4">Feel free to browse through our sections and get in touch if you have any questions.</p>
            <a href="{{route('about')}}" class="text-blue-500 hover:underline">Learn more about us</a>
        </section>
        <section class="bg-white shadow-md rounded-lg p-6">
            <h2 class="text-2xl font-bold mb-4">Our Services</h2>
            <p class="mb-4">We offer a wide range of services to meet your needs. Our team is dedicated to providing top-notch solutions.</p>
            <p class="mb-4">Check out our services page to see what we can do for you.</p>
            <a href="/services" class="text-blue-500 hover:underline">View our services</a>
        </section>
    </main>
</x-layout>
