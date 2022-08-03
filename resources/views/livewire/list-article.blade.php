<div>
    {{-- To attain knowledge, add things every day; To attain wisdom, subtract things every day. --}}
    <div class="flex flex-col">
      <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
        <div class="py-2 inline-block w-full sm:px-6 lg:px-8">
          <div class="overflow-hidden">
            <table class="w-full">
              <thead class="border-b">
                <tr>
                  <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                    Title
                  </th>
                  <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                    Action
                  </th>
                  {{-- <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                    Handle
                  </th> --}}
                </tr>
              </thead>
              <tbody>
                {{-- {{$updateArticleID}} --}}
                @foreach ($article as $item)
                  <tr class="border-b">
                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                      {{$item->title}}
                    </td>
                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                      <button wire:click="editArticle({{$item->id}})" class="shadow bg-blue-500 hover:bg-purple-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded" type="button">
                        Edit
                      </button>
                      <button wire:click="deleteArticle({{$item->id}})" class="shadow bg-blue-500 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded" type="button">
                        Hapus
                      </button>
                    </td>
                    <td>

                        @if ($item->id == $updateArticleID)
                        <div>
                          {{-- If you look to others for fulfillment, you will never truly be fulfilled. --}}
                          <div class="mb-3">
                              <label class="block text-gray-700 text-lg font-bold mb-2" for="username">
                                  Title
                              </label>
                              <input 
                              class="shadow appearance-none border rounded w-full text-gray-700 leading-tight focus:outline-none focus:shadow-outline" 
                              id="username"
                              wire:model="title"
                              type="text" 
                              placeholder="title">
                              {{-- {{$title}} --}}
                              
                          </div>
                      
                          <div class="mt-6">
                              <label class="block text-gray-700 text-lg font-bold mb-2" for="username">
                                  Content
                              </label>
                              <textarea class="shadow appearance-none border rounded w-full text-gray-700 leading-tight focus:outline-none focus:shadow-outline" 
                              wire:model="content"
                              id="" 
                              cols="30" 
                              rows="5">
                              </textarea>
                          </div>
                      
                          <div class="flex justify-end mt-6">
                              <button wire:click="updateArticle({{$item->id}})" class="shadow bg-blue-500 hover:bg-purple-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded" type="button">
                                  Save
                              </button>
                          </div>
                      </div>
                        @endif
                    </td>
                  </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
</div>
