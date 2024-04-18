<x-app-layout>
    <div class="mx-auto my-16 max-w-7xl px-6 lg:px-8">
        <a href="{{ route('welcome') }}" class="-mt-10 mb-12 flex items-center text-slate-400 hover:underline" wire:navigate>
            <x-icons.chevron-left class="size-4" />
            <span>Back</span>
        </a>

        <div class="mt-6">
            <div class="prose prose-slate prose-invert mx-auto max-w-4xl">
                <h1>Terms of Service</h1>
                <p><strong>Last Updated: 18 Apr 2024</strong></p>

                <p>
                    Welcome to Mega-Site, a digital platform designed to streamline your online presence by allowing users to create a personalized and
                    easily manageable link hub. By accessing or using our website, mobile applications, and services (collectively, the “Services”),
                    you agree to be bound by these Terms of Service (“Terms”).
                </p>

                <h2> Contact Us</h2>
                <p>
                    If you have any questions about these Terms, please contact us at
                    <a href="mailto:team@mega-site.com">team@mega-site.com</a>
                    .
                </p>
            </div>
        </div>
    </div>
</x-app-layout>
