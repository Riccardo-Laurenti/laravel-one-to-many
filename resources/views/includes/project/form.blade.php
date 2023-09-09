@if ($project->exists)
    {{-- Modifico un post --}}
    <form action="{{ route('admin.project.update', $project) }}" method="POST" enctype="multipart/form-data" novalidate>
        @method('PUT')
    @else
        {{-- Aggiungo un post --}}
        <form action="{{ route('admin.project.store', $project) }}" method="POST" enctype="multipart/form-data"
            novalidate>
@endif
@csrf
<div class="row">
    <div class="col-6">
        <div class="mb-3">
            <label for="title" class="form-label">Titolo</label>
            <input type="text" class="form-control" id="title" name="title"
                value="{{ old('title', $project->title) }}" placeholder="Inserisci il titolo" maxlength="50" required>
        </div>
    </div>
    <div class="col-6">
        <div class="mb-3">
            <label class="form-label">Slug</label>
            <input type="text" class="form-control" id="slug" maxlength="50" name="slug"
                value="{{ Str::slug(old('title', $project->title), '-') }}" disabled>
        </div>
    </div>
    <div class="col-12">
        <div class="mb-3">
            <label for="content" class="form-label">Contenuto del post</label>
            <textarea class="form-control" id="content" rows="10" name="content" required>{{ old('content', $project->content) }}</textarea>
        </div>
    </div>
    <div class="col-11">
        <div class="mb-3">
            <label for="image" class="form-label">Copertina</label>
            <input type="file" class="form-control" id="image" name="image"
                placeholder="Inserisci un url valido">
        </div>
    </div>
    <div class="col-1">
        <img src="{{ $project->image ? asset('storage/' . $project->image) : 'https://marcolanci.it/utils/placeholder.jpg' }}"
            alt="preview" class="img-fluid" id="image-preview">
    </div>
</div>
<hr>
<div class="d-flex justify-content-end mt-4">
    <button class="btn btn-outline-success">
        <i class="fas fa-floppy-disk me-2"></i>
        Salva
    </button>
</div>
</form>
