@props(['active' => true])

<div>
    <a {{ $attributes }} class="{{$active ? 'bg-orange-500 text-white' : 'bg-white text-gray-800'}} py-2 px-4 rounded mx-2" >{{$slot}}</a>
</div>