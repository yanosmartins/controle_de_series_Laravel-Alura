<x-layout title="Séries">
    <a href="/series/criar">Adicionar</a>
    <ul>
        @foreach ($series as $serie) 
            <li> {{$serie }}</li>
        @endforeach 
    </ul>
{{-- 
    <script>
        const series = {{ Js::from($series) }}; //Esse comando é do proprio laravel. Traz o valor do php, faz um json encode e vai encapsular(envolver isso) dentro de uma chamada do json parse

    </script> --}}

    {{-- @{{teste}} --}}
</x-layout>