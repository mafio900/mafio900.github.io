<div class="form-control-* form-row mb-2">
    <label class="col-12 col-md-2 col-form-label text-center text-md-left" for="IdProducent">Wybierz producenta</label>
    <select class="col-12 col-md-3 js-example-basic-single js-example-language" name="IdProducent">
        {if !isset($data)}<option value="def">Wybierz producenta...</option>{/if}
        {foreach $producenci as $id => $producent}
            <option value="{$id}" {if isset($data['IdProducent']) && $data['IdProducent']==$id}selected{/if}>{$producent['ProducentNazwa']}</option>
        {/foreach}
    </select>
    <div class="col-12 text-center text-md-left"></div>
</div>
<div class="form-control-* form-row mb-2">
    <label class="col-12 col-md-2 col-form-label text-center text-md-left" for="Model">Model</label>
    <input class="col-12 col-md-3" name="Model" value="{if isset($data['Model'])}{$data['Model']}{/if}" type="text" required>
    <div class="col-12 text-center text-md-left"></div>
</div>
<div class="form-control-* form-row mb-2">
    <label class="col-12 col-md-2 col-form-label text-center text-md-left" for="Rejestracja">Rejestracja</label>
    <input class="col-12 col-md-3" name="Rejestracja" value="{if isset($data['Rejestracja'])}{$data['Rejestracja']}{/if}" type="text" required>
    <div class="col-12 text-center text-md-left"></div>
</div>
<div class="form-control-* form-row mb-2">
    <label class="col-12 col-md-2 col-form-label text-center text-md-left" for="Opis">Opis</label>
    <input class="col-12 col-md-3" name="Opis" value="{if isset($data['Opis'])}{$data['Opis']}{/if}" type="text">
    <div class="col-12 text-center text-md-left"></div>
</div>
<input name="id" value="{if isset($data['id'])}{$data['id']}{/if}" type="hidden" required>
