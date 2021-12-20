<div>
    {{-- The Master doesn't talk, he acts. --}}
<section class="text-gray-600 body-font">
  <div class="container px-5 py-24 mx-auto">
    <div class="flex flex-wrap -m-4">
      @foreach($gallerys as $key => $gallery)
      <div class="p-2 md:w-1/3" style="width: 400px">
        <div class="h-36 border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden">
          <img class="lg:h-24 md:h-20 w-1/3 object-cover object-center" src="{{$gallery->url_image}}" alt="blog">
          <div class="p-6">
            <h1 class="title-font text-lg font-medium text-gray-900 mb-3">The Catalyzer</h1> compartido: ({{$gallery->share}})
            <div class="flex items-center flex-wrap justify-center">
                {{--<svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">--}}
                  {{--<path d="M5 12h14"></path>--}}
                  {{--<path d="M12 5l7 7-7 7"></path>--}}
                {{--</svg>--}}
              <span class="text-gray-400 mr-3 inline-flex items-center lg:ml-auto md:ml-0 ml-auto leading-none text-sm pr-3 py-1 border-r-2 border-gray-200">
                <svg width="29.956px" height="29.956px" viewBox="0 -0.43 29.956 29.956" id="_10_-_Love" data-name="10 - Love" xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 mr-1">
  <path id="_10_-_Love-2" data-name="10 - Love" d="M16,4.986A8.785,8.785,0,0,0,3.522,4.075c-3.2,3.038-3.395,9.113-.2,15.189,2.131,4.325,7.576,8.69,12.14,11.581a1,1,0,0,0,1.07,0c4.567-2.893,10.017-7.262,12.15-11.6,3.188-6.063,2.99-12.133-.207-15.169A8.785,8.785,0,0,0,16,4.986h0ZM15.154,7.2a1,1,0,0,0,1.692,0A6.792,6.792,0,0,1,27.1,5.525h0A6.408,6.408,0,0,1,28.92,9.452a15.475,15.475,0,0,1-2.015,8.882c0,.008-.009.017-.013.025C24.98,22.251,20.161,26.115,16,28.812c-4.161-2.7-8.98-6.561-10.892-10.453,0-.008-.008-.017-.013-.025A15.483,15.483,0,0,1,3.08,9.452,6.414,6.414,0,0,1,4.9,5.525,6.792,6.792,0,0,1,15.154,7.2Z" transform="translate(-1.023 -1.896)" fill-rule="evenodd"/>
</svg>

              </span>
              <span class="text-gray-400 inline-flex items-center leading-none text-sm" wire:click="$emit('openModal', 'share-button.share-modal', {{json_encode(['gallery' => $gallery->id])}})">
              <svg class="w-4 h-4 mr-1" width="29.184px" height="29.184px" viewBox="-1.67 0 29.184 29.184" id="_17_-_Direct_Massage" data-name="17 - Direct Massage" xmlns="http://www.w3.org/2000/svg">
  <path id="Path_247" data-name="Path 247" d="M4.43,20.809l8.7.967,3.914,7.829a2,2,0,0,0,3.7-.312L28.414,4.109a2,2,0,0,0-3.06-2.221L3.5,17.183a2,2,0,0,0,.926,3.626ZM26.5,3.526,18.836,28.711l-4.158-8.316a1,1,0,0,0-.784-.547L4.651,18.821,26.5,3.526h0Z" transform="translate(-2.651 -1.527)" fill-rule="evenodd"/>
  <path id="Path_248" data-name="Path 248" d="M19.576,11.252l-6.6,9a1,1,0,0,0,1.613,1.182l6.6-9a1,1,0,0,0-1.613-1.183Z" transform="translate(-2.651 -1.527)" fill-rule="evenodd"/>
</svg>
              </span>
            </div>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</section>
    @livewire('livewire-ui-modal')
</div>
