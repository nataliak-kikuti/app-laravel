@vite('resources/css/app.css')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selecionar Unidades Curriculares</title>
</head>
<body>

<div class="bg-orange px-4 py-8 font-sans">
<img src="{{ asset('images/logo.svg') }}" alt="Logo do seu site" class="m-auto w-500 h-137 top-26 left-542 transform scale-150">
    <nav class="flex bg-white w-576 h-764 left-76 top-198 rounded-10 px-2 py-4 space-x-10 p-6">
        <div class="absolute w-50 h-10 left-144 top-233">
            <h2 class="uppercase font-bold tracking-normal text-left mb-10">Selecione as Unidades Curriculares</h2>
        </div>
    </nav>
    <nav class="flex bg-white w-1288 h-764 left-76 top-198 rounded-10 px-2 py-4 space-x-10 p-6">
    <form method="post" action="{{ route('selecionaruc.salvar') }}">

            @csrf
            <div class="flex flex-wrap">
        <div>
            <label class="block  tracking-normal text-left mb-2" for="professor">
            <input type="text" name="professor" id="professor" class="w-full rounded border-gray-300 focus:border-orange focus:ring focus:ring-orange-light placeholder-gray-400" placeholder="Digite o nome do professor" required>
            <br>
            </label>
            
        </div>
    </div>
            <div class="flex flex-wrap">
                @foreach ($opcoes as $nome)
                    <div class="w-1/2">
                        <label class="inline-flex items-center">
                            <br><br>
                            <input type="checkbox" name="opcoes[]" class="w-6 h-6 rounded" value="{{ $nome }}">
                            <span class="ml-2">{{ $nome }}</span>
                        </label>
                    </div>
                @endforeach
                <br><br>
              
            </div>
           
            <button type="submit" onsubmit="return validateSubmit();"  class="realtive bg-orange hover:bg-orange-hover text-white font-bold py-2 px-4 rounded space-x-4 space-x-reverse h-10 bottom-0 right-0 ">Próxima</button>
        </form>
        <nav></nav>
    </nav>
</div>
<script>
    const checkboxes = document.querySelectorAll('input[type="checkbox"]');
    const maxLimit =1;
    checkboxes.forEach((checkbox) => {
        checkbox.addEventListener('change', () => {
            const selected = document.querySelectorAll('input[type="checkbox"]:checked');
            if(selected.length > maxLimit){
                checkbox.checked = false ;
            }
        
        });
    });
</script>
</body>
</html>





