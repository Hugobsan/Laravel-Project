{{ $slot }}
<div class="form-login">
    <form action={{ route('site.login')}} method="post">
        @csrf
        <input name="usuario" id="usuario" value="{{ old('usuario') }}" type="text" placeholder="Usuário" class="borda-preta">
        <span class="error">{{ $errors->has('usuario') ? $errors->first('usuario') : ''}}</span>
        <input name="senha" it="senha" type="password" placeholder="*****" class="borda-preta">
        <span class="error">{{ $errors->has('senha') ? $errors->first('senha') : ''}}</span>
        <button type="submit" class="borda-preta">Acessar</button>
    </form>
</div>