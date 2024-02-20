<div class="max-w-md mx-auto mt-8 p-6 bg-white rounded-lg shadow-md">
    <h2 class="text-2xl font-semibold mb-4">Contact Us</h2>
    <form wire:submit.prevent="save">
        <div class="mb-4">
            <label for="name" class="block text-gray-700 font-semibold mb-2">Name</label>
            <input type="text" id="name" name="name" placeholder="Your Name" wire:model="name"
                   class="w-full px-3 py-2 border rounded-md focus:outline-none focus:border-blue-500">
                   {{-- Error message --}}
                   <div>
                    @error('name') <span class="error font-bold text-sm text-red-600">{{ $message }}</span> @enderror
                </div>
        </div>
        <div class="mb-4">
            <label for="email" class="block text-gray-700 font-semibold mb-2">Email</label>
            <input type="email" id="email" name="email" placeholder="Your Email" wire:model="email"
                   class="w-full px-3 py-2 border rounded-md focus:outline-none focus:border-blue-500">
                   {{-- Error message --}}
                   <div>
                    @error('email') <span class="error font-bold text-sm text-red-600">{{ $message }}</span> @enderror
                </div>
        </div>
        <div class="mb-4">
            <label for="message" class="block text-gray-700 font-semibold mb-2">Message</label>
            <textarea id="message" name="message" rows="4" placeholder="Your Message" wire:model="message"
                      class="w-full px-3 py-2 border rounded-md focus:outline-none focus:border-blue-500"></textarea>
                      {{-- Error message --}}
                      <div>
                        @error('message') <span class="error font-bold text-sm text-red-600">{{ $message }}</span> @enderror
                    </div>
        </div>
        <button type="submit"
                class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600 focus:outline-none focus:bg-blue-600">
            Submit
        </button>
    </form>
</div>

