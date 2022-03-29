{{ $slot }}
<form action="{{ route($action) }}" method="post">
    @csrf
    <input name="nome" value="{{ old('nome') }}" type="text" placeholder="Nome" class="{{ $borda }}">
    <span class="error">{{ $errors->has('nome') ? $errors->first('nome') : ''}}</span>
    <br>
    <input type="text" name="telefone" value="{{ old('telefone') }}" id="telefone" placeholder="(00) 00000-0000" class="{{ $borda }}" maxlength="15" />
    <span class="error">{{ $errors->has('telefone') ? $errors->first('telefone') : ''}}</span>
    <br>
    <input name="email" value="{{ old('email') }}" type="email" placeholder="E-mail" class="{{ $borda }}">
    <span class="error">{{ $errors->has('email') ? $errors->first('email') : ''}}</span>
    <br>
    <label for="motivo">Qual o motivo do contato?</label>
    <select name="motivo_contatos_id" id="motivo" class="{{ $borda }}">
        @foreach($motivos_contato as $key => $motivo_contato)
            <option value="{{$motivo_contato->id}}" {{ old('motivo_contatos_id')== $motivo_contato->id ? 'selected' : ''}}>{{$motivo_contato->motivo_contato}}</option>
        @endforeach
    </select>
    <span class="error">{{ $errors->has('motivo_contatos_id') ? $errors->first('motivo_contatos_id') : ''}}</span>
    <br>
    <textarea name="mensagem" class="{{ $borda }}" placeholder="Preencha aqui a sua mensagem">{{ (old('mensagem') != '') ? old('mensagem') : 'Preencha aqui a sua mensagem' }} 
    </textarea>
    <span class="error">{{ $errors->has('mensagem') ? $errors->first('mensagem') : ''}}</span>
    <br>
    <button type="submit" class="{{ $borda }}">Enviar</button>
</form>