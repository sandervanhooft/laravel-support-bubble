<div class="spatie-support-bubble | text-sm fixed bottom-0 right-0 z-10 flex-col m-4 gap-3" style="max-width: 340px; display: none;">
    <div class="spatie-support-bubble__container | bg-white shadow-xl border border-gray-300 rounded p-6 transition transform translate-x-full opacity-0" style="display: none">
        <div class="spatie-support-bubble__form">
            @include('support-bubble::includes.form', compact('email'))
        </div>

        <div class="spatie-support-bubble__response" style="display: none">
        </div>
    </div>

    <div class="spatie-support-bubble__button">
        @include('support-bubble::includes.button')
    </div>
</div>

@include('support-bubble::includes.script')
