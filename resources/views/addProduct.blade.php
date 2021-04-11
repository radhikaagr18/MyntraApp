<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <!-- <x-jet-authentication-card-logo /> -->
            <img id="output"  src="" />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('addProductsStore') }}" enctype="multipart/form-data">
            @csrf

            <div>
                <x-jet-label for="name" value="{{ __('Name') }}" />
                <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div class="mt-4">
                <x-jet-label for="price" value="{{ __('Price') }}" />
                <x-jet-input id="price" class="block mt-1 w-full" type="number" name="price" :value="old('price')" required />
            </div>

            <div class="mt-4">
                <x-jet-label for="discount" value="{{ __('Discount') }}" />
                <x-jet-input id="discount" class="block mt-1 w-full" type="number" name="discount" required />
            </div>

            <div class="mt-4">
                <p><input type="file"  accept="image/*" name="photo" id="file"  onchange="loadFile(event)" style="display: none;" ></p>
                <p><label for="file" style="cursor: pointer;" class="btn btn-light">Upload Image</label></p>
                        
            </div>

            <div class="flex items-center justify-end mt-4">

                <x-jet-button class="ml-4">
                    {{ __('Add Product') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
<script>
        var loadFile = function(event) {
            var image = document.getElementById('output');
            image.src = URL.createObjectURL(event.target.files[0]);
        };
        
        console.log('hello')


</script>