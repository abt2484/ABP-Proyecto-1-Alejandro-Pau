@extends('layouts.application')

@section('main')
<div class="max-w-4xl mx-auto">
    <!-- Header -->
    <div class="w-full flex flex-row mb-8 justify-between items-center">
        <div class="w-fit flex flex-col gap-5">
            <a href="{{ route('users.index') }}" class="text-[#AFAFAF] flex flex-row justify-between items-center">
                <svg class="w-6 h-6">
                    <use xlink:href="#icon-arrow-left"></use>
                </svg>
                Tornar a la gestió de professionals
            </a>
            <h1 class="text-3xl font-bold title mb-0!">Editar professional</h1>
            <p class="text-[#AFAFAF]" >Edita un professional al sistema</p>
        </div>
    </div>

    <!-- Form -->
    <div class="shadow-md simple-container">
        @include('users.form', [
            'action' => route('users.update', $user),
            'method' => 'PATCH',
            'user' => $user,
            'submitText' => 'Actualitzar professional'
        ])
    </div>
</div>
@endsection