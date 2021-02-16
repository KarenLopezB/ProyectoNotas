        @extends('layout')
        @section('content')
        <main class="content">
            <div class="cards">
            <!-- Inicia tarjeta dinámica -->
            @forelse ($notas as $nota)
            <div class="card card-small">
                    <div class="card-body">
                        <h4>{{ $nota->titulo }} </h4>

                        <p>
                            {!! $nota->contenido !!} <!-- @todo sanitizar HTML para evitar ataque XSS*} -->
                            <!-- Con Composer podemos instalar y actualizar frameworks como Laravel o Symfony,
                            así como componentes para generar PDF, procesar pagos con tarjetas, manipular imágenes y mucho más. -->
                        </p>
                    </div>

                    <footer class="card-footer">
                        <a href="{{ route('notas.edit}, ['id' => $nota->id]) }}" class="action-link action-edit">
                            <i class="icon icon-pen"></i>
                        </a>
                        <a class="action-link action-delete">
                            <i class="icon icon-trash"></i>
                        </a>
                    </footer>
                </div>
                @empty
                <p>No hay elementos disponibles<a href="/agregar">Agregar nota</a></p>
                @endforelse

                
            </div>
        </main>
        @endsection