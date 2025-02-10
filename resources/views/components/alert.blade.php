@props(['type', 'message'])

@if(session()->has('success') || session()->has('error'))
<div id="alert-box" class="p-4 mb-4 text-sm text-white {{ $type === 'success' ? 'bg-green-500' : 'bg-red-500' }} rounded">
    {{ $message }}
</div>

<script>
    setTimeout(() => {
        document.getElementById('alert-box').style.display = 'none';
    }, 3000);
</script>
@endif
