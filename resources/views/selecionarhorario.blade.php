@vite('resources/css/app.css')

@section('content')
<div class="bg-orange px-4 py-8 font-sans w-screen h-screen">
<img src="{{ asset('images/logo.svg') }}" alt="Logo do seu site" class="m-auto w-500 h-137 top-26 left-542 transform scale-150">
    <nav class="flex bg-white w-1288 h-3000 left-76 top-198 rounded-10 px-2 py-4 space-x-10 p-6">
        <div class="box" style="background-color: #ffff;">
            <h2 class="uppercase font-bold tracking-normal text-left mb-10">Selecione os Horarios</h2>
            <form method="post" action="{{ route('selecionarhorario') }}">
                @csrf
                <div class="flex">
                    @foreach ($dias_da_semana as $dia)
                    <div class="w-1/7 mr-4">
                        <p class="font-bold mb-2">{{ $dia }}:</p>
                        @foreach ($opcoes as $opcao)
                        @php $opcao_escapada = htmlspecialchars($opcao) @endphp
                        <label class="flex items-center">
                            <br><br>
                            <input type="checkbox" name="opcoes[]" class="w-6 h-6 rounded" value="{{ $opcao_escapada }}">
                            <span class="ml-2">{{ $opcao_escapada }}</span>
                        </label>
                        @endforeach
                    </div>
                    @endforeach
                </div>
                <br>
                <a href="{{ route('selecionaruc') }}" class="bg-red hover:bg-red-hover text-white font-bold py-2 px-4 rounded ml-auto h-50">Voltar</a>
                <button type="submit" class="bg-green hover:bg-green-hover text-white font-bold py-2 px-4 rounded ml-auto bottom-0 right-0 ">Confirmar</button>
            </form>
        </div>
</nav>
<script>
    const checkboxes = document.querySelectorAll('input[type="checkbox"]');
    const maxLimit = 2;
    checkboxes.forEach((checkbox) => {
        checkbox.addEventListener('change', () => {
            const selected = document.querySelectorAll('input[type="checkbox"]:checked');
            if(selected.length > maxLimit){
                checkbox.checked = false ;
            }

        
        });
    });
</script>