<x-form id="submit_form_password" header="Update Password" action="{{ route('password.update') }}">
    <div class="mb-6">
        <x-label for="update_password_current_password">Curent Password</x-label>
        <x-input-field type="password" id="update_password_current_password" name="current_password" placeholder="Current password..." required />
        <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2" />
    </div>
    <div class="mb-6">
        <x-label for="update_password_password">Password</x-label>
        <x-input-field type="password" id="update_password_password" name="password" placeholder="Password..." required />
        <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2" />
    </div>
    <div class="mb-6">
        <x-label for="update_password_password_confirmation">Password Confirmation</x-label>
        <x-input-field type="password" id="update_password_password_confirmation" name="password_confirmation" placeholder="Password Confirmation..." required />
        <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2" />
    </div>
    {{-- Footer --}}
    <x-card-footer>
        <a href="{{ route('dashboard') }}"><x-button variant="light" class="mr-3">Cancel</x-button></a>
        <x-button variant="primary" type="submit">Submit</x-button>
    </x-card-footer>
</x-form>
