<div>
    <div class="bg-white border rounded-xl p-8">
        <!-- The image part will use an attribute -->
        <img src="{{ $src }}" {{ $attributes->merge(['class' => 'w-[100%] h-[220px] rounded-xl']) }} />

        <!-- Named slots for title and description -->
        <p class="text-lg font-bold font-serif tracking-wide pt-4">{{ $title }}</p>
        <span class="text-sm text-gray-400">{{ $description }}</span>
        <p>{{$slot}}</p>
        <div class="flex justify-between items-center mt-8">
            <label for="image"><?xml version="1.0" ?><svg class="cursor-pointer" height="24" version="1.1" width="24" 
                xmlns="http://www.w3.org/2000/svg" xmlns:cc="http://creativecommons.org/ns#" 
                xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#">
                <g transform="translate(0 -1028.4)"><path d="m23 1048.4c0 1.1-0.895 2-2 2h-8-4-6c-1.1046 0-2-0.9-2-2v-14c0-1.1 0.8954-2 2-2h6 4 4 4c1.105 0 2 0.9 2 2v4 10z" 
                fill="#95a5a6"/><path d="m1 1047.4c0 1.1 0.8954 2 2 2h8 4 6c1.105 0 2-0.9 2-2v-14c0-1.1-0.895-2-2-2h-6-4-4-4c-1.1046 0-2 0.9-2 2v4 10z" fill="#bdc3c7"/>
                <rect fill="#f39c12" height="14" transform="translate(0 1028.4)" width="18" x="3" y="5"/>
                <path d="m16.625 8.625-10.344 10.375h14.719v-6l-4.375-4.375z" fill="#e67e22" transform="translate(0 1028.4)"/>
                <path d="m8 8a2 2 0 1 1 -4 0 2 2 0 1 1 4 0z" fill="#f1c40f" transform="matrix(1.75 0 0 1.75 -3 1024.4)"/>
                <path d="m8.0938 11.094-5.0938 5.094v2.812h13l-7.9062-7.906z" fill="#d35400" transform="translate(0 1028.4)"/>
            </g></svg></label>
            <x-form-button>{{$changeImage}}</x-form-button>
        </div>
    </div>
</div>