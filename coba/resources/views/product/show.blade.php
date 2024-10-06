@extends('layouts.app')
 
@section('title', 'Show Book')
 
@section('contents')
<h1 class="font-bold text-2xl ml-3">Detail Book</h1>
<hr />
<div class="border-b border-gray-900/10 pb-12">
    <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
        <div class="sm:col-span-4">
            <label class="block text-sm font-medium leading-6 text-gray-900">Judul</label>
            <div class="mt-2">
                {{ $product->judul }}
            </div>
        </div>
 
        <div class="sm:col-span-4">
            <label class="block text-sm font-medium leading-6 text-gray-900">Katagori</label>
            <div class="mt-2">
                {{ $product->katagori }}
            </div>
        </div>
        <div class="sm:col-span-4">
            <label class="block text-sm font-medium leading-6 text-gray-900">Tahun</label>
            <div class="mt-2">
                {{ $product->tahun }}
            </div>
        </div>
        <div class="sm:col-span-4">
            <label class="block text-sm font-medium leading-6 text-gray-900">Description</label>
            <div class="mt-2">
                {{ $product->description }}
            </div>
        </div>
        </form>
    </div>
</div>
@endsection