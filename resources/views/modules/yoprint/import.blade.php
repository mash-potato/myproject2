<x-app-layout>



<div class="p-6 lg:p-8 bg-white border-b border-gray-200">
    <!-- <x-application-logo class="block h-12 w-auto" /> -->

    <h1 class="mt-8 text-2xl font-medium text-gray-900">
    	<a href="{{ url('dashboard') }}">
			<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
		  	<path stroke-linecap="round" stroke-linejoin="round" d="M11.25 9l-3 3m0 0l3 3m-3-3h7.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
			</svg>    		
    	</a>
    	Import/Upload File
	</h1>

	<hr>


<form action="{{ route('yo_upload') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="file" name="file" accept=".csv">
    <button type="submit">Import CSV</button>
</form>


</div>

</x-app-layout>