    <h1>Artikel aanmaken</h1>

    <form action="" method="POST">
        @csrf

        <div class="form-group">
            <label for="title">Titel</label>
            <input type="text" name="titel" id="titel" class="form-control" value="{{ old('title') }}" required minlength="3" maxlength="80" />
        </div>

        <div class="form-group">
            <label for="content">Content</label>
            <textarea name="content" id="content" class="form-control" rows="8">{{ old('content') }}</textarea>
        </div>

        <div class="form-group">
            <label for="content">Afbeelding</label>
            <input type="file" name="afbeelding" id="afbeelding" class="form-control" />
        </div>

        <button type="submit" class="btn btn-primary">Artikel aanmaken</button>
    </form>
