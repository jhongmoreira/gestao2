@extends('layouts.main')
@section('title','Venda - Exata TI')
@section('content')

<div class="row">
    <div class="col-md-12"><h3>Vender</h3></div>
</div>

<form action="{{ route('salvar-venda') }}" method="post">
    @csrf

<div class="row">

    <div class="col-md-6">
        <div class="form-group">
            <label for="cliente">Cliente</label>
            <select name="cliente" id="cliente" class="cliente form-control" required>
                <option value=""></option>
                @foreach($clientes as $cliente)
                    <option value="{{ $cliente->id }}">{{ $cliente->nome }}</option>
                @endforeach
            </select>
        </div>
    </div>

    <div class="col-md-4">
        <div class="form-group">
            <label for="servico">Serviço</label>
            <select name="servico" id="servico" class="form-control servico" required>
                <option value=""></option>
                @foreach($servicos as $servico)
                    <option value="{{ $servico->id }}" preco="{{ $servico->valor }}">{{ $servico->servico }}</option>
                @endforeach
            </select>
        </div>
    </div>

    <div class="col-md-2">
        <div class="form-group">
          <label for="valor_final">Valor</label>
          <input type="number" step="0.01" name="valor_final" id="valor_final" class="form-control">
        </div>
    </div>

    <script>
        // Obtém o elemento select e o input
        const selectElement = document.getElementById('servico');
        const inputElement = document.getElementById('valor_final');

        // Função para atualizar o valor do input
        function atualizarValorFinal() {
            // Obtém a opção selecionada
            const selectedOption = selectElement.options[selectElement.selectedIndex];
            // Obtém o valor do atributo preco da opção selecionada
            const preco = selectedOption.getAttribute('preco');
            // Atualiza o valor do input
            inputElement.value = preco;
        }

        // Adiciona um ouvinte de eventos para o evento de alteração no select
        selectElement.addEventListener('change', atualizarValorFinal);

        // Inicializa o valor do input com a seleção atual
        atualizarValorFinal();
    </script>

</div>    

<div class="row">

    <div class="col-md-4">
        <div class="form-group">
          <label for="data_venda">Data Venda</label>
          <input type="date" name="data_venda" id="data_venda" class="form-control">
        </div>
    </div>

    <div class="col-md-4">
        <div class="form-group">
          <label for="data_vencimento">Data Vencimento</label>
          <input type="date" name="data_vencimento" id="data_vencimento" class="form-control">
        </div>
    </div>

    <div class="col-md-4">
        <div class="form-group">
          <label for="pago">Pago</label>
            <select id="pago" name="pago" class="form-control" required>
                <option value=""></option>
                <option value="1">Sim</option>
                <option value="0">Não</option>
            </select>
        </div>
    </div>

</div>   

<div class="row">
    <div class="col-md-3">
        <button class="form-control btn btn-primary" type="submit">Cadastrar</button>
    </div>
</div>
</form>


@endsection