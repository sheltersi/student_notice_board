<x-app-layout>
    <div class="max-w-2xl mx-auto p-4 sm:p-6 lg:p-8 space-y-4">
        <form method="POST" action="{{ route('posts.store') }}">
            @csrf
  

            <div class="mb-6">
                <label class="block mb-2 uppercase font-bold r=text-xs text-gray-700"
                for="headline">
               Headline
                </label>
                <input class="border border-gray-400  mb-3 w-full"
                type="text"
                name="headline"
                id="headline"
                placeholder="headline"
                value="{{ old('headline') }}"
                required
                >
            
                @error('headline')
    <p class="text-red-500 text-xs mt-2">{{$message}}</p>
    @enderror 
            </div>

            <textarea
                name="body_text"
                placeholder="{{ __('What project are you currently building or Planning to build ?') }}"
                class="block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
            >{{ old('body_text') }}</textarea>
            <x-input-error :messages="$errors->get('message')" class="mt-2" />
            <x-primary-button class="mt-4">{{ __('Post') }}</x-primary-button>
        </form>
    </div>
</x-app-layout>