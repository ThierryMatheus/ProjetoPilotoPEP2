<?php 
$denuncia = App\Models\Denuncia::all();
//$user = App\Models\User::all();
?>
<x-app-layout>

 <div class="min-w-0 flex-auto px-4 sm:px-6 xl:px-8 pt-10 pb-24 lg:pb-16">
      <div class="rounded-t-xl overflow-hidden bg-gradient-to-r from-fuchsia-50 to-fuchsia-100 bg-gray-100 p-8">
          <div class="grid grid-cols-3 gap-4">      
           @foreach($denuncia as $d)       
            <div class="h-12 flex items-center bg-white rounded-md text-center pl-2">{{$d->titulo}}</div>
          @endforeach
          </div>
      </div>    
 </div>
</x-app-layout>