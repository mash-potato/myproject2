<!-- <div class="p-6 lg:p-8 bg-white border-b border-gray-200" x-data="{ data:[]}" x-init="retrieveData()"> -->
<div class="p-6 lg:p-8 bg-white border-b border-gray-200" x-data="getData()" x-init="getPro()">
    <!-- <x-application-logo class="block h-12 w-auto" /> -->

    <h1 class="mt-8 text-2xl font-medium text-gray-900">
        Laravel file upload sample.
    </h1>
    <a href="{{ url('import_index') }}" class="text-blue-600">Import/Upload File ></a>

    <table class="shadow-lg bg-white border-separate">
      <tr>
        <!-- <th class="bg-blue-100 border text-left px-6 py-4">No</th> -->
        <th class="bg-blue-100 border text-left px-6 py-4">UNIQUE_KEY</th>
        <th class="bg-blue-100 border text-left px-6 py-4">PRODUCT_TITLE</th>
        <th class="bg-blue-100 border text-left px-6 py-4">PRODUCT_DESCRIPTION</th>
        <th class="bg-blue-100 border text-left px-6 py-4">STYLE</th>
        <th class="bg-blue-100 border text-left px-6 py-4">SANMAR_MAINFRAME_COLOR</th>
        <th class="bg-blue-100 border text-left px-6 py-4">SIZE</th>
        <th class="bg-blue-100 border text-left px-6 py-4">COLOR_NAME</th>
        <th class="bg-blue-100 border text-left px-6 py-4">PIECE_PRICE</th>
      </tr>
      <template x-for="(record,index) in records">
      <tr>
          <!-- <td x-text="index+1"></td> -->
          <td class="border text-left px-6 py-4" x-text="record.unique_key"></td>
          <td class="border text-left px-6 py-4" x-text="record.product_title"></td>
          <td class="border text-left px-6 py-4" x-text="record.product_description"></td>
          <td class="border text-left px-6 py-4" x-text="record.style"></td>
          <td class="border text-left px-6 py-4" x-text="record.sanmar_mainframe_color"></td>
          <td class="border text-left px-6 py-4" x-text="record.size"></td>
          <td class="border text-left px-6 py-4" x-text="record.color_name"></td>
          <td class="border text-left px-6 py-4" x-text="record.piece_price"></td>
      </tr>
      </template>
    </table>


<script type="text/javascript">
function getData() {
    return {
        records: null,
        getPro() {
            fetch("{{ route('index_action') }}", {
                method: 'post',
                headers: { "Content-Type": "application/json", "X-CSRF-TOKEN": '{{ csrf_token() }}' },
                body: JSON.stringify({})
            })
            .then(res => res.json())
            .then(data => {
                this.records = data;
            })
            .catch(function(error){
                console.log("Error");
            });
        }
    }
}
</script>


</div>
