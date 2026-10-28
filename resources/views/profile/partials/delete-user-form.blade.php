<section class="card bg-base-100 shadow-md">
    <div class="card-body">
        <h2 class="card-title font-bold">
            @lang('Delete Account')
        </h2>

        <p class="text-base-content/70">
            @lang('Once your account is deleted, all of its resources and data will be permanently deleted. Before deleting your account, please download any data or information that you wish to retain.')
        </p>


        <button type="button" class="btn btn-error w-35" onclick="delete_account_modal.showModal()">
            @lang('Delete Account')
        </button>

        <dialog id="delete_account_modal" class="modal">
            <div class="modal-box">
                <form method="post" action="{{ route('profile.destroy') }}" class="p-6">
                    @csrf
                    @method('delete')

                    <h2 class="font-bold text-lg">
                        @lang('Are you sure you want to delete your account?')
                    </h2>

                    <p class="mt-1 text-sm">
                        @lang('Once your account is deleted, all of its resources and data will be permanently deleted. Please enter your password to confirm you would like to permanently delete your account.')
                    </p>

                    <fieldset class="fieldset mb-4">
                        <legend class="fieldset-legend">@lang('Password')</legend>
                    <input
                        id="password" 
                        name="password" 
                        type="password" 
                        class="input w-full @error('password', 'userDeletion') input-error @enderror"
                        placeholder="@lang('Password')"
                        autocomplete="current-password" />

                    @error('password', 'userDeletion')
                        <p class="label text-error">{{ $message }}</p>
                    @enderror
                    </fieldset>
                    
                    <div class="modal-action">
                        <button type="button" class="btn btn-neutral-content" onclick="delete_account_modal.close()">
                            @lang('Cancel')
                        </button>

                        <button type="submit" class="btn btn-error">
                            @lang('Delete Account')
                        </button>
                    </div>
                </form>
            </div>
            <form method="dialog" class="modal-backdrop">
                <button>@lang('Close')</button>
            </form>
        </dialog>
    </div>
</section>
