@extends('filament::page')

@section('content')
<div class="space-y-8">
    <!-- Welcome Section -->
    <div class="rounded-lg border border-gray-200 bg-white p-8 shadow-sm dark:border-gray-700 dark:bg-gray-900">
        <div class="mb-6">
            <h1 class="text-4xl font-bold text-gray-900 dark:text-white">
                Welcome to Mega App Admin
            </h1>
            <p class="mt-2 text-lg text-gray-600 dark:text-gray-400">
                Your admin panel is ready to use
            </p>
        </div>

        <div class="grid grid-cols-1 gap-4 md:grid-cols-2">
            <!-- Users Card -->
            <div class="rounded-lg border border-gray-100 bg-gray-50 p-6 dark:border-gray-800 dark:bg-gray-800/50">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm font-medium text-gray-600 dark:text-gray-400">Users</p>
                        <p class="mt-2 text-3xl font-bold text-gray-900 dark:text-white">
                            {{ \App\Models\User::count() }}
                        </p>
                    </div>
                    <div class="rounded-full bg-blue-100 p-3 dark:bg-blue-900/30">
                        <svg class="h-6 w-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 12H9m6 0a6 6 0 11-12 0 6 6 0 0112 0z"></path>
                        </svg>
                    </div>
                </div>
            </div>

            <!-- Laravel Version Card -->
            <div class="rounded-lg border border-gray-100 bg-gray-50 p-6 dark:border-gray-800 dark:bg-gray-800/50">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm font-medium text-gray-600 dark:text-gray-400">Laravel</p>
                        <p class="mt-2 text-3xl font-bold text-gray-900 dark:text-white">
                            v{{ Illuminate\Foundation\Application::VERSION }}
                        </p>
                    </div>
                    <div class="rounded-full bg-red-100 p-3 dark:bg-red-900/30">
                        <svg class="h-6 w-6 text-red-600" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"></path>
                        </svg>
                    </div>
                </div>
            </div>
        </div>

        <!-- Quick Info -->
        <div class="mt-8 rounded-lg bg-blue-50 p-4 dark:bg-blue-900/20">
            <div class="flex gap-4">
                <svg class="h-5 w-5 flex-shrink-0 text-blue-600" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M18 5v8a2 2 0 01-2 2h-5l-5 4v-4H4a2 2 0 01-2-2V5a2 2 0 012-2h12a2 2 0 012 2z" clip-rule="evenodd"></path>
                </svg>
                <div>
                    <p class="text-sm font-medium text-blue-900 dark:text-blue-100">
                        Getting Started
                    </p>
                    <p class="mt-1 text-sm text-blue-800 dark:text-blue-200">
                        Start by creating resources or managing your data from the sidebar menu
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
