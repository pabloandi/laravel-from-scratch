
    @csrf
    <div class="field">
        <label class="label" for="title">Title</label>
        <div class="control">
            <input class="input @error('title') is-danger @enderror" type="text" name="title" id="title" value="{{ old('title') ?? $article->title }}" autofocus>
            @error('title')
                <p class="help is-danger">{{ $errors->first('title') }}</p>
            @enderror
        </div>
    </div>
    <div class="field">
        <label class="label" for="excerpt">Excerpt</label>
        <div class="control">
            <textarea class="textarea  @error('excerpt') is-danger @enderror" name="excerpt" id="excerpt" required>{{ old('excerpt') ?? $article->excerpt }}</textarea>
            @error('excerpt')
                <p class="help is-danger">{{ $errors->first('excerpt') }}</p>
            @enderror
        </div>
    </div>

    <div class="field">
        <label class="label" for="body">Body</label>
        <div class="control">
            <textarea class="textarea  @error('body') is-danger @enderror" name="body" id="body" required>{{ old('body') ?? $article->body }}</textarea>
            @error('body')
                <p class="help is-danger">{{ $errors->first('body') }}</p>
            @enderror
        </div>
    </div>

    <div class="field">
        <label class="label" for="tags">Tags</label>
        <div class="select is-multiple control">
            <select name="tags[]" id="tags" multiple cl>
                @foreach ($tags as $tag)
                    <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                @endforeach
            </select>
            @error('tags')
                <p class="help is-danger">{{ $message }}</p>
            @enderror
        </div>
    </div>


    <div class="field is-grouped">
        <div class="control">
            <button class="button is-link" type="submit">submit</button>

        </div>
    </div>
