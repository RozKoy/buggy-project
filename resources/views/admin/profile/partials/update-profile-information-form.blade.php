<x-form id="submit_form_profile" header="Profile Information" action="{{ route('profile.update') }}" class="mb-8">
    <div class="mb-6">
        <x-label for="name">Name</x-label>
        <x-input-field type="text" id="name" name="name" placeholder="Name..." value="{{ old('name', $user->name) }}" required />
        <x-input-error :messages="$errors->get('name')" class="mt-2" />
    </div>
    <div class="mb-6">
        <x-label for="email">Email</x-label>
        <x-input-field type="text" id="email" name="email" placeholder="Name..." value="{{ old('email', $user->email) }}" required />
        <x-input-error :messages="$errors->get('email')" class="mt-2" />
    </div>
    {{-- Footer --}}
    <x-card-footer>
        <a href="{{ route('dashboard') }}"><x-button variant="light" class="mr-3">Cancel</x-button></a>
        <x-button variant="primary" type="submit">Submit</x-button>
    </x-card-footer>
</x-form>
