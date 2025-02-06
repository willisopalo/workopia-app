<x-layout>
    {{-- <x-slot>'Create new Job'</x-slot> --}}
    <h1>Create a new Job</h1>
   <form action="/jobs" method="POST">
    @csrf
    <div class="my-5">
        <input type="text" name="title" placeholder="Title" value="{{old('title')}}">
        <!-- Error Message for Title -->
        @error('title')
        <div class="text-red-500 mt-2 text-sm">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-5">
        <input type="text" name="description" placeholder="Description" value="{{old('description')}}">
        <!-- Error Message for Description -->
        @error('description')
        <div class="text-red-500 mt-2 text-sm">{{ $message }}</div>
        @enderror
    </div>
    {{-- <button type="submit">Submit</button> --}}
    </form>
</x-layout>

