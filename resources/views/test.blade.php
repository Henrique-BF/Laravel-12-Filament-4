    <div class="container mx-auto px-4 py-8">
        <h1 class="mb-8 text-center text-3xl font-bold">Test Blade Template</h1>

        <div class="mb-6 rounded-lg bg-white p-6 shadow-md">
            <h2 class="mb-4 text-xl font-semibold">Basic Blade Features</h2>

            <p class="mb-4">Current time: {{ now()->format('Y-m-d H:i:s') }}</p>

            <p class="mb-4">App name: {{ config('app.name') }}</p>

            @if (Auth::check())
                <p class="text-green-600">Welcome, {{ Auth::user()?->name ?? 'Guest' }}!</p>
            @else
                <p class="text-red-600">Please log in to see personalized content.</p>
            @endif
        </div>

        <div class="mb-6 rounded-lg bg-white p-6 shadow-md">
            <h2 class="mb-4 text-xl font-semibold">Loop Example</h2>
            <ul class="list-inside list-disc">
                @for ($i = 1; $i <= 5; $i++)
                    <li>Item {{ $i }}</li>
                @endfor
            </ul>
        </div>

        <div class="rounded-lg bg-white p-6 shadow-md">
            <h2 class="mb-4 text-xl font-semibold">Array Example</h2>
            @php
                $fruits = ['Apple', 'Banana', 'Cherry', 'Date', 'Elderberry'];
            @endphp
            <ul class="list-inside list-disc">
                @foreach ($fruits as $fruit)
                    <li>{{ $fruit }}</li>
                @endforeach
            </ul>
        </div>
    </div>
