<x-layout title="Séries">
    <a class="btn btn-dark mb-3" href="/series/criar">Adicionar</a>
    <ul class="list-group">
        @foreach($series as $serie)
        <li class="list-group-item">{{ $serie }}</li>
        @endforeach
    </ul>
    <script>
        //Acessar variável no frontend com o blade
        const series = {{ Js::from($series) }};
    </script>
</x-layout>