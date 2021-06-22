    <h1>Artikel aanmaken</h1>

    <form action="{{ route('artikelen.store') }}" method="POST" enctype="multipart/form-data" class="col-5">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="titel">Titel</label>
            <input type="text" name="titel" id="titel" class="form-control" value="{{ old('titel') }}" required minlength="3" maxlength="80" />
        </div>

        <div class="form-group">
            <label for="content">Content</label>
            <textarea name="content" id="content" class="form-control" rows="8" required></textarea>
        </div>

        <div class="form-group">
            <label for="afbeelding">Afbeelding</label>
            <input type="file" name="afbeelding" id="afbeelding" class="form-control" />
        </div>

        <button type="submit" class="btn btn-primary">Artikel aanmaken</button>
    </form>
