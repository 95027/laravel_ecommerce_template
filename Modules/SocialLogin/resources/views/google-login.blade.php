<div>
    <form action="{{ route('google.redirect') }}" >
        @csrf
        <button type="submit" class="bg-blue-600 p-2 rounded mx-3 text-white">Login with Google</button>
    </form>
</div>
