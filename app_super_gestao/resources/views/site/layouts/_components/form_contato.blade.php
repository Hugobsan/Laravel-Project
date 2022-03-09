{{ $slot }}
<form action="{{ route($action) }}" method="post">
    @csrf
    <input name="nome" value="{{ old('nome') }}" type="text" placeholder="Nome" class="{{ $borda }}">
    <br>
    <input type="text" name="telefone" value="{{ old('telefone') }}" id="telefone" placeholder="(00) 00000-0000" class="{{ $borda }}" maxlength="15" />
    <br>
    <input name="email" value="{{ old('email') }}" type="email" placeholder="E-mail" class="{{ $borda }}">
    <br>
    <label for="motivo">Qual o motivo do contato?</label>
    <select name="motivo_contato" id="motivo" class="{{ $borda }}">
        @foreach($motivos_contato as $key => $motivo_contato)
            <option value="{{$key}}" {{ old('motivo_contato')== $key ? 'selected' : ''}}>{{$motivo_contato}}</option>
        @endforeach
    </select>
    <br>
    <textarea name="mensagem" class="{{ $borda }}" placeholder="Preencha aqui a sua mensagem">{{ (old('mensagem') != '') ? old('mensagem') : 'Preencha aqui a sua mensagem' }} 
    </textarea>
    <br>
    <button type="submit" class="{{ $borda }}">Enviar</button>
</form>