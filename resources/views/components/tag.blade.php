 @props(['tag', 'link'])

 <div class="container">
     <div class="mx-auto">
         {{-- <button type="button" class="btn btn-block bg-primary btn-xs">
            <a href="{{$link}}">{{ $tag }}</a>
        </button> --}}
         <ul>


             <li
                 class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-xs text-center">
                 <a href="/?company={{ $link }}">{{ $tag }}</a>
             </li>
         </ul>
     </div>
 </div>
