<div>

    <div class="">
        <div class="text-4xl font-bold text-site-option2 text-center pt-6">
            Available Distilleries
        </div>
        <div class="px-8 pt-10 flex justify-end items-start">
            <div class="lg:flex sm:grid sm:grid-cols-1  p-2 rounded space-x-3 mt-5 w-96">
                <input type="text" class="form-control" wire:model.debounce.500ms="searchTerm"
                    placeholder="Search Distillery">
            </div>
        </div>

        <div class="px-8 py-10">
            <div class="grid md:grid-cols-4 grid-cols-1  gap-4">
                @foreach ($distilleries as $distillery)
                <a
                href="{{ route('all.bourbons', [
                    'distillerys[]' => $distillery->id,
                ]) }}">
                        <div
                            class="p-6 max-w-sm bg-white rounded-lg border border-gray-200 hover:border-none shadow-md  flex justify-center items-start flex-col ml-6 group hover:bg-orange-500 hover:text-white hover:shadow-orange-500 hover:shadow-lg">

                            <div class="flex justify-start items-center flex-row space-x-3">
                                <div
                                    class="rounded-full p-2 h-14 w-14  bg-orange-500 group-hover:bg-white flex justify-center items-center ">
                                    <p class="text-2xl font-bold text-white group-hover:text-orange-500">
                                        {{ $distillery->title[0] }}
                                    </p>
                                </div>
                                <div class="">

                                    <h5 class="mb-2 text-lg font-bold  text-gray-900 group-hover:text-white">
                                        {{ $distillery->title }}</h5>

                                </div>
                            </div>
                            <div class="flex justify-center items-center mt-5">
                                <div
                                    class="flex space-x-4 bg-orange-500 group-hover:bg-white  text-white items-center rounded-full px-2 py-1 shadow-orange-500 shadow-xs">
                                    <svg class="w-5 h-5 fill-white group-hover:fill-orange-500" version="1.1"
                                        id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                        viewBox="0 0 512.001 512.001" style="enable-background:new 0 0 512.001 512.001;"
                                        xml:space="preserve">
                                        <g>
                                            <path
                                                d="M0,475.982h255.872v-311.9H0V475.982z M15.751,179.834h224.37v280.398H15.751V179.834z" />
                                            <path
                                                d="M207.848,36.018H48.023V91.79h159.823V36.018H207.848z M192.096,76.038H63.774V51.769h128.321
                                   v24.269H192.096z" />
                                            <path
                                                d="M239.993,140.07h-40.021c-17.724,0-32.144-14.42-32.144-32.145v-7.876H88.044v7.876
                                   c0,17.724-14.42,32.145-32.144,32.145H15.879v15.751h224.113V140.07z M91.373,140.07c6.041-6.66,10.238-15.02,11.776-24.269h49.575
                                   c1.536,9.249,5.734,17.61,11.775,24.269H91.373z" />
                                            <path
                                                d="M132.935,325.953c-19.654-16.145-44.228-21.296-71.063-14.893
                                   c-19.767,4.716-33.793,14.049-34.38,14.444l-3.48,2.341v124.127h207.849V317.252l-12.271,8.252
                                   C219.111,325.826,171.192,357.383,132.935,325.953z M216.109,436.219H39.762v-99.724c11.736-6.567,50.893-24.89,83.174,1.63
                                   c19.654,16.145,44.23,21.297,71.063,14.893c8.701-2.076,16.29-5.047,22.109-7.755V436.219z" />
                                            <polygon
                                                points="208.105,235.99 223.856,235.99 223.856,196.098 175.96,196.098 175.96,211.849
                                   208.105,211.849 	" />
                                            <rect x="208.105" y="251.998" width="15.751" height="48.024" />
                                            <rect x="336.036" y="428.212" width="152.073" height="15.751" />
                                            <path
                                                d="M312.157,268.135v207.849h199.844V268.135H312.157z M496.249,460.231h-168.34V376.61
                                   c4.82-2.187,13.494-5.749,24.268-8.547v19.875h63.776v-16.919c2.87,1.376,5.628,2.947,8.26,4.713v44.222h63.776v-27.658
                                   c3.057-1.092,5.811-2.416,8.26-3.832v71.767H496.249z M367.928,372.187v-32.272h32.273v32.272H367.928z M439.963,404.203V371.93
                                   h32.273v32.273H439.963z M496.249,368.711c-1.589,1.637-4.376,4.14-8.26,6.323v-18.856h-63.776v1.33
                                   c-2.671-1.345-5.434-2.53-8.26-3.586v-29.76h-63.776v27.679c-9.681,2.249-18.05,5.161-24.268,7.649v-75.606h168.341v84.828H496.249
                                   z" />
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                    </svg>
                                    <p class="group-hover:text-orange-500">{{ count($distillery->bourbons) }}</p>
                                </div>
                            </div>

                        </div>
                    </a>
                @endforeach
            </div>
        </div>
        <div class="py-4 px-16 flex justify-end items-start">
            {{ $distilleries->links() }}
        </div>

    </div>
</div>
