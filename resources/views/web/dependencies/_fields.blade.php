{{ csrf_field() }}

<div class="form-group row">
    <label for="name" class="col-sm-4 col-form-label">Nombre:</label>
    <div class="col-md-6">
        <input type="text" class="form-control" name="name" id="name" placeholder="Administracion" value="{{ old('name', $dependency->name) }}">
    </div>
</div>

