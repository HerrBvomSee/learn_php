<form method="post"  action="<?php $_SERVER['REQUEST_URI']; ?>" >
    <div class="field">
        <label class="label">Titel</label>
        <div class="control">
            <input class="input" type="text" name="title" placeholder="Text input">
        </div>
    </div>

    <div class="field">
        <label class="label">Message</label>
        <div class="control">
            <textarea class="textarea" name="body" placeholder="Textarea"></textarea>
        </div>
    </div>

    <div class="field">
        <label class="label">Link</label>
        <div class="control">
            <input class="input" type="text" name="link" placeholder="Text input">
        </div>
    </div>

    <div class="field is-grouped">
        <div class="control">
            <button class="button is-link" name="submit" value="submit" type="submit">Submit</button>
        </div>
        <div class="control">
            <button class="button is-link is-light">Cancel</button>
        </div>
    </div>
</form>